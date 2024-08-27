<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">
<title>Mordorintelligence - Admin</title>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap/dist/css/bootstrap.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/Ionicons/css/ionicons.min.css'); ?>"> 
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/font-awesome/css/font-awesome.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/Ionicons/css/ionicons.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/master_style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/morris.js/morris.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/jvectormap/jquery-jvectormap.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
<link href="<?php echo base_url('assets/js/sweetalert/sweetalert.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor_components/select2/dist/css/select2.min.css');?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/master_style.css');?>">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Mordorintelligence</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <div class="image float-left">
          <!-- <img src="<?php //echo base_url('website-assets/images/logo4.jpg'); ?>" hieght="50" width="50" class="rounded" alt="User Image"> -->
        </div>
        <b>Mordorintelligence </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('website-assets/images/clinte1.png'); ?>" class="user-image rounded" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('website-assets/images/clinte1.png'); ?>" class="rounded float-left" alt="User Image">

                <p>
                  Mordorintelligence Admin
                  <small>Member since August . 2024</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col text-center">
                    <a href="#">Friends</a>
                  </div>
                  <div class="col text-center">
                    <a href="#">Sales</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-block btn-primary">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('admin/login/logout'); ?>" class="btn btn-block btn-danger">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!-- <div class="image float-left">
          <img src="<?php //echo base_url('assets/images/user2-160x160.jpg'); ?>" class="rounded" alt="User Image">
        </div>
        <div class="info float-left">
          <p>Emi Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
          
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <!-- <input type="text" name="q" class="form-control" placeholder="Search..."> -->
          <!-- <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> -->
        </div>
      </form>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li>
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Masters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <!-- <li>
          <a href="<?php //echo base_url('admin/state'); ?>">
            <i class="fa fa-user"></i> <span>State</span>
          </a>
        </li>

        <li>
          <a href="<?php //echo base_url('admin/city'); ?>">
            <i class="fa fa-user"></i> <span>City</span>
          </a>
        </li> -->

        <li>
          <a href="<?php echo base_url('admin/reportcategory'); ?>">
            <i class="fa fa-user"></i> <span>Report Category</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/reportcategorylist'); ?>">
            <i class="fa fa-user"></i> <span>Report Category List</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url('admin/reportcategorylistdetail'); ?>">
            <i class="fa fa-user"></i> <span>Report Category List detail</span>
          </a>
        </li>

         <!-- <li>
          <a href="<?php //echo base_url('admin/businesssubcategory'); ?>">
            <i class="fa fa-user"></i> <span>Vendor Sub Category</span>
          </a>
        </li> 

        <li>
          <a href="<?php //echo base_url('admin/area'); ?>">
            <i class="fa fa-user"></i> <span>Area</span>
          </a>
        </li> -->

          </ul>
        </li>

        
        <li>
          <a href="<?php echo base_url('admin/samplereport'); ?>">
            <i class="fa fa-envelope"></i> <span>Sample Report</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/changeadminpassword'); ?>">
            <i class="fa fa-credit-card"></i> <span>Change Admin Password</span>
          </a>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php //echo base_url('admin/banner'); ?>">
                <i class="fa fa-money"></i> <span>Add Banner</span>
              </a>
            </li>
            <li>
              <a href="<?php //echo base_url('admin/admingallery'); ?>">
                <i class="fa fa-money"></i> <span>Add Image Gallery</span>
              </a>
            </li>
            <li>
              <a href="<?php //echo base_url('admin/adminvideogallery'); ?>">
                <i class="fa fa-money"></i> <span>Add Video Gallery</span>
              </a>
            </li>
             <li>
              <a href="<?php //echo base_url('admin/smsandnotification'); ?>">
                <i class="fa fa-money"></i> <span>Sms and Notificationold</span>
              </a>
            </li> 

            <li>
              <a href="<?php //echo base_url('admin/smsnnotification'); ?>">
                <i class="fa fa-money"></i> <span>Sms and Notification</span>
              </a>
            </li>
            
          </ul>
        </li> -->
        
        <!-- <li>
          <a href="<?php //echo base_url('admin/business'); ?>">
            <i class="fa fa-money"></i> <span>Vendor</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php //echo base_url('admin/vendorall'); ?>">
            <i class="fa fa-money"></i> <span>Vendor List</span>
          </a>
        </li>
        <li>
          <a href="<?php //echo base_url('admin/businessgallery'); ?>">
            <i class="fa fa-money"></i> <span>Vendor Gallery</span>
          </a>
        </li>
        <li>
          <a href="<?php //echo base_url('admin/offer'); ?>">
            <i class="fa fa-money"></i> <span>Offer</span>
          </a>
        </li>
        <li>
          <a href="<?php //echo base_url('admin/enquiry'); ?>">
            <i class="fa fa-money"></i> <span>Enquiry</span>
          </a>
        </li> -->
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Karigar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php //echo base_url('admin/vendor'); ?>">
                <i class="fa fa-money"></i> <span>Add Karigar/Vendor</span>
              </a>
            </li>
            <li>
              <a href="<?php //echo base_url('admin/vendorgallery'); ?>">
                <i class="fa fa-money"></i> <span>Add Karigar Gallery</span>
              </a>
            </li>
            <li>
              <a href="<?php //echo base_url('admin/subscription'); ?>">
                <i class="fa fa-money"></i> <span>Add Subscription</span>
              </a>
            </li>
          </ul>
        </li> -->

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php //echo base_url('admin/subscriptionreport'); ?>">
                <i class="fa fa-money"></i> <span>Subscriptiontryingwithjs</span>
              </a>
            </li>

            <li>
              <a href="<?php //echo base_url('admin/subscriptionreporting'); ?>">
                <i class="fa fa-money"></i> <span>Subscription</span>
              </a>
            </li>

            <li>
              <a href="<?php // echo base_url('admin/paymentreport'); ?>">
                <i class="fa fa-money"></i> <span>Payment</span>
              </a>
            </li>

            <li>
              <a href="<?php //echo base_url('admin/referralreport'); ?>">
                <i class="fa fa-money"></i> <span>Referral</span>
              </a>
            </li>
          </ul>
        </li> --> 
        <!-- <li>
          <a href="<?php //echo base_url('admin/subscription'); ?>">
            <i class="fa fa-money"></i> <span>Subscription</span>
          </a>
        </li> -->
        
        
        <!-- <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index-2.html"><i class="fa fa-circle-o"></i> Dashboard 1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard 2</a></li>
            <li><a href="index3.html"><i class="fa fa-circle-o"></i> Dashboard 3</a></li>
            <li><a href="index4.html"><i class="fa fa-circle-o"></i> Dashboard 4</a></li>
            <li><a href="index5.html"><i class="fa fa-circle-o"></i> Dashboard 5</a></li>
            <li><a href="index6.html"><i class="fa fa-circle-o"></i> Dashboard 6</a></li>
          </ul>
        </li> -->
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets/widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
            <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-o"></i> Weather</a></li>
            <li><a href="pages/widgets/calendar.html"><i class="fa fa-circle-o"></i> Calendar</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/cards.html"><i class="fa fa-circle-o"></i> User Cards</a></li>
            <li><a href="pages/UI/tab.html"><i class="fa fa-circle-o"></i> Tab</a></li>
            <li><a href="pages/UI/sweatalert.html"><i class="fa fa-circle-o"></i> Sweet Alert</a></li>
            <li><a href="pages/UI/notification.html"><i class="fa fa-circle-o"></i> Notification</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
            <li><a href="pages/forms/form-validation.html"><i class="fa fa-circle-o"></i> Form Validation</a></li>
            <li><a href="pages/forms/form-wizard.html"><i class="fa fa-circle-o"></i> Form Wizard</a></li>
            <li><a href="pages/forms/code-editor.html"><i class="fa fa-circle-o"></i> Code Editor</a></li>
            <li><a href="pages/forms/editor-markdown.html"><i class="fa fa-circle-o"></i> Markdown</a></li>
            <li><a href="pages/forms/xeditable.html"><i class="fa fa-circle-o"></i> Xeditable Editor</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/gallery.html"><i class="fa fa-circle-o"></i> Gallery</a></li>
            <li><a href="pages/examples/faq.html"><i class="fa fa-circle-o"></i> FAQs</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/map/map-google.html"><i class="fa fa-circle-o"></i> Google Map</a></li>
            <li><a href="pages/map/map-vector.html"><i class="fa fa-circle-o"></i> Vector Map</a></li>
          </ul>
        </li> -->        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->        
        
      </ul>
    </section>
</aside>