<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('/media/images/icons/favicon.ico'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('/media/images/icons/favicon.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('/media/images/icons/favicon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('/media/images/icons/favicon-114x114.png'); ?>">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/jquery-ui-1.10.4.custom.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/font-awesome.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/bootstrap.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/animate.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/all.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/main.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/style-responsive.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/zabuto_calendar.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/pace.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/media/styles/jquery.news-ticker.css'); ?>">
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">OSS</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welcome to OSS - One Stop Service</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Robert John</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
                <?php $this->load->view('template/sidebar') ?>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT -->
                <div class="page-content">
                    <div id="tab-general">

                        <?php isset($main) ? $this->load->view($main) : null; ?>


                        <!--div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span>$</span></h4>
                                        <p class="description">
                                            Profit description</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%;" class="progress-bar progress-bar-success">
                                                <span class="sr-only">80% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span><span>$</span></h4>
                                        <p class="description">
                                            Income detail</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span></h4>
                                        <p class="description">
                                            Task completed</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 50%;" class="progress-bar progress-bar-danger">
                                                <span class="sr-only">50% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>128</span></h4>
                                        <p class="description">
                                            Visitor description</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only">70% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div -->
                    
                        
                        
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://rumahcg.com">2017 © Rumah Cipta Generasi</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url('/media/script/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery-migrate-1.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery-ui.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/bootstrap-hover-dropdown.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/respond.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.slimscroll.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.cookie.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/icheck.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.news-ticker.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.menu.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/pace.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/holder.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/responsive-tabs.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.categories.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.fillbetween.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.stack.js'); ?>'); ?>"></script>
    <script src="<?php echo base_url('/media/script/jquery.flot.spline.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/zabuto_calendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('/media/script/index.js'); ?>"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
 
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
