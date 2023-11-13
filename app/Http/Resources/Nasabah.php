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
            'produk' => $request->produk,
            'tujuan' => $request->tujuan,
            'identitas' => $request->identitas,
            'nomor_identitas' => $request->nomor_identitas,
            'nama_nasabah' => $request->nama_nasabah,
            'nama_ibu' => $request->nama_ibu,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_nasabah' => $request->alamat_nasabah,
            'status_pekerjaan' => $request->status_pekerjaan,
            'mulai_bekerja' => $request->mulai_bekerja,
            'status_pernikahan' => $request->status_pernikahan,
            'pendidikan' => $request->pendidikan,
            'agama' => $request->agama,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
