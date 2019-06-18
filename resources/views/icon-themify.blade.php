<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Themify Icon</title>

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
                            <li class="active"><a  href="icon-themify.html">Themify Icons</a></li>
                            <li><a  href="icon-simple-line.html">Simple line Icons</a></li>
                            <li><a  href="icon-weather.html">Weather Icons</a></li>
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
                <h4 class="mb-0"> Themify Icon
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
                                    Themify Icon fonts
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="themify-icon-list ">
                                    <h6 class="mb-4 mt-4">Arrows & Direction Icons </h6>

                                    <div class="row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-arrow-up"></i>
                                            ti-arrow-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-arrow-right"></i>
                                            ti-arrow-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-arrow-left"></i>
                                            ti-arrow-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-arrow-down"></i>
                                            ti-arrow-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrows-vertical"></i> ti-arrows-vertical
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrows-horizontal"></i> ti-arrows-horizontal
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-angle-up"></i>
                                            ti-angle-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-angle-right"></i>
                                            ti-angle-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-angle-left"></i>
                                            ti-angle-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-angle-down"></i>
                                            ti-angle-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-angle-double-up"></i> ti-angle-double-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-angle-double-right"></i> ti-angle-double-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-angle-double-left"></i> ti-angle-double-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-angle-double-down"></i> ti-angle-double-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-move"></i> ti-move
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-fullscreen"></i>
                                            ti-fullscreen
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-top-right"></i> ti-arrow-top-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-top-left"></i> ti-arrow-top-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-circle-up"></i> ti-arrow-circle-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-circle-right"></i> ti-arrow-circle-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-circle-left"></i> ti-arrow-circle-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-arrow-circle-down"></i> ti-arrow-circle-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-arrows-corner"></i>
                                            ti-arrows-corner
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-split-v"></i>
                                            ti-split-v
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-split-v-alt"></i>
                                            ti-split-v-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-split-h"></i>
                                            ti-split-h
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-hand-point-up"></i>
                                            ti-hand-point-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-hand-point-right"></i> ti-hand-point-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-hand-point-left"></i> ti-hand-point-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-hand-point-down"></i> ti-hand-point-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-back-right"></i>
                                            ti-back-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-back-left"></i>
                                            ti-back-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-exchange-vertical"></i> ti-exchange-vertical
                                        </div>
                                    </div>

                                    <h6 class="mb-4 mt-4">Web App Icons</h6>

                                    <div class=" row">
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-wand"></i> ti-wand
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-save"></i> ti-save
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-save-alt"></i>
                                            ti-save-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-direction"></i>
                                            ti-direction
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-direction-alt"></i>
                                            ti-direction-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-user"></i> ti-user
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-link"></i> ti-link
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-unlink"></i>
                                            ti-unlink
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-trash"></i>
                                            ti-trash
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-target"></i>
                                            ti-target
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-tag"></i> ti-tag
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-desktop"></i>
                                            ti-desktop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-tablet"></i>
                                            ti-tablet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-mobile"></i>
                                            ti-mobile
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-email"></i>
                                            ti-email
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-star"></i> ti-star
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-spray"></i>
                                            ti-spray
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-signal"></i>
                                            ti-signal
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shopping-cart"></i>
                                            ti-shopping-cart
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-shopping-cart-full"></i> ti-shopping-cart-full
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-settings"></i>
                                            ti-settings
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-search"></i>
                                            ti-search
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-zoom-in"></i>
                                            ti-zoom-in
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-zoom-out"></i>
                                            ti-zoom-out
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-cut"></i> ti-cut
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ruler"></i>
                                            ti-ruler
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ruler-alt-2"></i>
                                            ti-ruler-alt-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ruler-pencil"></i>
                                            ti-ruler-pencil
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ruler-alt"></i>
                                            ti-ruler-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bookmark"></i>
                                            ti-bookmark
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bookmark-alt"></i>
                                            ti-bookmark-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-reload"></i>
                                            ti-reload
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-plus"></i> ti-plus
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-minus"></i>
                                            ti-minus
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-close"></i>
                                            ti-close
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pin"></i> ti-pin
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pencil"></i>
                                            ti-pencil
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pencil-alt"></i>
                                            ti-pencil-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-paint-roller"></i>
                                            ti-paint-roller
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-paint-bucket"></i>
                                            ti-paint-bucket
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-na"></i> ti-na
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-medall"></i>
                                            ti-medall
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-medall-alt"></i>
                                            ti-medall-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-marker"></i>
                                            ti-marker
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-marker-alt"></i>
                                            ti-marker-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-lock"></i> ti-lock
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-unlock"></i>
                                            ti-unlock
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-location-arrow"></i> ti-location-arrow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout"></i>
                                            ti-layout
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layers"></i>
                                            ti-layers
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layers-alt"></i>
                                            ti-layers-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-key"></i> ti-key
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-image"></i>
                                            ti-image
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-heart"></i>
                                            ti-heart
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-heart-broken"></i>
                                            ti-heart-broken
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-hand-stop"></i>
                                            ti-hand-stop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-hand-open"></i>
                                            ti-hand-open
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-hand-drag"></i>
                                            ti-hand-drag
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-flag"></i> ti-flag
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-flag-alt"></i>
                                            ti-flag-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-flag-alt-2"></i>
                                            ti-flag-alt-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-eye"></i> ti-eye
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-import"></i>
                                            ti-import
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-export"></i>
                                            ti-export
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-cup"></i> ti-cup
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-crown"></i>
                                            ti-crown
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-comments"></i>
                                            ti-comments
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-comment"></i>
                                            ti-comment
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-comment-alt"></i>
                                            ti-comment-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-thought"></i>
                                            ti-thought
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-clip"></i> ti-clip
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-check"></i>
                                            ti-check
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-check-box"></i>
                                            ti-check-box
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-camera"></i>
                                            ti-camera
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-announcement"></i>
                                            ti-announcement
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-brush"></i>
                                            ti-brush
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-brush-alt"></i>
                                            ti-brush-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-palette"></i>
                                            ti-palette
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-briefcase"></i>
                                            ti-briefcase
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bolt"></i> ti-bolt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bolt-alt"></i>
                                            ti-bolt-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-blackboard"></i>
                                            ti-blackboard
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bag"></i> ti-bag
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-world"></i>
                                            ti-world
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-wheelchair"></i>
                                            ti-wheelchair
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-car"></i> ti-car
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-truck"></i>
                                            ti-truck
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-timer"></i>
                                            ti-timer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ticket"></i>
                                            ti-ticket
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-thumb-up"></i>
                                            ti-thumb-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-thumb-down"></i>
                                            ti-thumb-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-stats-up"></i>
                                            ti-stats-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-stats-down"></i>
                                            ti-stats-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shine"></i>
                                            ti-shine
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shift-right"></i>
                                            ti-shift-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shift-left"></i>
                                            ti-shift-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-shift-right-alt"></i> ti-shift-right-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-shift-left-alt"></i> ti-shift-left-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shield"></i>
                                            ti-shield
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-notepad"></i>
                                            ti-notepad
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-server"></i>
                                            ti-server
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pulse"></i>
                                            ti-pulse
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-printer"></i>
                                            ti-printer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-power-off"></i>
                                            ti-power-off
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-plug"></i> ti-plug
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pie-chart"></i>
                                            ti-pie-chart
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-panel"></i>
                                            ti-panel
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-package"></i>
                                            ti-package
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-music"></i>
                                            ti-music
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-music-alt"></i>
                                            ti-music-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-mouse"></i>
                                            ti-mouse
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-mouse-alt"></i>
                                            ti-mouse-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-money"></i>
                                            ti-money
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-microphone"></i>
                                            ti-microphone
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-menu"></i> ti-menu
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-menu-alt"></i>
                                            ti-menu-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-map"></i> ti-map
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-map-alt"></i>
                                            ti-map-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-location-pin"></i>
                                            ti-location-pin
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-light-bulb"></i>
                                            ti-light-bulb
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-info"></i> ti-info
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-infinite"></i>
                                            ti-infinite
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-id-badge"></i>
                                            ti-id-badge
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-hummer"></i>
                                            ti-hummer
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-home"></i> ti-home
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-help"></i> ti-help
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-headphone"></i>
                                            ti-headphone
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-harddrives"></i>
                                            ti-harddrives
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-harddrive"></i>
                                            ti-harddrive
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-gift"></i> ti-gift
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-game"></i> ti-game
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-filter"></i>
                                            ti-filter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-files"></i>
                                            ti-files
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-file"></i> ti-file
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-zip"></i> ti-zip
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-folder"></i>
                                            ti-folder
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-envelope"></i>
                                            ti-envelope
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-dashboard"></i>
                                            ti-dashboard
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-cloud"></i>
                                            ti-cloud
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-cloud-up"></i>
                                            ti-cloud-up
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-cloud-down"></i>
                                            ti-cloud-down
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-clipboard"></i>
                                            ti-clipboard
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-calendar"></i>
                                            ti-calendar
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-book"></i> ti-book
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bell"></i> ti-bell
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-basketball"></i>
                                            ti-basketball
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bar-chart"></i>
                                            ti-bar-chart
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-bar-chart-alt"></i>
                                            ti-bar-chart-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-archive"></i>
                                            ti-archive
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-anchor"></i>
                                            ti-anchor
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-alert"></i>
                                            ti-alert
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-alarm-clock"></i>
                                            ti-alarm-clock
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-agenda"></i>
                                            ti-agenda
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-write"></i>
                                            ti-write
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-wallet"></i>
                                            ti-wallet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-video-clapper"></i>
                                            ti-video-clapper
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-video-camera"></i>
                                            ti-video-camera
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-vector"></i>
                                            ti-vector
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-support"></i>
                                            ti-support
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-stamp"></i>
                                            ti-stamp
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-slice"></i>
                                            ti-slice
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-shortcode"></i>
                                            ti-shortcode
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-receipt"></i>
                                            ti-receipt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pin2"></i> ti-pin2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pin-alt"></i>
                                            ti-pin-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pencil-alt2"></i>
                                            ti-pencil-alt2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-eraser"></i>
                                            ti-eraser
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-more"></i> ti-more
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-more-alt"></i>
                                            ti-more-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-microphone-alt"></i> ti-microphone-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-magnet"></i>
                                            ti-magnet
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-line-double"></i>
                                            ti-line-double
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-line-dotted"></i>
                                            ti-line-dotted
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-line-dashed"></i>
                                            ti-line-dashed
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-ink-pen"></i>
                                            ti-ink-pen
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-info-alt"></i>
                                            ti-info-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-help-alt"></i>
                                            ti-help-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-headphone-alt"></i>
                                            ti-headphone-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-gallery"></i>
                                            ti-gallery
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-face-smile"></i>
                                            ti-face-smile
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-face-sad"></i>
                                            ti-face-sad
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-credit-card"></i>
                                            ti-credit-card
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-comments-smiley"></i> ti-comments-smiley
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-time"></i> ti-time
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-share"></i>
                                            ti-share
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-share-alt"></i>
                                            ti-share-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-rocket"></i>
                                            ti-rocket
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-new-window"></i>
                                            ti-new-window
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-rss"></i> ti-rss
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-rss-alt"></i>
                                            ti-rss-alt
                                        </div>
                                    </div>

                                    <h6 class="mb-4 mt-4">Control Icons</h6>
                                    <div class="icon-box row">

                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-control-stop"></i>
                                            ti-control-stop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-shuffle"></i> ti-control-shuffle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-control-play"></i>
                                            ti-control-play
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-control-pause"></i>
                                            ti-control-pause
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-forward"></i> ti-control-forward
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-backward"></i> ti-control-backward
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-volume"></i>
                                            ti-volume
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-skip-forward"></i> ti-control-skip-forward
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-skip-backward"></i> ti-control-skip-backward
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-control-record"></i> ti-control-record
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-control-eject"></i>
                                            ti-control-eject
                                        </div>
                                    </div>

                                    <h6 class="mb-4 mt-4">Text Editor Icons </h6>
                                    <div class="icon-box row">

                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-paragraph"></i>
                                            ti-paragraph
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-uppercase"></i>
                                            ti-uppercase
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-underline"></i>
                                            ti-underline
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-text"></i> ti-text
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-Italic"></i>
                                            ti-Italic
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-smallcap"></i>
                                            ti-smallcap
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-list"></i> ti-list
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-list-ol"></i>
                                            ti-list-ol
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-align-right"></i>
                                            ti-align-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-align-left"></i>
                                            ti-align-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-align-justify"></i>
                                            ti-align-justify
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-align-center"></i>
                                            ti-align-center
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-quote-right"></i>
                                            ti-quote-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-quote-left"></i>
                                            ti-quote-left
                                        </div>
                                    </div>

                                    <h6 class="mb-4  mt-4">Layout Icons </h6>
                                    <div class="icon-box row">

                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-width-full"></i> ti-layout-width-full
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-width-default"></i> ti-layout-width-default
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-tab"></i>
                                            ti-layout-tab
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-tab-window"></i> ti-layout-tab-window
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-tab-v"></i>
                                            ti-layout-tab-v
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-tab-min"></i> ti-layout-tab-min
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-slider"></i>
                                            ti-layout-slider
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-slider-alt"></i> ti-layout-slider-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-placeholder"></i> ti-layout-placeholder
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-menu"></i>
                                            ti-layout-menu
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-menu-v"></i>
                                            ti-layout-menu-v
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-menu-separated"></i> ti-layout-menu-separated
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-menu-full"></i> ti-layout-menu-full
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-right"></i> ti-layout-media-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-overlay"></i> ti-layout-media-overlay
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-left"></i> ti-layout-media-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-center"></i> ti-layout-media-center
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-list-thumb"></i> ti-layout-list-thumb
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-list-post"></i> ti-layout-list-post
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-list-large-image"></i> ti-layout-list-large-image
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-line-solid"></i> ti-layout-line-solid
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-grid4"></i>
                                            ti-layout-grid4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-grid3"></i>
                                            ti-layout-grid3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-layout-grid2"></i>
                                            ti-layout-grid2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-cta-right"></i> ti-layout-cta-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-cta-left"></i> ti-layout-cta-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-cta-center"></i> ti-layout-cta-center
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column4"></i> ti-layout-column4
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column3"></i> ti-layout-column3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column2"></i> ti-layout-column2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-accordion-list"></i> ti-layout-accordion-list
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-widgetized"></i>
                                            ti-widgetized
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-widget"></i>
                                            ti-widget
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-widget-alt"></i>
                                            ti-widget-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-view-list"></i>
                                            ti-view-list
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-view-list-alt"></i>
                                            ti-view-list-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-view-grid"></i>
                                            ti-view-grid
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-upload"></i>
                                            ti-upload
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-download"></i>
                                            ti-download
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-loop"></i> ti-loop
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column4-alt"></i> ti-layout-column4-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column3-alt"></i> ti-layout-column3-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-layout-column2-alt"></i> ti-layout-column2-alt
                                        </div>
                                    </div>

                                    <h6 class="mb-4 mt-4">Brand Icons</h6>
                                    <div class="icon-box row">

                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-flickr"></i>
                                            ti-flickr
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-flickr-alt"></i>
                                            ti-flickr-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-instagram"></i>
                                            ti-instagram
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-google"></i>
                                            ti-google
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-github"></i>
                                            ti-github
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-facebook"></i>
                                            ti-facebook
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-dropbox"></i>
                                            ti-dropbox
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-dropbox-alt"></i>
                                            ti-dropbox-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-dribbble"></i>
                                            ti-dribbble
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-apple"></i>
                                            ti-apple
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-android"></i>
                                            ti-android
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-yahoo"></i>
                                            ti-yahoo
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-trello"></i>
                                            ti-trello
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-stack-overflow"></i> ti-stack-overflow
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-soundcloud"></i>
                                            ti-soundcloud
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-sharethis"></i>
                                            ti-sharethis
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-sharethis-alt"></i>
                                            ti-sharethis-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-reddit"></i>
                                            ti-reddit
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-microsoft"></i>
                                            ti-microsoft
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-microsoft-alt"></i>
                                            ti-microsoft-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-linux"></i>
                                            ti-linux
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-jsfiddle"></i>
                                            ti-jsfiddle
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-joomla"></i>
                                            ti-joomla
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-html5"></i>
                                            ti-html5
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-css3"></i> ti-css3
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-drupal"></i>
                                            ti-drupal
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-wordpress"></i>
                                            ti-wordpress
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-tumblr"></i>
                                            ti-tumblr
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-tumblr-alt"></i>
                                            ti-tumblr-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-skype"></i>
                                            ti-skype
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-youtube"></i>
                                            ti-youtube
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-vimeo"></i>
                                            ti-vimeo
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-vimeo-alt"></i>
                                            ti-vimeo-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-twitter"></i>
                                            ti-twitter
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-twitter-alt"></i>
                                            ti-twitter-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-linkedin"></i>
                                            ti-linkedin
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pinterest"></i>
                                            ti-pinterest
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-pinterest-alt"></i>
                                            ti-pinterest-alt
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i class="ti-themify-logo"></i>
                                            ti-themify-logo
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-themify-favicon"></i> ti-themify-favicon
                                        </div>
                                        <div class="preview col-sm-6 col-md-4 col-lg-3"><i
                                                class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt
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
