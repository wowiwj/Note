<div class="list-group text-center">
    <a href="{{ route('users.edit',$user) }}" class="list-group-item {{ navIsActive('users.edit') }}">
        个人信息
    </a>
    <a href="{{ route('users.editAvatar',$user) }}" class="list-group-item {{ navIsActive('users.editAvatar') }}">
        修改头像
    </a>
    <a href="#" class="list-group-item {{ navIsActive('users.safe') }}">
        账号安全
    </a>
</div>