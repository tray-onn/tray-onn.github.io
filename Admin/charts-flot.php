<!DOCTYPE html>
<!-- saved from url=(0051)./charts-flot.html -->
<html class="no-js" lang=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sufee Admin - HTML5 Admin Template</title>
<meta name="description" content="Sufee Admin - HTML5 Admin Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="./apple-icon.png">
<link rel="shortcut icon" href="./favicon.ico">
<link rel="stylesheet" href="./charts-flot_files/normalize.css">
<link rel="stylesheet" href="./charts-flot_files/bootstrap.min.css">
<link rel="stylesheet" href="./charts-flot_files/font-awesome.min.css">
<link rel="stylesheet" href="./charts-flot_files/themify-icons.css">
<link rel="stylesheet" href="./charts-flot_files/flag-icon.min.css">
<link rel="stylesheet" href="./charts-flot_files/cs-skin-elastic.css">

<link rel="stylesheet" href="./charts-flot_files/style.css">
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

<meta name="robots" content="noindex, nofollow">
</head>
<body>

<aside id="left-panel" class="left-panel">
<nav class="navbar navbar-expand-sm navbar-default">
<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="./"><img src="./charts-flot_files/logo.webp" alt="Logo"></a>
<a class="navbar-brand hidden" href="./"><img src="./charts-flot_files/logo2.webp" alt="Logo"></a>
</div>
<div id="main-menu" class="main-menu collapse navbar-collapse">
<ul class="nav navbar-nav">
<li>
<a href="./index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
</li>
<h3 class="menu-title">UI elements</h3>
<li class="menu-item-has-children dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
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
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="fa fa-table"></i><a href="./tables-basic.html">Basic Table</a></li>
<li><i class="fa fa-table"></i><a href="./tables-data.html">Data Table</a></li>
</ul>
</li>
<li class="menu-item-has-children dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="menu-icon fa fa-th"></i><a href="./forms-basic.html">Basic Form</a></li>
<li><i class="menu-icon fa fa-th"></i><a href="./forms-advanced.html">Advanced Form</a></li>
</ul>
</li>
<h3 class="menu-title">Icons</h3>
<li class="menu-item-has-children dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="menu-icon fa fa-fort-awesome"></i><a href="./font-fontawesome.html">Font Awesome</a></li>
<li><i class="menu-icon ti-themify-logo"></i><a href="./font-themify.html">Themefy Icons</a></li>
</ul>
</li>
<li>
<a href="./widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
</li>
<li class="menu-item-has-children active dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="menu-icon fa fa-line-chart"></i><a href="./charts-chartjs.html">Chart JS</a></li>
<li><i class="menu-icon fa fa-area-chart"></i><a href="./charts-flot.html">Flot Chart</a></li>
<li><i class="menu-icon fa fa-pie-chart"></i><a href="./charts-peity.html">Peity Chart</a></li>
</ul>
</li>
<li class="menu-item-has-children dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="menu-icon fa fa-map-o"></i><a href="./maps-gmap.html">Google Maps</a></li>
<li><i class="menu-icon fa fa-street-view"></i><a href="./maps-vector.html">Vector Maps</a></li>
</ul>
</li>
<h3 class="menu-title">Extras</h3>
<li class="menu-item-has-children dropdown">
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
<ul class="sub-menu children dropdown-menu">
<li><i class="menu-icon fa fa-sign-in"></i><a href="./page-login.html">Login</a></li>
<li><i class="menu-icon fa fa-sign-in"></i><a href="./page-register.html">Register</a></li>
<li><i class="menu-icon fa fa-paper-plane"></i><a href="./pages-forget.html">Forget Pass</a></li>
</ul>
</li>
</ul>
</div>
</nav>
</aside>


