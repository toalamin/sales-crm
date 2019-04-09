<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <title>Admin Dashboard - Amar Bebsha</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="page-body">
<div class="page-container ">
    <div class="sidebar-menu">
        <header class="logo-env">

            <!-- logo -->
            <div class="logo" style="">
                <a href="http://localhost/hms_template/">
                    <img src="assets/images/logo.png" style="max-height:60px;"/>
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse" style="">
                <a href="#" class="sidebar-collapse-icon with-animation">

                    <i class="entypo-menu"></i>
                </a>
            </div>

            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <div class="sidebar-user-info">

            <div class="sui-normal">
                <a href="#" class="user-link">
                    <img src="http://localhost/hms_template/uploads/user.jpg" alt="" class="img-circle"
                         style="height:44px;">

                    <span>Welcome,</span>
                    <strong>Mr. Admin </strong>
                </a>
            </div>

            <div class="sui-hover inline-links animate-in">
                <!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->
                <a href="http://localhost/hms_template/index.php?admin/profile">
                    <i class="entypo-pencil"></i>
                    Edit Profile </a>

                <a href="http://localhost/hms_template/index.php?admin/profile">
                    <i class="entypo-lock"></i>
                    Change Password </a>

                <span class="close-sui-popup">×</span><!-- this is mandatory -->
            </div>
        </div>


        <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>
        <ul id="main-menu" class="">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


            <!-- DASHBOARD -->
            <li class="active ">
                <a href="http://localhost/hms_template/index.php?admin/dashboard">
                    <i class="fa fa-desktop"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/department">
                    <i class="fa fa-sitemap"></i>
                    <span>Department</span>
                </a>
            </li>

            <li class="">
                <a href="http://localhost/hms_template/index.php?admin/doctor">
                    <i class="fa fa-user-md"></i>
                    <span>Doctor</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/patient">
                    <i class="fa fa-user"></i>
                    <span>Patient</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/nurse">
                    <i class="fa fa-plus-square"></i>
                    <span>Nurse</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/pharmacist">
                    <i class="fa fa-medkit"></i>
                    <span>Pharmacist</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/laboratorist">
                    <i class="fa fa-user"></i>
                    <span>Laboratorist</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/accountant">
                    <i class="fa fa-money"></i>
                    <span>Accountant</span>
                </a>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/receptionist">
                    <i class="fa fa-plus-square"></i>
                    <span>Receptionist</span>
                </a>
            </li>

            <li class=" ">
                <a href="#">
                    <i class="entypo-target"></i>
                    <span>Monitor Hospital</span>
                </a>
                <ul>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/payment_history">
                            <i class="entypo-dot"></i>
                            <span>Payment History</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/bed_allotment">
                            <i class="entypo-dot"></i>
                            <span>Bed Allotment</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/blood_bank">
                            <i class="entypo-dot"></i>
                            <span>Blood Bank</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/blood_donor">
                            <i class="entypo-dot"></i>
                            <span>Blood Donor</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/medicine">
                            <i class="entypo-dot"></i>
                            <span>Medicine</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/operation_report">
                            <i class="entypo-dot"></i>
                            <span>Operation Report</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/birth_report">
                            <i class="entypo-dot"></i>
                            <span>Birth Report</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/death_report">
                            <i class="entypo-dot"></i>
                            <span>Death Report</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/notice">
                    <i class="entypo-doc-text-inv"></i>
                    <span>Noticeboard</span>
                </a>
            </li>

            <!-- SETTINGS -->
            <li class=" ">
                <a href="#">
                    <i class="fa fa-wrench"></i>
                    <span>Settings</span>
                </a>
                <ul>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/system_settings">
                            <span><i class="fa fa-h-square"></i> System Settings</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/manage_language">
                            <span><i class="fa fa-globe"></i> Language Settings</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="http://localhost/hms_template/index.php?admin/sms_settings">
                            <span><i class="entypo-paper-plane"></i> Sms Settings</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- ACCOUNT -->
            <li class=" ">
                <a href="http://localhost/hms_template/index.php?admin/manage_profile">
                    <i class="entypo-lock"></i>
                    <span>Account</span>
                </a>
            </li>


        </ul>

    </div>
    <div class="main-content">

        <div class="row">
            <div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
                <h2 style="font-weight:200; margin:0px;">Amar Bebsha</h2>
            </div>

            <!-- Raw Links -->
            <div class="col-md-12 col-sm-12 clearfix ">

                <ul class="list-inline links-list pull-left">
                    <!-- Language Selector -->
                    <li class="dropdown language-selector">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                            <i class="entypo-user"></i> admin </a>
                    </li>

                    <!-- Message Notifications -->
                </ul>


                <ul class="list-inline links-list pull-right">

                    <li>
                        <a href="http://localhost/hms_template/index.php?login/logout">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <hr style="margin-top:0px;"/>
        <h3 style="margin:20px 0px; color:#818da1; font-weight:200;">
            <i class="entypo-right-circled"></i>
            Admin Dashboard </h3>


        <div class="row">
            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/doctor">
                    <div class="tile-stats tile-white tile-white-primary">
                        <div class="icon"><i class="fa fa-user-md"></i></div>
                        <div class="num" data-start="0" data-end="1"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Doctor</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/patient">
                    <div class="tile-stats tile-white-red">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Patient</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/nurse">
                    <div class="tile-stats tile-white-aqua">
                        <div class="icon"><i class="fa fa-plus-square"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Nurse</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/pharmacist">
                    <div class="tile-stats tile-white-blue">
                        <div class="icon"><i class="fa fa-medkit"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Pharmacist</h3>
                    </div>
                </a>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/laboratorist">
                    <div class="tile-stats tile-white-cyan">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Laboratorist</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/accountant">
                    <div class="tile-stats tile-white-purple">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Accountant</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/payment_history">
                    <div class="tile-stats tile-white-pink">
                        <div class="icon"><i class="fa fa-list-alt"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Payment</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/medicine">
                    <div class="tile-stats tile-white-orange">
                        <div class="icon"><i class="fa fa-medkit"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0">0 &pound;
                        </div>
                        <h3>Medicine</h3>
                    </div>
                </a>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/operation_report">
                    <div class="tile-stats tile-white-green">
                        <div class="icon"><i class="fa fa-wheelchair"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0"></div>
                        <h3>Operation Report</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/birth_report">
                    <div class="tile-stats tile-white-brown">
                        <div class="icon"><i class="fa fa-github-alt"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0"></div>
                        <h3>Birth Report</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://localhost/hms_template/index.php?admin/death_report">
                    <div class="tile-stats tile-white-plum">
                        <div class="icon"><i class="fa fa-ban"></i></div>
                        <div class="num" data-start="0" data-end="0"
                             data-duration="1500" data-delay="0"></div>
                        <h3>Death Report</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main">
            &copy; 2014
            <a href="http://creativeitem.com"
               target="_blank">Creativeitem</a>
        </footer>
    </div>

</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
