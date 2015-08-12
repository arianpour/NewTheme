<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Contacts | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="../../../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../../../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../../../assets/css/site.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="../../../assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../../../assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../../../assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../../../assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../../../assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../../../assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="../../../assets/vendor/filament-tablesaw/tablesaw.css">
  <link rel="stylesheet" href="../../../assets/vendor/slidepanel/slidePanel.css">

  <!-- Page -->
  <link rel="stylesheet" href="../../../assets/css/apps/contacts.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../../../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../../../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700'>
  <!-- Inline -->
  <style>
    .animation-delay-100 {
      -webkit-animation-delay: 100ms;
      animation-delay: 100ms;
    }
    
    .animation-duration-300 {
      -webkit-animation-duration: 300ms;
      animation-duration: 300ms;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../../../assets/vendor/modernizr/modernizr.js"></script>
  <script src="../../../assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="app-contacts">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../../../assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> Remark</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="fade" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/panels.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../../assets/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="../../../assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="../../../assets/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../../../assets/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../../../assets/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../../../assets/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">2</span>
                </div>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../index.html" data-slug="dashboard-v1">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard v1</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../dashboard/v2.html" data-slug="dashboard-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard v2</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Layouts</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/menu-collapsed.html" data-slug="layout-menu-collapsed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Collapsed</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/menu-expended.html" data-slug="layout-menu-expended">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Expended</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/grids.html" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Grid Scaffolding</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/headers.html" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Different Headers</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/panel-transition.html" data-slug="layout-panel-transition">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Panel Transition</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/boxed.html" data-slug="layout-boxed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Boxed Layout</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/two-columns.html" data-slug="layout-two-columns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Two Columns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/menubar-flipped.html" data-slug="layout-menubar-flipped">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menubar Flipped</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../layouts/bordered-header.html" data-slug="layout-bordered-header">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bordered Header</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Pages</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Errors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/400.html" data-slug="page-error-400">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">400</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/403.html" data-slug="page-error-403">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">403</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/404.html" data-slug="page-error-404">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">404</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/500.html" data-slug="page-error-500">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">500</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/503.html" data-slug="page-error-503">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/faq.html" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">FAQ</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/gallery.html" data-slug="page-gallery">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gallery</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/gallery-grid.html" data-slug="page-gallery-grid">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gallery Grid</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/search-result.html" data-slug="page-search-result">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Search Result</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="page-map">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maps</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/map-google.html" data-slug="page-map-google">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Google Maps</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../pages/map-vector.html" data-slug="page-map-vector">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Vector Maps</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/maintenance.html" data-slug="page-maintenance">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maintenance</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/forgot-password.html" data-slug="page-forgot-password">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Forgot Password</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/lockscreen.html" data-slug="page-lockscreen">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lockscreen</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/login.html" data-slug="page-login">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Login</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/register.html" data-slug="page-register">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Register</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/login-v2.html" data-slug="page-login-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Login V2</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/register-v2.html" data-slug="page-register-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Register V2</span>
                    <div class="site-menu-label">
                      <span class="label label-info label-round">new</span>
                    </div>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/user.html" data-slug="page-user">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">User List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/invoice.html" data-slug="page-invoice">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Invoice</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/blank.html" data-slug="page-blank">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blank Page</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/email.html" data-slug="page-email">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Email</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/code-editor.html" data-slug="page-code-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Code Editor</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../pages/profile.html" data-slug="page-profile">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Profile</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Elements</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Basic UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="uikit-panel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Panel</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../uikit/panel-structure.html" data-slug="uikit-panel-structure">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Structure</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../uikit/panel-actions.html" data-slug="uikit-panel-actions">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Actions</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../uikit/panel-portlets.html" data-slug="uikit-panel-portlets">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Portlets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buttons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/dropdowns.html" data-slug="uikit-dropdowns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dropdowns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/icons.html" data-slug="uikit-icons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Icons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/list.html" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/tooltip-popover.html" data-slug="uikit-tooltip-popover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/modals.html" data-slug="uikit-modals">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Modals</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/tabs-accordions.html" data-slug="uikit-tabs-accordions">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/images.html" data-slug="uikit-images">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Images</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/badges-labels.html" data-slug="uikit-badges-labels">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Badges &amp; Labels</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/progress-bars.html" data-slug="uikit-progress-bars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Progress Bars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/carousel.html" data-slug="uikit-carousel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Carousel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/typography.html" data-slug="uikit-typography">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Typography</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/colors.html" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Colors</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../uikit/utilities.html" data-slug="uikit-utilities">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Utilties</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Advanced UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item hidden-xs">
                  <a href="javascript:void(0)" data-slug="advanced-tour">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tour</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/animation.html" data-slug="advanced-animation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Animation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/highlight.html" data-slug="advanced-highlight">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Highlight</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/lightbox.html" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lightbox</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/scrollable.html" data-slug="advanced-scrollable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Scrollable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/rating.html" data-slug="advanced-rating">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Rating</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/context-menu.html" data-slug="advanced-context-menu">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Context Menu</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/alertify.html" data-slug="advanced-alertify">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alertify</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/masonry.html" data-slug="advanced-masonry">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Masonry</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/treeview.html" data-slug="advanced-treeview">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Treeview</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/toastr.html" data-slug="advanced-toastr">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Toastr</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/maps-vector.html" data-slug="advanced-maps-vector">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Vector Maps</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/maps-google.html" data-slug="advanced-maps-google">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Google Maps</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/sortable-nestable.html" data-slug="advanced-sortable-nestable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../advanced/bootbox-sweetalert.html" data-slug="advanced-bootbox-sweetalert">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Structure</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/alerts.html" data-slug="structure-alerts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alerts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/ribbon.html" data-slug="structure-ribbon">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ribbon</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/pricing-tables.html" data-slug="structure-pricing-tables">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pricing Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/overlay.html" data-slug="structure-overlay">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Overlay</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/cover.html" data-slug="structure-cover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Cover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/timeline-simple.html" data-slug="structure-timeline-simple">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Simple Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/timeline.html" data-slug="structure-timeline">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/step.html" data-slug="structure-step">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Step</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/comments.html" data-slug="structure-comments">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Comments</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/media.html" data-slug="structure-media">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/chat.html" data-slug="structure-chat">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/testimonials.html" data-slug="structure-testimonials">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Testimonials</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/nav.html" data-slug="structure-nav">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Nav</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/navbars.html" data-slug="structure-navbars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Navbars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/blockquotes.html" data-slug="structure-blockquotes">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blockquotes</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/pagination.html" data-slug="structure-pagination">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pagination</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../structure/breadcrumbs.html" data-slug="structure-breadcrumbs">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Breadcrumbs</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="widgets">
                <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                <span class="site-menu-title">Widgets</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/statistics.html" data-slug="widgets-statistics">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Statistics Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/data.html" data-slug="widgets-data">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/blog.html" data-slug="widgets-blog">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blog Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/chart.html" data-slug="widgets-chart">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chart Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/social.html" data-slug="widgets-social">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Social Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../widgets/weather.html" data-slug="widgets-weather">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Weather Widgets</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="forms">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Forms</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/general.html" data-slug="forms-general">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">General Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/material.html" data-slug="forms-material">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Material Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/advanced.html" data-slug="forms-advanced">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Advanced Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/layouts.html" data-slug="forms-layouts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Layouts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/wizard.html" data-slug="forms-wizard">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Wizard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/validation.html" data-slug="forms-validation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Validation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/masks.html" data-slug="forms-masks">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Masks</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/editable.html" data-slug="forms-editable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Editable</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="forms-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Editors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../forms/editor-summernote.html" data-slug="forms-editor-summernote">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Summernote</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../forms/editor-markdown.html" data-slug="forms-editor-markdown">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Markdown</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../../forms/editor-ace.html" data-slug="forms-editor-ace">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Ace Editor</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/image-cropping.html" data-slug="forms-image-cropping">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Image Cropping</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../forms/file-uploads.html" data-slug="forms-file-uploads">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">File Uploads</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="tables">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Tables</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/basic.html" data-slug="tables-basic">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Basic Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/bootstrap.html" data-slug="tables-bootstrap">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bootstrap Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/floatthead.html" data-slug="tables-floatthead">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">floatThead</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/responsive.html" data-slug="tables-responsive">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Responsive Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/editable.html" data-slug="tables-editable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Editable Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/footable.html" data-slug="tables-foo">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">FooTable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../tables/datatable.html" data-slug="tables-datatable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">DataTables</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="chart">
                <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                <span class="site-menu-title">Chart</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/chartjs.html" data-slug="chart-chartjs">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chart.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/gauges.html" data-slug="chart-gauges">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gauges</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/flot.html" data-slug="chart-flot">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Flot</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/peity.html" data-slug="chart-peity">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Peity</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/sparkline.html" data-slug="chart-sparkline">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Sparkline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/morris.html" data-slug="chart-morris">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Morris</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/chartist.html" data-slug="chart-chartist">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chartist.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/rickshaw.html" data-slug="chart-rickshaw">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Rickshaw</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/pie-progress.html" data-slug="chart-pie-progress">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pie Progress</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../../charts/c3.html" data-slug="chart-c3">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">C3</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Apps</li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="app">
                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                <span class="site-menu-title">Apps</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item active">
                  <a class="animsition-link" href="contacts.blade.php" data-slug="app-contacts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Contacts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../calendar/calendar.html" data-slug="app-calendar">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Calendar</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="app-document">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Documents</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../documents/articles.html" data-slug="app-document-articles">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Articles</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../documents/categories.html" data-slug="app-document-categories">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Categories</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../documents/article.html" data-slug="app-document-article">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Article</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forum/forum.html" data-slug="app-forum">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Forum</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../projects/projects.html" data-slug="app-projects">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Projects</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../mailbox/mailbox.html" data-slug="app-mailbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Mailbox</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../media/overview.html" data-slug="app-media">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Angular UI</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../../angular/#/angularui/alert" data-slug="angular">
                <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
                <span class="site-menu-title">Angular UI</span>
                <div class="site-menu-label">
                  <span class="label label-danger label-round">new</span>
                </div>
              </a>
            </li>
          </ul>

          <div class="site-menubar-section">
            <h5>
              Milestone
              <span class="pull-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="pull-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="../mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="../calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="contacts.blade.php">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="../media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="../documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="../projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="../forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="../../index.html">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>


  <div class="page bg-white animsition">
    <div class="page-aside">
      <!-- Contacts Sidebar -->
      <div class="page-aside-switch">
        <i class="icon wb-chevron-left" aria-hidden="true"></i>
        <i class="icon wb-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner">
        <div class="page-aside-section">
          <div class="list-group">
            <a class="list-group-item" href="javascript:void(0)">
              <span class="item-right">61</span><i class="icon wb-inbox" aria-hidden="true"></i>All contacts</a>
          </div>
        </div>
        <div class="page-aside-section">
          <h5 class="page-aside-title">LABEL</h5>
          <div class="list-group has-actions">
            <div class="list-group-item">
              <div class="list-content">
                <span class="item-right">10</span>
                <span class="list-text">Work</span>
                <div class="item-actions">
                  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                  <span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="list-editable">
                <div class="form-group form-material">
                  <input type="text" class="form-control empty" name="label" data-bind=".list-text"
                  value="Work">
                  <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
                  aria-label="Close" aria-expanded="true"></button>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="list-content">
                <span class="item-right">5</span>
                <span class="list-text">Family</span>
                <div class="item-actions">
                  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                  <span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="list-editable">
                <div class="form-group form-material">
                  <input type="text" class="form-control empty" name="label" data-bind=".list-text"
                  value="Family">
                  <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
                  aria-label="Close" aria-expanded="true"></button>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="list-content">
                <span class="item-right">16</span>
                <span class="list-text">Private</span>
                <div class="item-actions">
                  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                  <span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="list-editable">
                <div class="form-group form-material">
                  <input type="text" class="form-control empty" name="label" data-bind=".list-text"
                  value="Private">
                  <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
                  aria-label="Close" aria-expanded="true"></button>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="list-content">
                <span class="item-right">30</span>
                <span class="list-text">Friends</span>
                <div class="item-actions">
                  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                  <span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="list-editable">
                <div class="form-group form-material">
                  <input type="text" class="form-control empty" name="label" data-bind=".list-text"
                  value="Friends">
                  <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
                  aria-label="Close" aria-expanded="true"></button>
                </div>
              </div>
            </div>
            <a class="list-group-item" href="javascript:void(0)">
              <i class="icon wb-plus" aria-hidden="true"></i> Add New Label
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contacts Content -->
    <div class="page-main">

      <!-- Contacts Content Header -->
      <div class="page-header">
        <h1 class="page-title">Contact List</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>

      <!-- Contacts Content -->
      <div class="page-content page-content-table">

        <!-- Actions -->
        <div class="page-content-actions">
          <div class="pull-right">
            <div class="dropdown">
              <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false">
                More
                <span class="icon wb-chevron-down-mini" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">More</a></li>
                <li><a href="javascript:void(0)">More</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-outline btn-default btn-md empty-btn">Empty All</button>
          </div>
          <div class="btn-group">
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon wb-folder" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Trash</a></li>
                <li><a href="javascript:void(0)">Spam</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon wb-tag" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
              </ul>
            </div>
          </div>
        </div>


        <!-- Contacts -->
        <table class="table tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
        data-animate="fade" data-child="tr" data-selectable="selectable">
          <thead>
            <tr>
              <th class="cell-60" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                  />
                  <label for="select_all"></label>
                </span>
              </th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Name</th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Phone</th>
              <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Email</th>
            </tr>
          </thead>
          <tbody>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                  />
                  <label for="contacts_1"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/1.jpg"
                  alt="...">
                </a>
                Herman Beck
              </td>
              <td class="cell-300">(119)-298-8025</td>
              <td>julio.williamson73@gmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_2"
                  />
                  <label for="contacts_2"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/2.jpg"
                  alt="...">
                </a>
                Mary Adams
              </td>
              <td class="cell-300">(838)-780-5116</td>
              <td>heidi.morrison77@hotmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_3"
                  />
                  <label for="contacts_3"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/3.jpg"
                  alt="...">
                </a>
                Caleb Richards
              </td>
              <td class="cell-300">(861)-579-6099</td>
              <td>raymond.byrd19@aol.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_4"
                  />
                  <label for="contacts_4"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/4.jpg"
                  alt="...">
                </a>
                June Lane
              </td>
              <td class="cell-300">(210)-727-1136</td>
              <td>eileen.gordon24@yahoo.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_5"
                  />
                  <label for="contacts_5"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/5.jpg"
                  alt="...">
                </a>
                Edward Fletcher
              </td>
              <td class="cell-300">(729)-682-8842</td>
              <td>jim.hunter32@gmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_6"
                  />
                  <label for="contacts_6"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/6.jpg"
                  alt="...">
                </a>
                Crystal Bates
              </td>
              <td class="cell-300">(916)-801-4120</td>
              <td>zoe.perez69@yahoo.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_7"
                  />
                  <label for="contacts_7"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/7.jpg"
                  alt="...">
                </a>
                Nathan Watts
              </td>
              <td class="cell-300">(320)-725-3333</td>
              <td>esther.kelly84@hotmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_8"
                  />
                  <label for="contacts_8"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/8.jpg"
                  alt="...">
                </a>
                Heather Harper
              </td>
              <td class="cell-300">(386)-653-1983</td>
              <td>jacob.morgan95@gmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_9"
                  />
                  <label for="contacts_9"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/9.jpg"
                  alt="...">
                </a>
                Willard Wood
              </td>
              <td class="cell-300">(130)-591-7236</td>
              <td>jacob.morgan95@gmail.com</td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_10"
                  />
                  <label for="contacts_10"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../assets/portraits/10.jpg"
                  alt="...">
                </a>
                Ronnie Ellis
              </td>
              <td class="cell-300">(769)-963-2966</td>
              <td>erin.miller29@yahoo.com</td>
            </tr>
          </tbody>
        </table>

        <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
      </div>
    </div>
  </div>

  <!-- Add Mail Form -->
  <div class="site-action animation-duration-300">
    <button type="button" class="btn-raised btn btn-success btn-floating">
      <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
      <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
      <button type="button" class="btn-raised btn btn-success btn-floating animation-slide-bottom animation-delay-100">
        <i class="icon wb-trash" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon wb-folder" aria-hidden="true"></i>
      </button>
    </div>
  </div>

  <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Create New Contact</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Phone" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="birthday" placeholder="Birthday"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Send</button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="../../../assets/vendor/jquery/jquery.js"></script>
  <script src="../../../assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="../../../assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="../../../assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="../../../assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="../../../assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="../../../assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="../../../assets/vendor/switchery/switchery.min.js"></script>
  <script src="../../../assets/vendor/intro-js/intro.js"></script>
  <script src="../../../assets/vendor/screenfull/screenfull.js"></script>
  <script src="../../../assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <!-- Plugins For This Page -->
  <script src="../../../assets/vendor/filament-tablesaw/tablesaw.js"></script>
  <script src="../../../assets/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="../../../assets/vendor/aspaginator/jquery.asPaginator.min.js"></script>
  <script src="../../../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <!-- Scripts -->
  <script src="../../../assets/js/core.js"></script>
  <script src="../../../assets/js/site.js"></script>

  <script src="../../../assets/js/sections/menu.js"></script>
  <script src="../../../assets/js/sections/menubar.js"></script>
  <script src="../../../assets/js/sections/sidebar.js"></script>

  <script src="../../../assets/js/configs/config-colors.js"></script>
  <script src="../../../assets/js/configs/config-tour.js"></script>

  <script src="../../../assets/js/components/asscrollable.js"></script>
  <script src="../../../assets/js/components/animsition.js"></script>
  <script src="../../../assets/js/components/slidepanel.js"></script>
  <script src="../../../assets/js/components/switchery.js"></script>

  <!-- Scripts For This Page -->
  <script src="../../../assets/js/plugins/sticky-header.js"></script>
  <script src="../../../assets/js/components/aspaginator.js"></script>
  <script src="../../../assets/js/apps/app.js"></script>
  <script src="../../../assets/js/apps/contacts.js"></script>
  <script src="../../../assets/js/components/animate-list.js"></script>
  <script src="../../../assets/js/components/jquery-placeholder.js"></script>
  <script src="../../../assets/js/components/material.js"></script>
  <script src="../../../assets/js/components/selectable.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';
      var AppContacts = window.AppContacts;

      $(document).ready(function() {
        AppContacts.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>