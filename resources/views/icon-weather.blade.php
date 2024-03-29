<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Weather Icon</title>

    <!--google font-->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <header class="app-header navbar">

        <!--brand start-->
        <div class="navbar-brand">
            <a class="" href="index.html">
                <img src="assets/img/logo-dark.png" srcset="assets/img/logo-dark@2x.png 2x" alt="">
            </a>
        </div>
        <!--brand end-->

        <!--left side nav toggle start-->
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
            </li>
            <li class="nav-item d-md-down-none-">
                <!--search start-->
                <a class="nav-link search-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-search"></i>
                </a>
                <div class="search-container">
                    <div class="outer-close search-toggle">
                        <a class="close"><span></span></a>
                    </div>

                    <div class="container search-wrap">
                        <div class="row">
                            <div class="col text-left">
                                <a class="" href="#">
                                    <img src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="">
                                </a>
                                <form class="mt-3">
                                    <div class="form-row align-items-center">
                                        <input type="text" class="form-control custom-search"  placeholder="Search">
                                    </div>
                                </form>

                                <div class="search-list">
                                    <h5 class="text-white mb-4">Search Results</h5>
                                    <ul class="list-unstyled ">
                                        <li>
                                            <a href="#" class="text-white">
                                                <span class="bg-danger">
                                                    S
                                                </span>
                                                Simply dummy text of the printing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-white">
                                                <span class="bg-success">
                                                    C
                                                </span>
                                                Contrary Ipsum is not simply random text
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-white">
                                                <span class="bg-info">
                                                    <i class="icon-basket-loaded "></i>
                                                </span>
                                                Ipsum has been industry's standard dummy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--search end-->
            </li>
        </ul>
        <!--left side nav toggle end-->

        <!--right side nav start-->
        <ul class="nav navbar-nav ml-auto">


            <li class="nav-item dropdown dropdown-slide d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-bell"></i>
                    <span class="badge badge-danger notification-alarm"> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header pb-3">
                        <strong>You have 6 Notifications</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <i class="icon-basket-loaded text-primary"></i> New order
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-user-follow text-success"></i> New registered member
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class=" icon-layers text-danger"></i> Server error report
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class=" icon-note text-warning"></i> Database report
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class=" icon-present text-info"></i> Order confirmation
                    </a>

                </div>
            </li>
            <li class="nav-item dropdown dropdown-slide d-md-down-none">
                <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class=" ti-view-grid"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-ql-gird">

                    <div class="dropdown-header pb-3">
                        <strong>Quick Links</strong>
                    </div>

                    <div class="quick-links-grid">
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-files text-primary"></i>
                            <span class="ql-grid-title">New Task</span>
                        </a>
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-check-box text-success"></i>
                            <span class="ql-grid-title">Assign Task</span>
                        </a>
                    </div>
                    <div class="quick-links-grid">
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-truck text-warning"></i>
                            <span class="ql-grid-title">Create Orders</span>
                        </a>
                        <a href="#" class="ql-grid-item">
                            <i class=" icon-layers text-info"></i>
                            <span class="ql-grid-title">New Orders</span>
                        </a>
                    </div>

                </div>
            </li>

            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/user.png" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="assets/img/user.png" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">John Doe</h5>
                                <span>john@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href="#"><i class=" ti-reload"></i> Activity</a>
                    <a class="dropdown-item" href="#"><i class=" ti-email"></i> Message</a>
                    <a class="dropdown-item" href="#"><i class=" ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Projects <span class="badge badge-primary">4</span> </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#"><i class=" ti-lock"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class=" ti-unlock"></i> Logout</a>
                </div>
            </li>

            <!--right side toggler-->
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-rightside-toggler" type="button"><i class="icon-options-vertical"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler right-sidebar-toggler" href="#"><i class="icon-options-vertical"></i></a>
            </li>
        </ul>

        <!--right side nav end-->
    </header>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <div class="left-sidebar">
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="index.html">Dashboard</a></li>
                            <li><a  href="dashboard-2.html">Dashboard 2</a></li>
                            <li><a  href="dashboard-3.html">Dashboard 3</a></li>
                            <li><a  href="dashboard-4.html">Dashboard 4</a></li>
                        </ul>
                    </li>

                    <li class="nav-title">
                        <h5 class="text-uppercase">Components</h5>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" ti-layers"></i>
                            <span>BS Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="alert.html">Alerts</a></li>
                            <li><a  href="buttons.html">Buttons</a></li>
                            <li><a  href="cards.html">Cards</a></li>
                            <li><a  href="dropdown.html">Dropdowns</a></li>
                            <li><a  href="grid.html">Grids</a></li>
                            <li><a  href="lists.html">Lists</a></li>
                            <li><a  href="modal.html">Modals</a></li>
                            <li><a  href="progress.html">Progress</a></li>
                            <li><a  href="popover-tooltips.html">Popover & Tooltips</a></li>
                            <li><a  href="typography.html">Typography</a></li>
                            <li><a  href="tabs.html">Tabs</a></li>
                            <li><a  href="tree.html">Tree</a></li>
                            <li><a  href="toastr.html">Toastr Notification</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="ti-archive"></i>
                            <span>Portlets</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="portlet-base.html">Portlets Base</a></li>
                            <li><a  href="portlet-advanced.html">Portlets Advanced</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="active">
                            <i class=" ti-pencil-alt"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="icon-font-awesome.html">Fontawesome Icons</a></li>
                            <li><a  href="icon-themify.html">Themify Icons</a></li>
                            <li><a  href="icon-simple-line.html">Simple line Icons</a></li>
                            <li class="active"><a  href="icon-weather.html">Weather Icons</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" ti-blackboard"></i>
                            <span>Widgets </span> <span class="badge badge-primary ml-2">2</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="widgets-base.html">Widgets Base</a></li>
                            <li><a  href="widgets-chart.html">Widgets Chart</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-calendar"></i>
                            <span>Calendar </span>
                        </a>
                        <ul class="sub">
                            <li><a  href="calendar-basic.html">Basic Calendar</a></li>
                            <li><a  href="calendar-external-events.html">External Events Calendar</a></li>
                            <li><a  href="calendar-list.html">List Calendar</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" icon-speech"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li class="sub-menu">
                                <a  href="#">Form Control</a>
                                <ul class="sub">
                                    <li><a  href="form-basic-input.html">Basic Input</a></li>
                                    <li><a  href="form-input-group.html">Input Group</a></li>
                                    <li><a  href="form-checkbox-radio.html">Checkbox & Radio</a></li>
                                    <li><a  href="form-switch.html">Switch</a></li>
                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a  href="#">Pickers</a>
                                <ul class="sub">
                                    <li><a  href="date-picker.html">Date Picker</a></li>
                                    <li><a  href="datetime-picker.html">Datetime & Time Picker</a></li>
                                    <li><a  href="color-picker.html">Color Picker</a></li>
                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a  href="#">Advanced Form</a>
                                <ul class="sub">
                                    <li><a  href="form-touchspin.html">Touchpin</a></li>
                                    <li><a  href="form-select2.html">Select2</a></li>
                                    <li><a  href="form-input-mask.html">Input Mask</a></li>
                                    <li><a  href="form-multiple-select.html"> Multiple Select</a></li>
                                    <li><a  href="form-dropzone.html"> Dropzone</a></li>
                                    <li><a  href="form-ion-range-slider.html"> Ion Range Slider</a></li>
                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a  href="#">Editos</a>
                                <ul class="sub">
                                    <li><a  href="editor-summernote.html">Summernote</a></li>
                                    <li><a  href="editor-markdown.html">Markdown</a></li>
                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a  href="#">Form Validation</a>
                                <ul class="sub">
                                    <li><a  href="form-validation-basic.html">Basic Validation</a></li>
                                    <li><a  href="form-validation-jquery.html">jQuery Validation</a></li>
                                    <li><a  href="form-wizard.html">Form Wizard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="table-basic.html">Basic Table</a></li>
                            <li class="sub-menu">
                                <a  href="#">Data Tables</a>
                                <ul class="sub">
                                    <li><a  href="table-datatable.html">Basic Datatable</a></li>
                                    <li><a  href="table-datatable-show-hide.html">Toggle Col Datatable</a></li>
                                    <li><a  href="table-datatable-ajax.html">Ajax Datatable</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" ti-pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="flot-chart.html">Flot Charts</a></li>
                            <li><a  href="echart.html">eCharts</a></li>
                            <li><a  href="morris-chart.html">Morris Charts</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" icon-equalizer"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="profile.html">Profile</a></li>
                            <li><a  href="search-result.html">Search Result</a></li>
                            <li><a  href="invoice.html">Invoice</a></li>
                            <li class="sub-menu">
                                <a  href="#">Sign In</a>
                                <ul class="sub">
                                    <li><a  href="signin.html">Basic Sign In</a></li>
                                    <li><a  href="signin-validate.html">jQuery Validate Sign In</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a  href="#">Sign Up</a>
                                <ul class="sub">
                                    <li><a  href="signup.html">Basic Sign Up</a></li>
                                    <li><a  href="signup-validate.html">jQuery Validate Sign Up</a></li>
                                </ul>
                            </li>
                            <li><a  href="lock-screen.html">Lock Screen</a></li>
                            <li><a  href="404-error.html">404 Error</a></li>
                        </ul>
                    </li>

                    <li class="nav-title">
                        <h5 class="text-uppercase">Layouts & Multi Level Menu</h5>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" ti-layout"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="layout-blank.html">Blank Page</a></li>
                            <li><a  href="layout-box-container.html">Box Container</a></li>
                            <li><a  href="layout-leftside-hidden.html">Leftside Hidden</a></li>
                            <li><a  href="layout-leftside-hidden-rightside-open.html">Left Hidden Rightside Open</a></li>
                            <li><a  href="layout-bothside-open.html">Bothside Open</a></li>
                            <li><a  href="layout-rightside-overlay.html">Rightside Overlay</a></li>
                            <li><a  href="layout-rightside-pushed.html">Rightside Pushed</a></li>
                            <li><a  href="layout-header-leftside-not-fixed.html">Header & Leftside not Fixed</a></li>
                            <li><a  href="layout-light-left-nav.html">Left Nav Light</a></li>
                            <li><a  href="layout-light-left-nav-alt.html">Left Nav Light Alt</a></li>
                        </ul>
                    </li>

                    <!--multi level menu start-->
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" ti-paint-bucket"></i>
                            <span>Multi level Menu</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 1</a></li>
                            <li class="sub-menu">
                                <a  href="#">Menu Item 2</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                    <li class="sub-menu">
                                        <a  href="javascript:;">Menu Item 3</a>
                                        <ul class="sub">
                                            <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                            <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--multi level menu end-->

                    <li class="nav-title">
                        <h5 class="text-uppercase">Other Projects</h5>
                    </li>

                    <li>
                        <a href="index.html">
                            <i class="fa fa-dot-circle-o text-danger"></i>
                            <span>Multi-Purpose Website</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.html">
                            <i class="fa fa-dot-circle-o text-primary"></i>
                            <span>Email Template</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="fa fa-dot-circle-o text-warning"></i>
                            <span>Landing Website</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> Weather Icon
                    <small>icons font</small>
                </h4>
                <!--<ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">-->
                    <!--<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>-->
                    <!--<li class="breadcrumb-item active">Blank Page</li>-->
                <!--</ol>-->
            </div>
            <!--page title end-->


            <div class="container-fluid">

                <!-- state start-->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-shadow mb-4 ">
                            <div class="card-header">
                                <div class="card-title">
                                    Weather Icon
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="weather-icon-box">
                                    <h6 class="mb-4 mt-4">25 New 2.0 Icons!</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-cloudy-high"></i> wi
                                            wi-day-cloudy-high
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moonrise"></i>wi
                                            wi-moonrise
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-volcano"></i>wi
                                            wi-volcano
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-light-wind"></i>wi
                                            wi-day-light-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moonset"></i>wi
                                            wi-moonset
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-flood"></i>wi wi-flood
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-train"></i>wi wi-train
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sleet"></i>wi
                                            wi-day-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-sleet"></i>wi
                                            wi-night-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sandstorm"></i>wi
                                            wi-sandstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-small-craft-advisory"></i>wi wi-small-craft-advisory
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-haze"></i>wi
                                            wi-day-haze
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-sleet"></i>wi
                                            wi-night-alt-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-tsunami"></i>wi
                                            wi-tsunami
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-gale-warning"></i>wi
                                            wi-gale-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-cloudy-high"></i>wi
                                            wi-night-cloudy-high
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-raindrop"></i>wi
                                            wi-raindrop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-earthquake"></i>wi
                                            wi-earthquake
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-storm-warning"></i>wi
                                            wi-storm-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-partly-cloudy"></i>wi wi-night-alt-partly-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-barometer"></i>wi
                                            wi-barometer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-fire"></i>wi wi-fire
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-hurricane-warning"></i>wi
                                            wi-hurricane-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sleet"></i>wi wi-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-humidity"></i>wi
                                            wi-humidity
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box">
                                    <h6 class="mb-4 mt-4">Daytime Icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sunny"></i> wi
                                            wi-day-sunny
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-cloudy"></i> wi
                                            wi-day-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-cloudy-gusts"></i>
                                            wi wi-day-cloudy-gusts
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-cloudy-windy"></i>
                                            wi wi-day-cloudy-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-fog"></i> wi
                                            wi-day-fog
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-hail"></i> wi
                                            wi-day-hail
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-haze"></i> wi
                                            wi-day-haze
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-lightning"></i> wi
                                            wi-day-lightning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-rain"></i> wi
                                            wi-day-rain
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-rain-mix"></i> wi
                                            wi-day-rain-mix
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-rain-wind"></i> wi
                                            wi-day-rain-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-showers"></i> wi
                                            wi-day-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sleet"></i> wi
                                            wi-day-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sleet-storm"></i> wi
                                            wi-day-sleet-storm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-snow"></i> wi
                                            wi-day-snow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-day-snow-thunderstorm"></i> wi wi-day-snow-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-snow-wind"></i> wi
                                            wi-day-snow-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sprinkle"></i> wi
                                            wi-day-sprinkle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-storm-showers"></i>
                                            wi wi-day-storm-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-sunny-overcast"></i>
                                            wi wi-day-sunny-overcast
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-thunderstorm"></i>
                                            wi wi-day-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-windy"></i> wi
                                            wi-day-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-solar-eclipse"></i> wi
                                            wi-solar-eclipse
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-hot"></i> wi wi-hot
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-cloudy-high"></i> wi
                                            wi-day-cloudy-high
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-day-light-wind"></i> wi
                                            wi-day-light-wind
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box">
                                    <h6 class="mb-4 mt-4">Night Time Icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-clear"></i> wi
                                            wi-night-clear
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-cloudy"></i>
                                            wi wi-night-alt-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-cloudy-gusts"></i> wi wi-night-alt-cloudy-gusts
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-cloudy-windy"></i> wi wi-night-alt-cloudy-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-hail"></i> wi
                                            wi-night-alt-hail
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-lightning"></i> wi wi-night-alt-lightning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-rain"></i> wi
                                            wi-night-alt-rain
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-rain-mix"></i>
                                            wi wi-night-alt-rain-mix
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-rain-wind"></i> wi wi-night-alt-rain-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-showers"></i>
                                            wi wi-night-alt-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-sleet"></i> wi
                                            wi-night-alt-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-sleet-storm"></i> wi wi-night-alt-sleet-storm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-snow"></i> wi
                                            wi-night-alt-snow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-snow-thunderstorm"></i> wi
                                            wi-night-alt-snow-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-snow-wind"></i> wi wi-night-alt-snow-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-alt-sprinkle"></i>
                                            wi wi-night-alt-sprinkle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-storm-showers"></i> wi wi-night-alt-storm-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-thunderstorm"></i> wi wi-night-alt-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-cloudy"></i> wi
                                            wi-night-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-cloudy-gusts"></i>
                                            wi wi-night-cloudy-gusts
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-cloudy-windy"></i>
                                            wi wi-night-cloudy-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-fog"></i> wi
                                            wi-night-fog
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-hail"></i> wi
                                            wi-night-hail
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-lightning"></i> wi
                                            wi-night-lightning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-partly-cloudy"></i> wi wi-night-partly-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-rain"></i> wi
                                            wi-night-rain
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-rain-mix"></i> wi
                                            wi-night-rain-mix
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-rain-wind"></i> wi
                                            wi-night-rain-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-showers"></i> wi
                                            wi-night-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-sleet"></i> wi
                                            wi-night-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-sleet-storm"></i>
                                            wi wi-night-sleet-storm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-snow"></i> wi
                                            wi-night-snow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-snow-thunderstorm"></i> wi wi-night-snow-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-snow-wind"></i> wi
                                            wi-night-snow-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-sprinkle"></i> wi
                                            wi-night-sprinkle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-storm-showers"></i> wi wi-night-storm-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-thunderstorm"></i>
                                            wi wi-night-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-lunar-eclipse"></i> wi
                                            wi-lunar-eclipse
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-stars"></i> wi wi-stars
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-storm-showers"></i> wi
                                            wi-storm-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-thunderstorm"></i> wi
                                            wi-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-cloudy-high"></i> wi wi-night-alt-cloudy-high
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-night-cloudy-high"></i>
                                            wi wi-night-cloudy-high
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-night-alt-partly-cloudy"></i> wi wi-night-alt-partly-cloudy
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box ">
                                    <h6 class="mb-4 mt-4">Neutral icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloud"></i> wi wi-cloud
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloudy"></i> wi
                                            wi-cloudy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloudy-gusts"></i> wi
                                            wi-cloudy-gusts
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloudy-windy"></i> wi
                                            wi-cloudy-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-fog"></i> wi wi-fog
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-hail"></i> wi wi-hail
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-rain"></i> wi wi-rain
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-rain-mix"></i> wi
                                            wi-rain-mix
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-rain-wind"></i> wi
                                            wi-rain-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-showers"></i> wi
                                            wi-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sleet"></i> wi wi-sleet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-snow"></i> wi wi-snow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sprinkle"></i> wi
                                            wi-sprinkle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-storm-showers"></i> wi
                                            wi-storm-showers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-thunderstorm"></i> wi
                                            wi-thunderstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-snow-wind"></i> wi
                                            wi-snow-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-snow"></i> wi wi-snow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-smog"></i> wi wi-smog
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-smoke"></i> wi wi-smoke
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-lightning"></i> wi
                                            wi-lightning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-raindrops"></i> wi
                                            wi-raindrops
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-raindrop"></i> wi
                                            wi-raindrop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-dust"></i> wi wi-dust
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-snowflake-cold"></i> wi
                                            wi-snowflake-cold
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-windy"></i> wi wi-windy
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-strong-wind"></i> wi
                                            wi-strong-wind
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sandstorm"></i> wi
                                            wi-sandstorm
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-earthquake"></i> wi
                                            wi-earthquake
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-fire"></i> wi wi-fire
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-flood"></i> wi wi-flood
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-meteor"></i> wi
                                            wi-meteor
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-tsunami"></i> wi
                                            wi-tsunami
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-volcano"></i> wi
                                            wi-volcano
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-hurricane"></i> wi
                                            wi-hurricane
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-tornado"></i> wi
                                            wi-tornado
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-small-craft-advisory"></i> wi wi-small-craft-advisory
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-gale-warning"></i> wi
                                            wi-gale-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-storm-warning"></i> wi
                                            wi-storm-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-hurricane-warning"></i>
                                            wi wi-hurricane-warning
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-wind-direction"></i> wi
                                            wi-wind-direction
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box ">
                                    <h6 class="mb-4 mt-4">Moon Phase Icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-new"></i> wi
                                            wi-moon-new
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-first-quarter"></i>
                                            wi wi-moon-first-quarter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-1"></i> wi wi-moon-waxing-gibbous-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-2"></i> wi wi-moon-waxing-gibbous-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-3"></i> wi wi-moon-waxing-gibbous-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-4"></i> wi wi-moon-waxing-gibbous-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-5"></i> wi wi-moon-waxing-gibbous-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waxing-gibbous-6"></i> wi wi-moon-waxing-gibbous-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-full"></i> wi
                                            wi-moon-full
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-1"></i> wi wi-moon-waning-gibbous-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-2"></i> wi wi-moon-waning-gibbous-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-3"></i> wi wi-moon-waning-gibbous-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-4"></i> wi wi-moon-waning-gibbous-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-5"></i> wi wi-moon-waning-gibbous-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-gibbous-6"></i> wi wi-moon-waning-gibbous-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-third-quarter"></i>
                                            wi wi-moon-third-quarter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-1"></i> wi wi-moon-waning-crescent-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-2"></i> wi wi-moon-waning-crescent-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-3"></i> wi wi-moon-waning-crescent-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-4"></i> wi wi-moon-waning-crescent-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-5"></i> wi wi-moon-waning-crescent-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-waning-crescent-6"></i> wi wi-moon-waning-crescent-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-alt-new"></i> wi
                                            wi-moon-alt-new
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-first-quarter"></i> wi wi-moon-alt-first-quarter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-1"></i> wi
                                            wi-moon-alt-waxing-gibbous-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-2"></i> wi
                                            wi-moon-alt-waxing-gibbous-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-3"></i> wi
                                            wi-moon-alt-waxing-gibbous-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-4"></i> wi
                                            wi-moon-alt-waxing-gibbous-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-5"></i> wi
                                            wi-moon-alt-waxing-gibbous-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waxing-gibbous-6"></i> wi
                                            wi-moon-alt-waxing-gibbous-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moon-alt-full"></i> wi
                                            wi-moon-alt-full
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-1"></i> wi
                                            wi-moon-alt-waning-gibbous-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-2"></i> wi
                                            wi-moon-alt-waning-gibbous-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-3"></i> wi
                                            wi-moon-alt-waning-gibbous-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-4"></i> wi
                                            wi-moon-alt-waning-gibbous-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-5"></i> wi
                                            wi-moon-alt-waning-gibbous-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-gibbous-6"></i> wi
                                            wi-moon-alt-waning-gibbous-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-third-quarter"></i> wi wi-moon-alt-third-quarter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-1"></i> wi
                                            wi-moon-alt-waning-crescent-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-2"></i> wi
                                            wi-moon-alt-waning-crescent-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-3"></i> wi
                                            wi-moon-alt-waning-crescent-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-4"></i> wi
                                            wi-moon-alt-waning-crescent-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-5"></i> wi
                                            wi-moon-alt-waning-crescent-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-moon-alt-waning-crescent-6"></i> wi
                                            wi-moon-alt-waning-crescent-6
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box ">
                                    <h6 class="mb-4 mt-4">Time Icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-1"></i> wi
                                            wi-time-1
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-2"></i> wi
                                            wi-time-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-3"></i> wi
                                            wi-time-3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-4"></i> wi
                                            wi-time-4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-5"></i> wi
                                            wi-time-5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-6"></i> wi
                                            wi-time-6
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-7"></i> wi
                                            wi-time-7
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-8"></i> wi
                                            wi-time-8
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-9"></i> wi
                                            wi-time-9
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-10"></i> wi
                                            wi-time-10
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-11"></i> wi
                                            wi-time-11
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-time-12"></i> wi
                                            wi-time-12
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box">
                                    <h6 class="mb-4 mt-4">Directional Arrow</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-up"></i> wi
                                            wi-direction-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-up-right"></i>
                                            wi wi-direction-up-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-right"></i> wi
                                            wi-direction-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-direction-down-right"></i> wi wi-direction-down-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-down"></i> wi
                                            wi-direction-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-direction-down-left"></i> wi wi-direction-down-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-left"></i> wi
                                            wi-direction-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-direction-up-left"></i>
                                            wi wi-direction-up-left
                                        </div>
                                    </div>
                                </div>

                                <div class="weather-icon-box">
                                    <h6 class="mb-4 mt-4">Other Icons</h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-alien"></i> wi wi-alien
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-celsius"></i> wi
                                            wi-celsius
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-fahrenheit"></i> wi
                                            wi-fahrenheit
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-degrees"></i> wi
                                            wi-degrees
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-thermometer"></i> wi
                                            wi-thermometer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-thermometer-exterior"></i> wi wi-thermometer-exterior
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="wi wi-thermometer-internal"></i> wi wi-thermometer-internal
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloud-down"></i> wi
                                            wi-cloud-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloud-up"></i> wi
                                            wi-cloud-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-cloud-refresh"></i> wi
                                            wi-cloud-refresh
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-horizon"></i> wi
                                            wi-horizon
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-horizon-alt"></i> wi
                                            wi-horizon-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sunrise"></i> wi
                                            wi-sunrise
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-sunset"></i> wi
                                            wi-sunset
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moonrise"></i> wi
                                            wi-moonrise
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-moonset"></i> wi
                                            wi-moonset
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-refresh"></i> wi
                                            wi-refresh
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-refresh-alt"></i> wi
                                            wi-refresh-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-umbrella"></i> wi
                                            wi-umbrella
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-barometer"></i> wi
                                            wi-barometer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-humidity"></i> wi
                                            wi-humidity
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-na"></i> wi wi-na</div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="wi wi-train"></i> wi wi-train
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--main contents end-->

        <!--right sidebar start-->
        <aside class="right-sidebar">

            <!--notification widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Notification</h3>

                <div class="notification-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="assets/img/n1.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Diverse Ltd.</a>
                                <small class="text-muted">2 days ago</small>
                                <p><a href="#">www.diverse-test.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="assets/img/n3.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Black Friday Discount Offer</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Nam libero tempore cum soluta nobis est eligendi.</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="assets/img/n2.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Task Failed</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Error: Invalid command found ... after [this class]</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="assets/img/n4.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">John Doe</a>
                                <small class="text-muted">3 days ago</small>
                                <p>Send you a contact request.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!--notification widget end-->

            <!--Active log widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Activity Log</h3>
                <div class="baseline baseline-border">
                    <div class="baseline-list">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>John Tasi</strong></a> Prepare for the Meeting <span class="badge badge-pill badge-success">status</span></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list baseline-border baseline-primary">
                        <div class="baseline-info">
                            <div>Video conference to client</div>
                            <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-success">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Tnisha</strong></a> Submit a blog post <a href="#" class="">best admin template in 2018.</a></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-warning">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>New Request</strong></a> 10 user request to approve or remove</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-info">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Mark Henry</strong></a> added your friend list now</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Active log widget end-->

            <!--stock widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Stocks</h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>DOW</td>
                            <td>1999</td>
                            <td>
                                <span class="badge badge-pill badge-primary">+ 0.10%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>AAPL</td>
                            <td>1299</td>
                            <td>
                                <span class="badge badge-pill badge-success">- 0.50%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>SBUX</td>
                            <td>1099</td>
                            <td>
                                <span class="badge badge-pill badge-danger">+ 0.20%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>NKE</td>
                            <td>2199</td>
                            <td>
                                <span class="badge badge-pill badge-warning">+ 1.25%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>YOO</td>
                            <td>999</td>
                            <td>
                                <span class="badge badge-pill badge-info">+ 3.00%</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!--stock widget end-->

        </aside>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <footer class="app-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    2018 © Diverse Admin by MHS
                </div>
                <div class="col-4">
                    <a href="#" class="float-right back-top">
                        <i class=" ti-arrow-circle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--===========footer end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
    <script src="assets/vendor/lobicard/js/lobicard.js"></script>
    <script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/vendor/jquery.scrollTo.min.js"></script>



    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="assets/js/scripts.js"></script>

</body>
</html>
