<?php
$page_title = $page_title ?? "Uitsig Kleuterskool & Dagsorgsentrum";
$meta_description = $meta_description ?? "'n Kleuterskool vir kleuters 18 maande tot 5jaar. Die skool en dagsorf is deel van NG Kerk Uitsig Gemeente en en word volgens Christelike beginsels bedryf.";
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <title><?= $page_title; ?></title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

        <meta content="<?= $meta_description; ?>" name="description" />
        <meta content="Johan Havenga" name="author" />
        <meta content="creche, kleuterskool, christelik, dagsorgsentrum" name="keywords" />

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700italic,700,400italic%7CLato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7COpen+Sans:Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300%7CHandlee">

        <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/favicon/apple-icon-57x57.png'); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/favicon/apple-icon-60x60.png'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/favicon/apple-icon-72x72.png'); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/favicon/apple-icon-76x76.png'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/apple-icon-114x114.png'); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/apple-icon-120x120.png'); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/apple-icon-144x144.png'); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/apple-icon-152x152.png'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-icon-180x180.png'); ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('assets/favicon/android-icon-192x192.png'); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png'); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png'); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png'); ?>">
        <link rel="manifest" href="<?= base_url('assets/favicon/manifest.json'); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= base_url('assets/favicon/ms-icon-144x144.png'); ?>">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/megafish.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/superfish.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/flexslider.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.qtip.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery-ui.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery-supersized.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.nivo.slider.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fancybox/jquery.fancybox.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fancybox/helpers/jquery.fancybox-buttons.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/revslider/layers.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/revslider/settings.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/revslider/navigation.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/base.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/retina.css'); ?>"/> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css'); ?>"/> 
        <link rel="stylesheet" href="#" type="text/css" id="color-variant">
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.min.js');?>"></script>

        <?php
        // load extra CSS files from controller
        if (isset($css_to_load)) :
            foreach ($css_to_load as $row):
                $css_link = base_url($row);
                echo "<link href='$css_link' rel='stylesheet'>";
            endforeach;
        endif;
        ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85900175-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-85900175-4');
        </script>

    </head>

    <body>
        <?php 
//        wts($menu_array); 
        ?>
        <!-- Header -->
        <div class="template-header">

            <!-- Top header --> 
            <div class="template-header-top">

                <div class="template-main template-clear-fix">

                    <div class="template-header-top-logo">
                        <a href="index.php">
                            <img src="<?= base_url('assets/image/train_130_alt.png'); ?>" alt=""/>
                            <!--<img src="media/image/logo_header.png" alt="" />-->
                        </a>
                    </div>
                    <div class="template-header-top-menu template-clear-fix">	

                        <nav class="template-component-menu-default">

                            <ul class="sf-menu template-clear-fix">                                
                                <?php
                                // MAIN MENU RENDER
                                foreach ($menu_array as $menu_item):
                                    isset($menu_item['submenu']) ? $li_cl="sf-mega-enable-1" : $li_cl="sf-mega-enable-0";
                                    echo "<li class='$li_cl'>";
                                        echo "<a href='". base_url($menu_item['url'])."'><span class='template-icon-menu template-icon-menu-".$menu_item['icon']."'></span>$menu_item[text]</a>";
                                        if (isset($menu_item['submenu'])) {
                                            echo '<div class="sf-mega template-layout-33x33x33 template-clear-fix">';
                                            foreach ($menu_item['submenu'] as $column=>$column_items):
                                                echo '<div class="template-layout-column-'.$column.'">';
                                                echo "<ul>";
                                                     foreach ($column_items as $sub_item) {
                                                         echo '<li><a href="'.$sub_item['url'].'">'.$sub_item['text'].'</a></li>';
                                                     }
                                                echo "</ul>";
                                                echo "</div>";     
                                             endforeach;
                                        }
                                    echo "</li>";
                                endforeach;
                                ?>
                            </ul>

                        </nav> <!-- end main nav -->

                        <nav class="template-component-menu-responsive">
                            <ul class="template-clear-fix">
                                <li>
                                    <a href="#">Menu<span></span></a>
                                    <ul>
                                        <?php
                                        // RESPONSIVE MENU RENDER
                                        foreach ($menu_array as $menu_item):
                                            echo "<li>";
                                                isset($menu_item['submenu']) ? $url="#" : $url=base_url($menu_item['url']);
                                                echo "<a href='".$url."'>".$menu_item['text'];
                                                echo isset($menu_item['submenu']) ? "<span></span>" : '';
                                                echo "</a>";
                                                if (isset($menu_item['submenu'])) {
                                                        echo "<ul>";
                                                    foreach ($menu_item['submenu'] as $column=>$column_items):
                                                             foreach ($column_items as $sub_item) {
                                                                 echo '<li><a href="'.$sub_item['url'].'">'.$sub_item['text'].'</a></li>';
                                                             }
                                                     endforeach;
                                                        echo "</ul>";
                                                }
                                            echo "</li>";
                                        endforeach;
                                        ?>
                                    </ul>
                                <li>
                            </ul>
                        </nav> <!-- end responsive nav -->

                    </div>

                </div>
            </div>

            <!-- Bottom header -->
            <div class="template-header-bottom">

            </div>

        </div>