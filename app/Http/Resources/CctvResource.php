<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CctvResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_cctv' => $this->id_cctv,
            'nama_cctv' => $this->nama_cctv,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'status' => $this->status,
            'is_shown' => $this->is_shown,
            'lokasi' => $this->lokasi,
            'id_bujt' => $this->id_bujt
        ];
    }
}
