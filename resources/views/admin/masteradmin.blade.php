<!doctype html>
<html class="left-sidebar-panel sidebar-light" data-style-switcher-options="{'sidebarColor': 'light'}">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Left Sidebar Panel Light Layout | Porto Admin - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <base href="/" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />

    <link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />

    <!--(remove-empty-lines-end)-->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />


    <!--(remove-empty-lines-end)-->



    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../3.1.0" class="logo">
                <img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
            </a>
            <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                    <span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
							</span>
                </div>
            </form>

            <span class="separator"></span>

            <ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="bx bx-list-ol"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu large">
                        <div class="notification-title">
                            <span class="float-right badge badge-default">3</span>
                            Tasks
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-left">Generating Sales Report</span>
                                        <span class="message float-right text-dark">60%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-left">Importing Contacts</span>
                                        <span class="message float-right text-dark">98%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-left">Uploading something big</span>
                                        <span class="message float-right text-dark">33%</span>
                                    </p>
                                    <div class="progress progress-xs light mb-1">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="bx bx-envelope"></i>
                        <span class="badge">4</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="float-right badge badge-default">230</span>
                            Messages
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
                                        </figure>
                                        <span class="title">Joseph Doe</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="bx bx-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="float-right badge badge-default">3</span>
                            Alerts
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fas fa-thumbs-down bg-danger text-light"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="bx bx-lock bg-warning text-light"></i>
                                        </div>
                                        <span class="title">User Locked</span>
                                        <span class="message">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fas fa-signal bg-success text-light"></i>
                                        </div>
                                        <span class="title">Connection Restaured</span>
                                        <span class="message">10/10/2017</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">Administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled mb-2">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">

                        <ul class="nav nav-main">
                            <li>
                                <a href="layouts-default.html">
                                    <i class="bx bx-home-alt" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-cart-alt" aria-hidden="true"></i>
                                    <span>eCommerce</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="ecommerce-dashboard.html">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-products-list.html">
                                            Products List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-products-form.html">
                                            Products Form
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-category-list.html">
                                            Categories List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-category-form.html">
                                            Category Form
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-coupons-list.html">
                                            Coupons List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-coupons-form.html">
                                            Coupons Form
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-orders-list.html">
                                            Orders List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-orders-detail.html">
                                            Orders Detail
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-customers-list.html">
                                            Customers List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-customers-form.html">
                                            Customers Form
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="mailbox-folder.html">
                                    <span class="float-right badge badge-primary">182</span>
                                    <i class="bx bx-envelope" aria-hidden="true"></i>
                                    <span>Mailbox</span>
                                </a>
                            </li>
                            <li class="nav-parent nav-expanded nav-active">
                                <a href="#">
                                    <i class="bx bx-layout" aria-hidden="true"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="index.html">
                                            Landing Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-default.html">
                                            Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-modern.html">
                                            Modern
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Boxed
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-boxed.html">
                                                    Static Header
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-boxed-fixed-header.html">
                                                    Fixed Header
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Horizontal Menu Header
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-header-menu.html">
                                                    Pills
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-header-menu-stripe.html">
                                                    Stripe
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-header-menu-top-line.html">
                                                    Top Line
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="layouts-dark.html">
                                            Dark
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark-header.html">
                                            Dark Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-two-navigations.html">
                                            Two Navigations
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Tab Navigation
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-tab-navigation-dark.html">
                                                    Tab Navigation Dark
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-tab-navigation.html">
                                                    Tab Navigation Light
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-tab-navigation-boxed.html">
                                                    Tab Navigation Boxed
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="layouts-light-sidebar.html">
                                            Light Sidebar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-left-sidebar-collapsed.html">
                                            Left Sidebar Collapsed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-left-sidebar-scroll.html">
                                            Left Sidebar Scroll
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Left Sidebar Big Icons
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-left-sidebar-big-icons.html">
                                                    Left Sidebar Big Icons Dark
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-left-sidebar-big-icons-light.html">
                                                    Left Sidebar Big Icons Light
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent nav-expanded nav-active">
                                        <a>
                                            Left Sidebar Panel
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-left-sidebar-panel.html">
                                                    Left Sidebar Panel Dark
                                                </a>
                                            </li>
                                            <li class="nav-active">
                                                <a href="layouts-left-sidebar-panel-light.html">
                                                    Left Sidebar Panel Light
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Left Sidebar Sizes
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="layouts-sidebar-sizes-xs.html">
                                                    Left Sidebar XS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-sidebar-sizes-sm.html">
                                                    Left Sidebar SM
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts-sidebar-sizes-md.html">
                                                    Left Sidebar MD
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="layouts-square-borders.html">
                                            Square Borders
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-file" aria-hidden="true"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="pages-signup.html">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-signin.html">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-recover-password.html">
                                            Recover Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">
                                            Locked Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-user-profile.html">
                                            User Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-session-timeout.html">
                                            Session Timeout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-calendar.html">
                                            Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">
                                            Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-media-gallery.html">
                                            Media Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-blank.html">
                                            Blank Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">
                                            404
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">
                                            500
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-log-viewer.html">
                                            Log Viewer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-search-results.html">
                                            Search Results
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-cube" aria-hidden="true"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="ui-elements-typography.html">
                                            Typography
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a href="#">
                                            Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="ui-elements-icons-elusive.html">
                                                    Elusive
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-icons-font-awesome.html">
                                                    Font Awesome
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-icons-line-icons.html">
                                                    Line Icons
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-icons-meteocons.html">
                                                    Meteocons
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-icons-box-icons.html">
                                                    Box Icons
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="ui-elements-tabs.html">
                                            Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-cards.html">
                                            Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-widgets.html">
                                            Widgets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-portlets.html">
                                            Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-buttons.html">
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-alerts.html">
                                            Alerts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-notifications.html">
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-modals.html">
                                            Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-lightbox.html">
                                            Lightbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-progressbars.html">
                                            Progress Bars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-sliders.html">
                                            Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-carousels.html">
                                            Carousels
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-accordions.html">
                                            Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-toggles.html">
                                            Toggles
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-nestable.html">
                                            Nestable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-tree-view.html">
                                            Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-scrollable.html">
                                            Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-grid-system.html">
                                            Grid System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-charts.html">
                                            Charts
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a href="#">
                                            Animations <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="ui-elements-animations-appear.html">
                                                    Appear
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-animations-hover.html">
                                                    Hover
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a href="#">
                                            Loading <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="ui-elements-loading-overlay.html">
                                                    Overlay
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ui-elements-loading-progress.html">
                                                    Progress
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="ui-elements-extra.html">
                                            Extra
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-map" aria-hidden="true"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="maps-google-maps.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-google-maps-builder.html">
                                            Map Builder
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">
                                            Vector
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="extra-ajax-made-easy.html">
                                    <i class="bx bx-loader-circle" aria-hidden="true"></i>
                                    <span>Ajax</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Forms</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="forms-basic.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-advanced.html">
                                            Advanced
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-validation.html">
                                            Validation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-layouts.html">
                                            Layouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard.html">
                                            Wizard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-code-editor.html">
                                            Code Editor
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-table" aria-hidden="true"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="tables-basic.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-advanced.html">
                                            Advanced
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-responsive.html">
                                            Responsive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-editable.html">
                                            Editable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-ajax.html">
                                            Ajax
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-pricing.html">
                                            Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="bx bx-collection" aria-hidden="true"></i>
                                    <span>Menu Levels</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a>
                                            First Level
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a href="#">
                                            Second Level
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a>
                                                    Second Level Link #1
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    Second Level Link #2
                                                </a>
                                            </li>
                                            <li class="nav-parent">
                                                <a href="#">
                                                    Third Level
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a>
                                                            Third Level Link #1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a>
                                                            Third Level Link #2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
                                    <i class="bx bx-window-alt" aria-hidden="true"></i>
                                    <span>Front-End <em class="not-included">(Not Included)</em></span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-changelog.html">
                                    <i class="bx bx-book-alt" aria-hidden="true"></i>
                                    <span>Changelog</span>
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <hr class="separator" />

                    <div class="sidebar-widget widget-tasks">
                        <div class="widget-header">
                            <h6>Projects</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Porto HTML5 Template</a></li>
                                <li><a href="#">Tucson Template</a></li>
                                <li><a href="#">Porto Admin</a></li>
                            </ul>
                        </div>
                    </div>

                    <hr class="separator" />

                    <div class="sidebar-widget widget-stats">
                        <div class="widget-header">
                            <h6>Company Stats</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <span class="stats-title">Stat 1</span>
                                    <span class="stats-complete">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="stats-title">Stat 2</span>
                                    <span class="stats-complete">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="stats-title">Stat 3</span>
                                    <span class="stats-complete">2%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                            <span class="sr-only">2% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <script>
                    // Maintain Scroll Position
                    if (typeof localStorage !== 'undefined') {
                        if (localStorage.getItem('sidebar-left-position') !== null) {
                            var initialPosition = localStorage.getItem('sidebar-left-position'),
                                sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                            sidebarLeft.scrollTop = initialPosition;
                        }
                    }
                </script>


            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
        @section('contenido')

        @show
        </section>
    </div>

    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close d-md-none">
                    Collapse <i class="fas fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                    <div class="sidebar-widget widget-calendar">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin="dark"></div>

                        <ul>
                            <li>
                                <time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-friends">
                        <h6>Friends</h6>
                        <ul>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>

</section>

<!-- Vendor -->
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="master/style-switcher/style.switcher.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/nanoscroller/nanoscroller.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="vendor/jquery-ui/jquery-ui.js"></script>
<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="vendor/jquery-appear/jquery.appear.js"></script>
<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
<script src="vendor/flot/jquery.flot.pie.js"></script>
<script src="vendor/flot/jquery.flot.categories.js"></script>
<script src="vendor/flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="vendor/raphael/raphael.js"></script>
<script src="vendor/morris/morris.js"></script>
<script src="vendor/gauge/gauge.js"></script>
<script src="vendor/snap.svg/snap.svg.js"></script>
<script src="vendor/liquid-meter/liquid.meter.js"></script>
<script src="vendor/jqvmap/jquery.vmap.js"></script>
<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<script src="vendor/summernote/summernote-bs4.js"></script>
<!--(remove-empty-lines-end)-->

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>
<!-- Analytics to Track Preview Website -->

<!-- Examples -->
<script src="js/examples/examples.dashboard.js"></script>

</body>
</html>
