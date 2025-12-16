@extends('layouts.app')

@section('title', 'Blog | BioMote')

@section('content')
<header class="hero-section d-flex align-items-center" style="height: 60vh; min-height: 400px;">
    <div class="overlay"></div>
    <div class="container text-center position-relative z-1">
        <h1 class="hero-title display-3">Nuestro Blog</h1>
        <p class="hero-subtitle lead mx-auto">Noticias, consejos y novedades sobre energía sostenible.</p>
    </div>
</header>

<section class="py-6 bg-light">
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse ($posts as $post)
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <i class="bi bi-image text-white fs-1"></i>
                                    </div>
                                @endif
                                <div class="card-body">
                                    @if($post->category)
                                        <span class="badge bg-primary mb-2">{{ $post->category->name }}</span>
                                    @endif
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text text-muted small">{{ $post->published_at->format('d M, Y') }}</p>
                                    <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                                    @if($post->tags->count() > 0)
                                        <div class="mb-3">
                                            @foreach($post->tags as $tag)
                                                <span class="badge bg-secondary me-1">{{ $tag->name }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                    <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline-primary btn-sm stretched-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">No hay publicaciones aún.</p>
                        </div>
                    @endforelse
                </div>
                
                <div class="mt-5 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                @include('blog.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection
