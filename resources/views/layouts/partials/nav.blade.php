<nav class="navbar">

    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/images/logo.png" alt="Notes logo"
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

                <a class="navbar-item {{ Request::is('articles*') ? 'is-active' : '' }}" href="/articles">
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

                @guest
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
                            <p class="control login">
                                <a class="button is-primary" href="javascript:showLogin()">
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

                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="/articles/create">
                            <span class="icon">
                                <i class="fa fa-fw fa-pencil m-r-5"></i>
                            </span>
                                写文章
                            </a>
                            <hr class="navbar-divider">
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

                @endguest


            </div>
        </div>
    </div>


</nav>
