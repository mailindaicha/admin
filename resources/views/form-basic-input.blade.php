<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Basic Input Page</title>

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
                        <a href="javascript:;" class="active">
                            <i class=" icon-speech"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li class="sub-menu">
                                <a href="javascript:;" class="active">Form Control</a>
                                <ul class="sub">
                                    <li class="active"><a  href="form-basic-input.html">Basic Input</a></li>
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
                <h4 class="mb-0"> Basic Input
                    <small>basic input examples</small>
                </h4>
                <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Basic Input</li>
                </ol>
            </div>
            <!--page title end-->


            <div class="container-fluid">

                <!-- state start-->
                <div class="row">
                    <div class=" col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Basic Form Controls
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <p class="mb-4 mt-5">Textual form controls—like <code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, and <code class="highlighter-rouge">&lt;textarea&gt;</code>s—are styled with the <code class="highlighter-rouge">.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Example multiple select</label>
                                        <select multiple class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>

                                <p class="mb-4 mt-5">For file inputs, swap the <code class="highlighter-rouge">.form-control</code> for <code class="highlighter-rouge">.form-control-file</code>.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Square
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail10">Email address</label>
                                        <input type="email" class="form-control form-control-square" id="exampleInputEmail10" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword10">Password</label>
                                        <input type="password" class="form-control form-control-square" id="exampleInputPassword10" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect10">Select</label>

                                        <span class="select-wrapper">
                                            <select class="form-control form-control-square"
                                                    id="exampleFormControlSelect10">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </span>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Pill
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail11">Email address</label>
                                        <input type="email" class="form-control form-control-pill" id="exampleInputEmail11" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">Password</label>
                                        <input type="password" class="form-control form-control-pill" id="exampleInputPassword11" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect10">Select</label>

                                        <span class="select-wrapper form-control-pill">
                                            <select class="form-control"
                                                    id="exampleFormControlSelect11">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </span>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Sizing
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                                <div class="bd-example">
                                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                    <input class="form-control" type="text" placeholder="Default input">
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">

                                    <select class="form-control form-control-lg">
                                        <option>Large select</option>
                                        <option>Large select 2</option>
                                        <option>Large select 3</option>
                                    </select>
                                    <select class="form-control">
                                        <option>Default select</option>
                                        <option>Default select 2</option>
                                        <option>Default select 3</option>
                                    </select>
                                    <select class="form-control form-control-sm">
                                        <option>Small select</option>
                                        <option>Small select 2</option>
                                        <option>Small select 3</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Inline Form
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form-inline">
                                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class=" col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Horizontal form
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-legend col-sm-3">Radios</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                        Option one is this and that&mdash;be sure to include why it's great
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                        Option two can be something else and selecting it will deselect option one
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                                        Option three is disabled
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-sm-3">Checkbox</div>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"> Check me out
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Horizontal form label sizing
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Column sizing
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-7">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="State">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Zip">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Disabled forms
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Add the <code class="highlighter-rouge">disabled</code> boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
                                <form>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <label for="disabledTextInput">Disabled input</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-control">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"> Can't check this
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Custom styles
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="container" id="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">State</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>

                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';

                                        window.addEventListener('load', function() {
                                            var form = document.getElementById('needs-validation');
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        }, false);
                                    })();
                                </script>
                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Custom forms Elements
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mt-3">File browser</h6>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>

                                <h6 class="mt-3">Range</h6>
                                <input type="range" class="custom-range" id="customRange1">

                                <h6 class="mt-3">Select menu</h6>
                                <select class="custom-select custom-select-lg mb-3">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="custom-select mb-3">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="custom-select custom-select-sm">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <h6 class="mt-3">Checkbox</h6>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                </div>

                                <h6 class="mt-3">Radios</h6>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                </div>

                                <h6 class="mt-3">Disabled</h6>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                                    <label class="custom-control-label" for="customCheckDisabled">Check this custom checkbox</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="radio3" name="radioDisabled" id="customRadioDisabled" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadioDisabled">Toggle this custom radio</label>
                                </div>

                                <h6 class="mt-3">Inline</h6>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                </div>

                            </div>
                        </div>

                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Supported elements
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="was-validated">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                        <div class="invalid-feedback">More example invalid feedback text</div>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select" required>
                                            <option value="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- state end-->

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
