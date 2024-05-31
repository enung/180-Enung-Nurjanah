<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;
use Illuminate\Validation\Validator;
use App\Models\Answerkey;


class AnswerkeyController extends Controller
{
    public function index(){
        $answerkey = Answerkey::all();
        return view('partials.pages.dashboard.answerkey',['answerkey'=>$answerkey]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'answerkey' => 'required|string|max:500',
            'keyword' => 'required|string|max:100',
            'questionwordid' => 'required|int|max:255',
            'categoryid' => 'required|int|max:255'
        ]);
        
        $data = Answerkey::create([
            'answerkey' => $validatedData['answerkey'],
            'keyword' => $validatedData['keyword'],
            'questionwordid' => $validatedData['questionwordid'],
            'categoryid' => $validatedData['categoryid'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($data){
            return redirect()->route('answerkey.list')->with('success', 'Kategori berhasil ditambahkan');
        }
    }
    public function edit(Request $request)
    {
        try {
            $id = $request->id;
            $data = Answerkey::find($id);

            if ($data) {
                return view('partials.pages.dashboard.edit-answerkey', compact('data'));
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
            'answerkey' => 'required|string|max:500',
            'keyword' => 'required|string|max:100',
            'questionwordid' => 'required|int|max:255',
            'categoryid' => 'required|int|max:255'
        ]);

        $data = Answerkey::find($id);

        if ($data) {
            $data->update($validatedData);
            return redirect()->route('answerkey.list')->with('success', 'Kunci Jawaban berhasil diupdate');
        } else {
            // Redirect dengan pesan error
            return redirect()->route('answerkey.list')->with('error', 'Kunci Jawaban tidak ditemukan');
        }
    }
    public function destroy($id)
    {
       try {
            $data = Answerkey::findOrFail($id);
            $data->delete();            
            return redirect()->back()->with('success', 'Data berhasil dihapus'); 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
