        <!-- End Pre-Loader -->
        <header class="header-style-2">
            <div class="bg-header-top">
                <div class="container">
                    <div class="row">
                        <div class="header-top">
                            <ul class="h-contact">
                                <li><i class="flaticon-time-left"></i> Time : Tusday-Monday : 9:00am-6:00pm</li>
                                <li><i class="flaticon-vibrating-phone"></i> Phone : +88017 923 970 659</li>
                                <li><i class="flaticon-placeholder"></i> Address : Sute 07 Sahara Center</li>
                            </ul>
                            <div class="donate-option">
                                <a href="donate.html"><i class="fa fa-heart" aria-hidden="true"></i> donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .bg-header-top -->
            <!-- Start Menu -->
            <div class="bg-main-menu menu-scroll">
                <div class="container">
                    <div class="row">
                        <div class="main-menu">
                            <div class="main-menu-bottom">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html"><img src="assets/images/home01/logo.png" alt="logo" class="img-responsive" /></a>
                                    <button type="button" class="navbar-toggler collapsed d-lg-none" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="navbar-toggler-icon">
                                            <i class="fa fa-bars"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="main-menu-area">
                                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                                        <ul>
                                            <li><a href="index.php" class="active">HOME</a></li>
                                            <li><a href="AfficherTerre.php">Terre</a></li>

                                            <?php if(!isset($_SESSION['client'])) { ?>
                                            <li><a href="AfficherProduits.php">Produits</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">contacts</a></li>

                                            <div class="s-header__cta ">
                                            <li><a href="SignUp.php" class="btn btn--primary s-intro__content-btn smoothscroll">Sign Up</a></li> 
                                            </div>
                                            <div class="s-header__cta">
                                            <li><a href="SignIn.php" class="btn btn--primary s-intro__content-btn smoothscroll">Sign In</a></li>
                                            </div>

                                        <?php  }else{   ?>
                                            <li><a href="MesDiagnostique.php">Mes diagnostiques</a></li>
                                            <li><a href="AfficherProduits.php">Produits</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">contacts</a></li>

                                            <div class="s-header__cta">
                                            <li><a href="MyProfile.php" class="btn btn--primary s-intro__content-btn smoothscroll"> My Profil</a>
                                            </div>

                                        <div class="s-header__cta">
                                        <li><a href="Deconnexion.php" class="btn btn--primary s-intro__content-btn smoothscroll">Deconnexion</a>
                                        </div>

                                        <?php } ?>

                                        </ul>
                                        <div class="menu-right-option pull-right">
                                            <div class="cart-option">
                                                <div class="cart-icon">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                    <div class="count-cart">2</div>
                                                </div>
                                                <!-- .cart-icon -->
                                                <div class="cart-dropdown-menu">
                                                    <div class="cart-items">
                                                        <div class="cart-img">
                                                            <a href="single_shop_cat.html"><img src="assets/images/home01/cart-img-1.jpg" alt="cart-img-1"></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6><a href="single_shop_cat.html">Product Title Here</a></h6>
                                                            <p>1*<span>$350</span></p>
                                                        </div>
                                                        <div class="cart-btn">
                                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="clr"></div>
                                                    </div>
                                                    <!-- .cart-items -->

                                                    <div class="cart-items">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="assets/images/home01/cart-img-2.jpg" alt="cart-img-2"></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6><a href="single_shop_cat.html">Product Title Here</a></h6>
                                                            <p>1*<span>$350</span></p>
                                                        </div>
                                                        <div class="cart-btn">
                                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="clr"></div>
                                                    </div>
                                                    <!-- .cart-items -->
                                                    <div class="cart-items">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="assets/images/home01/cart-img-3.jpg" alt="cart-img-3"></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6><a href="single_shop_cat.html">Product Title Here</a></h6>
                                                            <p>1*<span>$350</span></p>
                                                        </div>
                                                        <div class="cart-btn">
                                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="clr"></div>
                                                    </div>
                                                    <!-- .cart-items -->
                                                    <div class="total-price">
                                                        <p><span>Total Price :</span> $700 </p>
                                                    </div>
                                                    <!-- .total-prices -->
                                                    <div class="checkout-btn">
                                                        <a href="#" class="btn btn-default">donate now</a>
                                                    </div>
                                                </div>
                                                <!-- .cart--->
                                            </div>
                                            <!-- .cart-option -->

                                            <div class="search-box">
                                                <i class="fa fa-search first_click" aria-hidden="true" style="display: block;"></i>
                                                <i class="fa fa-times second_click" aria-hidden="true" style="display: none;"></i>
                                            </div>
                                            <div class="search-box-text">
                                                <form action="search">
                                                    <input type="text" name="search" id="all-search" placeholder="Search Here">
                                                </form>
                                            </div>
                                        </div>
                                        <!-- .header-search-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
