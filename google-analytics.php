<?php
/*
Plugin Name: Google Analytics Co-op Creamery
Description: Adds Google Analytics
Author: Philip Fuller
Version: 1.0
*/

add_action( 'wp_head', 'add_ga_script' );

function add_ga_script()
{
?>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2290384-4', 'auto');
  ga('send', 'pageview');

</script>
<?php
}