<?php
$thisPageName = 'blog';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/blog.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="blog" class="archive">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">

    <!-- GET FIRST 10 POSTS WITH PAGINATION -->
    <!-- WP_Query params: https://developer.wordpress.org/reference/classes/wp_query/#parameters -->
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $param = array(
      'post_type'      => 'blog',
      'posts_per_page' => 10,
      'paged'          => $paged,
    );
    $query = new WP_Query($param);
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post(); // must have this function
      // the_ID / get_the_ID
      // get_the_post_thumbnail_url
      // the_permalink / get_the_permalink
      // the_title / get_the_title
      // the_date / get_the_date
      // the_field / get_field --- ACF
      // code...
      endwhile;
    endif;
    wp_reset_postdata(); // always use this function after using WP_Query
    ?>

    <!-- GET FIRST 10 POSTS WITHOUT PAGINATION -->
    <!-- WP_Query params: https://developer.wordpress.org/reference/functions/get_posts/#parameters -->
    <?php
    $param = array(
      'post_type'   => 'blog',
      'numberposts' => 10,
    );
    $query = get_posts($param);
    if ($query) :
      foreach ($query as $post) :
        setup_postdata($post); // must have this function
      // the_ID / get_the_ID
      // get_the_post_thumbnail_url
      // the_permalink / get_the_permalink
      // the_title / get_the_title
      // the_date / get_the_date
      // the_field / get_field --- ACF
      // code...
      endforeach;
    endif;
    wp_reset_postdata(); // always use this function after using get_posts
    ?>

    <!-- GET CATEGORY PARENT -->
    <!-- Prefer to use get_terms instead of get_categories -->
    <!-- 'post_type' is NOT an argument of get_terms and get_categories -->
    <?php $categories = get_terms(array(
      'taxonomy'   => 'blogcat',
      'hide_empty' => true,
      // 'parent' => 0, // direct children - 1 level
      // 'child_of' => 0, // multiple level children
    ));
    if ($categories) {
      foreach ($categories as $key => $cate) {
        // $cate->slug
        // $cate->term_id
        // $cate->name
        // get_term_link($cate->term_id)
        // term_description($cate->term_id)

        // GET FIRST 10 POSTS FROM EACH CATEGORY WITH PAGINATION
        $param = array(
          'post_type'      => 'blog',
          'posts_per_page' => 10,
          'paged'          => $paged,
          'tax_query'      => array(
            array(
              'taxonomy' => 'blogcat',
              'field'    => 'term_id',
              'terms'    => $cate->term_id
            )
          )
        );
        $query = new WP_Query($param);
        if ($query->have_posts()) :
          while ($query->have_posts()) :
            $query->the_post(); // must have this function
          // code...
          endwhile;
        endif;
        wp_reset_postdata();

        // GET FIRST 10 POSTS FROM EACH CATEGORY WITHOUT PAGINATION
        $param = array(
          'post_type'   => 'blog',
          'numberposts' => 10,
          'tax_query'   => array(
            array(
              'taxonomy' => 'blogcat',
              'field'    => 'term_id',
              'terms'    => $cate->term_id
            )
          )
        );
        $query = get_posts($param);
        if ($query) :
          foreach ($query as $post) :
            setup_postdata($post); // must have this function
          // code...
          endforeach;
        endif;
        wp_reset_postdata();
      }
    } ?>

    <!-- GET ARCHIVE BY MONTH / YEAR -->
    <?php $param = array(
      'post_type'   => 'blog',
      'numberposts' => 10, // for get_posts
      // 'posts_per_page' => 10, // for WP_Query
    );
    if (is_year()) {
      $year = get_the_time('Y');
      $param += array(
        'year'        => $year,
      );
    }
    if (is_month()) {
      $month = get_the_time('m');
      $year = get_the_time('Y');
      $param += array(
        'monthnum'    => $month,
        'year'        => $year,
      );
    } ?>

    <!-- GET TAXONOMY LIST -->
    <?php $param = array(
      'post_type'   => 'blog',
      'numberposts' => 10, // for get_posts
      // 'posts_per_page' => 10, // for WP_Query
    );
    if (is_tax()) {
      $currentTerm = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
      $currentTermID = $currentTerm->term_id;
      $currentTermName = $currentTerm->name;
      $param += array(
        'tax_query'     => array(
          array(
            'taxonomy'  => $taxSlug,
            'field'     => 'term_id',
            'terms'     => $currentTermID,
          )
        )
      );
    }; ?>

    <!-- GET ARCHIVE LIST BY ACF / META VALUE -->
    <?php $param = array(
      'post_type'      => 'blog',
      'numberposts'    => 10,       // for get_posts
      // 'posts_per_page' => 10,       // for WP_Query
      'meta_query'     => array(
        'relation' => 'AND', // 'OR', 'AND'. Default value is 'AND'
        array(
          'key'     => 'blog_acf_field_name',
          'value'   => $valueCondition,
          // 'type'    => 'CHAR', // 'NUMERIC', 'BINARY', 'CHAR', 'DATE', 'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', 'UNSIGNED'. Default value is 'CHAR'. Note: 'type' => 'DATE' can only work with 'compare' if the format date is YYYYMMDD
          'compare' => '=', // '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN', 'EXISTS', 'NOT EXISTS'. Default value is '='
        ),
      ),
    ); ?>

    <!-- GET ARCHIVE LISTS WITH "NEW" ICON -->
    <?php $days = 7; // ONLY DISPLAY "NEW" ICON FOR THE LAST 7 DAYS
    $todayEpoch = date('U');
    $query = new WP_Query();
    // $query = get_posts();

    if ($query->have_posts()) :
      // if($query):
      while ($query->have_posts()) :
        // foreach() :
        $postEpoch = get_the_time('U', $postID);
        $postDays = date('U', ($todayEpoch - $postEpoch)) / 86400;
        if ($days > $postDays) :
          echo '<span>NEW</span>';
        endif;
      endwhile;
    endif;
    // endif;
    // endforeach;

    wp_reset_postdata(); // always use this function after using get_posts
    ?>

    <!-- SHOW ARCHIVE LIST -->
    <!-- Document: https://developer.wordpress.org/reference/functions/wp_get_archives/ -->
    <ul class="archive-list"><?php wp_get_archives('type=monthly&post_type=blog&show_post_count=true'); ?></ul>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>