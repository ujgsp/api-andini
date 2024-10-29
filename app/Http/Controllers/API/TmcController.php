<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TmcAllCollection;
use App\Http\Resources\TmcCollection;
use App\Http\Resources\TmcResource;
use App\Models\Tmc;
use Illuminate\Http\Request;

class TmcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $offset = $request->query('offset', 0); // default offset 0 jika tidak ada

        // Query untuk mendapatkan data
        $query = Tmc::query();

        // Kondisi untuk mengambil semua data jika limit tidak ada
        if ($limit) {
            $lakas = $query->skip($offset)->take($limit)->get();
        } else {
            $lakas = $query->get(); // Mengambil semua data
        }

        // handle status code
        if ($lakas->isEmpty()) {
            return (new TmcCollection(false, 'Data Tmc tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404);
        }

        return new TmcCollection(true, 'Daftar Data Tmc', $lakas);
    }

    // public function all()
    // {
    //     $tmcs = Tmc::all();

    //     // Jika tidak ada data yang ditemukan
    //     if ($tmcs->isEmpty()) {
    //         return (new TmcAllCollection(false, 'Data TMC validasi tidak ditemukan', collect([])))
    //         ->response()
    //         ->setStatusCode(404); // Status HTTP 404 Not Found
    //     }

    //     return new TmcAllCollection(true, 'Daftar Data TMC validasi', $tmcs);
    // }

}
