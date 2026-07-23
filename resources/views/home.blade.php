@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')
<div class="row mb-5">
    <div class="col-md-8 mx-auto text-center">
        <h1 class="display-5 mb-3 fw-extrabold" style="font-family: 'Outfit', sans-serif;">Berita Terkini</h1>
        <p class="text-muted leading-relaxed">Menyajikan informasi terhangat, terpercaya, dan mendalam langsung ke hadapan Anda.</p>
        
        @if(request('search'))
            <div class="alert alert-light border border-secondary-subtle rounded-pill py-2 px-4 d-inline-block mt-3">
                <i class="bi bi-search me-2 text-danger"></i>
                Hasil pencarian untuk: <strong>"{{ request('search') }}"</strong>
                <a href="{{ route('home') }}" class="text-decoration-none ms-3 text-secondary"><i class="bi bi-x-circle-fill"></i> Bersihkan</a>
            </div>
        @endif
    </div>
</div>

<!-- News Grid -->
<div class="row g-4">
    @forelse($news as $item)
        <div class="col-md-6 col-lg-4">
            <div class="card news-card">
                <div class="card-img-wrapper">
                    @if($item->thumbnail)
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" class="card-img-top" alt="{{ $item->title }}">
                    @else
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary d-flex align-items-center justify-content-center text-white">
                            <i class="bi bi-image fs-1"></i>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <a href="{{ route('news.show', $item->slug) }}" class="news-title">
                        {{ $item->title }}
                    </a>
                    <p class="news-excerpt">
                        {{ Str::limit(strip_tags($item->content), 100) }}
                    </p>
                    <div class="news-meta mt-auto">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $item->created_at->translatedFormat('d M Y') }}
                            </span>
                            <span>
                                <i class="bi bi-eye me-1"></i>
                                {{ number_format($item->view_count) }} views
                            </span>
                        </div>
                        <a href="{{ route('news.show', $item->slug) }}" class="btn btn-outline-dark btn-sm w-100 mt-3 rounded-pill">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <div class="text-muted mb-3">
                <i class="bi bi-newspaper display-1"></i>
            </div>
            <h3>Belum ada berita</h3>
            <p class="text-secondary">Silakan tambahkan berita melalui Admin CMS.</p>
        </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-5">
    {{ $news->links() }}
</div>
@endsection
