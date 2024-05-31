<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Providers\AppServiceProvider;
use Illuminate\Validation\Validator;

class CategoryController extends Controller
{
    public function index(){
        $kategori = Category::all();
        return view('partials.pages.dashboard.category',['kategori'=>$kategori]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:50',
        ]);
        
        $data = Category::create([
            'category' => $validatedData['category'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($data){
            return redirect()->route('category.list')->with('success', 'Kategori berhasil ditambahkan');
        }
    }
    public function edit(Request $request)
    {
        try {
            $id = $request->id;
            $data = Category::find($id);

            if ($data) {
                return view('partials.pages.dashboard.edit-category', compact('data'));
            } else {
                return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
            }
        }catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:255',
            'category' => 'required|max:50',
        ]);

        $data = Category::find($id);

        if ($data) {
            $data->update($validatedData);
            return redirect()->route('category.list')->with('success', 'Kategori berhasil diupdate');
        } else {
            // Redirect dengan pesan error
            return redirect()->route('category.list')->with('error', 'Kategori tidak ditemukan');
        }
    }
    public function destroy($id)
    {
       try {
            $data = Category::findOrFail($id);
            $data->delete();            
            return redirect()->back()->with('success', 'Data berhasil dihapus'); 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

}
