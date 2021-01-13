<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin Pro</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/images/favicon.ico" />
</head>
<body>
  <div class="container-scroller">
    <div class="pro-banner" id="proBanner">
      <div class="card pro-banner-bg border-0 rounded-0">
        <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
          <p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Get free tech support for 1 year and lifetime free updates!          </p>
          <div class="d-flex">
            <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/" target="_blank" class="btn btn-outline-light mr-2 bg-white text-dark">Check Pro Version</a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-white" href="index.html"><img src="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/images/logo-white.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="<?=url('/')?>" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="mdi mdi-apps"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
            <div class="right-sidebar-toggler-wrapper">
      <div class="sidebar-toggler" id="settings-trigger"><i class="mdi mdi-palette"></i></div>
      <div class="sidebar-toggler" id="layout-toggler"><i class="mdi mdi-settings"></i></div>
      <div class="sidebar-toggler" id="chat-toggler"><i class="mdi mdi-chat-processing"></i></div>
      <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/docs/documentation.html" target="_blank"><i class="mdi mdi-file-document-outline"></i></a></div>
      <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/product/majestic-admin-pro/" target="_blank"><i class="mdi mdi-cart"></i></a></div>
      </div>
      <div class="theme-setting-wrapper">
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
      <div id="layout-settings" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Demos </p>
        </div>
        <div class="demo-screen-wrapper">
          <a href="index.html" class="demo-thumb-image" id="theme-light-switch">
            <img src="../../images/demo/vertical-default.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-default-dark/index.html" class="demo-thumb-image">
            <img src="../../images/demo/vertical-dark.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/horizontal-default-light/index.html" class="demo-thumb-image" id="theme-dark-switch">
            <img src="../../images/demo/horizontal-menu-light.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/horizontal-default-dark/index.html" class="demo-thumb-image">
            <img src="../../images/demo/horizontal-menu-dark.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-dark-sidebar/index.html" class="demo-thumb-image">
            <img src="../../images/demo/dark-sidebar.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-boxed/index.html" class="demo-thumb-image">
            <img src="../../images/demo/boxed-layout.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-icon-menu/index.html" class="demo-thumb-image">
            <img src="../../images/demo/icon-menu.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-compact/index.html" class="demo-thumb-image">
            <img src="../../images/demo/compact-menu.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-fixed/index.html" class="demo-thumb-image">
            <img src="../../images/demo/fixed-menu.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-hidden-toggle/index.html" class="demo-thumb-image">
            <img src="../../images/demo/toggle-menu.png" alt="demo image">
          </a>
          <a href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/demo/vertical-toggle-overlay/index.html" class="demo-thumb-image">
            <img src="../../images/demo/toggle-overlay-menu.png" alt="demo image">
          </a>
        </div>
      </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
      </ul>
      <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          <div class="add-items d-flex px-3 mb-0">
            <form class="form w-100">
              <div class="form-group d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
              </div>
            </form>
          </div>
          <div class="list-wrapper px-3">
            <ul class="d-flex flex-column-reverse todo-list">
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Team review meeting at 3.00 PM
                  </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Prepare for presentation
                  </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Resolve all the low priority tickets due today
                  </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Schedule meeting for next week
                  </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Project review
                  </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
            </ul>
          </div>
          <div class="events py-4 border-bottom px-3">
            <div class="wrapper d-flex mb-2">
              <i class="mdi mdi-circle-outline text-primary mr-2"></i>
              <span>Feb 11 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
            <p class="text-gray mb-0">build a js based app</p>
          </div>
          <div class="events pt-4 px-3">
            <div class="wrapper d-flex mb-2">
              <i class="mdi mdi-circle-outline text-primary mr-2"></i>
              <span>Feb 7 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
            <p class="text-gray mb-0 ">Call Sarah Graves</p>
          </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
          </div>
          <ul class="chat-list">
            <li class="list active">
              <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">19 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <div class="wrapper d-flex">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class="badge badge-success badge-pill my-auto mx-2">4</div>
              <small class="text-muted my-auto">23 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">14 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class="text-muted my-auto">2 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">5 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">47 min</small>
            </li>
          </ul>
        </div>
        <!-- chat tab ends -->
      </div>
      </div>
            <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="mdi mdi-puzzle menu-icon"></i>
              <span class="menu-title">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Advanced UI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>                
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="mdi mdi-pencil-box-outline menu-icon"></i>
              <span class="menu-title">Editors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
              <i class="mdi mdi-comment-alert menu-icon"></i>
              <span class="menu-title">Popups</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
              <i class="mdi mdi-bell menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="mdi mdi-map menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="mdi mdi-alert-circle menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="mdi mdi-file menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">E-commerce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
              <i class="mdi mdi-email menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
              <i class="mdi mdi-calendar-range menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html">
              <i class="mdi mdi-playlist-check menu-icon"></i>
              <span class="menu-title">Todo List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">
        @if (session('login_successful'))
        <div class="row">
        <div class="col-md-12">
          <div class="alert alert-fill-primary" role="alert"><i class="mdi mdi-alert-circle"></i><a aria-label="Close " data-dismiss="alert" class="closed pull-right fa fa-times"></a>
          {{ session('login_successful') }}
          </div>
        </div>
        </div>
        @endif

        <div role="alert" class="alert  alert-success alert-dismissible"><a aria-label="Close " data-dismiss="alert" class="closed pull-right fa fa-times"></a><p>successfully updated.</p></div>

          <div class="row">
            <div class="col-md-12 grid-margin">
            <div id="show_flush_data"> </div>
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                  
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4 border-left-0 border-top-0 border-right-0" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0 border-left-0 border-bottom-0 border-right-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-calendar-heart"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-currency-usd"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-eye"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-download"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-flag"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-calendar-heart"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>  
                              <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkB" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkB">
                                  <a class="dropdown-item" href="#">12 Aug 2018</a>
                                  <a class="dropdown-item" href="#">22 Sep 2018</a>
                                  <a class="dropdown-item" href="#">21 Oct 2018</a>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-currency-usd"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-eye"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-download"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-flag"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-calendar-heart"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkC" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkC">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-currency-usd"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-eye"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-download"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                          <div class="icon-box-secondary mr-3">
                            <i class="mdi mdi-flag"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div id="cashSalesCarousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body border-bottom">
                        <p class="card-title">Cash sales</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="cash-sales-chart"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">30%</h2>
                              <i class="mdi mdi-chevron-up text-success icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Sales last month</p>
                            <h2 class="mb-0">8543</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.321%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-primary icon-box-lg">
                              <i class="mdi mdi-wallet"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of July</h5>
                        <p class="text-muted mb-0">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body border-bottom">
                        <p class="card-title">Cash sales</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="cash-sales-chart-b"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">41%</h2>
                              <i class="mdi mdi-chevron-up text-success icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Sales last month</p>
                            <h2 class="mb-0">1133</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.387%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-primary icon-box-lg">
                              <i class="mdi mdi-wallet"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of August</h5>
                        <p class="text-muted mb-0">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev bg-white" href="#cashSalesCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next bg-white" href="#cashSalesCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>    
              </div>
            </div>
            <div class="col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div id="monthlyIncomeCarousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body border-bottom">
                        <p class="card-title">Monthly income</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="monthly-income-chart"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">16%</h2>
                              <i class="mdi mdi-chevron-up text-warning icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Sales income</p>
                            <h2 class="mb-0">20087</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.754%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-warning icon-box-lg">
                              <i class="mdi mdi-credit-card"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of January</h5>
                        <p class="text-muted mb-0">The first is a non technical method which requires the use of adware removal software. Download free </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body border-bottom">
                        <p class="card-title">Monthly income</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="monthly-income-chart-b"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">23%</h2>
                              <i class="mdi mdi-chevron-up text-warning icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Sales income</p>
                            <h2 class="mb-0">7368</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.489%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-warning icon-box-lg">
                              <i class="mdi mdi-credit-card"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of February</h5>
                        <p class="text-muted mb-0">The first is a non technical method which requires the use of adware removal software. Download free </p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev bg-white" href="#monthlyIncomeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next bg-white" href="#monthlyIncomeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>    
              </div>
            </div>
            <div class="col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div id="yearlySalesCarousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body border-bottom">
                        <p class="card-title">Yearly sales</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="yearly-sales-chart"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">52%</h2>
                              <i class="mdi mdi-chevron-down text-danger icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Purchases</p>
                            <h2 class="mb-0">8304</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.846%</small>
                              <i class="mdi mdi-chevron-down"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-info icon-box-lg">
                              <i class="mdi mdi-cart"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of March</h5>
                        <p class="text-muted mb-0">While most people enjoy casino gambling, sports betting, lottery and bingo playing for the fun and </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body border-bottom">
                        <p class="card-title">Yearly sales</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="yearly-sales-chart-b"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">29%</h2>
                              <i class="mdi mdi-chevron-down text-danger icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Purchases</p>
                            <h2 class="mb-0">8543</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.795%</small>
                              <i class="mdi mdi-chevron-down"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-info icon-box-lg">
                              <i class="mdi mdi-cart"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of April</h5>
                        <p class="text-muted mb-0">While most people enjoy casino gambling, sports betting, lottery and bingo playing for the fun and </p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev bg-white" href="#yearlySalesCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next bg-white" href="#yearlySalesCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>    
              </div>
            </div>
            <div class="col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div id="dailyDepositsCarousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body border-bottom">
                        <p class="card-title">Daily deposits</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="daily-deposits-chart"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">19%</h2>
                              <i class="mdi mdi-chevron-up text-success icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Security deposits</p>
                            <h2 class="mb-0">2388</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.321%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-success icon-box-lg">
                              <i class="mdi mdi-calendar-heart"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of May</h5>
                        <p class="text-muted mb-0">According to the research firm Frost & Sullivan, the estimated size of the North American used test</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body border-bottom">
                        <p class="card-title">Daily deposits</p>
                        <div class="row">
                          <div class="col-6">
                            <canvas id="daily-deposits-chart-b"></canvas>
                          </div>
                          <div class="col-6">
                            <div class="d-flex align-items-center ml-2">
                              <h2 class="font-weight-bold mb-0 mr-1">33%</h2>
                              <i class="mdi mdi-chevron-up text-success icon-md"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Security deposits</p>
                            <h2 class="mb-0">7589</h2>
                            <div class="d-flex align-items-center mt-2">
                              <small>0.321%</small>
                              <i class="mdi mdi-chevron-up"></i>
                            </div>
                          </div>
                          <div>
                            <div class="icon-box-success icon-box-lg">
                              <i class="mdi mdi-calendar-heart"></i>
                            </div>
                          </div>
                        </div>
                        <h5>Gross sales of June</h5>
                        <p class="text-muted mb-0">According to the research firm Frost & Sullivan, the estimated size of the North American used test</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev bg-white" href="#dailyDepositsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next bg-white" href="#dailyDepositsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>    
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Cash deposits</p>
                  <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                  <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                  <canvas id="cash-deposits-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Total sales</p>
                  <h1>$ 28835</h1>
                  <h4>Gross sales over the years</h4>
                  <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
                  <div id="total-sales-chart-legend"></div>                  
                </div>
                <canvas id="total-sales-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Purchases</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status report</th>
                            <th>Office</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Gross amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Jeremy Ortega</td>
                            <td>Levelled up</td>
                            <td>Catalinaborough</td>
                            <td>$790</td>
                            <td>06 Jan 2018</td>
                            <td>$2274253</td>
                        </tr>
                        <tr>
                            <td>Alvin Fisher</td>
                            <td>Ui design completed</td>
                            <td>East Mayra</td>
                            <td>$23230</td>
                            <td>18 Jul 2018</td>
                            <td>$83127</td>
                        </tr>
                        <tr>
                            <td>Emily Cunningham</td>
                            <td>support</td>
                            <td>Makennaton</td>
                            <td>$939</td>
                            <td>16 Jul 2018</td>
                            <td>$29177</td>
                        </tr>
                        <tr>
                            <td>Minnie Farmer</td>
                            <td>support</td>
                            <td>Agustinaborough</td>
                            <td>$30</td>
                            <td>30 Apr 2018</td>
                            <td>$44617</td>
                        </tr>
                        <tr>
                            <td>Betty Hunt</td>
                            <td>Ui design not completed</td>
                            <td>Lake Sandrafort</td>
                            <td>$571</td>
                            <td>25 Jun 2018</td>
                            <td>$78952</td>
                        </tr>
                        <tr>
                            <td>Myrtie Lambert</td>
                            <td>Ui design completed</td>
                            <td>Cassinbury</td>
                            <td>$36</td>
                            <td>05 Nov 2018</td>
                            <td>$36422</td>
                        </tr>
                        <tr>
                            <td>Jacob Kennedy</td>
                            <td>New project</td>
                            <td>Cletaborough</td>
                            <td>$314</td>
                            <td>12 Jul 2018</td>
                            <td>$34167</td>
                        </tr>
                        <tr>
                            <td>Ernest Wade</td>
                            <td>Levelled up</td>
                            <td>West Fidelmouth</td>
                            <td>$484</td>
                            <td>08 Sep 2018</td>
                            <td>$50862</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card border-0 bg-primary text-white">
                <div id="downloads-carousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">Downloads</p>
                        <h1>8543</h1>
                        <h4>Growth 58%</h4>
                      </div>
                      <canvas height="110" id="downloads-chart-a"></canvas>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">Uploads</p>
                        <h1>4533</h1>
                        <h4>Growth 32%</h4>
                      </div>
                      <canvas height="110" id="downloads-chart-b"></canvas>
                    </div>
                  </div>
                  <a class="carousel-control-prev control-light" href="#downloads-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next control-light" href="#downloads-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>  
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card border-0 bg-warning text-white">
                <div id="feedbacks-carousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">feedbacks</p>
                        <h1>3568</h1>
                        <h4>Growth 12%</h4>
                      </div>
                      <canvas height="110" id="feedbacks-chart-a"></canvas>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">feedbacks</p>
                        <h1>8290</h1>
                        <h4>Growth 11%</h4>
                      </div>
                      <canvas height="110" id="feedbacks-chart-b"></canvas>
                    </div>
                  </div>
                  <a class="carousel-control-prev control-light" href="#feedbacks-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next control-light" href="#feedbacks-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>  
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card border-0 bg-success text-white">
                <div id="customers-carousel" class="carousel slide card-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">customers</p>
                        <h1>4567</h1>
                        <h4>Growth 31%</h4>
                      </div>
                      <canvas height="110" id="customers-chart-a"></canvas>
                    </div>
                    <div class="carousel-item">
                      <div class="card-body pb-0">
                        <p class="card-title text-white">Users</p>
                        <h1>1782</h1>
                        <h4>Growth 62%</h4>
                      </div>
                      <canvas height="110" id="customers-chart-b"></canvas>
                    </div>
                  </div>
                  <a class="carousel-control-prev control-light" href="#customers-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next control-light" href="#customers-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>  
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('public/assets/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
  <!-- End plugin js for this page-->
  <!-- inject:js -->

  <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('public/assets/js/template.js') }}"></script>
  <script src="{{ asset('public/assets/js/settings.js') }}"></script>
  <script src="{{ asset('public/assets/js/todolist.js') }}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
  
  <!-- End custom js for this page-->
  <script src="{{ asset('public/assets/js/jquery.cookie.js') }}"></script>
  
</body>

</html>

