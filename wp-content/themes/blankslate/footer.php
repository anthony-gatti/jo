<div class="clear"></div>


<!-- <div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
 -->
</div> <!-- Closing #site_wrap -->

<script>


    function defineWrapHeight(){
        var client_height = document.documentElement.clientHeight;
        for(i=0; i<cols.length; i++) {
            cols[i].style.minHeight=client_height+'px';
console.log(cols[i].style.minHeight);
        }
    }
    //var cols = document.querySelectorAll('wrap');
    var cols = document.getElementsByClassName('wrap');


    <?php
    global $detect;
    //if desktop
    if (! ($detect->isMobile() || $detect->isTablet())) { ?>
    window.onresize = defineWrapHeight;

       /* load project thumbs colour images when after the black & white ones */
        $("#project_thumbs li img").each(function() {
            var BW_image = $(this);
            var img = $('<img class="project_thumb_colour">');
            img.attr('src', BW_image.attr("src").slice(0,-7)+'.jpg');
            
            BW_image.after(img);
            
        });

    <?php }
    else{?>
    //if portable devices
     function doOnOrientationChange()
      {
        window.onresize = defineWrapHeight;
      }

      window.addEventListener('orientationchange', doOnOrientationChange);
     <?php } ?>

    defineWrapHeight();
 


// $(window).bind("load", function() {
  $(document).ready(function() {
  $("#site_wrap").css('opacity',1);
  $("#bg_logo").css('opacity',0);
});



function openNewPage( event ) {
  event.preventDefault();
  $("#site_wrap").css('opacity',0);
  window.open($(this).attr("href"),"_self");
  //loadUrl(event, $(this));
}





    //open links
    $( "#project_thumbs li a" ).on( "click", openNewPage );
  //  $( "#menu-item-12" ).on( "click", openNewPage );
    //$( "#menu-item-13" ).on( "click", openNewPage );




</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12875793-7', 'josephineleung.com');
  ga('send', 'pageview');

</script>


<?php wp_footer(); ?>
</body>
</html>