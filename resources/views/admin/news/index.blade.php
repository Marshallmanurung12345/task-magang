@extends('layouts.app')

@section('title', 'Admin Dashboard CMS')

@section('content')
<div class="row">
    <!-- Admin Sidebar / Menu -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header bg-dark text-white py-3">
                <h5 class="mb-0 text-white" style="font-family: 'Outfit', sans-serif;">Admin CMS</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('news.index') }}" class="list-group-item list-group-item-action py-3 d-flex align-items-center {{ Route::is('news.index') ? 'active bg-dark border-dark text-white' : 'text-secondary' }}">
                    <i class="bi bi-grid-fill me-2 fs-5"></i> Dashboard / Daftar Berita
                </a>
                <a href="{{ route('news.create') }}" class="list-group-item list-group-item-action py-3 d-flex align-items-center text-secondary">
                    <i class="bi bi-plus-circle-fill me-2 fs-5"></i> Tambah Berita
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
                <div>
                    <h2 class="mb-1" style="font-family: 'Outfit', sans-serif;">Daftar Berita</h2>
                    <p class="text-muted mb-0 small">Kelola seluruh berita yang diterbitkan di portal ini.</p>
                </div>
                <a href="{{ route('news.create') }}" class="btn btn-dark rounded-pill px-4">
                    <i class="bi bi-plus-lg me-2"></i> Tambah Berita
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- News Bootstrap Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light text-secondary">
                        <tr>
                            <th scope="col" style="width: 80px;">Thumbnail</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col" style="width: 100px;">Dibaca</th>
                            <th scope="col" style="width: 150px;">Tanggal Rilis</th>
                            <th scope="col" class="text-end" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($news as $item)
                            <tr>
                                <td>
                                    @if($item->thumbnail)
                                        <img src="{{ asset('storage/' . $item->thumbnail) }}" class="rounded object-fit-cover" alt="Thumb" style="width: 64px; height: 64px;">
                                    @else
                                        <div class="bg-secondary text-white rounded d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                            <i class="bi bi-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="fw-semibold text-dark">{{ $item->title }}</div>
                                    <a href="{{ route('news.show', $item->slug) }}" target="_blank" class="small text-secondary text-decoration-none">
                                        <i class="bi bi-box-arrow-up-right me-1"></i> Lihat Publik
                                    </a>
                                </td>
                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">
                                        {{ number_format($item->view_count) }}x
                                    </span>
                                </td>
                                <td class="small text-secondary">
                                    {{ $item->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="text-end">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{ route('news.edit', $item->slug) }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('news.destroy', $item->slug) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-secondary">
                                    <i class="bi bi-inbox display-6 d-block mb-2"></i> Belum ada berita.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-4">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
