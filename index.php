<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Showcase Categories' clonable='1'>

    <cms:repeatable name='websites' >
        <cms:editable type='image' name='website_preview' label='Website Preview' />
        <cms:editable type='text' name='link' label='Link' desc='Enter Website Link' />
        <cms:editable type='text' name='website_name' label='Template Name' desc='Enter Template Name' />
        <cms:editable type='text' name='tags' label='Tags' desc='Enter Website Tags' />
    </cms:repeatable>

</cms:template>

<cms:if k_is_page >
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa" />
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos." />
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq" />
        <!-- favicon -->
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="apple-touch-icon" href="./images/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="./images/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="./images/apple-touch-icon-114x114.png" />
        <!-- animation -->
        <link rel="stylesheet" href="./css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="./css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="./css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="./css/themify-icons.css" />
        <!-- swiper carousel -->
        <link rel="stylesheet" href="./css/swiper.min.css" />
        <!-- justified gallery  -->
        <link rel="stylesheet" href="./css/justified-gallery.min.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="./css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="./revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="./revolution/css/layers.css" />
        <link rel="stylesheet" type="text/css" href="./revolution/css/navigation.css" />
        <!-- bootsnav -->
        <link rel="stylesheet" href="./css/bootsnav.css" />
        <!-- style -->
        <link rel="stylesheet" href="./css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="./css/responsive.css" />
        <!--[if IE]>
            <script src="./js/html5shiv.js"></script>
        <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <!-- start header -->
        <a href = "https://webmasons.co/" class="showcase_logo container">
            <img src="./images/logo.png"/>
        </a>
          
        <!-- start services section -->
        <section class="wow fadeIn">
            <div class="container">

                
                <div class="row">
                    <div class="col-md-12">
                        <!-- start breadcrumb -->
                        <div class="row equalize">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-sm-12 display-table text-left xs-text-left xs-margin-10px-top" style="height: 26px;">
                                <div class="display-table-cell vertical-align-middle breadcrumb text-large alt-font">
                                    
                                    <ul class="xs-text-center">
                                        <li><a href="index.html" class="text-dark-gray">Categories</a></li>
                                        <li class="text-dark-gray">Columns</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px" style="margin-top: 25px !important;float: left;width: 50px;"></span>
                            <!-- end breadcrumb -->
                    </div>
                    <div class="col-md-12 no-padding xs-padding-15px-lr" style="margin-top: 3%;">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-3col gutter-large hover-option6 lightbox-portfolio" style="position: relative; height: 798.312px;">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <cms:show_repeatable 'websites' >
                                <li class="grid-item zoomIn last-paragraph-no-margin" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: zoomIn;">
                                    <figure>
                                        <div class="portfolio-img bg-webmasons position-relative text-center overflow-hidden">
                                            <img src="<cms:show website_preview />" alt="" data-no-retina="">
                                            <div class="portfolio-icon">
                                                <a href="<cms:show link />" target="_blank"><i class="fa fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <figcaption class="bg-white">
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <a href="./single-project-page-01.html"><span class="line-height-normal font-weight-500 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block"><cms:show website_name /></span></a>
                                                        <p class="text-medium-gray text-extra-small text-uppercase"><cms:show tags /></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                </cms:show_repeatable>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end services section -->





        <!-- end latest blog section -->
        <!-- start footer --> 

        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/modernizr.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="./js/skrollr.min.js"></script>
        <script type="text/javascript" src="./js/smooth-scroll.js"></script>
        <script type="text/javascript" src="./js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="./js/bootsnav.js"></script>
        <script type="text/javascript" src="./js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="./js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="./js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="./js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="./js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="./js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="./js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="./js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="./js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="./js/classie.js"></script>
        <script type="text/javascript" src="./js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="./js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="./js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="./js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="./js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="./js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="./js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="./js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="./js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="./revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="./revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="./js/main.js"></script>
    </body>
</html>

<cms:else />

    <cms:embed 'index.html'/ >

</cms:if>

<?php COUCH::invoke(); ?>