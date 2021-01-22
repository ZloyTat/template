<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
	<?= $Wcms->css()?>
</head>


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/bootstrap.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/animate.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/plugin.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/owl.carousel.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/owl.theme.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/owl.transitions.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/magnific-popup.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>" type="text/css"><!-- custom background -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/bg.css')?>" type="text/css">

    <!-- additional css files -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/datepicker.css')?>" type="text/css">

    <!-- revolution slider custom css -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/rev-settings.css')?>" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/color.css')?>" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?= $Wcms->asset('fonts/font-awesome/css/font-awesome.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('fonts/elegant_font/HTML_CSS/style.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= $Wcms->asset('fonts/et-line-font/style.css')?>" type="text/css">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= $Wcms->asset('revolution/css/settings.css')?>">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?= $Wcms->asset('revolution/css/layers.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= $Wcms->asset('revolution/css/navigation.css')?>">
</head>
<body>
       <?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>

<body id="homepage">

    <div id="wrapper">
 
        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Collins Street West, Victoria 8007 Australia </div>
                            <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday 08:00-16:00</div>
                            <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>1800.899.900</div>
                            <div class="col">
                                <div id="lang-selector" class="dropdown">
                                    <a href="#" class="btn-selector">English</a>
                                    <ul>
                                        <li class="active"><a href="#">English</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Spain</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="<?= $Wcms->asset('images/logo.png')?>" alt="">
                                <img class="logo-2" src="<?= $Wcms->asset('images/logo-2.png')?>" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="menu.html">Menu</a>
                                    <ul>
                                        <li><a href="menu.html">Menu Default</a></li>
                                        <li><a href="menu-thumbnails.html">Menu Thumbnails</a></li>
                                        <li><a href="menu-tabs.html">Menu Tabs</a></li>
                                        <li><a href="menu-single.html">Menu Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="book.html">Book</a></li>
                                <li><a href="event.html">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?= $Wcms->asset('images-slider/wide1.jpg')?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

                            <div class="tp-caption very-big-white"
                                data-x="center"
                                data-y="220"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;px;s:800;e:Power3.easeInOut;"
                                data-start="700"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">
                               <?= $Wcms->page('content') ?>
                            </div>

                            <div class="tp-caption text-center"
                                data-x="center"
                                data-y="330"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1100">
                                <span class="id-color">Enjoy the real fresh food from our chef.</span>
                            </div>

                            <div class="tp-caption"
                                data-x="center"
                                data-y="410"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1200">
                                <a href="#" class="btn-slider rounded"><?= $Wcms->page('content') ?></a>&nbsp;&nbsp;
								<a href="#" class="btn-solid rounded">View Menu</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?= $Wcms->asset('images-slider/wide2.jpg')?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

                            <div class="tp-caption very-big-white"
                                data-x="center"
                                data-y="220"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;px;s:800;e:Power3.easeInOut;"
                                data-start="700"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">
                                Exquisite Atmosphere
                            </div>

                            <div class="tp-caption text-center"
                                data-x="center"
                                data-y="330"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1100">
                                <span class="id-color">Enjoy the real fresh food from our chef.</span>
                            </div>

                            <div class="tp-caption"
                                data-x="center"
                                data-y="410"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1200">
                                <a href="#" class="btn-slider rounded">Book Now</a>&nbsp;&nbsp;
								<a href="#" class="btn-solid rounded">View Menu</a>
                            </div>
                        </li>



                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-about" class="no-top z-index1000">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 wow fadeInUp">

                            <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                                <span class="center-xy">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=mcODFaL2VFo">
                                        <i class="fa fa-play btn-action btn-play btn-action-hide"></i></a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="<?= $Wcms->asset('images/misc/pic_1.jpg')?>" class="img-responsive" alt="">
                            </figure>

                            <h3 class="id-color">Healthy &amp; Tasty</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
							<br>
                                <a href="#" class="btn-underline mt20">READ MORE</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                            <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                                <span class="center-xy">
                                    <a class="image-popup" href="images/misc/pic_1.jpg">
                                        <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="<?= $Wcms->asset('images/misc/pic_2.jpg')?>" class="img-responsive" alt="">
                            </figure>
                            <h3 class="id-color">Today's Special</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                <br>
                                <a href="#" class="btn-underline mt20">READ MORE</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                                <span class="center-xy">
                                    <a class="image-popup" href="images/misc/pic_3.jpg">
                                        <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="<?= $Wcms->asset('images/misc/pic_3.jpg')?>" class="img-responsive" alt="">
                            </figure>
                            <h3 class="id-color">Romantic Dinner</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                <br>
                                <a href="#" class="btn-underline mt20">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-welcome" class="side-bg" data-bgcolor="#18181d">
                <div class="col-md-6 image-container wow fadeInLeft">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7 wow fadeInUp">

                            <h2>Welcome To Delizus<span class="teaser">The Art of Cookings</span><span class="tiny-border"></span></h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								
                            </p>

                            <div class="spacer-single"></div>

                            <a href="#" class="btn-solid rounded mt20">Read More</a>

                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-features" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Today's Special<span class="teaser">Fresh and delicious</span><span class="small-border center"></span></h2>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInLeft" data-wow-delay=".3s">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="<?= $Wcms->asset('images/menu/thumbs/1.jpg')?>">
                                            <i class="fa fa-play btn-action btn-play btn-action-hide"></i>
                                        </a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= $Wcms->asset('images/menu/thumbs/1.jpg')?>" class="img-responsive" alt="">
                                </figure>

                                <h3>Roasted Chicken</h3>
                                <span class="id-color">$55</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInLeft">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="<?= $Wcms->asset('images/menu/thumbs/2.jpg')?>">
                                            <i class="fa fa-image btn-action btn-action-hide"></i>
                                        </a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= $Wcms->asset('images/menu/thumbs/2.jpg')?>" class="img-responsive" alt="">
                                </figure>
                                <h3>Baked Crab Cheese</h3>
                                <span class="id-color">$66</span>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInRight">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="<?= $Wcms->asset('images/menu/thumbs/3.jpg')?>">
                                            <i class="fa fa-image btn-action btn-action-hide"></i>
                                        </a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= $Wcms->asset('images/menu/thumbs/3.jpg')?>" class="img-responsive" alt="">
                                </figure>
                                <h3>Foie Gras</h3>
                                <span class="id-color">$99</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInRight" data-wow-delay=".3s">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="images/menu/thumbs/4.jpg">
                                            <i class="fa fa-image btn-action btn-action-hide"></i>
                                        </a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= $Wcms->asset('images/menu/thumbs/4.jpg')?>" class="img-responsive" alt="">
                                </figure>
                                <h3>Chicken Satay</h3>
                                <span class="id-color">$56</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-services-tab" aria-label="section-services-tab">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <h2>Our Menu<span class="teaser">Healthy &amp; Tasty</span><span class="small-border center"></span></h2>
                    </div>

                    <div class="col-md-12 mb60 wow fadeInUp">
                        <div class="de_tab tab_style_1">
                            <ul class="de_nav">
                                <li class="active" data-link="#section-services-tab"><span>Mains</span><div class="v-border"></div>
                                </li>
                                <li data-link="#section-services-tab"><span>Starter</span><div class="v-border"></div>
                                </li>
                                <li data-link="#section-services-tab"><span>Drinks</span><div class="v-border"></div>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/1.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Chicken Crispy Roll</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$66</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/2.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Cheese Shrimp Roll</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$42</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/3.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Baked Crab Cheese</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$66</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/4.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Crispy Squid</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$54</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/5.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Foie Gras</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$99</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/main/6.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Roasted Chicken</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$55</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/1.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Chicken Soup</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$8</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/2.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Caprese Salad</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$9</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/3.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Polpette</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$8</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/4.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Waffle</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$9</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/5.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Caprino</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$8</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/starter/6.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Calamary</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$10</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                                <div id="tab3" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/1.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Limeade</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$5</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/2.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Iced Tea</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$3</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/3.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Milk Shake</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$5</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/4.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Orange Juice</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$3</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/5.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Hot Tea</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$3</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= $Wcms->asset('images/menu/thumbs-small/drink/6.jpg')?>" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Coffee</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">$3</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section id="section-book-form" class="no-top no-bottom" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3">
                        <div data-bgcolor="#18181d" class="padding60 text-center text-light mt-50 mb-50 shadow-soft wow fadeInUp">
                            <h2>Book a Table<span class="teaser center">Reservation</span><span class="small-border center"></span></h2>

                            <div class="row">
                                <form name="contactForm" id='contact_form' class="form-dark" method="post" action='reservation.php'>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='date' id='date' class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='time' id='time' class="form-control" placeholder="Time">
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='person' id='person' class="form-control" placeholder="Person">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-12 mb10">
                                        <textarea name='message' id='message' class="form-control" placeholder="Any Message?"></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Submit Form' class="btn-solid rounded">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="section-news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt30">
                            <h2>Latest Events<span class="teaser center">Come &amp; Join</span><span class="small-border center"></span></h2>
                        </div>

                        <div class="col-md-12 wow fadeInUp">
                            <ul id="blog-carousel" class="article-list">
                                <li class="col-md-6 item">
                                    <figure class="pic-hover mb10">
                                        <span class="center-xy">
                                            <a href="#">
                                                <i class="fa fa-link btn-action btn-action-hide"></i>
                                            </a>
                                        </span>
                                        <span class="bg-overlay"></span>
                                        <img src="<?= $Wcms->asset('images/events/1.jpg')?>" alt="" class="img-responsive">
                                    </figure>
                                    <div class="post-content">

                                        <div class="post-text">
                                            <h3><a href="#">Barbeque Party</a></h3>
                                            <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>

                                        </div>

                                    </div>
                                </li>

                                <li class="col-md-6 item">
                                    <figure class="pic-hover mb10">
                                        <span class="center-xy">
                                            <a href="#">
                                                <i class="fa fa-link btn-action btn-action-hide"></i>
                                            </a>
                                        </span>
                                        <span class="bg-overlay"></span>
                                        <img src="<?= $Wcms->asset('images/events/2.jpg')?>" alt="" class="img-responsive">
                                    </figure>
                                    <div class="post-content">

                                        <div class="post-text">
                                            <h3><a href="#">Friday Jazz</a></h3>
                                            <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>

                                        </div>

                                    </div>
                                </li>

                                <li class="col-md-6 item">
                                    <figure class="pic-hover mb10">
                                        <span class="center-xy">
                                            <a href="#">
                                                <i class="fa fa-link btn-action btn-action-hide"></i>
                                            </a>
                                        </span>
                                        <span class="bg-overlay"></span>
                                        <img src="<?= $Wcms->asset('images/events/3.jpg')?>" alt="" class="img-responsive">
                                    </figure>
                                    <div class="post-content">

                                        <div class="post-text">
                                            <h3><a href="#">Romantic Night</a></h3>
                                            <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>

                                        </div>

                                    </div>
                                </li>

                                <li class="col-md-6 item">
                                    <figure class="pic-hover mb10">
                                        <span class="center-xy">
                                            <a href="#">
                                                <i class="fa fa-link btn-action btn-action-hide"></i>
                                            </a>
                                        </span>
                                        <span class="bg-overlay"></span>
                                        <img src="<?= $Wcms->asset('images/events/1.jpg')?>" alt="" class="img-responsive">
                                    </figure>
                                    <div class="post-content">

                                        <div class="post-text">
                                            <h3><a href="#">Barbeque Party</a></h3>
                                            <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>

                                        </div>

                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-fun-facts" class="bg-color text-light no-top no-bottom">
                <div class="pt20 pb20">
                    <div class="container bg-color">

                        <div class="row">
                            <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                                <div class="de_count">
                                    <h3 class="timer" data-to="8330" data-speed="2500">0</h3>
                                    <span>Hours of Works</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                                <div class="de_count">
                                    <h3 class="timer" data-to="248" data-speed="2500">0</h3>
                                    <span>Projects Complete</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <h3 class="timer" data-to="852" data-speed="2500">0</h3>
                                    <span>Slice of Pizza</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                                <div class="de_count">
                                    <h3 class="timer" data-to="615" data-speed="2500">0</h3>
                                    <span>Cups of Coffee</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

        </div>


        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-md-4">
                            &copy; Copyright 2017 - Delizus by Designesia                     
                        </div>
                        <div class="col-md-4 text-center">
                            <img class="logo" src="images/logo.png" alt="">
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

    <!-- Javascript Files
    <?= $Wcms->js() ?>
    ================================================== -->
    <script src="<?= $Wcms->asset('js/jquery.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/bootstrap.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/jquery.isotope.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/easing.js')?>"></script>
    <script src="<?= $Wcms->asset('js/jquery.flexslider-min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/jquery.scrollto.js')?>"></script>
    <script src="<?= $Wcms->asset('js/owl.carousel.js')?>"></script>
    <script src="<?= $Wcms->asset('js/jquery.countTo.js')?>"></script>
    <script src="<?= $Wcms->asset('js/classie.js')?>"></script>
    <script src="<?= $Wcms->asset('js/video.resize.js')?>"></script>
    <script src="<?= $Wcms->asset('js/validation-reservation.js')?>"></script>
    <script src="<?= $Wcms->asset('js/wow.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/enquire.min.js')?>"></script>
    <script src="<?= $Wcms->asset('s/jquery.stellar.min.js')?>"></script>
    <script src="<?= $Wcms->asset('js/designesia.js')?>"></script><!-- additional js files -->
    <script src="<?= $Wcms->asset('js/bootstrap-datepicker.js')?>"></script>

    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/jquery.themepunch.tools.min.js?rev=5.0')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')?>"></script>

    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.video.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.slideanims.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.navigation.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.actions.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.kenburn.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.migration.min.js')?>"></script>
    <script type="text/javascript" src="<?= $Wcms->asset('revolution/js/extensions/revolution.extension.parallax.min.js')?>"></script>

    <script>
        jQuery(document).ready(function () {
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 3300,
                navigation: {
                    arrows: { enable: true }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 600,
                disableProgressBar: "on"
            });


            // date picker settings
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(),
				nowTemp.getDate(), 0, 0, 0, 0);
            var checkin = $('#date').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ?
						'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkin.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkin.setValue(newDate);
                }
                checkin.hide();
            }).data('datepicker');
        });
    </script>


</body>
</html>
