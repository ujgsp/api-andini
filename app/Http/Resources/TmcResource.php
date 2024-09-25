<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TmcResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->no,
            'id_detek' => $this->id_detek,
            'cctv' => $this->cctv,
            'tanggal' => $this->tanggal,
            'foto' => $this->foto,
            'tempat' => $this->tempat,
            'penyebab' => $this->penyebab,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'proses' => $this->proses,
            'patroli' => $this->patroli,
            'maps' => $this->maps,
            'folder' => $this->folder,
            'p_tiba' => $this->p_tiba,
            'p_selesai' => $this->p_selesai,
            'keterangan_penanganan' => $this->keterangan_penanganan,
            'foto_penangan' => ($this->foto_penangan == '0') ? null : "http://192.84.11.253/andini/uploads/".$this->folder."/" . $this->foto_penangan,
            'foto_deteksi' => $this->area ? "http://192.84.11.253/andini/ANDINI/" . $this->area : null,
            'derek' => $this->derek,
            'rescue' => $this->rescue,
            'ambulance' => $this->ambulance
        ];
    }
}
