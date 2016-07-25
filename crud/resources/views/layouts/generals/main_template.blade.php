<!DOCTYPE html>
<html lang="es">
@include('layouts.generals.header')
<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>
@yield('jsextras')
<body>

<div class="preloader">
    <div class="status"></div>
</div>

@yield('headerinit')
@if (Auth::guest())
    <div class="container">
        @endif
        <div class="row">
            @if (Auth::guest())
                <div class="panel-heading col-lg-3 col-md-5 col-xs-5">
                    <a href="{{  url('/')  }}"><img src="{{ env('LOGO_MAIN_TEMPLATE') }}" alt="{{ env('HeaderTitle') }}" class="img img-responsive" style="width: auto"></a>
                </div>
                <div class="panel-heading col-lg-9 col-md-7 col-xs-7" style="padding-left: 0em; margin-left: 0em;">
                    <div class="panel-heading pull-right">
                        @if(strstr(Request::path(),'register'))
                            <div class="col-lg-6 col-sm-6 col-xs-8 text-center" >
                                <a href="{{ url('/auth/login') }}" class="btn blue-ocupate-btn"><strong>{{ trans('general.btn_sign_in') }}</strong></a>
                            </div>
                        @endif
                        @if(strstr(Request::path(),'login'))
                            <div class="col-lg-6 col-sm-6 col-xs-4 text-center">
                                <a href="{{ url('/auth/register') }}" class="btn orange-ocupate-btn"><strong>{{ trans('general.btn_register') }}</strong></a>
                            </div>
                        @endif
                        @if(!strstr(Request::path(),'login') && !strstr(Request::path(),'register'))
                            <div class="col-lg-6 col-sm-6 col-xs-6 text-center" >
                                <a href="{{ url('/auth/login') }}" class="btn blue-ocupate-btn"><strong>{{ trans('general.btn_sign_in') }}</strong></a>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-6 text-center">
                                <a href="{{ url('/auth/register') }}" class="btn orange-ocupate-btn"><strong>{{ trans('general.btn_register') }}</strong></a>
                            </div>
                        @endif
                    </div>
                    @else
                        <nav class="navbar navbar-inverse" style="background: #000000">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="btn-info navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle Navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <img src="{{ env('LOGO_MAIN_TEMPLATE') }}" alt="{{ env('HeaderTitle') }}" style="height: 40px" class="img img-responsive">
                                    </a>
                                </div>
                                @if (Auth::user()->type == 'admin')
                                    @include('layouts.generals.navs.navAdmin')
                                @endif
                                @if (Auth::user()->type == 'customer')
                                    @include('layouts.generals.navs.navUser')
                                @endif
                            </div>
                        </nav>
                    @endif
                </div>
        </div>
        @if (Auth::guest())
    </div>
@endif
<div class="container login register">
    <div class="container" style="padding-top: 10px;padding-bottom: 70px;">
        @include('layouts.generals.errors')
        @if (Auth::guest())
            @include('layouts.generals.sessionMessage')
        @endif
        @yield('content')
        @if (! Auth::guest() && Auth::user()->type == 'admin')
            @include('layouts.generals.admin_template')
        @endif
        <div class="push"></div>
    </div>
</div>
@yield('headerend')
@yield("extra_js")
@yield('messages')
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>