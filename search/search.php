<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="search.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="../js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>

    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
    <![endif]-->
</head>

<body>

<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
    <div class="container">
        <div class="wrap_1">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
                        <div class="wrap">
                            <h1>
                                <a href="../"><span class="fa fa-gamepad"></span> Games <br/> Zone</a>
                            </h1>
                        </div>
                    </div>

                    <form id="search" class="put-right" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="input_wrap" for="search">
                            <input type="text" name="s" placeholder="Search:"/>
                        </label>
                        <a class="fa fa-search" onclick="document.getElementById('search').submit()"></a>
                    </form>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <nav>
                        <ul class="sf-menu">
                            <li><a class="fa-home" href="../"></a></li>
                            <li><a href="../index-1.html">Games</a></li>
                            <li><a href="../index-2.html">Reviews</a></li>
                            <li>
                                <a href="../index-3.html">News</a>
                                <ul>
                                    <li><a href="#">Dolore ipsu</a></li>
                                    <li><a href="#">Consecte</a>
                                        <ul>
                                            <li><a href="#">Dolore ipsu</a></li>
                                            <li><a href="#">Consecte</a></li>
                                            <li><a href="#">Elit Conseq</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elit Conseq</a></li>
                                </ul>
                            </li>
                            <li><a href="../index-4.html">Blog</a></li>
                            <li><a href="../index-5.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!--============================ Content ================================-->
<div id="content" class="bg_2 wrap_5">
    <div class="container">
        <div class="row wrap_2">
            <div class="grid_12">
                <h2 class="header_1 color_5">Search Results</h2>
                <div id="search-results"></div>
            </div>
        </div>
    </div>
</div>


<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_3">
                <h2 class="text_6 color_4">Reviews</h2>
                <ul class="list_2">
                    <li><a href="#">Latest Reviews</a></li>
                    <li><a href="#">Nintendo</a></li>
                    <li><a href="#">PlayStation</a></li>
                    <li><a href="#">Xbox</a></li>
                    <li><a href="#">PC</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <h2 class="text_6 color_4">News</h2>
                <ul class="list_2">
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Nintendo</a></li>
                    <li><a href="#">PlayStation</a></li>
                    <li><a href="#">Xbox</a></li>
                    <li><a href="#">PC</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <h2 class="text_6 color_4">Videos</h2>
                <ul class="list_2">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Gameplay</a></li>
                    <li><a href="#">Previews</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Trailers</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <h2 class="text_6 color_4">Follow us</h2>
                <ul class="social-list">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-rss" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="grid_12">
                <div class="info">
                    <h2>
                        <a href="../"><span class="fa fa-gamepad"></span> Games <br/> Zone</a>
                    </h2>
                    <p class="text_7">
                        © <span id="copyright-year"></span> | <a href="../index-6.html">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>