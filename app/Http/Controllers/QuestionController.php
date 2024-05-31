<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\BasicWord;
use App\Models\Questionword;
use Illuminate\Database\Schema\Blueprint;



class QuestionController extends Controller
{
    var $hasilPreprosesPertanyaan;
    public function setQuestion(Request $request)
    {
        /*$validatedData = $request->validate([
            'question' => 'required|string|max:255',
        ]);*/
        $question=$request->question;
        $text = json_encode($question);
        // Case folding
        $text = strtolower($text);

        // Filtering 
        $textArray = explode(' ', $text);
        $filteredWords = array_filter($textArray, function($word) {
            return strlen($word) > 2; // Contoh filter, hanya kata dengan panjang lebih dari 2 yang disimpan
        });

        // Stopword removal
        $stopwords = ['dan', 'atau', 'tetapi', 'di', 'ke', 'dari','yang','dengan'];
        $filteredWords = array_filter($filteredWords, function($word) use ($stopwords) {
            return !in_array($word, $stopwords);
        });

        // Menggabungkan kata-kata yang telah difilter kembali menjadi string
        $kalimat = implode(' ', $filteredWords);

        //stemmingArifin
        $words = explode(' ', $kalimat);
        $stemmedWords = array_map([$this, 'stemWord'], $words);
        $stemmedSentence = implode(' ', $stemmedWords);
        $exp = explode(' ', $stemmedSentence);

        //menyimpan dalam variabel
        $this->hasilPreprosesPertanyaan = $exp;
        $kataTanya= $this->questionWordIs();

        dd(' Text:', $exp, 'Processed Text:', $kataTanya);

        }
        private function stemWord($word)
        {
        // Logika stemming sederhana dengan menghapus imbuhan
            $patterns = [
            '/^(ber|ter|di|ke|se)/', // Prefixes
            '/(kah|an|i|kan)$/',         // Suffixes
        ];

        $stemmedWord = $word;
        foreach ($patterns as $pattern) {
            $stemmedWord = preg_replace($pattern, '', $stemmedWord);
        }

        // Cek apakah kata dasar ada dalam database
        if (basicword::where('basicword', $stemmedWord)->exists()) {
            return $stemmedWord;
        }

        // Jika tidak ditemukan, kembalikan kata asli
        return $word;
    }
    private function questionWordIs()
    {
       // Ambil kalimat pertanyaan hasil preproses
        $kalimatTanya = $this->hasilPreprosesPertanyaan;

        // Ambil kata-kata tanya dari database
       $questionword = questionword::pluck('questionword')->map(function ($questionword) {
            return strtolower($questionword);
        })->toArray();

        // Cari kata-kata tanya yang ada di dalam kalimat pertanyaan
        $tanya= array_intersect($kalimatTanya, $questionword);
        $toString = implode(" ", $tanya);
        return $toString;
    
    }
}
