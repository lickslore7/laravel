<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    // Menampilkan semua data supplier
    // SupplierController.php

    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }


    // Menampilkan formulir tambah supplier
    public function create()
    {
        return view('supplier.create');
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

    // Menampilkan detail supplier
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    // Menampilkan formulir edit supplier
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('supplier'));
    }

    // Menyimpan perubahan data supplier yang diperbarui
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
                'nama_supplier' => $request->nama_supplier,
                'no_telp_supplier' => $request->no_telp_supplier,
                'alamat_supplier' => $request->alamat_supplier,
            ]);

            return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
        } else {
            return redirect()->route('supplier.index')->with('error', 'Supplier tidak ditemukan.');
        }
    }

    // Menghapus supplier
    public function destroy($id)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return redirect()->route('supplier.index')->with('error', 'Supplier not found.');
        }

        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Supplier deleted successfully.');
    }
}
