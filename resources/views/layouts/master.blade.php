<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('layouts.partials.header')
</head>

<body id="commerce">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" action="{{ route('axtar') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input name="axtar" type="text" id="navbar-search" class="form-control" placeholder="Ara" value="{{ old('axtar') }}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme">5</span></a></li>
                    <li><a href="{{ route('qeydiyyat') }}">Qeydiyyat</a></li>
                    <li><a href="#">Kaydol</a></li>
                    @endguest
                    @auth
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Siparişlerim</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('cixis') }}">Çıkış</a></li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('container')
    @include('layouts.partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>