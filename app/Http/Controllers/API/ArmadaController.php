<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArmadaCollection;
use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $offset = $request->query('offset', 0); // default offset 0 jika tidak ada

        // Query untuk mendapatkan data
        $query = Armada::query();

        // Kondisi untuk mengambil semua data jika limit tidak ada
        if ($limit) {
            $lakas = $query->skip($offset)->take($limit)->get();
        } else {
            $lakas = $query->get(); // Mengambil semua data
        }

        // handle status code
        if ($lakas->isEmpty()) {
            return (new ArmadaCollection(false, 'Data Armada tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404);
        }

        return new ArmadaCollection(true, 'Daftar Data Armada', $lakas);
    }
}
