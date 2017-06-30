<nav class="nav has-shadow">
    {{--<div class="container">--}}
        <div class="nav-left">
            <a class="nav-item">
                简记后台管理
                {{--<img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">--}}
            </a>
            <a class="nav-item is-tab is-hidden-mobile is-active">管理页</a>
            <a class="nav-item is-tab is-hidden-mobile" href="/">博客首页</a>
        </div>
        <span class="nav-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
            </span>
        <div class="nav-right nav-menu">
            <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
            <a class="nav-item is-tab is-hidden-tablet">Features</a>
            <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
            <a class="nav-item is-tab is-hidden-tablet">About</a>
            <a class="nav-item is-tab">
                <figure class="image is-16x16" style="margin-right: 8px;">
                    <img src="{{ Auth::user()->avatar}}">
                </figure>
                {{ Auth::user()->name }}
            </a>

            <a class="nav-item is-tab"  href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                登出
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </a>



        </div>
    {{--</div>--}}
</nav>