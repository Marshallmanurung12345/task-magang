@extends('layouts.app')

@section('title', 'Tambah Berita Baru')

@section('content')
<div class="row">
    <!-- Admin Sidebar / Menu -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header bg-dark text-white py-3">
                <h5 class="mb-0 text-white" style="font-family: 'Outfit', sans-serif;">Admin CMS</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('news.index') }}" class="list-group-item list-group-item-action py-3 d-flex align-items-center text-secondary">
                    <i class="bi bi-grid-fill me-2 fs-5"></i> Dashboard / Daftar Berita
                </a>
                <a href="{{ route('news.create') }}" class="list-group-item list-group-item-action py-3 d-flex align-items-center active bg-dark border-dark text-white">
                    <i class="bi bi-plus-circle-fill me-2 fs-5"></i> Tambah Berita
                </a>
            </div>
        </div>
    </div>

    <!-- Main Form Content -->
    <div class="col-md-9">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <h2 class="mb-1" style="font-family: 'Outfit', sans-serif;">Tambah Berita</h2>
            <p class="text-muted mb-4 small">Tulis dan terbitkan berita baru ke portal publik.</p>

            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Judul Berita -->
                <div class="mb-4">
                    <label for="title" class="form-label fw-bold">Judul Berita</label>
                    <input type="text" class="form-control rounded-3 @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Masukkan judul berita" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Thumbnail -->
                <div class="mb-4">
                    <label for="thumbnail" class="form-label fw-bold">Thumbnail Berita</label>
                    <input type="file" class="form-control rounded-3 @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/jpeg,image/png,image/jpg,image/webp" required>
                    <div class="form-text">Format: JPG, JPEG, PNG, WEBP. Maksimal ukuran file 2 MB.</div>
                    @error('thumbnail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Isi Berita (CKEditor) -->
                <div class="mb-4">
                    <label for="editor" class="form-label fw-bold">Isi Berita</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="editor" name="content" rows="10" placeholder="Tulis isi berita di sini...">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-5">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary rounded-pill px-4">Batal</a>
                    <button type="submit" class="btn btn-dark rounded-pill px-4">Simpan & Terbitkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'link', '|',
                    'bulletedList', 'numberedList', 'blockQuote', '|',
                    'insertTable', '|',
                    'undo', 'redo'
                ]
            },
            language: 'id'
        })
        .catch(error => {
            console.error(error);
        });
</script>
<style>
    /* Ensure CKEditor handles minimum height elegantly */
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>
@endsection
