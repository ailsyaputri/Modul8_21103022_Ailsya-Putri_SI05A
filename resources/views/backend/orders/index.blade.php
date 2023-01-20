@extends('layouts.backend.master')
@section('title')
    Orderan Masuk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="bi bi-check-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Orderan Success</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                            <i class="bi bi-info-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Orderan Expired</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3">
                                <label for="invoice" class="form-label">Cari Invoice</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">#</span>
                                    <input type="text" class="form-control" autocomplete="off" name="invoice">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="cari" class="form-label">Cari Kata Kunci</label>
                                <input type="text" name="cari" class="form-control" autocomplete="off" id="cari">
                            </div>
                            <div class="col-md-3">
                                <label for="basicSelect" class="form-label">Status Order</label>
                                <select class="form-control" autocomplete="off" id="basicSelect" name="status">
                                    <option value="">-- Pilih --</option>
                                    <option {{ old('status') == 'publish' ? 'selected' : '' }} value="publish">
                                        Publish</option>
                                    <option {{ old('status') == 'draft' ? 'selected' : '' }} value="draft">Draft
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                    <button onClick="window.location.reload()" class="btn btn-danger">
                                        <i class="bi bi-arrow-clockwise"></i> Reload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>INVOICE</th>
                                    <th>USER</th>
                                    <th>PRODUK</th>
                                    <th>HARGA</th>
                                    <th>STATUS</th>
                                    {{-- <th>ACTION</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">#INV-11312</td>
                                    <td>Ojan Alpha</td>
                                    <td class="text-bold-500">Source Code Whatsapp Gateway</td>
                                    <td>Rp. 100.000</td>
                                    <td>
                                        <span class="badge bg-warning">EXPIRED</span>
                                    </td>
                                    {{-- <td class="text-bold-500">
                                        <a class="btn icon icon-left btn-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Proses
                                        </a>
                                    </td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">#INV-11312</td>
                                    <td>Ojan Alpha</td>
                                    <td class="text-bold-500">Source Code Whatsapp Gateway</td>
                                    <td>Rp. 100.000</td>
                                    <td>
                                        <span class="badge bg-success">SUCCESS</span>
                                    </td>
                                    {{-- <td class="text-bold-500">
                                        <a href="#" class="btn icon icon-left btn-primary"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Proses
                                        </a>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
