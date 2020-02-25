
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE --> 
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?= base_url('lp/assets/img/favicon-16x16.png');?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= base_url('lp/assets/img/favicon-32x32.png');?>" sizes="32x32">

    <title>WAFL</title>

    <!-- uikit -->
    <link rel="stylesheet" href="<?= base_url('lp/bower_components/uikit/css/uikit.almost-flat.min.css');?>" media="all">

    <!-- wafl landing page -->
    <link rel="stylesheet" href="<?= base_url('lp/assets/css/main.css');?>" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="<?= base_url('lp/bower_components/matchMedia/matchMedia.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('lp/bower_components/matchMedia/matchMedia.addListener.js');?>"></script>
    <![endif]-->
</head>
<body>
    <!-- navigation -->
    <header id="header_main">
        <nav class="uk-navbar md-bg-blue-grey-900">
            <div class="uk-container uk-container-center">
                <a href="#" class="uk-float-left" id="mobile_navigation_toggle" data-uk-offcanvas="{target:'#mobile_navigation'}"><i class="material-icons">&#xE5D2;</i></a>
                <a href="/" class="uk-navbar-brand">
                    <!-- <img src="assets/img/.png" alt="" width="71" height="15"> -->
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav" id="main_navigation">
                    
                        <li >
                            <a class="md-color-blue-50" href="#sect-overview">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a class="md-color-blue-50" href="#sect-features">
                                Features
                            </a>
                        </li>
                        <li>
                            <a class="md-color-blue-50" href="#sect-gallery">
                                Gallery
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#sect-pricing" class="uk-navbar-nav-subtitle">
                                     Pricing
                                <div>Find the perfect plan</div>
                            </a>
                        </li> -->
                        <li>
                       <a class="md-color-blue-50" href="#sect-contact">
                                Contact
                            </a>
                        </li> 
                        <li>
                            <a class="md-color-blue-50" href="<?= base_url('LandingPage/login');?>">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="mobile_navigation" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul>
                <li>
                    <a href="#sect-overview" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE417;</i></span>
                        <span class="menu_title">Overview</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-features" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE896;</i></span>
                        <span class="menu_title">Features</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-gallery" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE410;</i></span>
                        <span class="menu_title">Gallery</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#sect-pricing" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE227;</i></span>
                        <span class="menu_title">Pricing<small>Find the perfect plan</small></span>
                    </a>
                </li> -->
                <li>
               <a href="#sect-team" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE7FB;</i></span>
                        <span class="menu_title">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-contact" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE0E1;</i></span>
                        <span class="menu_title">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <section class="banner" id="sect-overview">
        <div data-uk-slideshow="{animation: 'swipe'}" data-uk-parallax="{yp: '25', velocity: '0.4'}">
            <ul class="uk-slideshow">
                <li style="background-image: url('<?= base_url("assets/assets/img/law_1.jpg");?>'); background-position: center;">
                    <div class="uk-container uk-container-center">
                        <div class="slide_content_a">
                            <h2 class="slide_header">WAFL</h2>
                            <p>
                                Web Application For Lawyers
                            </p>
                            <!-- <a href="#" class="md-btn md-btn-large md-btn-success">CTA Button</a> -->
                            </div>
                    </div>
                </li>
                <li style="background-image: url('<?= base_url("assets/assets/img/law_2.jpg");?>'); background-position: center;">
                    <div class="uk-container uk-container-center">
                        <div class="slide_content_b">
                            <h2 class="slide_header">WAFL</h2>
                            <p>
                            Web Application For Lawyers
                            </p>
                            <a href="#" class="md-btn md-btn-large">CTA Button</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="slide_navigation">
                <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                    <li data-uk-slideshow-item="0"><a href=""></a></li>
                    <li data-uk-slideshow-item="1"><a href=""></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section>
</section>
    <section>
        <hr>
