<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Buttons</title>

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
                        <a href="javascript:;" class="active">
                            <i class=" ti-layers"></i>
                            <span>BS Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="alert.html">Alerts</a></li>
                            <li class="active"><a  href="buttons.html">Buttons</a></li>
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
                <h4 class="mb-0"> Buttons
                    <small>default, outline, pills & more</small>
                </h4>
                <!--<ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">-->
                    <!--<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>-->
                    <!--<li class="breadcrumb-item active">Buttons</li>-->
                <!--</ol>-->
            </div>
            <!--page title end-->


            <div class="container-fluid">
                <div class="row">
                    <div class="col ">
                        <ul class="nav nav-pills mb-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active default-color" data-toggle="tab" href="#tab-1" aria-expanded="true">Default Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link default-color" data-toggle="tab" href="#tab-2" aria-expanded="false">Square Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link default-color" data-toggle="tab" href="#tab-3" aria-expanded="false">Pill Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link default-color" data-toggle="tab" href="#tab-4" aria-expanded="false">Icon Buttons</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1" role="tabpanel" aria-expanded="true">
                                <div class="row">
                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Default Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Bootstrap buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-light">Light</button>
                                                    <button type="button" class="btn btn-dark">Dark</button>

                                                    <button type="button" class="btn btn-link">Link</button>
                                                </div>

                                                <p class="">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-info" type="submit">Button</button>
                                                    <input class="btn btn-success" type="button" value="Input">
                                                    <input class="btn btn-warning" type="submit" value="Submit">
                                                    <input class="btn btn-danger" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-secondary active">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <label class="btn btn-secondary">
                                                            <input type="checkbox" > Checkbox 3
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-secondary active">
                                                            <input type="radio" name="options" id="option1"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-secondary">
                                                            <input type="radio" name="options" id="option2" > Radio 2
                                                        </label>
                                                        <label class="btn btn-secondary">
                                                            <input type="radio" name="options" id="option3" > Radio 3
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->

                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Outline Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-muted">Bootstrap outline buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-outline-light">Light</button>
                                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                                </div>

                                                <p class="text-muted">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-outline-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-outline-info" type="submit">Button</button>
                                                    <input class="btn btn-outline-success" type="button" value="Input">
                                                    <input class="btn btn-outline-danger" type="submit" value="Submit">
                                                    <input class="btn btn-outline-warning" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-outline-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-outline-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-outline-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-outline-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-outline-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-outline-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-outline-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-outline-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-outline-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-outline-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-outline-secondary active-">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-outline-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <!--<label class="btn btn-secondary">-->
                                                        <!--<input type="checkbox" > Checkbox 3-->
                                                        <!--</label>-->
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-outline-secondary active">
                                                            <input type="radio" name="options" id="option33"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-outline-secondary">
                                                            <input type="radio" name="options" id="option44" > Radio 2
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2" role="tabpanel" aria-expanded="false">
                                <div class="row">
                                    <!--buttons start-->
                                    <div class="col">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Default Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Bootstrap buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-square btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-square btn-success">Success</button>
                                                    <button type="button" class="btn btn-square btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-square btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-square btn-info">Info</button>
                                                    <button type="button" class="btn btn-square btn-light">Light</button>
                                                    <button type="button" class="btn btn-square btn-dark">Dark</button>

                                                    <button type="button" class="btn btn-square btn-link">Link</button>
                                                </div>

                                                <p class="">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-square btn-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-square btn-info" type="submit">Button</button>
                                                    <input class="btn btn-square btn-success" type="button" value="Input">
                                                    <input class="btn btn-square btn-warning" type="submit" value="Submit">
                                                    <input class="btn btn-square btn-danger" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-square btn-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-square btn-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-square btn-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-square btn-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-square btn-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-square btn-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-square btn-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-square btn-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-square btn-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-square btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-square btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-square btn-secondary active">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-square btn-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <label class="btn btn-square btn-secondary">
                                                            <input type="checkbox" > Checkbox 3
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-square btn-secondary active">
                                                            <input type="radio" name="options" id="option01"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-square btn-secondary">
                                                            <input type="radio" name="options" id="option02" > Radio 2
                                                        </label>
                                                        <label class="btn btn-square btn-secondary">
                                                            <input type="radio" name="options" id="option03" > Radio 3
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->

                                    <!--buttons start-->
                                    <div class="col">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Outline Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-muted">Bootstrap outline buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-square btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-square btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-square btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-square btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-square btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-square btn-outline-light">Light</button>
                                                    <button type="button" class="btn btn-square btn-outline-dark">Dark</button>
                                                </div>

                                                <p class="text-muted">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-square btn-outline-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-square btn-outline-info" type="submit">Button</button>
                                                    <input class="btn btn-square btn-outline-success" type="button" value="Input">
                                                    <input class="btn btn-square btn-outline-danger" type="submit" value="Submit">
                                                    <input class="btn btn-square btn-outline-warning" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-outline-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-square btn-outline-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-outline-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-square btn-outline-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-outline-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-square btn-outline-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-outline-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-square btn-outline-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-square btn-outline-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-square btn-outline-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-square btn-outline-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-square btn-outline-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-square btn-outline-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-square btn-outline-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-square btn-outline-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-square btn-outline-secondary active-">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-square btn-outline-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <!--<label class="btn btn-square btn-secondary">-->
                                                        <!--<input type="checkbox" > Checkbox 3-->
                                                        <!--</label>-->
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-square btn-outline-secondary active">
                                                            <input type="radio" name="options" id="option30"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-square btn-outline-secondary">
                                                            <input type="radio" name="options" id="option40" > Radio 2
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3" role="tabpanel" aria-expanded="false">
                                <div class="row">
                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Default Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Bootstrap buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-pill btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-pill btn-success">Success</button>
                                                    <button type="button" class="btn btn-pill btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-pill btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-pill btn-info">Info</button>
                                                    <button type="button" class="btn btn-pill btn-light">Light</button>
                                                    <button type="button" class="btn btn-pill btn-dark">Dark</button>

                                                    <button type="button" class="btn btn-pill btn-link">Link</button>
                                                </div>

                                                <p class="">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-pill btn-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-pill btn-info" type="submit">Button</button>
                                                    <input class="btn btn-pill btn-success" type="button" value="Input">
                                                    <input class="btn btn-pill btn-warning" type="submit" value="Submit">
                                                    <input class="btn btn-pill btn-danger" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-pill btn-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-pill btn-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-pill btn-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-pill btn-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-pill btn-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-pill btn-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-pill btn-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-pill btn-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-pill btn-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-pill btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-pill btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-pill btn-secondary active">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-pill btn-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <label class="btn btn-pill btn-secondary">
                                                            <input type="checkbox" > Checkbox 3
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-pill btn-secondary active">
                                                            <input type="radio" name="options" id="option11"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-pill btn-secondary">
                                                            <input type="radio" name="options" id="option21" > Radio 2
                                                        </label>
                                                        <label class="btn btn-pill btn-secondary">
                                                            <input type="radio" name="options" id="option31" > Radio 3
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->

                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Outline Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-muted">Bootstrap outline buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-pill btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-pill btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-pill btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-pill btn-outline-light">Light</button>
                                                    <button type="button" class="btn btn-pill btn-outline-dark">Dark</button>
                                                </div>

                                                <p class="text-muted">Button tags </p>
                                                <p class="text-muted">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements.</p>
                                                <div class="btn-demo mb-4">
                                                    <a class="btn btn-pill btn-outline-primary" href="#" role="button">Link</a>
                                                    <button class="btn btn-pill btn-outline-info" type="submit">Button</button>
                                                    <input class="btn btn-pill btn-outline-success" type="button" value="Input">
                                                    <input class="btn btn-pill btn-outline-danger" type="submit" value="Submit">
                                                    <input class="btn btn-pill btn-outline-warning" type="reset" value="Reset">
                                                </div>

                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-info btn-lg">Large button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-success btn-sm">Small button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning btn-sm">Small button</button>
                                                </div>

                                                <p class="">Block Buttons </p>
                                                <p class="text-muted">Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary btn-lg btn-block">Block level button</button>
                                                </div>

                                                <p class="">Disable Buttons </p>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-primary" disabled>Primary button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-success" disabled>Success button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-danger" disabled>Danger button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning" disabled>Warning button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-info" disabled>Info button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-dark" disabled>Dark button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary" disabled>Button</button>
                                                    <a href="#" class="btn btn-pill btn-outline-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                                                    <a href="#" class="btn btn-pill btn-outline-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                                                </div>

                                                <p class="">Checkbox & Radio Buttons </p>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-pill btn-outline-secondary active-">
                                                            <input type="checkbox" checked > Checkbox 1 (pre-checked)
                                                        </label>
                                                        <label class="btn btn-pill btn-outline-secondary">
                                                            <input type="checkbox" > Checkbox 2
                                                        </label>
                                                        <!--<label class="btn btn-pill btn-secondary">-->
                                                        <!--<input type="checkbox" > Checkbox 3-->
                                                        <!--</label>-->
                                                    </div>
                                                </div>

                                                <div class=" mb-4">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-pill btn-outline-secondary active">
                                                            <input type="radio" name="options" id="option34"  checked> Radio 1 (preselected)
                                                        </label>
                                                        <label class="btn btn-pill btn-outline-secondary">
                                                            <input type="radio" name="options" id="option45" > Radio 2
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-4" role="tabpanel" aria-expanded="false">
                                <div class="row">
                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Icon Buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Default Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn  btn-primary"><i class="icon-user pr-2"></i> Primary</button>
                                                    <button type="button" class="btn  btn-secondary"><i class="icon-cloud-upload pr-2"></i> Secondary</button>
                                                    <button type="button" class="btn  btn-success"><i class="icon-lock pr-2"></i> Success</button>
                                                    <button type="button" class="btn  btn-danger"><i class="icon-social-dropbox pr-2"></i> Danger</button>
                                                    <button type="button" class="btn  btn-warning"><i class="icon-key pr-2"></i> Warning</button>
                                                    <button type="button" class="btn  btn-info"><i class="icon-flag pr-2"></i> Info</button>
                                                    <button type="button" class="btn  btn-light"><i class="icon-tag pr-2"></i> Light</button>
                                                    <button type="button" class="btn  btn-dark"><i class="icon-note pr-2"></i> Dark</button>

                                                    <button type="button" class="btn  btn-link"><i class="icon-pie-chart pr-2"></i> Link</button>
                                                </div>

                                                <p class="">Square Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-primary"><i class="icon-rocket pr-2"></i> Primary</button>
                                                    <button type="button" class="btn btn-square btn-secondary"><i class="icon-trash pr-2"></i> Secondary</button>
                                                    <button type="button" class="btn btn-square btn-success"><i class="icon-drop pr-2"></i> Success</button>
                                                    <button type="button" class="btn btn-square btn-danger"><i class="icon-drawer pr-2"></i> Danger</button>
                                                    <button type="button" class="btn btn-square btn-warning"><i class="icon-feed pr-2"></i> Warning</button>
                                                    <button type="button" class="btn btn-square btn-info"><i class=" icon-briefcase pr-2"></i> Info</button>
                                                    <button type="button" class="btn btn-square btn-light"><i class=" icon-basket-loaded pr-2"></i> Light</button>
                                                    <button type="button" class="btn btn-square btn-dark"><i class=" icon-bubbles pr-2"></i> Dark</button>

                                                    <button type="button" class="btn btn-pill btn-link"><i class=" icon-diamond pr-2"></i> Link</button>
                                                </div>

                                                <p class="">Pill Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-primary"><i class=" icon-globe-alt pr-2"></i> Primary</button>
                                                    <button type="button" class="btn btn-pill btn-secondary"><i class=" icon-puzzle pr-2"></i> Secondary</button>
                                                    <button type="button" class="btn btn-pill btn-success"><i class=" icon-fire pr-2"></i> Success</button>
                                                    <button type="button" class="btn btn-pill btn-danger"><i class=" icon-eyeglass pr-2"></i> Danger</button>
                                                    <button type="button" class="btn btn-pill btn-warning"><i class=" icon-graduation pr-2"></i> Warning</button>
                                                    <button type="button" class="btn btn-pill btn-info"><i class=" icon-speedometer pr-2"></i> Info</button>
                                                    <button type="button" class="btn btn-pill btn-light"><i class=" icon-magic-wand pr-2"></i> Light</button>
                                                    <button type="button" class="btn btn-pill btn-dark"><i class=" icon-ghost pr-2"></i> Dark</button>

                                                    <button type="button" class="btn btn-pill btn-link"><i class=" icon-cursor pr-2"></i> Link</button>
                                                </div>

                                                <p class="text-muted">Bootstrap outline buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-primary"><i class=" icon-badge pr-2"></i> Primary</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary"><i class=" icon-bag pr-2"></i> Secondary</button>
                                                    <button type="button" class="btn btn-pill btn-outline-success"><i class=" icon-globe pr-2"></i> Success</button>
                                                    <button type="button" class="btn btn-pill btn-outline-danger"><i class=" icon-folder-alt pr-2"></i> Danger</button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning"><i class=" icon-book-open pr-2"></i> Warning</button>
                                                    <button type="button" class="btn btn-pill btn-outline-info"><i class=" icon-puzzle pr-2"></i> Info</button>
                                                    <button type="button" class="btn btn-pill btn-outline-light"><i class=" icon-compass pr-2"></i> Light</button>
                                                    <button type="button" class="btn btn-pill btn-outline-dark"><i class=" icon-film pr-2"></i> Dark</button>
                                                </div>


                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-info btn-lg"><i class=" icon-plane pr-2"></i> Large button</button>
                                                    <button type="button" class="btn btn-pill btn-secondary btn-lg"><i class=" icon-plus pr-2"></i> Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-success btn-sm"><i class=" icon-directions pr-2"></i> Small button</button>
                                                    <button type="button" class="btn btn-pill btn-warning btn-sm"><i class=" icon-docs pr-2"></i> Small button</button>
                                                </div>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-info btn-lg"><i class=" icon-support pr-2"></i>Large button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary btn-lg"><i class=" icon-umbrella pr-2"></i>Large button</button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-success btn-sm"><i class=" icon-microphone pr-2"></i>Small button</button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning btn-sm"><i class=" icon-layers pr-2"></i>Small button</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->

                                    <!--buttons start-->
                                    <div class="col-sm-6">
                                        <div class="card card-shadow mb-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Icon Buttons without Text
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Default Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn  btn-primary"><i class="icon-user "></i> </button>
                                                    <button type="button" class="btn  btn-secondary"><i class="icon-cloud-upload "></i> </button>
                                                    <button type="button" class="btn  btn-success"><i class="icon-lock "></i> </button>
                                                    <button type="button" class="btn  btn-danger"><i class="icon-social-dropbox "></i> </button>
                                                    <button type="button" class="btn  btn-warning"><i class="icon-key "></i> </button>
                                                    <button type="button" class="btn  btn-info"><i class="icon-flag "></i> </button>
                                                    <button type="button" class="btn  btn-light"><i class="icon-tag "></i> </button>
                                                    <button type="button" class="btn  btn-dark"><i class="icon-note "></i> </button>

                                                    <button type="button" class="btn  btn-link"><i class="icon-pie-chart "></i> </button>
                                                </div>

                                                <p class="">Square Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-square btn-primary"><i class="icon-rocket "></i> </button>
                                                    <button type="button" class="btn btn-square btn-secondary"><i class="icon-trash "></i> </button>
                                                    <button type="button" class="btn btn-square btn-success"><i class="icon-drop "></i> </button>
                                                    <button type="button" class="btn btn-square btn-danger"><i class="icon-drawer "></i> </button>
                                                    <button type="button" class="btn btn-square btn-warning"><i class="icon-feed "></i> </button>
                                                    <button type="button" class="btn btn-square btn-info"><i class=" icon-briefcase "></i> </button>
                                                    <button type="button" class="btn btn-square btn-light"><i class=" icon-basket-loaded "></i> </button>
                                                    <button type="button" class="btn btn-square btn-dark"><i class=" icon-bubbles "></i> </button>

                                                    <button type="button" class="btn btn-pill btn-link"><i class=" icon-diamond "></i> </button>
                                                </div>

                                                <p class="">Pill Icon buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-primary"><i class=" icon-globe-alt "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-secondary"><i class=" icon-puzzle "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-success"><i class=" icon-fire "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-danger"><i class=" icon-eyeglass "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-warning"><i class=" icon-graduation "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-info"><i class=" icon-speedometer "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-light"><i class=" icon-magic-wand "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-dark"><i class=" icon-ghost "></i> </button>

                                                    <button type="button" class="btn btn-pill btn-link"><i class=" icon-cursor "></i> </button>
                                                </div>

                                                <p class="text-muted">Bootstrap outline buttons</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-primary"><i class=" icon-badge "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary"><i class=" icon-bag "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-success"><i class=" icon-globe "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-danger"><i class=" icon-folder-alt "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning"><i class=" icon-book-open "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-info"><i class=" icon-puzzle "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-light"><i class=" icon-compass "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-outline-dark"><i class=" icon-film "></i> </button>
                                                </div>


                                                <p class="">Button Size </p>
                                                <p  class="text-muted">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-info btn-lg"><i class=" icon-plane "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-secondary btn-lg"><i class=" icon-plus "></i> </button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-success btn-sm"><i class=" icon-directions "></i> </button>
                                                    <button type="button" class="btn btn-pill btn-warning btn-sm"><i class=" icon-docs "></i> </button>
                                                </div>

                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-info btn-lg"><i class=" icon-support "></i></button>
                                                    <button type="button" class="btn btn-pill btn-outline-secondary btn-lg"><i class=" icon-umbrella "></i></button>
                                                </div>
                                                <div class="btn-demo mb-4">
                                                    <button type="button" class="btn btn-pill btn-outline-success btn-sm"><i class=" icon-microphone "></i></button>
                                                    <button type="button" class="btn btn-pill btn-outline-warning btn-sm"><i class=" icon-layers "></i></button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--buttons end-->
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

