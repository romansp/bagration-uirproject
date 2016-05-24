<?php
/* * **************************************************
 *
 * @File: 		template.php
 * @Package:		GetSimple
 * @Action:		Emporium theme for the GetSimple CMS
 *
 * 		Design by Free CSS Templates
 * 		http://www.freecsstemplates.org
 * 		Released for free under a Creative Commons Attribution 2.5 License
 *
 * *************************************************** */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/png" href="<?php get_theme_url(); ?>/images/favicon.png" />
        <title><?php get_site_name(); ?> / <?php get_page_clean_title(); ?> / Освобождение Беларуси</title>
        <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/default.css" media="all" />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
        <script type="text/javascript">$(function() {var offset = $("#fixed").offset();var topPadding = 15;$(window).scroll(function() {if ($(window).scrollTop() > offset.top) {$("#fixed").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});}else {$("#fixed").stop().animate({marginTop: 0});};});});</script>
        <?php get_header(false); ?>
        <meta name="robots" content="index, follow" />
        <script type="text/javascript"> var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-19835556-3']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
    </head>
    <body id="<?php get_page_slug(); ?>" >
        <!-- Yandex.Metrika counter --><div style="display:none;"><script type="text/javascript">(function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter7680547 = new Ya.Metrika({id:7680547, enableAll: true}); } catch(e) { } }); })(window, 'yandex_metrika_callbacks');</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/7680547" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
        <div id="wrapper">
            <!-- start header -->
            <div id="logo">
                <h1><a href="<?php get_site_url(); ?>index"><?php get_site_name(); ?> (23.06.1944 – 29.08.1944)</a></h1>
            </div>
            <div id="header">
                <div id="menu">
                    <ul>
                        <?php get_i18n_navigation(return_page_slug()); ?>
                    </ul>
                </div>
            </div>
            <!-- end header -->
        </div>
        <!-- start page -->
        <div id="page">
            <!-- start content -->
            <div id="content">
                <div class="post">
                    <h2 class="title"><?php get_page_title(); ?></h2>
                    <div class="entry">
                        <?php get_page_content(); ?>			
                    </div>
                </div>
            </div>
            <!-- end content -->
            <!-- start sidebar -->
            <div id="sidebar">
                <ul>
                    <li>
                        <?php get_i18n_component('gtranslator'); ?>
                    </li>
                    <div id="fixed">
                        <li>
                            <?php get_i18n_component('sidebar'); ?>
                        </li>
                    </div>
                </ul>
            </div>
            <!-- end sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end page -->
        <!-- start footer -->
        <div id="footer">
            <p id="legal">
                &copy; 2011-<?php echo date('Y'); ?> <strong><?php get_site_name(); ?></strong> - Представленные материалы принадлежат их законным правообладателям.<br />
                <a href="/about">Управление информационными ресурсами. Группа №2</a><br />
                <a href="http://get-simple.info/" target="_blank">Работает на GetSimple</a> - тема Emporium от <a href="http://www.freecsstemplates.org/" target="_blank">Free CSS Templates</a> и <a href="http://www.cagintranet.com" target="_blank">Cagintranet</a>
            </p>
        </div>
        <!-- end footer -->
    </body>
</html>