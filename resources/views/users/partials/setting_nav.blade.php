<aside class="menu m-t-20 p-l-20">

    <ul class="menu-list">
        <p class="menu-label">
            用户设置
        </p>
        <li><a href="{{ route('users.edit',$user) }}" class="{{ navIsActive('users.edit') }}">个人信息</a></li>

        <li><a href="{{ route('users.editAvatar',$user) }}" class="{{ navIsActive('users.editAvatar') }}">修改头像</a></li>
        <li><a class="{{ navIsActive('users.safe') }}">账号安全</a></li>
    </ul>

</aside>