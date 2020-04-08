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
        <a href="/"><h2 class="header-font">Your <strong>Company</strong></h2></a>
        </div>

        <div class="uk-navbar-right">

            <ul class="navigasi uk-navbar-nav">

                <li class="uk-text-bold"><a href="#">Beranda</a></li>
                <li class="uk-text-bold"><a  href="#">Pembelajaran</a></li>
                <li class="uk-text-bold"><a href="#">Gallery</a></li>
                <li class="uk-text-bold"><a href="#">Tentang Kami</a></li>
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

            
                
            <button id="hamburger" class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-nav" style="width: 100%;
    margin-left: -10%;"><span uk-icon="icon: table"></span></button>
            <div id="offcanvas-nav" uk-offcanvas="flip:true; overlay:true;">
    <div class="canvas-hamburger uk-offcanvas-bar">

        <div class="profile-burger uk-box-shadow-large">
            Beranda
            
        </div>
        

        <ul class="profile-burger uk-nav uk-nav-default">
            
            <li style="display: flex;margin-left: 4em"><a href="#"><img src="ICON/avatar2.png" alt=""><h5>Hello, Guest</h5></a></li>
            </li>
            <li class="uk-nav-header">Main Menu</li>
            <li><a href="#"><span class="uk-margin-small-right"></span>BERANDA</a></li>
            <li><a href="#"><span class="uk-margin-small-right"></span> PEMBELAJARAN</a></li>
            <li><a href="#"><span class="uk-margin-small-right"></span> GALLERY</a></li>
            <li><a href="#"><span class="uk-margin-small-right"></span> TENTANG KAMI</a></li>
            
            <li class="uk-nav-divider"></li>
            
        </ul>

        </div>
    </div>
            

        </div>
    </nav>
    </div>
<!-- END BAGIAN NAVBAR -->
    
    @yield('content')

    @yield('footer')

    </body>
</html>