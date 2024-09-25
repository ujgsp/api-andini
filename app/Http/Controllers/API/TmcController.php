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
    public function index()
    {
        $tmcs = Tmc::paginate(10);

        // Jika tidak ada data yang ditemukan
        if ($tmcs->isEmpty()) {
            return (new TmcCollection(false, 'Data TMC validasi tidak ditemukan', collect([])))
                ->response()
                ->setStatusCode(404); // Status HTTP 404 Not Found
        }

        return new TmcCollection(true, 'Daftar Data TMC validasi perpage', $tmcs);
    }

    public function all()
    {
        $tmcs = Tmc::all();

        // Jika tidak ada data yang ditemukan
        if ($tmcs->isEmpty()) {
            return (new TmcAllCollection(false, 'Data TMC validasi tidak ditemukan', collect([])))
            ->response()
            ->setStatusCode(404); // Status HTTP 404 Not Found
        }

        return new TmcAllCollection(true, 'Daftar Data TMC validasi', $tmcs);
    }

}
