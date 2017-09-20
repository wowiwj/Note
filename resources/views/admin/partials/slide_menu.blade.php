<aside class="menu">
    <p class="menu-label">
        通用
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('home.index') }}" class="{{ menuIsActive('home.index') }}">面板</a></li>
        <li><a>访客</a></li>
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
        <li><a href="{{ route('admin.users.index') }}" class="{{ menuIsActive('admin.users.index') }}">用户管理</a></li>
        <li>
            <a class="">内容管理</a>
            <ul>
                <li><a>文章管理</a></li>
                <li><a>页面管理</a></li>
                <li><a>评论管理</a></li>
                <li><a>标签管理</a></li>
            </ul>
        </li>
        <li><a>外链管理</a></li>
    </ul>


    <p class="menu-label">
        回收站
    </p>
    <ul class="menu-list">
        <li><a>删除文章</a></li>
        <li><a>删除评论</a></li>
        <li><a>删除页面</a></li>
    </ul>
</aside>


{{--<div class="columns" style="margin-top: 20px; background-color: #f0f0f0;">--}}
    {{--<div class="column is-3">--}}
        {{--<div class="menu">--}}
            {{--<menus label="Administration">--}}
                {{--<menu-item icon="twitter">--}}
                    {{--<span>子目录1</span>--}}
                    {{--<menus slot="sub">--}}
                        {{--<menu-item :to="{ path: '/components/menu/submenu1', query: { userId: 321 }}" icon="qq" :is-active="true">子子目录1</menu-item>--}}
                        {{--<menu-item icon="google">--}}
                            {{--<span>子子目录2</span>--}}
                            {{--<menus slot="sub">--}}
                                {{--<menu-item icon="home">第三级1</menu-item>--}}
                                {{--<menu-item icon="home">第三级2</menu-item>--}}
                                {{--<menu-item icon="home">--}}
                                    {{--<span>第三级3</span>--}}
                                    {{--<menus slot="sub" type="float">--}}
                                        {{--<menu-item icon="home">第四级1</menu-item>--}}
                                    {{--</menus>--}}
                                {{--</menu-item>--}}
                            {{--</menus>--}}
                        {{--</menu-item>--}}
                    {{--</menus>--}}
                {{--</menu-item>--}}
                {{--<menu-item icon="wechat" to="/components/menu/submenu2">子目录2</menu-item>--}}
                {{--<div class="divider"></div>--}}
                {{--<menu-item icon="facebook" to="/components/menu/submenu3"><span>子目录3</span></menu-item>--}}
            {{--</menus>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}