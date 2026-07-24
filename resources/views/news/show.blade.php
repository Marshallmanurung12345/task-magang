@extends('layouts.app')

@section('title', $news->title)

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <!-- Back Button -->
        <a href="{{ route('home') }}" class="btn btn-link text-decoration-none text-dark p-0 mb-4 align-items-center d-inline-flex">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Beranda
        </a>

        <article class="news-detail-container">
            <!-- Title -->
            <h1 class="display-6 mb-3" style="line-height: 1.3;">
                {{ $news->title }}
            </h1>

            <!-- Meta Information -->
            <div class="d-flex flex-wrap align-items-center gap-3 text-muted mb-4 pb-3 border-bottom fs-6">
                <span class="d-flex align-items-center">
                    <i class="bi bi-calendar3 me-2"></i>
                    {{ $news->created_at->translatedFormat('d F Y H:i') }} WIB
                </span>
                <span class="d-flex align-items-center">
                    <i class="bi bi-eye me-2"></i>
                    {{ number_format($news->view_count) }} Kali Dibaca
                </span>
            </div>

            <!-- Large Thumbnail Image -->
            @if($news->thumbnail_url)
                <div class="mb-4 rounded-4 overflow-hidden shadow-sm">
                    <img src="{{ $news->thumbnail_url }}" class="img-fluid w-100" alt="{{ $news->title }}" style="max-height: 500px; object-fit: cover;">
                </div>
            @endif

            <!-- Content Area (Rich Text) -->
            <div class="news-content">
                {!! $news->content !!}
            </div>
        </article>
    </div>
</div>
@endsection
