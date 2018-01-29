<aside class="menu m-t-20 p-l-20">

    <ul class="menu-list">
        <p class="menu-label">
            消息通知
        </p>
        <li><a href="/notifications?type=unread" class="{{ request('type') == 'unread' ? 'is-active' : '' }}">未读消息</a></li>

        <li><a href="/notifications" class="{{ request('type') != 'unread' ? 'is-active' : '' }}">已读消息</a></li>
    </ul>

</aside>