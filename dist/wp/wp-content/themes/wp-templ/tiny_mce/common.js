(function () {
  tinymce.PluginManager.add("wdm_mce_button", function (editor, url) {
    editor.addButton("wdm_mce_button", {
      text: false,
      icon: "icon-card",
      title: 'Add image 2 columns',
      style: `background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 12'%3E%3Cg id='Group_80815' data-name='Group 80815' transform='translate(-1149 -5832.001)'%3E%3Cg id='Group_79441' data-name='Group 79441' transform='translate(568.088 14.703)'%3E%3Cg id='Rectangle_15189' data-name='Rectangle 15189' transform='translate(580.912 5820.298)' fill='%23fff' stroke='%23000' stroke-width='1'%3E%3Crect width='9' height='9' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='8' height='8' fill='none'/%3E%3C/g%3E%3Cg id='Rectangle_15190' data-name='Rectangle 15190' transform='translate(584.912 5817.298)' fill='%23fff' stroke='%23000' stroke-width='1'%3E%3Crect width='9' height='9' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='8' height='8' fill='none'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")no-repeat center center / 20px 20px;`,
      onclick: function () {
        //  change the shortcode as per your requirement
        editor.insertContent(`
         <div class="img-2col">
          <div class="img-2col__photo">
            <img width="410" height="280" src="https://dummyimage.com/410x280/444444/A59F8C" rel="js-lazy" alt="">
            <p class="wp-caption-text">テキストテキストテキスト</p>
          </div>
          <div class="img-2col__photo">
            <img width="410" height="280"src="https://dummyimage.com/410x280/444444/A59F8C" rel="js-lazy" alt="">
            <p class="wp-caption-text">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      `);
      },
    });
  });
})();
