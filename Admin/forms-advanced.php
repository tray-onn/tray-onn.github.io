<!DOCTYPE html>
<!-- saved from url=(0054)./forms-advanced.html -->
<html class="no-js" lang=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./apple-icon.png">
    <link rel="shortcut icon" href="./favicon.ico">

    <link rel="stylesheet" href="./forms-advanced_files/normalize.css">
    <link rel="stylesheet" href="./forms-advanced_files/bootstrap.min.css">
    <link rel="stylesheet" href="./forms-advanced_files/font-awesome.min.css">
    <link rel="stylesheet" href="./forms-advanced_files/themify-icons.css">
    <link rel="stylesheet" href="./forms-advanced_files/flag-icon.min.css">
    <link rel="stylesheet" href="./forms-advanced_files/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="./forms-advanced_files/style.css">
    <link rel="stylesheet" href="./forms-advanced_files/chosen.min.css">

    <style id="" media="all">/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOX-hpOqc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOVuhpOqc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOXuhpOqc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOUehpOqc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOXehpOqc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOXOhpOqc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

<meta name="robots" content="noindex, nofollow">
</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="./forms-advanced_files/logo.webp" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="./forms-advanced_files/logo2.webp" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="./ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="./ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="./ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="./ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="./ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="./ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="./ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="./ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="./ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="./ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="./ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="./tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="./tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="./forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="./forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="./font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="./font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="./charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="./charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="./charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="./maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="./maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="./page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="./page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="./pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="./forms-advanced.html#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="./forms-advanced.html#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="./forms-advanced.html#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="./forms-advanced.html#">
                                <span class="photo media-left"><img alt="avatar" src="./forms-advanced_files/1.webp"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="./forms-advanced.html#">
                                <span class="photo media-left"><img alt="avatar" src="./forms-advanced_files/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="./forms-advanced.html#">
                                <span class="photo media-left"><img alt="avatar" src="./forms-advanced_files/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="./forms-advanced.html#">
                                <span class="photo media-left"><img alt="avatar" src="./forms-advanced_files/4.webp"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="./forms-advanced.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="./forms-advanced_files/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="./forms-advanced.html#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="./forms-advanced.html#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="./forms-advanced.html#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="./forms-advanced.html#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="./forms-advanced.html#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="./forms-advanced.html#">Dashboard</a></li>
                            <li><a href="./forms-advanced.html#">Forms</a></li>
                            <li class="active">Advanced</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Masked Input</strong> <small> Small Text Mask</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Date input</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Phone input</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. (999) 999-9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Taxpayer Identification Numbers</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99-9999999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Social Security Number</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 999-99-9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Eye Script</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Credit Card Number</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 9999 9999 9999 9999</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Standard Select</strong>
                            </div>
                            <div class="card-body">

                                  <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="-1" style="display: none;">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select><div class="chosen-container chosen-container-single" title="" style="width: 100%;"><a class="chosen-single chosen-default">
  <span>Choose a Country...</span>
  <div><b></b></div>
</a>
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off" tabindex="1">
  </div>
  <ul class="chosen-results"></ul>
</div></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Multi Select</strong>
                            </div>
                            <div class="card-body">

                                  <select data-placeholder="Choose a country..." multiple="" class="standardSelect" style="display: none;">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select><div class="chosen-container chosen-container-multi" title="" style="width: 100%;"><ul class="chosen-choices">
  <li class="search-field">
    <input class="chosen-search-input default" type="text" autocomplete="off" value="Choose a country..." style="width: 137px;">
  </li>
</ul>
<div class="chosen-drop">
  <ul class="chosen-results"></ul>
</div></div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Multi Select with Groups</strong>
                            </div>
                            <div class="card-body">

                                  <select data-placeholder="Your Favorite Football Team" multiple="" class="standardSelect" tabindex="-1" style="display: none;">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                      <option>Dallas Cowboys</option>
                                      <option>New York Giants</option>
                                      <option>Philadelphia Eagles</option>
                                      <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                      <option>Chicago Bears</option>
                                      <option>Detroit Lions</option>
                                      <option>Green Bay Packers</option>
                                      <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                      <option>Atlanta Falcons</option>
                                      <option>Carolina Panthers</option>
                                      <option>New Orleans Saints</option>
                                      <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                      <option>Arizona Cardinals</option>
                                      <option>St. Louis Rams</option>
                                      <option>San Francisco 49ers</option>
                                      <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                      <option>Buffalo Bills</option>
                                      <option>Miami Dolphins</option>
                                      <option>New England Patriots</option>
                                      <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                      <option>Baltimore Ravens</option>
                                      <option>Cincinnati Bengals</option>
                                      <option>Cleveland Browns</option>
                                      <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                      <option>Houston Texans</option>
                                      <option>Indianapolis Colts</option>
                                      <option>Jacksonville Jaguars</option>
                                      <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                      <option>Denver Broncos</option>
                                      <option>Kansas City Chiefs</option>
                                      <option>Oakland Raiders</option>
                                      <option>San Diego Chargers</option>
                                    </optgroup>
                                  </select><div class="chosen-container chosen-container-multi" title="" style="width: 100%;"><ul class="chosen-choices">
  <li class="search-field">
    <input class="chosen-search-input default" type="text" autocomplete="off" value="Your Favorite Football Team" tabindex="5" style="width: 187px;">
  </li>
</ul>
<div class="chosen-drop">
  <ul class="chosen-results"></ul>
</div></div>

                            </div>
                        </div>

                    </div>



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script type="text/javascript" async="" src="./forms-advanced_files/analytics.js.download"></script><script src="./forms-advanced_files/jquery-2.1.4.min.js.download"></script>
    <script src="./forms-advanced_files/popper.min.js.download"></script>
    <script src="./forms-advanced_files/plugins.js.download"></script>
    <script src="./forms-advanced_files/main.js.download"></script>
    <script src="./forms-advanced_files/chosen.jquery.min.js.download"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./forms-advanced_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="./forms-advanced_files/beacon.min.js.download" data-cf-beacon="{&quot;rayId&quot;:&quot;651c680f0e560fd6&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.1&quot;,&quot;si&quot;:10}"></script>


</body></html>