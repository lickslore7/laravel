<!-- resources/views/supplier/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Supplier</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($suppliers as $index => $supplier)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>{{ $supplier->no_telp_supplier }}</td>
                    <td>{{ $supplier->alamat_supplier }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada supplier.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
