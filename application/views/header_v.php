<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Bolet&iacute;n Axa - <?=$mes;?></title>

    <?=link_tag('css/lemonade.css');?>
    <?=link_tag('css/boletin-axa.css');?>
    <?=link_tag('css/boletin-axa-auto.css');?>
    <?=link_tag('css/boletin-axa-hogar.css');?>
    <?=link_tag('css/boletin-axa-futuro.css');?>
    <?=link_tag('css/boletin-axa-salud.css');?>
    <link rel="shortcut icon" href="<?=base_url('images/assets/favicon.ico');?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=base_url('images/assets/favicon.png');?>" type="image/png" />
    <base href="<?=base_url();?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="robots" content="no index, no follow" />
    <meta property="og:title"           content="Bolet&iacute;n AXA <?=$mes;?> <?=$anio;?>" />
    <meta property="og:type"            content="website" />
    <meta property="og:image"           content="<?=base_url('images/assets/header.png');?>" />
    <meta property="og:url"             content="<?=current_url();?>" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

