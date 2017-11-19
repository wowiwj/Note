
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            热门分类
        </p>
        <a href="#" class="card-header-icon" aria-label="more options">
            查看全部
        </a>
    </header>
    <div class="card-content">
        <div class="content">
            <div class="columns is-multiline is-centered">

                @forelse($popular_categories as $item)

                    <div class="column is-half level-item has-text-centered">
                        <a href="{{ $item->path() }}" class="round-item">
                            {{ mb_substr($item->name,0,5)  }}
                        </a>

                    </div>
                @empty
                    <li class="empty-block">没有分类数据</li>
                @endforelse

            </div>
        </div>
    </div>
</div>
