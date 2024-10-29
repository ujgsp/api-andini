<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LakaCollection;
use App\Models\Laka;
use Illuminate\Http\Request;

class LakaController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $offset = $request->query('offset', 0); // default offset 0 jika tidak ada

        // Query untuk mendapatkan data
        $query = Laka::query();

        // Kondisi untuk mengambil semua data jika limit tidak ada
        if ($limit) {
            $lakas = $query->skip($offset)->take($limit)->get();
        } else {
            $lakas = $query->get(); // Mengambil semua data
        }

        // handle status code
        if ($lakas->isEmpty()) {
            return (new LakaCollection(false, 'Data Laka tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404);
        }

        return new LakaCollection(true, 'Daftar Data Laka', $lakas);
    }
}
