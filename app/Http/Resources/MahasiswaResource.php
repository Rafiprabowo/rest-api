<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            "nim" => $this->nim,
            "nama" => $this->nama,
            "kelas" => $this->kelas_id,
            "jurusan" => strtoupper($this->jurusan),
            "prodi" => $this->prodi,
            "no_hp" => $this->no_hp,
        ];
    }
}
