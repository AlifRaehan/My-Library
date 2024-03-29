@extends('layouts.main_index_admin')
@section('main_index')
    {{-- content --}}
    <div class="container-fluid py-4">
        <div class="row my-4">
            <div class="col-lg-11 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Projects</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 done</span> this month
                                </p>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal"
                                          data-bs-target="#createModal">Tambah Buku</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     @include("partials.buku.create_modal")
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Penerbit</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ISBN</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            kategori</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tahun Terbit</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Penulis</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Stok Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bukus as $buku)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $buku->judul }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->penerbit }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->isbn }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->kategori }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->tahun_terbit }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->pengarang }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $buku->stok_buku }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group d-flex">
                                                   <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                   data-bs-target="#editModal_{{ $buku->id }}" data-book-id="{{ $buku->id }}">
                                                        Edit
                                                    </button>                                               
                                                   @include("partials.buku.edit_modal")
                                                    <form action="{{ route('buku.delete', $buku->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
           
        </footer>
    </div>
@endsection
