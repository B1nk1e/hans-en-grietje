<?php use Illuminate\Support\Facades\App; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <?php do_action('get_header'); ?>

        <div id="app">
            <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
        </div>

        <?php do_action('get_footer'); ?>
        <?php wp_footer(); ?>

        <script type="text/javascript">(function(){var k=function(a,c,d,b){if(a.getElementById(d)){if(b){var e=100;var f=function(){setTimeout(function()
          {e--;if(window.RESENGO_WIDGET_SCRIPT_LOADED)b();else if(0<e)f();else throw Error("resengo script failed to load");},100)};f()}}else{var g=a.getElementsByTagName(c)
          [0];a=a.createElement(c);a.id=d;a.src="https://static.resengo.com/ResengoWidget";b&&(a.onload=b);g.parentNode.insertBefore(a,g)}},h=function()
          {return k(document,"script","resengo-flow-widget-script",function(){RESENGO_WIDGET({companyId:"1742595",language:"nl",primaryColor:"ed1b24"})})};
          window.attachEvent?window.attachEvent("onload",h):window.addEventListener("load",h,!1)})();</script>
    </body>
</html>
