<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('nice/img/favicon.png') }}">

  <title>Espace Entreprise</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('nice/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('nice/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('nice/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('nice/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('nice/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('nice/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="nice/stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('nice/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="{{ asset('nice/stylesheet') }}" href="css/fullcalendar.css">
  <link href="{{ asset('nice/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('nice/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('nice/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('nice/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('nice/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">Génie <span class="lite">Informatique</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->

          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
             
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have one message</p>
              </li>
              <li>
               
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">adbo</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                   annonce
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" v-pre>
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>

            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mon Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Annonces </a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Emploi du temps </a>
              </li>

               <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Cours</a>
              </li>

           
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li >
                            

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Quitter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                         
                        </li>
                    @endguest
               
            
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
                <a href="/annonce" class="">
                            <i class="icon_table"></i>
                            <span>Annonces</span>
                           <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                        </a>
          </li>
          
          <li class="sub-menu">
            <a href="/offre" class="">
                        <i class="icon_table"></i>
                        <span>Offres de stage</span>
                       <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                    </a>
      </li>
          <li>
                    <a class="" href="widgets.html">
                                <i class="icon_genius"></i>
                                <span>Offres</span>
                                  <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                            </a>
          <li class="sub-menu">
                    <a href="{{ url('/cvs') }}" class="">
                                <i class="icon_document_alt"></i>
                                <span>Cvs</span>
                                  <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                            </a>
                   
                </li>
                
                <li>
                    <a class="" href="/messages">
                                <i class="icon_message"></i>
                                <span>Envoyer message</span>

                            </a>

            </li>
           
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <span>Go To</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">Page Accueil</a></li>
              <li><a class="" href="#"><span>FSTT.ac.ma</span></a></li>
              <li><a class="" href="#"><span>FSTT.ac.ma</span></a></li>
              <li><a class="" href="#">facebook FSTT</a></li>
              <li><a class="" href="#">Admin Email </a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      
    <!-- ici le  va etre le code de chaque view-->
        <div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </section>
    
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('nice/js/jquery.js') }}"></script>
  <script src="{{ asset('nice/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('nice/js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('nice/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('nice/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('nice/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('nice/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('nice/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('nice/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('nice/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('nice/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('nice/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('nice/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('nice/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('nice/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('nice/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('nice/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('nice/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('nice/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('nice/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('nice/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('nice/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('nice/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('nice/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('nice/js/gdp-data.js') }}"></script>
    <script src="{{ asset('nice/js/morris.min.js') }}"></script>
    <script src="{{ asset('nice/js/sparklines.js') }}"></script>
    <script src="{{ asset('nice/js/charts.js') }}"></script>
    <script src="{{ asset('nice/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
