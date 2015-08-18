<?=doctype('html5');?>
<html class="no-js" lang="es">
    <head>
        <title>{title} - Bolet&iacute;n Axa</title>
        <meta charset='utf-8'>
        <?=meta('description', '');?>
        <meta property="og:title" content="Bolet&iacute;n AXA <?=$mes;?> <?=$anio;?>">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?=base_url('images/assets/header.png');?>">
        <meta property="og:url" content="<?=current_url();?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?=meta('viewport', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name');?>
        <?=meta('robots', 'no-index, no-follow', 'name');?>
        <base href="<?=base_url();?>">
        <link rel="canonical" href="<?=current_url();?>" />

        <?=link_tag( base_url('images/assets/favicon.ico'), 'shortcut icon', 'image/x-icon' );?>
        <?=link_tag( base_url('images/assets/favicon.png'), 'shortcut icon', 'image/png' );?>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <?=link_tag('css/{stylesheet}.css');?>

        <script src="<?=base_url('js/vendor/modernizr-2.8.3.min.js');?>"></script>
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
        <div id="wrapper" class="container-fluid">
            <div class="axa_header">
                <div class="axa_container">
                    <div id="axa_logo">
                        <a href="http://axa.mx/">
                            <img alt="AXA" src="https://boletinaxa.com.mx/prevencion-360/AXA-theme/images/axa/headerLogo.png">
                        </a>
                    </div>
                    <div class="visible_only_desktop_tablet" id="axa_region_links">
                        <div id="axa_language_links">
                            <ul>
                                <li>
                                    <div id="p_p_id_82_" class="portlet-boundary portlet-boundary_82_ portlet-static portlet-static-end portlet-borderless portlet-language ">
                                        <span id="p_82"></span>
                                        <div style="" class="portlet-borderless-container">
                                            <div class="portlet-body">
                                                <span lang="es-ES" class="taglib-language-list-text last">ES</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <style>
                            #axa_external_links a {
                                text-decoration: none;
                            }
                        </style>
                        <div id="axa_external_links">
                            <ul>
                                <li class="btnHover">
                                    <a href="http://axa.mx/">Personas</a>
                                </li>
                                <li class="btnHover">
                                    <a href="http://axa.mx/web/negocios">Negocios</a>
                                </li>
                                <li class="btnHover">
                                    <a href="https://webmed.axa.com.mx/inicio_mx.asp">Agentes</a>
                                </li>
                                <li class="btnHover">
                                    <a href="http://axa.mx/web/proveedores">Prestadores de servicio</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <nav id="axa_social_links">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/axamexico"><img alt="Facebook" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11310/fbLogo.png" class="imgHover"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/AXAMexico"><img alt="Twitter" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11310/twLogo.png" class="imgHover"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/user/MexicoSegurosAXA"><img alt="Youtube" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11310/ytLogo.png" class="imgHover"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://plus.google.com/100855312887233336172/posts"><img alt="gplus" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11310/gplusLogo.png" class="imgHover"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/company/2221/careers?sid=12&amp;success=true"><img alt="LinkedIn" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11310/In-2C-28px-R.png" class="imgHover"></a>
                                </li>
                            </ul>
                        </nav>
                        <div id="axa_phone_number">
                            <div class="line">Bienvenido al sitio AXA México</div>
                            <div class="number">01 800 900 1292</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="visible_only_mobile" id="axa_region_links_mobile">
                        <a href="tel:018009001292"><img alt="Call" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/0/headerPhone.png"></a> <img id="iconMainMenu" alt="Menú" src="https://boletinaxa.com.mx/prevencion-360/AXA-theme/images/axa/icon_header_menu.png"> </div>
                    <div class="clear"></div>
                </div>
                <div class="axa_separator_line"></div>
                <div class="axa_container" id="navigationBar_container">
                    <!-- Main Menu -->
                    <div class="axa_main-menu">
                        <style>
                            @media only screen and (min-width: 1250px) {
                                .axa_mainMenu &gt;
                                li {
                                    font-size: .85em;
                                }
                            }

                            .axa_dropdown .caret {
                                color: #3b3b3b;
                                display: inline-block;
                                width: 0;
                                height: 0;
                                margin-left: 2px;
                                vertical-align: bottom;
                                border-top: 4px solid;
                                border-right: 4px solid transparent;
                                border-left: 4px solid transparent;
                                margin-top: 15px;
                            }

                            .axa_dropdown .caret:hover {
                                color: #0062A9;
                            }

                            @media (max-width: 320px) {
                                .axa_payOnLine {
                                    display: block !important;
                                }
                                .axa_mainMenu&gt;
                                li&gt;
                                a {
                                    padding-bottom: .25em;
                                    padding-top: .25em;
                                    line-height: 2em;
                                }
                            }

                            @media (max-width: 979px) {
                                .axa_dropdown .caret,
                                .iconH {
                                    display: none !important;
                                }
                                .axa_payOnLine {
                                    float: left;
                                    width: 100%;
                                    /* margin: 0 auto; */
                                    /* padding-left: 50px; */
                                    /* padding-right: 50px; */
                                    background: white;
                                    height: 50px;
                                    padding-top: 25px;
                                    border: 1px solid #efefef;
                                    border-top: none;
                                }
                                a.axa_payOnLineButton {
                                    width: 40%;
                                    margin: 0 auto;
                                }
                                .axa_payOnLine {
                                    display: block;
                                }
                                ul.axa_dropdown-menu&gt;
                                li&gt;
                                a.headList {
                                    border-bottom: 0;
                                    text-decoration: none;
                                }
                                ul.axa_dropdown-menu&gt;
                                li&gt;
                                a.headList:hover {
                                    text-decoration: none !important;
                                }
                            }

                            @media only screen and (max-width: 979px) and (min-width: 720px) {
                                .axa_mainMenu&gt;
                                li {
                                    line-height: 3em;
                                }
                            }

                            @media only screen and (max-width: 479px) and (min-width: 320px) {
                                .axa_mainMenu&gt;
                                li {
                                    line-height: 3em;
                                }
                            }

                            @media only screen and (max-width: 719px) and (min-width: 480px) {
                                .axa_mainMenu&gt;
                                li {
                                    line-height: 3em;
                                }
                            }
                        </style>
                        <div id="axa_close_mainMenu"></div>
                        <ul class="axa_mainMenu">
                            <li class="iconoHome">
                                <a href="/" title="Inicio" class="iconH visible_only_desktop">
                                    <img width="17" src="https://boletinaxa.com.mx/prevencion-360/documents/10928/11346/icon_header_home.png" alt="Home" class="axa_imgHome">
                                </a>
                                <a href="#" title="Inicio" class="visible_only_mobile_tablet">Inicio</a>
                            </li>
                            <li id="axa_menu1" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Mujeres</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu2" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Niños</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu3" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Familias Jóvenes</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu4" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Salud</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu5" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Auto</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu6" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Hogar</a><span class="caret"></span>
                            </li>
                            <li id="axa_menu7" class="axa_dropdown">
                                <a href="https://boletinaxa.com.mx/prevencion-360/" target="_self">Futuro</a><span class="caret"></span>
                            </li>
                        </ul>
                    </div>
                    <!-- Pay On Line Button -->
                    <div class="axa_payOnLine visible_only_desktop"> <a class="axa_payOnLineButton" href="https://cajaaxa.mitec.com.mx/cua/inicio.do?method=loginAgente&amp;perfil=cliente">Pago en Línea</a> </div>
                    <div class="clear"></div>
                    <div class="axa_container_division visible_only_desktop"></div>
                </div>
            </div>
            <div id="content">
