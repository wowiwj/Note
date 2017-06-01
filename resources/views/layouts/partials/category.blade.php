<div class="panel panel-default">
    <div class="panel-heading">分类</div>

    <div class="panel-body">
        <ul class="list-group">

            @foreach($popular_categories as $item)
                <li class="list-group-item">
                    <span class="badge">{{ $item->articles_count }}</span>
                    <a href="{{ url("categories/".$item->slug) }}">{{ $item->name }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</div>