<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox"
                 width="112" height="28">
        </a>

        <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-lg fa-github"></i>
      </span>
        </a>

        <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
        </a>

        <div class="navbar-burger burger" data-target="navMenuTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenuTransparentExample" class="navbar-menu">
        <div class="navbar-start">

            <a class="navbar-item {{ Request::is('articles*') ? 'active' : '' }}" href="/articles">
                文章
            </a>

            @foreach($special_pages as $page)
                <a class="navbar-item {{ navIsActive('special_pages.show',$page->route) }}" href="/{{ $page->route }}">
                    {{ $page->title }}
                </a>
            @endforeach
        </div>

        <div class="navbar-end">
            <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
                <span class="icon" style="color: #333;">
                    <i class="fa fa-lg fa-github"></i>
                </span>
            </a>
            <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
                <span class="icon" style="color: #55acee;">
                    <i class="fa fa-lg fa-twitter"></i>
                </span>
            </a>

            @if (Auth::guest())
                <div class="navbar-item">
                    <div class="field is-grouped">

                        <p class="control">
                            <a class="bd-tw-button button"
                               href="{{ route('register') }}">
                                <span class="icon">
                                    <i class="fa fa-registered"></i>
                                </span>
                                <span>
                                    注册
                                </span>
                            </a>

                        </p>
                        <p class="control">
                            <a class="button is-primary" href="{{ route('login') }}">
                                <span class="icon">
                                    <i class="fa fa-sign-in"></i>
                                </span>

                                <span>登录</span>
                            </a>
                        </p>
                    </div>
                </div>
            @else


                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <i class="fa fa-plus"></i>
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/articles/create">
                            <span class="icon">
                                <i class="fa fa-fw fa-pencil m-r-5"></i>
                            </span>
                            写文章
                        </a>
                        @if(Auth::user()->is_admin)
                            <a class="navbar-item" href="{{ route('special_pages.create') }}">
                                <span class="icon">
                                <i class="fa fa-fw fa-file-text-o m-r-5"></i>
                            </span>
                                添加页面
                            </a>
                        @endif
                        <a class="navbar-item" href="/categories/create">
                            <span class="icon">
                                <i class="fa fa-fw fa-glass m-r-5"></i>
                            </span>
                            添加分类
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/tags/create">
                            <span class="icon">
                                <i class="fa fa-fw fa-tags m-r-5"></i>
                            </span>
                            添加标签
                        </a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span id="nav-avatar-container" class="level-item has-text-centered">
                            <img class="nav-avatar" src="{{ Auth::user()->avatar }}" alt="">
                            {{ Auth::user()->name }}
                        </span>

                    </a>
                    <div class="navbar-dropdown is-boxed">
                        @if(Auth::user()->is_admin)
                            <a class="navbar-item " href="/admin">
                                <span class="icon">
                                    <i class="fa fa-fw fa-desktop m-r-5"></i>
                                </span>
                                后台管理
                            </a>
                        @endif
                        <a class="navbar-item " href="{{ route('users.show',Auth::user()) }}">
                            <span class="icon">
                                <i class="fa fa-fw fa-home m-r-5"></i>
                            </span>
                            个人中心
                        </a>
                        <a class="navbar-item " href="{{ route('users.edit',Auth::user()) }}">
                            <span class="icon">
                                <i class="fa fa-fw fa-cog m-r-5"></i>
                            </span>
                            个人设置
                        </a>

                        <hr class="navbar-divider">

                        <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                        >

                            <span class="icon">
                                <i class="fa fa-fw fa-sign-out m-r-5"></i>
                            </span>
                            退出登录

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>

                    </div>
                </div>

            @endif


        </div>
    </div>
</nav>


{{--<nav class="navbar navbar-default navbar-fixed-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}

{{--<!-- Collapsed Hamburger -->--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}

{{--<!-- Branding Image -->--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--{{ config('app.name', 'Laravel') }}--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li class="{{ Request::is('articles*') ? 'active' : '' }}"><a href="/articles">文章</a></li>--}}

{{--@foreach($special_pages as $page)--}}
{{--<li class="{{ navIsActive('special_pages.show',$page->route) }}"><a href="/{{ $page->route }}">{{ $page->title }}</a></li>--}}
{{--@endforeach--}}

{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ route('login') }}">登录</a></li>--}}
{{--<li><a href="{{ route('register') }}">注册</a></li>--}}
{{--@else--}}

{{--<li class="">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}
{{--&nbsp; <span class="caret"></span>--}}
{{--</a>--}}
{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li class=""><a href="/articles/create">写文章</a></li>--}}
{{--@if(Auth::user()->is_admin)--}}
{{--<li class=""><a href="{{ route('special_pages.create') }}">添加页面</a></li>--}}
{{--@endif--}}
{{--<li class=""><a href="/categories/create">添加分类</a></li>--}}
{{--<li class=""><a href="/tags/create">添加标签</a></li>--}}

{{--</ul>--}}
{{--</li>--}}

{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}

{{--<span id="nav-avatar-container">--}}
{{--<img class="nav-avatar" src="{{ Auth::user()->avatar }}" alt="">--}}
{{--</span>--}}

{{--{{ Auth::user()->name }}--}}
{{--<span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}

{{--@if(Auth::user()->is_admin)--}}
{{--<li><a href="/admin">后台管理</a></li>--}}
{{--@endif--}}
{{--<li><a href="{{ route('users.show',Auth::user()) }}">个人中心</a></li>--}}
{{--<li><a href="{{ route('users.edit',Auth::user()) }}">个人设置</a></li>--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--退出登录--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}