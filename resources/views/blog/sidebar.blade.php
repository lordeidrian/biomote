<div class="sidebar">
    <!-- Search Widget -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-header bg-white border-0 py-3">
            <h5 class="mb-0">Buscar</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('blog.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-header bg-white border-0 py-3">
            <h5 class="mb-0">Categorías</h5>
        </div>
        <div class="card-body p-0">
            <ul class="list-group list-group-flush">
                @foreach($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-4">
                        <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="text-decoration-none text-dark">
                            {{ $category->name }}
                        </a>
                        <span class="badge bg-light text-dark rounded-pill">{{ $category->posts_count }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Recent Posts Widget -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-header bg-white border-0 py-3">
            <h5 class="mb-0">Recientes</h5>
        </div>
        <div class="card-body">
            @foreach($recentPosts as $recentPost)
                <div class="mb-3 d-flex align-items-center">
                    @if($recentPost->image)
                        <img src="{{ asset('storage/' . $recentPost->image) }}" alt="{{ $recentPost->title }}" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                    @else
                        <div class="rounded me-3 bg-secondary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-image text-white"></i>
                        </div>
                    @endif
                    <div>
                        <h6 class="mb-1">
                            <a href="{{ route('blog.show', $recentPost->slug) }}" class="text-decoration-none text-dark text-truncate d-block" style="max-width: 150px;">
                                {{ $recentPost->title }}
                            </a>
                        </h6>
                        <small class="text-muted">{{ $recentPost->published_at->format('d M, Y') }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Tags Widget -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-header bg-white border-0 py-3">
            <h5 class="mb-0">Etiquetas</h5>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap gap-2">
                @foreach($tags as $tag)
                    <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="badge bg-light text-dark text-decoration-none border p-2">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
