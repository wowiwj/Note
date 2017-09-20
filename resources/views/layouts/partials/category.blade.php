<div class="panel panel-default">
    <div class="panel-heading">分类</div>

    <div class="panel-body">
        <ul class="list-group">

            @forelse($popular_categories as $item)
                <li class="list-group-item">
                    <span class="badge">{{ $item->articles_count }}</span>
                    <a href="{{ url("articles/".$item->slug) }}">{{ $item->name }}
                    </a>
                </li>
            @empty
                <li class="empty-block">没有分类数据</li>
            @endforelse

        </ul>
    </div>
</div>