<?php

namespace App\Http\Requests\Nasabah;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'produk'           => 'required|string|min:1|max:100',
            'tujuan'           => 'required|string|min:1|max:100',
            'identitas'        => 'required|string|min:1|max:100',
            'nomor_identitas'  => 'required|string|min:1|max:100',
            'nama_nasabah'     => 'required|string|min:1|max:400',
            'nama_ibu'         => 'required|string|min:1|max:400',
            'tempat_lahir'     => 'required|string|min:1|max:400',
            'tanggal_lahir'    => 'required|string|min:1|max:400',
            'jenis_kelamin'    => 'required|string|min:1|max:400',
            'alamat_nasabah'    => 'required|string|min:1|max:400',
            'status_pekerjaan'   => 'required|string|min:1|max:400',
            'mulai_bekerja'    => 'required|string|min:1|max:400',
            'status_pernikahan'  => 'required|string|min:1|max:400',
            'pendidikan'     => 'required|string|min:1|max:400',
            'agama'      => 'required|string|min:1|max:400',
        ];
    }
}
