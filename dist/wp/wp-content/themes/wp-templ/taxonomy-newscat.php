<?php
$current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
if (!empty($current_term)) {
  $curr_termID = $current_term->term_id;
  $curr_termName = $current_term->name;
}
include 'archive-news.php';
