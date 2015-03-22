<?php
/*
 * Core Spyropress header template
 *
 * Customise this in your child theme by:
 * - Using hooks and your own functions
 * - Using the 'header-content' template part
 * - For example 'header-content-category.php' for category view or 'header-content.php' (fallback if location specific file not available)
 * - Copying this file to your child theme and customising - it will over-ride this file
 *
 * @package Spyropress
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]> <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <?php wp_head(); ?>
<meta name="google-site-verification" content="sUlUvFc8_8HxkMyc_LH3VarpBjcme6jTX9OBThyoC1A" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55818200-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class( get_setting( 'theme_layout', 'full' ) ); ?>>
<?php spyropress_wrapper(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55818200-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55818200-1', 'auto');
  ga('send', 'pageview');

</script>    <!-- header -->
    <?php spyropress_before_header(); ?>
    <?php
        spyropress_before_header_content();
        $version = isset( $_GET['header'] ) ? $_GET['header'] :  get_setting( 'header_style', 'v1' );
        get_template_part( 'templates/header/header', $version );
        spyropress_after_header_content();
    ?>
    <?php spyropress_after_header(); ?>
    <!-- /header -->