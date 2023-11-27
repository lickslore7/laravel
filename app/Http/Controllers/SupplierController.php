<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; // Sesuaikan dengan nama model Anda

class SupplierController extends Controller
{

    public function destroy($id)
{
    $supplier = Supplier::find($id);

    if (!$supplier) {
        return redirect()->route('supplier.index')->with('error', 'Supplier not found.');
    }

    $supplier->delete();

    return redirect()->route('supplier.index')->with('success', 'Supplier deleted successfully.');
}
    // Menampilkan semua data supplier
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.supplier', compact('supplier'));
    }

    // Menampilkan formulir tambah supplier
    public function create()
    {
        return view('supplier.create');
    }

    public function getDetails($id)
{
    $supplier = Supplier::find($id);

    return response()->json($supplier);
}

    // Menyimpan data supplier yang baru ditambahkan
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'no_telp_supplier' => 'required',
            'alamat_supplier' => 'required',
        ]);

        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'no_telp_supplier' => $request->no_telp_supplier,
            'alamat_supplier' => $request->alamat_supplier,
        ]);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan!');
    }

     public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'no_telp_supplier' => 'required',
            'alamat_supplier' => 'required',
        ]);

        $supplier = Supplier::find($id);

        if ($supplier) {
            $supplier->update([
                'id' =>  $request->id,
                'nama_supplier' => $request->nama_supplier,
                'no_telp_supplier' => $request->no_telp_supplier,
                'alamat_supplier' => $request->alamat_supplier,
                // dan atribut lain yang sesuai
            ]);

            return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
        } else {
            return redirect()->route('supplier.index')->with('error', 'Supplier tidak ditemukan.');
        }
    }


}
