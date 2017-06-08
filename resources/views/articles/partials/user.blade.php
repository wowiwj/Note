<div class="panel panel-default">
    <div class="panel-heading">用户信息</div>
    <div class="panel-body">
        <div class="media">

            <div class="media-left">
                <img class="avatar img-thumbnail" style="max-width: 80px" src="https://dn-phphub.qbox.me/uploads/avatars/6932_1479471995.jpeg?imageView2/1/w/200/h/200" alt="">
            </div>
            <div class="media-body">
                <h3>{{ $article->user->name }}</h3>
                <p>嘻嘻嘻，哈哈哈</p>
            </div>
        </div>
        {{--@can('update',$user)--}}
        <hr>
        <a class="btn btn-primary btn-block" href="#">编辑个人资料</a>
        {{--@endcan--}}

    </div>

</div>