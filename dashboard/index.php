<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="UTF-8">
  <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
  <meta name="keywords" content="HTML5 Admin Template">
  <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
  <meta name="author" content="JSOFT.net">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Web Fonts  -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css">
  <!-- Specific Page Vendor CSS -->
  <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
  <link rel="stylesheet" href="assets/vendor/morris/morris.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/stylesheets/theme.css">
  <!-- Skin CSS -->
  <link rel="stylesheet" href="assets/stylesheets/skins/default.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
  <!-- Head Libs -->
  <script src="assets/vendor/modernizr/modernizr.js"></script>
</head>

<body>
  <section class="body">
    <!-- start: header -->
    <header class="header">
      <div class="logo-container">
        <a href="../" class="logo">
          <img src="assets/images/logo.png" height="35" alt="JSOFT Admin">
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
          <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
      </div>
      <!-- start: search & user box -->
      <div class="header-right">
        <form action="pages-search-results.html" class="search nav-form">
          <div class="input-group input-search">
            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <span class="separator"></span>
        <div id="userbox" class="userbox">
          <a href="#" data-toggle="dropdown">
            <figure class="profile-picture">
              <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg">
            </figure>
            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
              <span class="name">Admin</span>
              <span class="role">administrator</span>
            </div>
            <i class="fa custom-caret"></i>
          </a>
          <div class="dropdown-menu">
            <ul class="list-unstyled">
              <li class="divider"></li>
              <li>
                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Profil</a>
              </li>
              <li>
                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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
        <div class="sidebar-header">
          <div class="sidebar-title"> Navigation </div>
          <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>
        <div class="nano">
          <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
              <ul class="nav nav-main">
                <li class="nav-active">
                  <a href="index.html">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Dashboard</span>
                  </a>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="pages-signup.html"> Sign Up </a>
                    </li>
                    <li>
                      <a href="pages-signin.html"> Sign In </a>
                    </li>
                    <li>
                      <a href="pages-recover-password.html"> Recover Password </a>
                    </li>
                    <li>
                      <a href="pages-lock-screen.html"> Locked Screen </a>
                    </li>
                    <li>
                      <a href="pages-user-profile.html"> User Profile </a>
                    </li>
                    <li>
                      <a href="pages-session-timeout.html"> Session Timeout </a>
                    </li>
                    <li>
                      <a href="pages-calendar.html"> Calendar </a>
                    </li>
                    <li>
                      <a href="pages-timeline.html"> Timeline </a>
                    </li>
                    <li>
                      <a href="pages-media-gallery.html"> Media Gallery </a>
                    </li>
                    <li>
                      <a href="pages-invoice.html"> Invoice </a>
                    </li>
                    <li>
                      <a href="pages-blank.html"> Blank Page </a>
                    </li>
                    <li>
                      <a href="pages-404.html"> 404 </a>
                    </li>
                    <li>
                      <a href="pages-500.html"> 500 </a>
                    </li>
                    <li>
                      <a href="pages-log-viewer.html"> Log Viewer </a>
                    </li>
                    <li>
                      <a href="pages-search-results.html"> Search Results </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="ui-elements-typography.html"> Typography </a>
                    </li>
                    <li>
                      <a href="ui-elements-icons.html"> Icons </a>
                    </li>
                    <li>
                      <a href="ui-elements-tabs.html"> Tabs </a>
                    </li>
                    <li>
                      <a href="ui-elements-panels.html"> Panels </a>
                    </li>
                    <li>
                      <a href="ui-elements-widgets.html"> Widgets </a>
                    </li>
                    <li>
                      <a href="ui-elements-portlets.html"> Portlets </a>
                    </li>
                    <li>
                      <a href="ui-elements-buttons.html"> Buttons </a>
                    </li>
                    <li>
                      <a href="ui-elements-alerts.html"> Alerts </a>
                    </li>
                    <li>
                      <a href="ui-elements-notifications.html"> Notifications </a>
                    </li>
                    <li>
                      <a href="ui-elements-modals.html"> Modals </a>
                    </li>
                    <li>
                      <a href="ui-elements-lightbox.html"> Lightbox </a>
                    </li>
                    <li>
                      <a href="ui-elements-progressbars.html"> Progress Bars </a>
                    </li>
                    <li>
                      <a href="ui-elements-sliders.html"> Sliders </a>
                    </li>
                    <li>
                      <a href="ui-elements-carousels.html"> Carousels </a>
                    </li>
                    <li>
                      <a href="ui-elements-accordions.html"> Accordions </a>
                    </li>
                    <li>
                      <a href="ui-elements-nestable.html"> Nestable </a>
                    </li>
                    <li>
                      <a href="ui-elements-tree-view.html"> Tree View </a>
                    </li>
                    <li>
                      <a href="ui-elements-grid-system.html"> Grid System </a>
                    </li>
                    <li>
                      <a href="ui-elements-charts.html"> Charts </a>
                    </li>
                    <li>
                      <a href="ui-elements-animations.html"> Animations </a>
                    </li>
                    <li>
                      <a href="ui-elements-extra.html"> Extra </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="forms-basic.html"> Basic </a>
                    </li>
                    <li>
                      <a href="forms-advanced.html"> Advanced </a>
                    </li>
                    <li>
                      <a href="forms-validation.html"> Validation </a>
                    </li>
                    <li>
                      <a href="forms-layouts.html"> Layouts </a>
                    </li>
                    <li>
                      <a href="forms-wizard.html"> Wizard </a>
                    </li>
                    <li>
                      <a href="forms-code-editor.html"> Code Editor </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="tables-basic.html"> Basic </a>
                    </li>
                    <li>
                      <a href="tables-advanced.html"> Advanced </a>
                    </li>
                    <li>
                      <a href="tables-responsive.html"> Responsive </a>
                    </li>
                    <li>
                      <a href="tables-editable.html"> Editable </a>
                    </li>
                    <li>
                      <a href="tables-ajax.html"> Ajax </a>
                    </li>
                    <li>
                      <a href="tables-pricing.html"> Pricing </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="maps-google-maps.html"> Basic </a>
                    </li>
                    <li>
                      <a href="maps-google-maps-builder.html"> Map Builder </a>
                    </li>
                    <li>
                      <a href="maps-vector.html"> Vector </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a href="layouts-default.html"> Default </a>
                    </li>
                    <li>
                      <a href="layouts-boxed.html"> Boxed </a>
                    </li>
                    <li>
                      <a href="layouts-menu-collapsed.html"> Menu Collapsed </a>
                    </li>
                    <li>
                      <a href="layouts-scroll.html"> Scroll </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-parent">
                  <ul class="nav nav-children">
                    <li>
                      <a>First Level</a>
                    </li>
                    <li class="nav-parent">
                      <a>Second Level</a>
                      <ul class="nav nav-children">
                        <li class="nav-parent">
                          <a>Third Level</a>
                          <ul class="nav nav-children">
                            <li>
                              <a>Third Level Link #1</a>
                            </li>
                            <li>
                              <a>Third Level Link #2</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a>Second Level Link #1</a>
                        </li>
                        <li>
                          <a>Second Level Link #2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <hr class="separator">
            <div class="sidebar-widget widget-tasks">
              <div class="widget-header">
                <h6>Projects</h6>
                <div class="widget-toggle">+</div>
              </div>
              <div class="widget-content">
                <ul class="list-unstyled m-none">
                  <li><a href="#">Smart Home</a></li>
                  <li><a href="#">Smart Building</a></li>
                  <li><a href="#">Smart Office</a></li>
                </ul>
              </div>
            </div>
            <hr class="separator">
          </div>
        </div>
      </aside>
      <!-- end: sidebar -->
      <section role="main" class="content-body">
        <header class="page-header">
          <h2>Dashboard</h2>
          <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
              <li>
                <a href="index.html">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li><span>Dashboard</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
          </div>
        </header>
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-6">
            <section class="panel">
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="chart-data-selector" id="salesSelectorWrapper">
                      <h2> Grafik 1 <strong>
                          <select class="form-control" id="salesSelector">
                            <option value="JSOFT Admin" selected="">2018</option>
                            <option value="JSOFT Drupal">2017</option>
                            <option value="JSOFT Wordpress">2016</option>
                          </select>
                        </strong>
                      </h2>
                      <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                        <!-- Flot: Sales JSOFT Admin -->
                        <div class="chart chart-sm" data-sales-rel="JSOFT Admin" id="flotDashSales1"></div>
                        <script>
                          var flotDashSales1Data = [{
                            data: [
                              ["Jan", 140],
                              ["Feb", 240],
                              ["Mar", 190],
                              ["Apr", 140],
                              ["Mei", 180],
                              ["Jun", 320],
                              ["Jul", 270],
                              ["Aug", 180],
                              ["Sep", 230],
                              ["Okt", 250],
                              ["Nov", 240],
                              ["Des", 280]
                            ],
                            color: "#0088cc"
                          }];
                          // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                        </script>
                        <!-- Flot: Sales JSOFT Drupal -->
                        <div class="chart chart-sm" data-sales-rel="JSOFT Drupal" id="flotDashSales2"></div>
                        <script>
                          var flotDashSales2Data = [{
                            data: [
                              ["Jan", 240],
                              ["Feb", 240],
                              ["Mar", 290],
                              ["Apr", 540],
                              ["Mei", 480],
                              ["Jun", 220],
                              ["Jul", 170],
                              ["Aug", 180],
                              ["Sep", 230],
                              ["Okt", 250],
                              ["Nov", 240],
                              ["Des", 280]
                            ],
                            color: "#2baab1"
                          }];
                          // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                        </script>
                        <!-- Flot: Sales JSOFT Wordpress -->
                        <div class="chart chart-sm" data-sales-rel="JSOFT Wordpress" id="flotDashSales3"></div>
                        <script>
                          var flotDashSales3Data = [{
                            data: [
                              ["Jan", 840],
                              ["Feb", 740],
                              ["Mar", 690],
                              ["Apr", 940],
                              ["Mei", 1180],
                              ["Jun", 820],
                              ["Jul", 570],
                              ["Aug", 180],
                              ["Sep", 230],
                              ["Okt", 250],
                              ["Nov", 240],
                              ["Des", 280]
                            ],
                            color: "#734ba9"
                          }];
                          // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 text-center">
                    <h2 class="panel-title mt-md">Grafik 2</h2>
                    <div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
                      <div class="liquid-meter">
                        <meter min="0" max="100" value="35" id="meterSales"></meter>
                      </div>
                      <div class="liquid-meter-selector" id="meterSalesSel">
                        <a href="#" data-val="35" class="active">Max</a>
                        <a href="#" data-val="28">MIN</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Grafik 3</h2>
                <p class="panel-subtitle">Controh grafik 1.</p>
              </header>
              <div class="panel-body">
                <!-- Flot: Basic -->
                <div class="chart chart-md" id="flotDashBasic"></div>
                <script>
                  var flotDashBasicData = [{
                    data: [
                      [0, 170],
                      [1, 169],
                      [2, 173],
                      [3, 188],
                      [4, 147],
                      [5, 113],
                      [6, 128],
                      [7, 169],
                      [8, 173],
                      [9, 128],
                      [10, 128]
                    ],
                    label: "Series 1",
                    color: "#0088cc"
                  }, {
                    data: [
                      [0, 115],
                      [1, 124],
                      [2, 114],
                      [3, 121],
                      [4, 115],
                      [5, 83],
                      [6, 102],
                      [7, 148],
                      [8, 147],
                      [9, 103],
                      [10, 113]
                    ],
                    label: "Series 2",
                    color: "#2baab1"
                  }, {
                    data: [
                      [0, 70],
                      [1, 69],
                      [2, 73],
                      [3, 88],
                      [4, 47],
                      [5, 13],
                      [6, 28],
                      [7, 69],
                      [8, 73],
                      [9, 28],
                      [10, 28]
                    ],
                    label: "Series 3",
                    color: "#734ba9"
                  }];
                  // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                </script>
              </div>
            </section>
          </div>
          <div class="col-md-6">
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Grafik 4</h2>
                <p class="panel-subtitle">Contoh grafik 2.</p>
              </header>
              <div class="panel-body">
                <!-- Flot: Curves -->
                <div class="chart chart-md" id="flotDashRealTime"></div>
              </div>
            </section>
          </div>
        </div>
        <!-- start: page -->
        <!-- end: page -->
      </section>
    </div>
    <aside id="sidebar-right" class="sidebar-right">
      <div class="nano">
        <div class="nano-content">
          <a href="#" class="mobile-close visible-xs"> Collapse <i class="fa fa-chevron-right"></i>
          </a>
          <div class="sidebar-right-wrapper">
            <div class="sidebar-widget widget-calendar">
              <h6>Tanggal</h6>
              <div data-plugin-datepicker="" data-plugin-skin="dark"></div>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </section>
  <!-- Vendor -->
  <script src="assets/vendor/jquery/jquery.js"></script>
  <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
  <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
  <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <!-- Specific Page Vendor -->
  <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
  <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
  <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
  <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
  <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
  <script src="assets/vendor/flot/jquery.flot.js"></script>
  <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
  <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
  <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
  <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
  <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
  <script src="assets/vendor/raphael/raphael.js"></script>
  <script src="assets/vendor/morris/morris.js"></script>
  <script src="assets/vendor/gauge/gauge.js"></script>
  <script src="assets/vendor/snap-svg/snap.svg.js"></script>
  <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
  <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
  <script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
  <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
  <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
  <!-- Theme Base, Components and Settings -->
  <script src="assets/javascripts/theme.js"></script>
  <!-- Theme Custom -->
  <script src="assets/javascripts/theme.custom.js"></script>
  <!-- Theme Initialization Files -->
  <script src="assets/javascripts/theme.init.js"></script>
  <!-- Examples -->
  <script src="assets/javascripts/dashboard/examples.dashboard.js" style=""></script>
  
</body>

</html>