<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionword;
use App\Providers\AppServiceProvider;
use Illuminate\Validation\Validator;


class QuestionwordController extends Controller
{
    public function index(){
        $question = questionword::all();
        return view('partials.pages.dashboard.questionword', ['question'=>$question]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'questionword' => 'required|string|max:50',
        ]);
        
        $data = Questionword::create([
            'questionword' => $validatedData['questionword'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($data){
            return redirect()->route('questionword.list')->with('success', 'Kata Tanya berhasil ditambahkan');
        }
    }
    public function edit(Request $request)
    {
        try {
            $id = $request->id;
            $data = Questionword::find($id);

            if ($data) {
                return view('partials.pages.dashboard.edit-questionword', compact('data'));
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
            'questionword' => 'required|max:50',
        ]);

        $data = Questionword::find($id);

        if ($data) {
            $data->update($validatedData);
            return redirect()->route('questionword.list')->with('success', 'Kategori berhasil diupdate');
        } else {
            // Redirect dengan pesan error
            return redirect()->route('questionword.list')->with('error', 'Kategori tidak ditemukan');
        }
    }
    public function destroy($id)
    {
       try {
            $data = Questionword::findOrFail($id);
            $data->delete();            
            return redirect()->back()->with('success', 'Data berhasil dihapus'); 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
