<?=doctype('html5');?>
<html lang="es">
    <head>
        <title>Bolet&iacute;n Axa - <?=$mes;?></title>
        <meta charset='utf-8'>
        <?=meta('description', '');?>
        <meta property="og:title" content="Bolet&iacute;n AXA <?=$mes;?> <?=$anio;?>">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?=base_url('images/assets/header.png');?>">
        <meta property="og:url" content="<?=current_url();?>">
        <?=meta('viewport', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name');?>
        <?=meta('robots', 'no-index, no-follow', 'name');?>
        <base href="<?=base_url();?>">

        <?=link_tag( base_url('images/assets/favicon.png'), 'shortcut icon', 'image/png' );?>

        <?=link_tag( base_url('images/assets/favicon.ico'), 'shortcut icon', 'image/x-icon' );?>

        <?=link_tag('css/{stylesheet}.css');?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-43094746-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5QTGFP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5QTGFP');</script>
        <!-- End Google Tag Manager -->
