<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArmadaCollection;
use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index()
    {
        $armadas = Armada::all();

        // Jika tidak ada data yang ditemukan
        if ($armadas->isEmpty()) {
            return (new ArmadaCollection(false, 'Data Armada tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404); // Status HTTP 404 Not Found
        }

        return new ArmadaCollection(true, 'Daftar Data Armada', $armadas);
    }
}