</section>
    <section class="section section_large md-bg-grey-200" id="sect-features">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-large-3-5 uk-container-center uk-text-center">
                    <h2 class="heading_b">
                        Features
                        <span class="sub-heading"></span>
                    </h2>
                </div>
                
            </div>
            <div class="uk-grid uk-grid-width-medium-1-3 animate" data-uk-scrollspy="{cls:'uk-animation-slide-bottom animated',target:'> *',delay:300,topoffset:-100}">
                <div class="uk-margin-top">
                <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text is-truncated" style="overflow-wrap: break-word;">
                        we provide web application that user can easily use via laptop or via moblie.</div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler"></i>
                                <h3>
                                USER FRIENDLY
                                </h3>
                            </div>
                            <p class="truncate-text" style="overflow-wrap: break-word;"><i class="material-icons icon_large icon_dark">&#xE85C;</i></p>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text is-truncated" style="overflow-wrap: break-word;">
                        we check this lawyer are work from any 3 cases and he will success or not if he is not
                         success so its not a top lawyer but if u work any two project so it's not a good.</div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler"></i>
                                <h3>
                                TOP LAWYERS
                                </h3>
                            </div>
                                <p class="truncate-text" style="overflow-wrap: break-word;"><i class="material-icons icon_large icon_dark">&#xE85C;</i></p>
                        </div>
                    </div>
                </div>
                            
                <div class="uk-margin-top">
                <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text is-truncated" style="overflow-wrap: break-word;">
                        The first concept is Data mining. We will take this concept for the workspace of the lawyers user. The lawyer to learn the previous successful cases and take a look and have a clue or learn about it. The lawyer can take the previous case as example and learn about it. So here the we will compare the strings for data mining and that string will be “Section or Articles”. If the string totally matches than the similar cases will be display and the data they get will be beneficial to them for their convenience.</div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler"></i>
                                <h3>
                                DATA MINING FOR EFFICIENCY
                                </h3>
                            </div>
                            <p class="truncate-text" style="overflow-wrap: break-word;"><i class="material-icons icon_large icon_dark">&#xE85C;</i></p>
                        </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="section section_gallery md-bg-blue-grey-200" id="sect-gallery">
        <div class="uk-container uk-container-center uk-invisible" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible',delay:300,topoffset:-150}">
            <h2 class="heading_c uk-margin-medium-bottom uk-text-center-medium">
                Gallery
                <span class="sub-heading">The Best Images From Around The World</span>
            </h2>
            <div data-uk-slider>
                <div class="uk-slider-container">
                    <ul class="uk-grid uk-grid-small uk-slider uk-grid-width-medium-1-3 uk-grid-width-large-1-4">
                        <li>
                            <div class="md-card">
                                <img src="<?= base_url('assets/img/gallery/download.jpg');?>" alt=""></div>
                                
                            
                        </li>
                        <li>
                            <div class="md-card">
                                <img src="<?= base_url('assets/img/gallery/images.jpg');?>" alt=""></div>
                                
                            
                        </li>
                        <li>
                            <div class="md-card">
                               <img src="<?= base_url('assets/img/gallery/images_1.jpg');?>" alt=""></div>
                                
                            
                        </li>
                        <li>
                            <div class="md-card">
                               <img src="<?= base_url('assets/img/gallery/images_2.jpg');?>" alt="">
                            </div>
                        </li>
                       
                   

                        <li>
                            <div class="md-card">
                               <img src="<?= base_url('assets/img/gallery/Image14.jpg');?>" alt=""></div>
                               
                           
                        </li>
                        <li>
                            <div class="md-card">
                                <img src="<?= base_url('assets/img/gallery/Image06.jpg');?>" alt=""></div>
                               
                            
                        </li>
                        <li>
                            <div class="md-card">
                               <img src="<?= base_url('assets/img/gallery/Image12.jpg');?>" alt=""></div>
                            
                        </li>
                    </ul>
                </div>
                <div class="slide_navigation">
                    <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section" id="sect-pricing">
        <div class="uk-container uk-container-center">
            <h2 class="heading_b uk-margin-bottom uk-text-center">
                Find the <span class="md-color-light-green-500">perfect plan</span> for your business
            </h2>
            <div class="pricing_table pricing_table_a uk-grid uk-grid-small uk-grid-width-medium-1-2 uk-grid-width-large-1-4 animate" data-uk-grid-match="{target:'.md-card-content'}"  data-uk-scrollspy="{cls:'uk-animation-slide-bottom animated',target:'> *',delay:300,topoffset:-100}">
                <div class="uk-margin-top">
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 1</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>0
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>512MB</strong> Memory</li>
                                <li><strong>1 Core</strong> Processor</li>
                                <li><strong>20GB</strong> SSD Disk</li>
                                <li><strong>1TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 2</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>20
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>1 GB</strong> Memory</li>
                                <li><strong>1 Core</strong> Processor</li>
                                <li><strong>30GB</strong> SSD Disk</li>
                                <li><strong>2TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-light-green-500 md-color-white">Plan 3</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>40
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>4 GB</strong> Memory</li>
                                <li><strong>2 Core</strong> Processor</li>
                                <li><strong>60GB</strong> SSD Disk</li>
                                <li><strong>4TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large md-btn-success">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 4</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>80
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>8 GB</strong> Memory</li>
                                <li><strong>4 Core</strong> Processor</li>
                                <li><strong>100GB</strong> SSD Disk</li>
                                <li><strong>5TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
    <section class="section section_large" id="sect-contact">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                <div class="uk-width-large-2-5">
                    <h3 class="heading_c uk-margin-large-bottom">Contact Form</h3>
                    <form action="">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-2">
                                    <label>First Name</label>
                                    <input type="text" class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Last Name</label>
                                    <input type="text" class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>E-Mail Address</label>
                            <input type="text" class="md-input" />
                        </div>
                        <div class="uk-form-row">
                            <label>Message</label>
                            <textarea cols="30" rows="4" class="md-input"></textarea>
                        </div>
                        <div class="uk-form-row">
                            <button class="md-btn md-btn-success md-btn-large">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="uk-width-large-3-5">
                    <h3 class="heading_c uk-margin-large-bottom">Contact Info</h3>
                    <p class="uk-margin-large-bottom">
                        
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE551;</i> 90########
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE0E1;</i> wafl@gmail.com&#160;
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE0C8;</i> searching for job
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_dark md-bg-blue-grey-700">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5 uk-text-center-medium">
                </div>
                <div class="uk-width-medium-2-5">
                    <div class="uk-align-medium-right uk-text-center-medium">
                        <a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Facebook"><i class="uk-icon-facebook uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Twitter"><i class="uk-icon-twitter uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="LinkedIn"><i class="uk-icon-linkedin uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" data-uk-tooltip="{offset: 12}" title="Google Plus"><i class="uk-icon-google-plus uk-icon-small md-color-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- common functions -->
    <script src="<?= base_url('lp/assets/js/common.min.js');?>"></script>
    <!-- uikit functions -->
    <script src="<?= base_url('lp/assets/js/uikit_custom.min.js');?>"></script>
    <!-- wafl common functions/helpers -->
    <script src="<?= base_url('lp/assets/js/altair_lp_common.js');?>"></script>

    <script>
        $(function() {
            if(isHighDensity()) {
                $.getScript( "<?= base_url('lp/assets/js/custom/dense.min.js');?>", function(data) {
                    // enable hires images
                    if (typeof $.fn.dense !== "undefined") {
                        $('img')
                            // set resolution cap at "2"
                            .attr('data-dense-cap',2)
                            .dense({
                                glue: "@",
                                ping: false
                            });
                    }
                });
            }
        });
    </script>

</body>
</html>