<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CctvCollection;
use App\Models\Cctv;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $offset = $request->query('offset', 0); // default offset 0 jika tidak ada

        // Query untuk mendapatkan data
        $query = Cctv::query();

        // Kondisi untuk mengambil semua data jika limit tidak ada
        if ($limit) {
            $lakas = $query->skip($offset)->take($limit)->get();
        } else {
            $lakas = $query->get(); // Mengambil semua data
        }

        // handle status code
        if ($lakas->isEmpty()) {
            return (new CctvCollection(false, 'Data CCTV tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404);
        }

        return new CctvCollection(true, 'Daftar Data CCTV', $lakas);
    }
}
