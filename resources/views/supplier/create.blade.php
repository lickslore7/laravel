{{-- resources/views/supplier/create.blade.php --}}

@extends('supplier.main')

@section('content')
    <div class="container">
        <h2>Tambah/Edit Supplier</h2>

        <!-- Formulir untuk menambahkan atau mengedit supplier -->
        <form action="{{ route('supplier.store') }}" method="post">
            @csrf
            @if(isset($supplier))
                @method('put')
            @endif
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier:</label>
                <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ isset($supplier) ? $suppliers->nama_supplier : '' }}" required>
            </div>
            <div class="form-group">
                <label for="no_telp_supplier">No. Telepon Supplier:</label>
                <input type="text" class="form-control" id="no_telp_supplier" name="no_telp_supplier" value="{{ isset($supplier) ? $suppliers->no_telp_supplier : '' }}" required>
            </div>
            <div class="form-group">
                <label for="alamat_supplier">Alamat Supplier:</label>
                <textarea class="form-control" id="alamat_supplier" name="alamat_supplier" rows="3" required>{{ isset($supplier) ? $suppliers->alamat_supplier : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($supplier) ? 'Update' : 'Simpan' }}</button>
        </form>
    </div>
@endsection
