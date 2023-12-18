<!-- resources/views/supplier/edit.blade.php -->

@extends('main')

@section('content')
    <h2>Edit Supplier</h2>

    <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
        @csrf
        @method('put')

        <label for="nama_supplier">Nama Supplier:</label>
        <input type="text" name="nama_supplier" value="{{ $supplier->nama_supplier }}" required>

        <label for="no_telp_supplier">No. Telepon:</label>
        <input type="text" name="no_telp_supplier" value="{{ $supplier->no_telp_supplier }}" required>

        <label for="alamat_supplier">Alamat:</label>
        <textarea name="alamat_supplier" required>{{ $supplier->alamat_supplier }}</textarea>

        <button type="submit">Update Supplier</button>
    </form>
@endsection