<div id="right-panel" class="right-panel">

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
<a class="dropdown-item media bg-flat-color-1" href="./charts-flot.html#">
<i class="fa fa-check"></i>
<p>Server #1 overloaded.</p>
</a>
<a class="dropdown-item media bg-flat-color-4" href="./charts-flot.html#">
<i class="fa fa-info"></i>
<p>Server #2 overloaded.</p>
</a>
<a class="dropdown-item media bg-flat-color-5" href="./charts-flot.html#">
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
<a class="dropdown-item media bg-flat-color-1" href="./charts-flot.html#">
<span class="photo media-left"><img alt="avatar" src="./charts-flot_files/1.webp"></span>
<span class="message media-body">
<span class="name float-left">Jonathan Smith</span>
<span class="time float-right">Just now</span>
<p>Hello, this is an example msg</p>
</span>
</a>
<a class="dropdown-item media bg-flat-color-4" href="./charts-flot.html#">
<span class="photo media-left"><img alt="avatar" src="./charts-flot_files/2.jpg"></span>
<span class="message media-body">
<span class="name float-left">Jack Sanders</span>
<span class="time float-right">5 minutes ago</span>
<p>Lorem ipsum dolor sit amet, consectetur</p>
</span>
</a>
<a class="dropdown-item media bg-flat-color-5" href="./charts-flot.html#">
<span class="photo media-left"><img alt="avatar" src="./charts-flot_files/3.jpg"></span>
<span class="message media-body">
<span class="name float-left">Cheryl Wheeler</span>
<span class="time float-right">10 minutes ago</span>
<p>Hello, this is an example msg</p>
</span>
</a>
<a class="dropdown-item media bg-flat-color-3" href="./charts-flot.html#">
<span class="photo media-left"><img alt="avatar" src="./charts-flot_files/4.webp"></span>
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
<a href="./charts-flot.html#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="user-avatar rounded-circle" src="./charts-flot_files/admin.jpg" alt="User Avatar">
</a>
<div class="user-menu dropdown-menu">
<a class="nav-link" href="./charts-flot.html#"><i class="fa fa- user"></i>My Profile</a>
<a class="nav-link" href="./charts-flot.html#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
<a class="nav-link" href="./charts-flot.html#"><i class="fa fa -cog"></i>Settings</a>
<a class="nav-link" href="./charts-flot.html#"><i class="fa fa-power -off"></i>Logout</a>
</div>
</div>
<div class="language-select dropdown" id="language-select">
<a class="dropdown-toggle" href="./charts-flot.html#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
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
</header>

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
<li><a href="./charts-flot.html#">Dashboard</a></li>
<li><a href="./charts-flot.html#">Charts</a></li>
<li class="active">Float Chart</li>
</ol>
</div>
</div>
</div>
</div>
<div class="content mt-3">
<div class="animated fadeIn">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Real Chart</h4>
<div class="flot-container">
<div id="cpu-load" class="cpu-load" style="padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="244" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 272px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 255px; left: 12px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 204px; left: 6px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 153px; left: 6px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 102px; left: 6px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 51px; left: 6px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="451" height="244" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 272px;"></canvas></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Line Chart</h4>
<div class="flot-container">
<div id="flot-line" class="flot-line" style="padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="215" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 240px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 21px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 68px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 115px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 162px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 209px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 256px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 303px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 350px; text-align: center;">7</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 397px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 45px; top: 223px; left: 444px; text-align: center;">9</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 192px; left: 0px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 0px; text-align: right;">-0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 105px; left: 5px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 61px; left: 5px; text-align: right;">0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 18px; left: 5px; text-align: right;">1.0</div></div></div><canvas class="flot-overlay" width="451" height="215" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 240px;"></canvas><div class="legend"><div style="position: absolute; width: 44px; height: 33px; top: 14px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:14px;right:13px;;font-size:smaller;color:#fff"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(0,123,255);overflow:hidden"></div></div></td><td class="legendLabel">sin(x)</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(220,53,69);overflow:hidden"></div></div></td><td class="legendLabel">cos(x)</td></tr></tbody></table></div></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Pie Chart</h4>
<div class="flot-container">
<div id="flot-pie" class="flot-pie-container" style="padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas><canvas class="flot-overlay" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas><div class="legend"><div style="position: absolute; width: 60px; height: 80px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #8fc9fb;overflow:hidden"></div></div></td><td class="legendLabel">Primary</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #007BFF;overflow:hidden"></div></div></td><td class="legendLabel">Success</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #19A9D5;overflow:hidden"></div></div></td><td class="legendLabel">Danger</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #DC3545;overflow:hidden"></div></div></td><td class="legendLabel">Warning</td></tr></tbody></table></div></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Line Chart</h4>
<div class="flot-container">
<div id="chart1" style="width: 100%; height: 275px; padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 79px; text-align: center;">12/05</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 154px; text-align: center;">12/07</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 229px; text-align: center;">12/09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 304px; text-align: center;">12/11</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 379px; text-align: center;">12/13</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 454px; text-align: center;">12/15</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 241px; left: 0px; text-align: right;">6320</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 211px; left: 0px; text-align: right;">6330</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 181px; left: 0px; text-align: right;">6340</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 0px; text-align: right;">6350</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 121px; left: 0px; text-align: right;">6360</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 0px; text-align: right;">6370</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 60px; left: 0px; text-align: right;">6380</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 30px; left: 0px; text-align: right;">6390</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 0px; text-align: right;">6400</div></div></div><canvas class="flot-overlay" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Bar Chart</h4>
<div class="flot-container">
<div id="flotBar" style="width: 100%; height: 275px; padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 77px; text-align: center;">12/05</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 149px; text-align: center;">12/07</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 221px; text-align: center;">12/09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 293px; text-align: center;">12/11</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 365px; text-align: center;">12/13</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 256px; left: 436px; text-align: center;">12/15</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 241px; left: 20px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 207px; left: 0px; text-align: right;">1000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 172px; left: 0px; text-align: right;">2000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 138px; left: 0px; text-align: right;">3000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 103px; left: 0px; text-align: right;">4000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 69px; left: 0px; text-align: right;">5000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 34px; left: 0px; text-align: right;">6000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 0px; text-align: right;">7000</div></div></div><canvas class="flot-overlay" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h4 class="mb-3">Bar Chart</h4>
<div class="flot-container">
<div id="flotCurve" style="width: 100%; height: 275px; padding: 0px; position: relative;"><canvas class="flot-base" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 19px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 97px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 175px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 253px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 331px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 409px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 71px; top: 256px; left: 488px; text-align: center;">80</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 211px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 30px; left: 7px; text-align: right;">80</div></div></div><canvas class="flot-overlay" width="451" height="248" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 276px;"></canvas></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" async="" src="./charts-flot_files/analytics.js.download"></script><script src="./charts-flot_files/jquery-2.1.4.min.js.download"></script>
<script src="./charts-flot_files/popper.min.js.download"></script>
<script src="./charts-flot_files/plugins.js.download"></script>
<script src="./charts-flot_files/main.js.download"></script>

<script src="./charts-flot_files/excanvas.min.js.download"></script>
<script src="./charts-flot_files/jquery.flot.js.download"></script>
<script src="./charts-flot_files/jquery.flot.pie.js.download"></script>
<script src="./charts-flot_files/jquery.flot.time.js.download"></script>
<script src="./charts-flot_files/jquery.flot.stack.js.download"></script>
<script src="./charts-flot_files/jquery.flot.resize.js.download"></script>
<script src="./charts-flot_files/jquery.flot.crosshair.js.download"></script>
<script src="./charts-flot_files/curvedLines.js.download"></script>
<script src="./charts-flot_files/jquery.flot.tooltip.min.js.download"></script>
<script src="./charts-flot_files/flot-chart-init.js.download"></script>

<script async="" src="./charts-flot_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="./charts-flot_files/beacon.min.js.download" data-cf-beacon="{&quot;rayId&quot;:&quot;651db1148e35e312&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.1&quot;,&quot;si&quot;:10}"></script>


<div class="flotTip" style="display: none; position: absolute; left: 1126px; top: 383px;"></div></body></html>