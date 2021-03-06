 <!--Template Name: UrbanArchi
File Name: gallery.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/REALSTATE.png"/>
        <title>Thông Tin Dự Án</title>

        <!-- Bootstrap core CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
        <script src="js/scrollreveal.min.js" type="text/javascript"></script>
        <script src="js/jquery.imagesloaded.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <style>
            /* clear fix */
            .grid:after {
                content: '';
                display: block;
                clear: both;
            }

            /* ---- .grid-item ---- */

            .grid-sizer,
            .grid-item {
                width: 33.333%;
            }

            .grid-item {
                float: left;
            }

            .grid-item img {
                display: block;
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <!--header--->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="navbar-header page-scroll">
                                <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a href="index.html"><img src="images/logoCTY.png" alt="logo"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-8 remove-left">
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="hidden active">
                                        <a href="#page-top" class="page-scroll"></a>
                                    </li>
                                    <li><a href="home.html" class="page-scroll">Trang Chủ</a></li>
                                    <li><a href="about.html" class="page-scroll">Giới Thiệu</a></li>
                                    <li><a href="agents.html" class="page-scroll">Đại Diện</a></li>
                                    <li class="active"><a class="page-scroll">Dự Án</a></li>
                                    <li> <a href="blog.html" class="page-scroll">Blog</a></li>
                                    <li> <a href="contact.html" class="page-scroll">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /navbar-collapse -->
                        <div class="col-md-2 col-sm-1">
                            <a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>
                            <div id="searchbar" class="clearfix">
                                <form id="searchform">
                                    <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                                    <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
        </header>
        <!--end-->
        <div class="head-wrapper"></div>
        <div class="clearfix"></div>

        <section class="location-block">
                <div class="container">
                    <div class="row info-block">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scrollReveal sr-bottom sr-delay-1">
                            <a><i class="fa fa-map-marker"></i>
                                <span> 15A Hoang Hoa Tham Street,<br>Binh Thanh district HCM City.</span></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scrollReveal sr-bottom sr-delay-2">
                            <a class="add-space" href="mail:demo@info.com"><i class="fa fa-envelope"></i>
                                <span>demo@info.com</span></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scrollReveal sr-bottom sr-delay-3">
                            <a class="add-space" href="tel:XXXXXXXX"><i class="fa fa-phone"></i>
                                <span>XXXXXXXX</span></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scrollReveal sr-bottom sr-delay-4">
                            <a class="add-space" href="www.ss4u.vn"><i class="fa fa fa-globe"></i>
                                <span>www.ss4u.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>  
            </section>
        <section class="gallery-block gallery-front">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/2222.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/2222.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Dự Án Mới <br> Sắp Mở Bán</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/3333.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/3333.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Dự Án Cho Thuê</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/5555.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/5555.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Dự Án Nổi Bật</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/666.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/666.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Dự Án Giảm Giá</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--gallery--->
        <!--
        <section class="gallery-block">
            <div class="container">
                <div class="text-head">
                    <h1 class="black-col">gallery</h1>
                </div>
            </div>
            <div class="grid margin-t65">
                <div class="grid-sizer"></div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img1-900x600.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img7-900x506.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img9-600x900.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img3-900x600.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img5-900x675.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img8-900x615.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img6-900x675.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img2-900x600.jpg" />
                </div>
                <div class="grid-item">
                    <img src="images/Gallery/mass/img4-900x558.jpg" />
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
    -->
        <!--end--->



        <!--footer-->
        <footer>
            <div class="container">
                <div class="row footer-block-main">
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block"><h4>Đường Dẫn</h4>
                            <ul class="list-unstyled">
                                <li><a href="home.html">Trang Chủ</a></li>
                                <li><a href="about.href">Giới Thiệu</a></li>
                                <li><a href="agents.html">Dự án</a></li>
                                <li class="active"><a href="gallery.html">Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Liên Hệ</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                            <div class="footer-block location-info">
                                <h4>Thông Tin Liên Hệ</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <p><a><span class="fa fa-location-arrow fa-lg"></span>  15A Hoang Hoa Tham Street, Binh Thanh district HCM City.</a></p>
                                    </li>
                                    <li>
                                        <p><a href="XXXXXXXX"><span class="fa fa-phone fa-lg"></span> XXXXXXXX</a></p>
                                    </li>
                                    <li>
                                        <p><a href="mailto:test@test.com"><span class="fa fa-envelope"></span> demo@info.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block"><h4>instagram post</h4>
                            <div class="row gallery-footer">
                                <div class="col-md-12">
                                    <div id="instafeed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block"><h4>social media</h4>
                            <div class="footer-social">
                                <ul class="list-unstyled">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                    <li><a><i class="fa fa-google-plus"></i></a></li>
                                    <li><a><i class="fa fa-behance"></i></a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                    © 2018 All right reserved. Designed by <a href="http://www.ss4u.vn/" target="_blank">PhuongTran.</a>
                </div>
        </footer>
        <!--end-->
        <!--back to top--->
        <a id="back-to-top" class="scrollTop back-to-top" href="javascript:void(0);" style="display: none;">
            <img src="images/top-arrow.png" alt="back-to-top"/>
        </a>

        <script>
            var grid = document.querySelector('.grid');

            var msnry = new Masonry(grid, {
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                percentPosition: true
            });

            imagesLoaded(grid).on('progress', function () {
                // layout Masonry after each image loads
                msnry.layout();
            });


        </script>
    </body>
</html>
