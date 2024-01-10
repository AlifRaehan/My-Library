<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Buku</h5>
            </div>
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="modal-body container-fluid">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input autocomplete="off" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input autocomplete="off" type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" name="penerbit" value="{{ old('penerbit') }}">
                        @error('penerbit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <label for="isbn" class="form-label"> ISBN </label>
                        <input autocomplete="off" type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') }}">
                        @error('isbn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <label for="kategori" class="form-label"> Kategori</label>
                        <input autocomplete="off" type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{ old('kategori') }}">
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input autocomplete="off" type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
                        @error('tahun_terbit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input autocomplete="off" type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang" value="{{ old('pengarang') }}">
                        @error('pengarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="stok_buku" class="form-label">Stok Buku</label>
                        <input autocomplete="off" type="number" class="form-control @error('stok_buku') is-invalid @enderror" id="stok_buku" name="stok_buku" value="{{ old('stok_buku') }}">
                        @error('stok_buku')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>            
        </div>
    </div>
</div>
