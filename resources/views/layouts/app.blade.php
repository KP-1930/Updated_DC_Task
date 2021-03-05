<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="webfonts/fa-solid-900.woff2" rel="stylesheet">
    <link href="webfonts/fa-solid-900.woff" rel="stylesheet">
    <link href="webfonts/fa-solid-900.ttf" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @notifyCss
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icheck-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    


</head>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                


              <body class="hold-transition sidebar-mini layout-fixed">
                <div class="wrapper">

              <!-- Navbar -->
              <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav" >
                  <li class="nav-item ">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                </ul>
                </div>


               

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li><a href="#"></li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-bell"></i>
                                    @if(auth()->user()->unreadnotifications->count())
                                    <span class="badge bage-light">{{ auth()->user()->unreadnotifications->count()}}</span>
                                    @endif
                                </a>

                           <ul class="dropdown-menu">
                           <li><a style="color:green" href="{{route('markAsRead')}}">Mark all is Read</a></li>
                           @foreach (auth()->user()->unreadNotifications as $notification)
                           <li style="background-color:lightgray"><a href="#">{{$notification->data['data']}}</a></li>    
                           @endforeach 

                           @foreach (auth()->user()->readNotifications as $notification)
                           <li><a href="#">{{$notification->data['data']}}</a></li>    
                           @endforeach 
                           </ul>






                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- sidebar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://www.northeastern.edu/graduate/blog/wp-content/uploads/2016/08/Online-Learning-Hero-1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DC_Task</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://www.northeastern.edu/graduate/blog/wp-content/uploads/2016/08/Online-Learning-Hero-1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">laravel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('user')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview menu-open">
            <a href="{{route('CarCategory')}}" class="nav-link active">
              <i class="nav-icon fas fa-car-alt"></i>
              <p>
                CarCategory
              </p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <main class="py-4">
            @yield('content')
  </main>






<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>  
  @notifyJs
  <x:notify-messages />
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 4 -->
<!-- <script src=" {{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
<!-- ChartJS -->
<!-- <script src="{{asset('js/Chart.min.js') }}"></script> -->
<!-- Sparkline -->
<script src="{{asset('js/sparklines.js') }}"></script>
<!-- JQVMap -->
<!-- <script src="{{asset('js/jquery.vmap.min.js') }}"></script>
<script src="{{asset('js/jquery.vmap.usa.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('js/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<!-- <script src="{{asset('js/moment.min.js') }}"></script> -->
<script src="{{asset('js/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="{{asset('js/tempusdominus-bootstrap-4.min.js') }}"></script> -->
<!-- Summernote -->
<script src="{{asset('js/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('js/dashboard.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="{{asset('js/select2.js') }}"></script>








</body>
</html>
