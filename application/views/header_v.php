<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bolet&iacute;n Axa - <?=$mes;?></title>
        <meta charset="utf-8">
        <meta property="og:title" content="Bolet&iacute;n AXA <?=$mes;?> <?=$anio;?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?=base_url('images/assets/header.png');?>" />
        <meta property="og:url" content="<?=current_url();?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="robots" content="no-index, no-follow" />
        <base href="<?=base_url();?>" />
        <link rel="shortcut icon" href="<?=base_url('images/assets/favicon.png');?>" type="image/png" />
        <link rel="shortcut icon" href="<?=base_url('images/assets/favicon.ico');?>" type="image/x-icon" />
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