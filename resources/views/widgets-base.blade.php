<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Widgets Base</title>

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
                        <a href="javascript:;">
                            <i class=" ti-pencil-alt"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="icon-font-awesome.html">Fontawesome Icons</a></li>
                            <li><a  href="icon-themify.html">Themify Icons</a></li>
                            <li><a  href="icon-simple-line.html">Simple line Icons</a></li>
                            <li><a  href="icon-weather.html">Weather Icons</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="active">
                            <i class=" ti-blackboard"></i>
                            <span>Widgets </span> <span class="badge badge-primary ml-2">2</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a  href="widgets-base.html">Widgets Base</a></li>
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
                <h4 class="mb-0"> Widgets Base
                    <small>some widget examples</small>
                </h4>
                <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Widgets Base</li>
                </ol>
            </div>
            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <h6 class="mb-0 mt-3">New Users</h6>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <h6 class="mb-0 mt-3">Order Placed</h6>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class=" icon-handbag text-danger f30"></i>
                                <h6 class="mb-0 mt-3">Delivery Processing</h6>
                                <p class="f12 mb-0">54 New Delivery Processing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class=" icon-badge text-success f30"></i>
                                <h6 class="mb-0 mt-3">Monthly Profits</h6>
                                <p class="f12 mb-0">$9887 This Month Profit <span class="float-right text-success"><i class=" ti-arrow-circle-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-people text-primary f30"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">New Users</h6>
                                        <p class="f12 mb-0">32 New Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-basket-loaded text-info f30"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Order Placed</h6>
                                        <p class="f12 mb-0">123 New Order Placed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class=" icon-handbag text-danger f30"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Delivery </h6>
                                        <p class="f12 mb-0">54 New Delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card ">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class=" icon-badge text-success f30"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Monthly Profits</h6>
                                        <p class="f12 mb-0">$9887 This Month Profit
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-primary border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body ">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class="icon-people f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">New Users</h6>
                                        <p class="f12 mb-0">32 New Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-info border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class="icon-basket-loaded f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">Order Placed</h6>
                                        <p class="f12 mb-0">123 New Order Placed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-warning border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-handbag f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">Delivery </h6>
                                        <p class="f12 mb-0">54 New Delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-danger border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">Monthly Profits</h6>
                                        <p class="f12 mb-0">$9887 This Month Profit
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-warning text-center wb-icon-box">
                                            <i class="icon-people text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">New Users</h6>
                                        <p class="f12 mb-0">32 New Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow ">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-info text-center wb-icon-box">
                                            <i class="icon-basket-loaded text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Order Placed</h6>
                                        <p class="f12 mb-0">123 New Order Placed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-success text-center wb-icon-box">
                                            <i class="icon-handbag text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Delivery </h6>
                                        <p class="f12 mb-0">54 New Delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-danger text-center wb-icon-box">
                                            <i class="icon-badge text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Monthly Profits</h6>
                                        <p class="f12 mb-0">$9887 This Month Profit
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-info rounded-circle text-center wb-icon-box">
                                            <i class="icon-people text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">New Users</h6>
                                        <p class="f12 mb-0">32 New Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow ">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-warning rounded-circle text-center wb-icon-box">
                                            <i class="icon-basket-loaded text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Order Placed</h6>
                                        <p class="f12 mb-0">123 New Order Placed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-primary rounded-circle text-center wb-icon-box">
                                            <i class="icon-handbag text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Delivery </h6>
                                        <p class="f12 mb-0">54 New Delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-secondary rounded-circle text-center wb-icon-box">
                                            <i class="icon-badge text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Monthly Profits</h6>
                                        <p class="f12 mb-0">$9887 This Month Profit
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->


                <!--card widget start-->
                <div class="card-group mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right">
                                        <i class="f30 opacity-3 icon-basket-loaded"></i>
                                    </div>
                                    <h3 class="text-success">234</h3>
                                    <p class="card-subtitle text-muted fw-500">New Orders</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted f12">
                                        <span>Progress</span>
                                        <span class="float-right">83%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right">
                                        <i class="f30 opacity-3 icon-briefcase"></i>
                                    </div>
                                    <h3 class="text-primary">3423</h3>
                                    <p class="card-subtitle text-muted fw-500">Pending Products</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted f12">
                                        <span>Progress</span>
                                        <span class="float-right">63%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right">
                                        <i class="f30 opacity-3 icon-pie-chart"></i>
                                    </div>
                                    <h3 class="text-danger">$ 123423</h3>
                                    <p class="card-subtitle text-muted fw-500">Online Reveneue</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted f12">
                                        <span>Progress</span>
                                        <span class="float-right">77%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right">
                                        <i class="f30 opacity-3 icon-symbol-male"></i>
                                    </div>
                                    <h3 class="text-info">$ 355323</h3>
                                    <p class="card-subtitle text-muted fw-500">Total Profits</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 56%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted f12">
                                        <span>Progress</span>
                                        <span class="float-right">56%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--card widget end-->

                <div class="row">
                    <!--social feed widget start-->
                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-4">
                            <div class="card-body text-center">
                                <i class="fa fa-twitter f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span>11 January, 2018</span>

                                <div class="mt-4">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-4">
                            <div class="card-body text-center">
                                <i class="fa fa-facebook f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span>11 January, 2018</span>

                                <div class="mt-4">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-danger mb-4">
                            <div class="card-body text-center">
                                <i class="fa fa-google-plus f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span>11 January, 2018</span>

                                <div class="mt-4">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--social feed widget end-->
                    <!--social feed widget start-->
                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-4">
                            <div class="card-body">
                                <i class="fa fa-twitter f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span class="float-left">11 January, 2018</span>

                                <div class=" float-right">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-4">
                            <div class="card-body">
                                <i class="fa fa-facebook f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span class="float-left">11 January, 2018</span>

                                <div class=" float-right">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-danger mb-4">
                            <div class="card-body">
                                <i class="fa fa-google-plus f30 mb-3"></i>
                                <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                                <span class="float-left">11 January, 2018</span>

                                <div class=" float-right">
                                    <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                    <span><i class="fa fa-thumbs-up "></i> 456</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--social feed widget end-->
                </div>

                <div class="row">
                    <!--task widget start-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Tasks Distribution
                                    <ul class="nav nav-pills nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-week-tab" data-toggle="pill" href="#pills-week" role="tab" aria-controls="pills-week" aria-selected="false">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                        <ul class="list-unstyled task-d-list">
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Contrary Ipsum is not simply random text</a>
                                                                <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Ipsum has been industry's standard dummy</a>
                                                                <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#"> All the Lorem Ipsum generators</a>
                                                                <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Lorem Ipsum is not random task asign</a>
                                                                <span class="badge badge-pill badge-info">Kany Rose</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Always free from repetition injected</a>
                                                                <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Simply dummy text of the printing </a>
                                                                <span class="badge badge-pill badge-success">John Smith</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Letraset sheets containing Lorem Ipsum passages</a>
                                                                <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                        <ul class="list-unstyled task-d-list">
                                            <li class="list-mark list-primary">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Ipsum has been industry's standard dummy</a>
                                                                <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-info">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Contrary Ipsum is not simply random text</a>
                                                                <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-success">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#"> All the Lorem Ipsum generators</a>
                                                                <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-warning">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Always free from repetition injected</a>
                                                                <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-danger">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Lorem Ipsum is not random task asign</a>
                                                                <span class="badge badge-pill badge-info">Kany Rose</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-inverse">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Letraset sheets containing Lorem passages</a>
                                                                <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-mark list-primary">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Simply dummy text of the printing </a>
                                                                <span class="badge badge-pill badge-success">John Smith</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                        <ul class="list-unstyled task-d-list">
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Ipsum has been industry's standard dummy</a>
                                                                <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#"> All the Lorem Ipsum generators</a>
                                                                <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Contrary Ipsum is not simply random text</a>
                                                                <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Lorem Ipsum is not random task asign</a>
                                                                <span class="badge badge-pill badge-info">Kany Rose</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Letraset sheets containing Lorem Ipsum passages</a>
                                                                <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Always free from repetition injected</a>
                                                                <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description default-color">
                                                                <a href="#">Simply dummy text of the printing </a>
                                                                <span class="badge badge-pill badge-success">John Smith</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="btn-group float-right task-list-action">
                                                            <div class="dropdown ">
                                                                <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class=" icon-options"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right ">
                                                                    <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                    <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--task widget end-->

                    <!--activity widget start-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Activity Log
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
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
                        </div>
                    </div>
                    <!--activity widget end-->
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card  mb-4">
                            <div class="card-header text-white bg-success border-0">
                                <div class="media p-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user.png" alt="John Doe" style="width: 64px; height: 64px;">
                                    <div class="media-body">
                                        <p class="f18 mb-0"><strong class="">John Doe</strong></p>
                                        <p>john_doe@testmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="quick-links-grid">
                                    <a href="#" class="ql-grid-item">
                                        <i class="icon-layers text-primary"></i>
                                        <span class="ql-grid-title">Recent Activity</span>
                                    </a>
                                    <a href="#" class="ql-grid-item">
                                        <i class=" icon-envelope-open text-success"></i>
                                        <span class="ql-grid-title">Mail Inbox</span>
                                    </a>
                                </div>
                                <div class="quick-links-grid">
                                    <a href="#" class="ql-grid-item">
                                        <i class="ti-files text-warning"></i>
                                        <span class="ql-grid-title">Message</span>
                                    </a>
                                    <a href="#" class="ql-grid-item">
                                        <i class="icon-bell text-info"></i>
                                        <span class="ql-grid-title">Notification</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer text-center bg-white p-4">
                                <div class="row">
                                    <div class="col">
                                        <h4>24</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div class="col">
                                        <h4>3535</h4>
                                        <span>Follower</span>
                                    </div>
                                    <div class="col">
                                        <h4>123</h4>
                                        <span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    New Users
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user1.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">John Doe</strong></p>
                                        <span>john_doe@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user2.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Tnisha Sabrin</strong></p>
                                        <span>tnisha_s@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user3.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Tasi Szzd</strong></p>
                                        <span>tasi_szd@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user4.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Keny Rose</strong></p>
                                        <span>keny_ose@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user5.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">MH Geek</strong></p>
                                        <span>mh_g@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media ">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/user2.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Tnisha Sabrin</strong></p>
                                        <span>tnisha_s@testmail.com</span>
                                    </div>
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                                <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!--Report widget start-->
                    <div class="col-xl-7">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Product Reports
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="fa fa-calendar-o text-info pr-2"></i> Daily</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-calendar-check-o text-danger pr-2"></i> Weekly</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-calculator text-warning pr-2"></i> Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-vertical-middle">
                                    <thead>
                                    <tr>
                                        <th class="border-0 ">Product Thumb</th>
                                        <th class="border-0">Product Info</th>
                                        <th class="border-0 text-right">Total Sold</th>
                                        <th class="border-0 text-right">Rating</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="assets/img/product_img.jpg" alt="" style="width: 80px; height: auto"/>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">15" Mackbook Pro Retina Display</h6>
                                            <span class="f12">Category: Computer Electronics</span>
                                            <div class="text-muted">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">2345</h4>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">123</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="assets/img/product_2.jpg" alt="" style="width: 80px; height: auto"/>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">27" iMac Por Latest versin</h6>
                                            <span class="f12">Category: Computer Electronics</span>
                                            <div class="text-muted">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">4321</h4>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">432</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="assets/img/product_3.jpg" alt="" style="width: 80px; height: auto"/>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">iPhone X</h6>
                                            <span class="f12">Category: Mobile</span>
                                            <div class="text-muted">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">5442</h4>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-muted">788</h4>
                                        </td>
                                    </tr>
                                    <!--<tr>-->
                                        <!--<td style="width: 150px">-->
                                            <!--<img src="assets/img/product_3.jpg" alt="" style="width: 80px; height: auto"/>-->
                                        <!--</td>-->
                                        <!--<td>-->
                                            <!--<h6 class="mb-0">Mac mini pro Dual core</h6>-->
                                            <!--<span class="f12">Category: Computer device</span>-->
                                            <!--<div class="text-muted">-->
                                                <!--<i class="fa fa-star"></i>-->
                                                <!--<i class="fa fa-star"></i>-->
                                                <!--<i class="fa fa-star"></i>-->
                                                <!--<i class="fa fa-star-o"></i>-->
                                                <!--<i class="fa fa-star-o"></i>-->
                                            <!--</div>-->
                                        <!--</td>-->
                                        <!--<td class="text-right">-->
                                            <!--<h4 class="text-muted">12334</h4>-->
                                        <!--</td>-->
                                        <!--<td  class="text-right">-->
                                            <!--<h4 class="text-muted">45</h4>-->
                                        <!--</td>-->
                                    <!--</tr>-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--Report widget end-->

                    <!--weather widget start-->
                    <div class="col-xl-5">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 d-flex justify-content-center">
                                        <div class="align-self-center ">
                                            <i class="wi wi-day-sleet f60 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col p-3">
                                        <small>SUN, Jan 2018 10:21  </small>
                                        <h6>Most Cloudy</h6>
                                        <h1 class="mt-3 mb-3 p-2 border border-right-0 border-left-0 text-primary"> 34<sup>o c</sup></h1>
                                        <span>Wind: SE 15 KM/H</span>
                                        <p>Huminity: 54%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center">
                                <div class="row">
                                    <div class="col">
                                        <p class="f12">MON</p>
                                        <i class="wi wi-day-cloudy f30"></i>
                                        <p class="mb-0 mt-2">18<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">TUE</p>
                                        <i class="wi  wi wi-day-rain-mix f30"></i>
                                        <p class="mb-0 mt-2">13<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">WED</p>
                                        <i class="wi  wi wi-day-cloudy-windy f30"></i>
                                        <p class="mb-0 mt-2">29<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">THU</p>
                                        <i class="wi  wi wi-day-sprinkle f30"></i>
                                        <p class="mb-0 mt-2">32<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">FRI</p>
                                        <i class="wi  wi wi-day-thunderstorm f30"></i>
                                        <p class="mb-0 mt-2">09<sup>o c</sup></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--weather widget end-->
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
    <script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/vendor/lobicard/js/lobicard.js"></script>
    <script src="assets/vendor/jquery.scrollTo.min.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="assets/js/scripts.js"></script>

</body>
</html>

