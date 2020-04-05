<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/uikit.min.css" />
        <script src="/js/uikit.min.js"></script>
        <script src="/js/uikit-icons.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/hometest.css">
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>

        <!-- BAGIAN NAVBAR -->

    <div class="uk-container-expand">
    <nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-left">
        
            <div id="offcanvas-nav-primary" uk-offcanvas="mode: push; flip: true; ">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="#">Beranda</a></li>
            <li class="uk-parent">
                <a href="#">Pembelajaran</a>
            </li>
            <li class="uk-parent">
                <a href="#">Gallery</a>
            </li>
            <li class="uk-parent">
                <a href="#">Tentang Kami</a>
            </li>
        </ul>

    </div>
</div>
        <a class="marginNav" href="/"><h4 class="header-font">Your <strong>Company</strong></h4></a>
        </div>

        <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"  uk-toggle="target: #offcanvas-nav-primary"></a>
            <ul class="navigasi uk-navbar-nav">

                <li  class="uk-active" ><a href="#">Beranda</a></li>
                <li  class="uk-parent"><a  href="#">Pembelajaran</a></li>
                <li  class="uk-parent"><a href="#">Gallery</a></li>
                <li  class="uk-parent"><a href="#">Tentang Kami</a></li>
        
                @guest
                    <input type="hidden" class="uk-text-bold" value="Silahkan Login">
                @else
                
                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:50px; height:50px; margin-top:15px; margin-right:-12px; border-radius:50%;">
                @foreach( $users as $user)
                @if($user->id == auth()->user()->id)
                @if($user->status =='perusahaan') 
                    <li class="uk-active uk-text-bold"><a href=" {{route('perusahaan.store')}}">{{ auth()->user()->name }}</a></li>
                @else
                    <li class="uk-active uk-text-bold"><a href=" {{route('siswa.store')}}">{{ auth()->user()->name }}</a></li>        
                @endif
                @endif
                @endforeach

                @endguest
            </ul>

            
                
           


        </div>
    </nav>
    </div>
<!-- END BAGIAN NAVBAR -->
    
    @yield('content')

    @yield('footer')

    </body>
</html>