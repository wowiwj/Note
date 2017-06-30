<aside class="menu">
    <p class="menu-label">
        通用
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('home.index') }}" class="{{ menuIsActive('home.index') }}">面板</a></li>
        <li><a>访客</a></li>
    </ul>
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