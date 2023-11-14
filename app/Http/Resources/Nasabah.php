<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Nasabah extends JsonResource
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
            'produk' => $this->produk,
            'tujuan' => $this->tujuan,
            'identitas' => $this->identitas,
            'nomor_identitas' => $this->nomor_identitas,
            'nama_nasabah' => $this->nama_nasabah,
            'nama_ibu' => $this->nama_ibu,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat_nasabah' => $this->alamat_nasabah,
            'status_pekerjaan' => $this->status_pekerjaan,
            'mulai_bekerja' => $this->mulai_bekerja,
            'status_pernikahan' => $this->status_pernikahan,
            'pendidikan' => $this->pendidikan,
            'agama' => $this->agama,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
