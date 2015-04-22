<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pages/ico/152.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!-- BEGIN Vendor CSS-->
    <link href="/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    {{ HTML::style("/assets/devicon/devicon.css")  }}
    {{ HTML::style("/assets/devicon/devicon-colors.css")  }}
    @yield("css")
     <!-- BEGIN Pages CSS-->
    <link href="/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/pages/css/pages.css" rel="stylesheet" type="text/css" />

    <!--[if lte IE 9]>
        <link href="/pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <script type="text/javascript">
    window.onload = function() {
        // fix for windows 8
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="/pages/css/windows.chrome.fix.css" />'
    }
    </script>
</head>

<body class="fixed-header">
    <!-- BEGIN SIDEBAR -->

    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        <!-- START PAGE HEADER WRAPPER -->
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE CONTROLS -->
            <!-- LEFT SIDE -->
            <div class="pull-left full-height visible-sm visible-xs">
                <!-- START ACTION BAR -->

                <!-- END ACTION BAR -->
            </div>
            <!-- RIGHT SIDE -->
            <div class="pull-right full-height">
                <!-- START ACTION BAR -->
                <div class="sm-action-bar">
                    @if(Sentry::check())
                        <div class=" pull-right">
                            <div class="header-inner p-l-15">
                                {{HTML::linkRoute('users.logout', 'Sair', []) }}
                            </div>
                        </div>
                        <div class=" pull-right">
                            <!-- START User Info-->
                            <div class="visible-lg visible-md m-t-10">
                                <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                                    <span class="text-master">{{ $user->owner->name }}</span>
                                </div>
                                <div class="thumbnail-wrapper d32 circular inline m-t-5">
                                    <img src="{{ $user->owner->image or '/assets/img/profiles/avatar.jpg' }}" alt="" data-src="/assets/img/profiles/avatar.jpg" data-src-retina="/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                                </div>
                            </div>
                            <!-- END User Info-->
                        </div>
                    @else
                        <div class=" pull-right">
                            <div class="header-inner">
                                <a href="{{ URL::route('users.login') }}" class="btn btn-tag btn-tag-dark btn-tag-rounded m-r-20"> Entrar</a>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- END ACTION BAR -->
            </div>
            <!-- END MOBILE CONTROLS -->
            <div class=" pull-left sm-table">
                <div class="header-inner">
                    <div class="brand inline">
                        <img src="/assets/img/logo_2x.png" alt="logo" data-src="/assets/img/logo_2x.png" data-src-retina="/assets/img/logo_2x.png" width="93" height="25">
                    </div>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                        <li class="p-r-15 inline">
                            <div class="dropdown">
                                <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                                    <span class="bubble"></span>
                                </a>
                                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                    <div class="notification-panel">
                                        <!-- START Notification Body-->
                                        <div class="notification-body scrollable">
                                             <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-danger">
                                                        <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <span class="bold">98% Server Load</span>
                                                        <span class="fs-12 m-l-10">Take Action</span>
                                                    </a>
                                                    <span class="pull-right time">
                                                        2 mins ago
                                                    </span>
                                                </div>
                                                <div class="option">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                            </div>
                                             <!-- END Notification Item-->
                                        </div>
                                        <!-- END Notification Body-->
                                        <!-- START Notification Footer-->
                                        <div class="notification-footer text-center">
                                            <a href="#" class="">Read all notifications</a>
                                            <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                                <i class="pg-refresh_new"></i>
                                            </a>
                                        </div>
                                         <!-- END Notification Footer-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="p-r-15 inline">
                            <a href="#" class="pg-social "></a>
                        </li>
                    </ul>
                    <!-- END NOTIFICATION DROPDOWN -->
                </div>
            </div>


        </div>
        <!-- END HEADER -->
        <!-- END PAGE HEADER WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <!-- START JUMBOTRON -->
                <div class="jumbotron" data-pages="parallax">
                    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                        <div class="inner">
                            <!-- START BREADCRUMB -->
<!--                             <ul class="breadcrumb">
                                <li>
                                    <p>Pages</p>
                                </li>
                                <li><a href="#" class="active">Barebone template</a>
                                </li>
                            </ul>
 -->                            <!-- END BREADCRUMB -->
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                @yield("body")
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->

            </div>
            <!-- END PAGE CONTENT -->

            <!-- START FOOTER -->
            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014</span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved.</span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
                        </span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a>
                        <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START OVERLAY -->
    <div class="overlay" style="display: none" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="/assets/img/logo_2x.png" alt="logo" data-src="/assets/img/logo_2x.png" data-src-retina="/assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="/assets/img/profiles/avatar.jpg" data-src="/assets/img/profiles/avatar.jpg" data-src-retina="/assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->

    <!-- BEGIN VENDOR JS -->
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    {{ HTML::script("/assets/js/form.js") }}
    @if(Session::has("notifications"))
      <script type="text/javascript">
        var notifications = {{ json_encode(Session::get("notifications")) }};
      </script>
      {{ HTML::script("/assets/js/notification.js") }}
    @endif
    <!-- END VENDOR JS -->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/pages/js/pages.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/assets/js/scripts.js" type="text/javascript"></script>
      @yield('js')
    <!-- END PAGE LEVEL JS -->

</body>
</html>
