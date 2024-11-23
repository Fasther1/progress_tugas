<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();


        // Cek apakah ada parameter 'search' di request
        if ($request->has('search') && $request->search != '') {


            // Melakukan pencarian berdasarkan nama produk atau informasi
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('product_name', 'like', '%' . $search . '%');
            });
        }


        // Jika tidak ada parameter ‘search’, langsung ambil produk dengan paginasi
        $products = $query->paginate(10);


      return view("master-data.product-master.index-product", compact('products'));// Mengarahkan ke product.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master-data.product-master.create-product'); // Tampilkan form untuk membuat produk baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi_data = $request->validate([
        'product_name' => 'required|string|max:255',
        'unit'=> 'required|string|max:50',
        'type'=> 'required|nullable|max:50',
        'information'=> 'nullable|string',
        'qty' => 'required|integer',
        'producer'=> 'required|string|max:255',
        ]);

        Product::create($validasi_data);
        return redirect()->route('dashboard')->with('success', 'Produk berhasil ditambahkan');
        // Simpan produk baru
        // Misalnya, validasi dan simpan data ke database
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('master-data.product-master.detail-product', compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form untuk mengedit produk berdasarkan ID
        // Misalnya, cari produk berdasarkan ID dan kirim ke view
        $product = product :: findOrfail($id);
        return view('master-data.product-master.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update produk berdasarkan ID
        // Misalnya, validasi dan update data di database
        $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'information' => 'nullable|string',
            'qty' => 'required|integer|min:1',
            'producer' => 'required|string|max:255',
        ]);
    
        $product = Product::findOrFail($id);
        $product->update([
            'product_name' => $request->product_name,
            'unit' => $request->unit,
            'type' => $request->type,
            'information' => $request->information,
            'qty' => $request->qty,
            'producer' => $request->producer,
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Product berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product){
            $product->delete();

            return redirect()->route('dashboard')->with('success', 'Product berhasil dihapus');
        }
        return redirect()->route('dashboard')->with('eror', 'tidak berhasil menghapus product');
        
        // Hapus produk berdasarkan ID
        // Misalnya, cari produk berdasarkan ID dan hapus dari database
    }

    public function home()
    {
        return view('home'); // Mengarahkan ke home.blade.php
    }

    public function app()
    {
        return view('app'); // Mengarahkan ke app.blade.php
    }

    public function exportExcel()
    {
        return Excel::download(new ProductsExport, 'product.xlsx');
    }

    public function exportPDF()
    {
        $products = Product::all();
        $mpdf = new \Mpdf\Mpdf();
        $html = view('pdf.products', compact('products'))->render(); 
        $mpdf->WriteHTML($html);
        $mpdf->Output('product.pdf', 'D');
   }

}