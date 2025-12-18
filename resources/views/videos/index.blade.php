@extends('layouts.app')

@section('title', 'Galería de Videos - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Videos</li>
                </ol>
            </nav>
            <h1 class="page-title">Galería de Videos</h1>
            <p class="lead text-muted mx-auto">Descubre cómo transformamos residuos en energía sostenible.</p>
        </div>
    </header>

    <div class="container py-5 section-spacing">
        @if($videos->isEmpty())
            <div class="alert alert-info text-center">
                No hay videos disponibles por el momento.
            </div>
        @else
            <div class="row g-4">
                @foreach($videos as $video)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden video-card">
                            <div class="ratio ratio-16x9">
                                @if($video->youtube_id)
                                    <iframe src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                                            title="{{ $video->title }}"
                                            allowfullscreen
                                            class="rounded-top"></iframe>
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-dark text-white">
                                        Invalid Video URL
                                    </div>
                                @endif
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold text-dark mb-2">{{ $video->title }}</h5>
                                @if($video->description)
                                    <p class="card-text text-muted small">{{ Str::limit($video->description, 100) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <style>
        .video-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
    </style>
@endsection
