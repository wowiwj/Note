<nav class="navbar is-transparent" style="border-bottom: 1px solid #ccc">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            Notes 后台管理
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                博客首页
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="bd-tw-button button" href="{{ route('users.show',Auth::user()->id) }}" target="_blank">
                            <span>

                                {{ Auth::user()->name }}
                            </span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-primary" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <span>退出登录</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>


{{--<nav class="navbar is-transparent">--}}
{{--<div class="container">--}}
{{--<div class="navbar-brand">--}}
{{--<a class="nav-item">--}}
{{--简记后台管理--}}
{{--<img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">--}}
{{--</a>--}}
{{--<a class="nav-item is-tab is-hidden-mobile is-active">管理页</a>--}}
{{--<a class="nav-item is-tab is-hidden-mobile" href="/">博客首页</a>--}}
{{--</div>--}}
{{--<span class="nav-toggle">--}}
{{--<span></span>--}}
{{--<span></span>--}}
{{--<span></span>--}}
{{--</span>--}}
{{--<div class="nav-right nav-menu">--}}
{{--<a class="nav-item is-tab is-hidden-tablet is-active">Home</a>--}}
{{--<a class="nav-item is-tab is-hidden-tablet">Features</a>--}}
{{--<a class="nav-item is-tab is-hidden-tablet">Pricing</a>--}}
{{--<a class="nav-item is-tab is-hidden-tablet">About</a>--}}
{{--<a class="nav-item is-tab">--}}
{{--<figure class="image is-16x16" style="margin-right: 8px;">--}}
{{--<img src="{{ Auth::user()->avatar}}">--}}
{{--</figure>--}}
{{--{{ Auth::user()->name }}--}}
{{--</a>--}}

<a class="nav-item is-tab"  href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{--登出--}}
{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</a>--}}


{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}