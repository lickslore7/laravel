<!-- resources/views/supplier/show.blade.php -->

@extends('supplier.main')

@section('content')
<div class="page-wrapper">
    <div class="container-xl">
<!-- Page title -->
<div class="page-header d-print-none">
<div class="row align-items-center">
    <div class="col">
        <h2 class="page-title">
            {{ $supplier->nama_supplier }}
        </h2>
    </div>
</div>

<div class="col-auto ms-auto d-print-none">
    <a href="/supplier" class="btn btn-primary"> <i class="fa-solid fa-arrow-left"></i>&nbsp; Kembali</a>
</div>
</div>
</div>
<div class="page-body">
<div class="container-xl">
<div class="row row-deck row-cards">
    <div class="col-auto ms-auto d-print-none">
    </div>

    <div class="card mb-5">
        <div class="card-header">
            <h3 class="card-title">Detail {{ $supplier->nama_supplier }}</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div class="row">
                <div class="col-md-6">
                    <h4>Kode Supplier</h4>
                    <p>{{ $supplier->kd_supplier }}</p>
                </div>
                <div class="col-md-6">
                    <h4>Nama Supplier</h4>
                    <p>{{ $supplier->nama_supplier }}</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <h4>Nomor Telp</h4>
                    <p>{{ $supplier->no_telp_supplier }}</p>
                </div>
                <div class="col-md-6">
                    <h4>Alamat</h4>
                    <p>{{ $supplier->alamat_supplier }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection