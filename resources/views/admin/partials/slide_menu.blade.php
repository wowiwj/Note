<aside class="menu">
    <p class="menu-label">
        通用
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('home.index') }}" class="{{ menu_is_active('home.index') }}">面板</a></li>
        {{--<li><a>访客</a></li>--}}
    </ul>

    {{--<menus label="管理员测试">--}}
        {{--<menu-item>--}}
            {{--<span>内容管理</span>--}}
            {{--<menus slot="sub">--}}
                {{--<menu-item icon="home">文章管理</menu-item>--}}
                {{--<menu-item icon="home">评论管理</menu-item>--}}
            {{--</menus>--}}
        {{--</menu-item>--}}
    {{--</menus>--}}

    <p class="menu-label">
        管理员
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('admin.users.index') }}" class="{{ menu_is_active('admin.users.index') }}">用户管理</a></li>
        {{--<li>--}}
            {{--<a class="">内容管理</a>--}}
            {{--<ul>--}}
                {{--<li><a>文章管理</a></li>--}}
                {{--<li><a>页面管理</a></li>--}}
                {{--<li><a>评论管理</a></li>--}}
                {{--<li><a>标签管理</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a>外链管理</a></li>--}}
    </ul>


    {{--<p class="menu-label">--}}
        {{--回收站--}}
    {{--</p>--}}
    {{--<ul class="menu-list">--}}
        {{--<li><a>删除文章</a></li>--}}
        {{--<li><a>删除评论</a></li>--}}
        {{--<li><a>删除页面</a></li>--}}
    {{--</ul>--}}
</aside>

