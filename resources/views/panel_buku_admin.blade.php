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
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nomor Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tahun Terbit</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Penerbit</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Penulis</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Jenis Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Mein Kampf</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                0001
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                1940
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                Deustchland
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                Adolf Hitler
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                Biografi
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
