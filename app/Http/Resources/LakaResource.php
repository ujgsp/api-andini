<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LakaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'lokasi' => $this->lokasi,
            'jalur' => $this->jalur,
            'gol_kendaraan' => $this->gol_kendaraan,
            'korban' => $this->korban,
            'faktor_penyebab' => $this->faktor_penyebab,
            'detail_penyebab' => $this->detail_penyebab,
            'kejadian' => $this->kejadian
        ];
    }
}
