<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;
use Illuminate\Validation\Validator;
use App\Models\Book;
use Dompdf\Dompdf;
use Dompdf\Options;

class BookController extends Controller
{
    public function index(){
        $book = Book::all();
        return view('partials.pages.dashboard.book',['book'=>$book]);
    }
    public function showPdf()
    {
        //Ambil data PDF dari database
        $pdfDocument = Book::all();

        // Path berkas PDF
        $pdfPath = storage_path('app/' . $pdfDocument->pdf_path);

        // Tampilkan view PDF
        return view('pdf', compact('pdfPath'));
    }
    public function store(Request $request)
    {
    // Validasi input
        try {
            $validatedData = $request->validate([
                'id' => 'required|int|max:255',
                'tittle' => 'required|string|max:500',
                'author' => 'required|string|max:100',
                'publisher' => 'required|string|max:255',
                'pdf_path' => 'required|file|mimes:pdf|max:2048'
            ]);

            \Log::info('Validated Data:', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation Error:', ['errors' => $e->errors()]);
            return redirect()->route('book.list')->with('error', 'Validasi gagal');
        }

    // Proses penyimpanan file
        if ($request->hasFile('pdf_path')) {
            try {
                $file = $request->file('pdf_path');
            $path = $file->store('pdfs', 'public'); // Menyimpan file di direktori 'storage/app/public/pdfs'
            \Log::info('File Path:', ['path' => $path]);
        } catch (\Exception $e) {
            \Log::error('File Upload Error:', ['error' => $e->getMessage()]);
            return redirect()->route('book.list')->with('error', 'File PDF gagal diunggah');
        }

            // Simpan data ke dalam database
        try {
            $book = Book::create([
                'id' => $validatedData['id'],
                'tittle' => $validatedData['tittle'],
                'author' => $validatedData['author'],
                'publisher' => $validatedData['publisher'],
                'pdf_path' => $path,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            \Log::info('Book Created:', ['book' => $book]);

                // Cek apakah data berhasil disimpan
            if ($book) {
                return redirect()->route('book.list')->with('success', 'Buku berhasil ditambahkan');
            } else {
                \Log::error('Failed to save book.');
                return redirect()->route('book.list')->with('error', 'Buku gagal ditambahkan');   
            }
        } catch (\Exception $e) {
            \Log::error('Database Save Error:', ['error' => $e->getMessage()]);
            return redirect()->route('book.list')->with('error', 'Terjadi kesalahan saat menyimpan data buku');
        }
    } else {
        \Log::error('File PDF tidak ditemukan.');
        return redirect()->route('book.list')->with('error', 'File PDF gagal diunggah');
    }
}

public function edit(Request $request)
{
    try {
        $id = $request->id;
        $data = Book::find($id);

        if ($data) {
            return view('partials.pages.dashboard.edit-book', compact('data'));
        } else {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }
    }catch (\Exception $e) {
        return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
    }
}
public function update(Request $request, $id)
{
     try {
            $validatedData = $request->validate([
                'id' => 'required|int|max:255',
                'tittle' => 'required|string|max:500',
                'author' => 'required|string|max:100',
                'publisher' => 'required|string|max:255',
                'pdf_path' =>  'nullable|file|mimes:pdf|max:5120'
            ]);

            \Log::info('Validated Data:', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation Error:', ['errors' => $e->errors()]);
            return redirect()->route('book.list')->with('error', 'Validasi gagal');
        }

    $data = Book::find($id);
    if ($data) {
        // Handle the file upload
        if ($request->hasFile('pdf_path')) {
            $file = $request->file('pdf_path');
            $filePath = $file->store('pdfs', 'public'); // Save the file in the 'public/pdfs' directory

            // Add the new pdf path to the validated data array
            $validatedData['pdf_path'] = $filePath;
        }

        // Update the book with the validated data
        $data->update($validatedData);

        return redirect()->route('book.list')->with('success', 'Buku berhasil diupdate');
    } else {
        // Redirect with error message
        return redirect()->route('book.list')->with('error', 'Buku tidak ditemukan');
    }
}
public function destroy($id)
{
 try {
    $data = Book::findOrFail($id);
    $data->delete();            
    return redirect()->back()->with('success', 'Data berhasil dihapus'); 
} catch (\Exception $e) {
    return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
}
}
}
