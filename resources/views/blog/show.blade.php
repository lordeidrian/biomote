@extends('layouts.app')

@section('title', $post->title . ' | BioMote')

@section('content')
<header class="hero-section d-flex align-items-center" style="height: 50vh; min-height: 300px;">
    <div class="overlay"></div>
    <div class="container text-center position-relative z-1">
        <h1 class="hero-title display-4">{{ $post->title }}</h1>
        <p class="hero-subtitle lead mx-auto">
            @if($post->category)
                <span class="badge bg-primary me-2">{{ $post->category->name }}</span>
            @endif
            {{ $post->published_at->format('d F, Y') }}
        </p>
    </div>
</header>

<section class="py-6">
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded mb-5 w-100" alt="{{ $post->title }}">
                @endif
                
                <div class="blog-content">
                    {!! $post->content !!}
                </div>

                @if($post->tags->count() > 0)
                    <div class="mt-4 mb-4">
                        <strong>Etiquetas:</strong>
                        @foreach($post->tags as $tag)
                            <span class="badge bg-secondary me-1">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                @endif
                
                <div class="mt-5 pt-4 border-top">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-2"></i> Volver al Blog</a>
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
