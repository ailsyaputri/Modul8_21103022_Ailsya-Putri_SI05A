<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('category')->get();
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|numeric',
            'harga' => 'required|numeric',
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $image_file = time() . '.' . $request->image->extension();
        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', $request->title),
            'harga' => $request->harga,
            'body' => $request-> body,
            'image' => $image_file
        ]);

        # menentukan folder mana yang akan menyimpan gambar hasil upload kita
        $request->image->move(public_path('image'), $image_file);
        
        // balikan ke halaman list product
        return redirect()->route('admin.product.index')->with('success', 'New Product Hass been Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        # membuat variabel untuk menampung data produk dari where by Id
        $category = Category::all();
        $data = Product::findOrFail($id);

        # jika variabel data ada tidak kosong maka kita kembalikan kedalam view edit untuk mengubah data tersebut
        return view('admin.product.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # membuat variabel untuk cek apakah id tersebut ada atau tidak menggunakan find / where by id 
        $data = Product::find($id);
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|numeric',
            'harga' => 'required|numeric',
            'body' => 'required',
        ]);
        
        $data->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', $request->title),
            'harga' => $request->harga,
            'body' => $request-> body,
        ]);
        # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('admin.product.index')->with('success', 'Product Hass Been Update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        unlink(public_path('image/'. $data->image));
        $data->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product Hass Been Update');
    }

    //     # membuat if satu kondisi dimana jika kosong data tersebut akan di kembalikan
    //     if (empty($data)) {
    //         # kembalikan ke halaman list product dengan notifikasi with
    //         return redirect()->route('product.index')->with('galat', 'product not found');
    //     }

    //     # gunakan fitur unlink untuk menghapus gambar pada folder penyimpanan kita sesuai dengan nama file pada database
    //     unlink(public_path('img/' . $data->image));

    //     # gunakan query delete orm untuk menghapus data pada tabel

    //     # awal query
    //     $data->delete();
    //     # akhir query

    //     # kembalikan hasil controller ini ke halaman list product
    //     return redirect()->route('product.index')->with('success', 'Product Berhasil di Hapus');
    // }
}


    