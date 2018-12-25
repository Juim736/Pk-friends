<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Pk Friends</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
    <link href="{{asset('pk/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/component.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/export.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/flipclock.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/circles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/style_grid.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('pk/')}}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('/pk')}}/css/cmxform.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('pk/')}}/css/table-style.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('pk/')}}/css/basictable.css"/>

    <!-- font-awesome-icons -->
    <link href="{{asset('pk/')}}/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

    @section('header_link')
    @show
    <style>
        .amcharts-chart-div a {
            display: none !important;
        }
    </style>

</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
    <!-- /w3_agileits_top_nav-->
    <!-- /nav-->
    <div class="w3_agileits_top_nav">
        <ul id="gn-menu" class="gn-menu-main">
            <!-- /nav_agile_w3l -->

            @if(Sentinel::getUser()->user_type == '11' || Sentinel::getUser()->user_type == '1')
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller scrollbar1">
                            <ul class="gn-menu agile_menu_drop">
                                <li><a href="main-page.html"> <i class="fa fa-tachometer"></i> Dashboard</a>
                                </li>
                                <li><a href="{{url('/users_of_pk')}}"> <i class="fa fa-tachometer"></i> Users </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> UI Components <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="gn-submenu">
                                        <li class="mini_list_agile"><a href="buttons.html"><i class="fa fa-caret-right"
                                                                                              aria-hidden="true"></i>
                                                Buttons</a></li>
                                        <li class="mini_list_w3"><a href="grids.html"> <i class="fa fa-caret-right"
                                                                                          aria-hidden="true"></i> Grids</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="gn-submenu">
                                        <li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right"
                                                                                            aria-hidden="true"></i>
                                                Inputs</a></li>
                                        <li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right"
                                                                                              aria-hidden="true"></i>
                                                Validation</a></li>
                                    </ul>
                                </li>
                                <li><a href="table.html"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
                                <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Short Codes <i
                                                class="fa fa-angle-down" aria-hidden="true"> </i></a>
                                    <ul class="gn-submenu">
                                        <li class="mini_list_agile"><a href="typo.html"><i class="fa fa-caret-right"
                                                                                           aria-hidden="true"></i>
                                                Typography</a></li>
                                        <li class="mini_list_w3"><a href="icons.html"> <i class="fa fa-caret-right"
                                                                                          aria-hidden="true"></i> Icons</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="charts.html"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                        Charts</a></li>
                                <li><a href="maps.html"><i class="fa fa-map-o" aria-hidden="true"></i> Maps</a></li>
                                <li class="page">
                                    <a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Pages <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="gn-submenu">

                                        <li class="mini_list_agile"><a href="signin.html"> <i class="fa fa-caret-right"
                                                                                              aria-hidden="true"></i>
                                                Sign In</a></li>
                                        <li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right"
                                                                                           aria-hidden="true"></i> Sign
                                                Up</a></li>
                                        <li class="mini_list_agile error"><a href="404.html"> <i
                                                        class="fa fa-caret-right" aria-hidden="true"></i> Error 404 </a>
                                        </li>

                                        <li class="mini_list_w3_line"><a href="calendar.html"> <i
                                                        class="fa fa-caret-right" aria-hidden="true"></i> Calendar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>More <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="gn-submenu">
                                        <li class="mini_list_agile"><a href="faq.html"> <i class="fa fa-caret-right"
                                                                                           aria-hidden="true"></i>
                                                Faq</a></li>
                                        <li class="mini_list_w3"><a href="blank.html"> <i class="fa fa-caret-right"
                                                                                          aria-hidden="true"></i> Blank
                                                Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
            @else
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                </li>
            @endif
        <!-- //nav_agile_w3l -->
            <li class="second logo"><h1><a href="{{url('/pk-friends')}}"><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i>PK FR</a></h1></li>
            <li class="second admin-pic">
                <ul class="top_dp_agile">
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img src="{{asset('/pk/')}}/images/admin.jpg" alt=""> </span>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{url('user/user-profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                            <li>
                                <a href="javascript::void(0)"
                                   onclick="document.getElementById('signOut_form').submit()"><i
                                            class="fa fa-sign-out"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
                    <form action="{{route('signOut')}}" method="post" id="signOut_form">
                        {{csrf_field()}}
                    </form>
                </ul>
            </li>
            <li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                    class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>Your Notifications</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a3.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>John Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a1.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>Jasmin Leo</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>3 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a2.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>2 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a4.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all Notifications</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                    class="fa fa-envelope-o" aria-hidden="true"></i> <span
                                    class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>Your Messages</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a3.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>John Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>3 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a1.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>Jasmin Leo</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>2 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{asset('/pk/')}}/images/a2.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all Messages</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 4 Pending tasks</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Database update</span><span
                                                class="percentage">40%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar yellow" style="width:40%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar green" style="width:90%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar red" style="width: 33%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar  blue" style="width: 80%;"></div>
                                    </div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all pending tasks</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="second w3l_search">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Search here..." required="">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </li>

            <li class="second full-screen">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
                </section>
            </li>
        </ul>
        <!-- //nav -->
    </div>
</div>
