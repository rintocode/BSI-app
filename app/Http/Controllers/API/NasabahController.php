<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Nasabah as NasabahResource;
use App\Models\Nasabah;
use Illuminate\Http\Request;
use Validator;

class NasabahController extends BaseController
{
    public function index()
    {
        $nasabahs = Nasabah::all();
        return $this->sendResponse(NasabahResource::collection($nasabahs), 'Posts fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'produk' => 'required|string|min:1|max:100',
            'tujuan' => 'required|string|min:1|max:100',
            'identitas' => 'required|string|min:1|max:100',
            'nomor_identitas' => 'required|string|min:1|max:100',
            'nama_nasabah' => 'required|string|min:1|max:400',
            'nama_ibu' => 'required|string|min:1|max:400',
            'tempat_lahir' => 'required|string|min:1|max:400',
            'tanggal_lahir' => 'required|string|min:1|max:400',
            'jenis_kelamin' => 'required|string|min:1|max:400',
            'alamat_nasabah' => 'required|string|min:1|max:400',
            'status_pekerjaan' => 'required|string|min:1|max:400',
            'mulai_bekerja' => 'required|string|min:1|max:400',
            'status_pernikahan' => 'required|string|min:1|max:400',
            'pendidikan' => 'required|string|min:1|max:400',
            'agama' => 'required|string|min:1|max:400',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $nasabah = Nasabah::create($input);
        return $this->sendResponse(new NasabahResource($nasabah), 'Post created.');
    }

    public function show($id)
    {
        $nasabah = Nasabah::find($id);
        if (is_null($nasabah)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new NasabahResource($nasabah), 'Post fetched.');
    }

    public function update(Request $request, Nasabah $nasabah)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'produk' => 'required|string|min:1|max:100',
            'tujuan' => 'required|string|min:1|max:100',
            'identitas' => 'required|string|min:1|max:100',
            'nomor_identitas' => 'required|string|min:1|max:100',
            'nama_nasabah' => 'required|string|min:1|max:400',
            'nama_ibu' => 'required|string|min:1|max:400',
            'tempat_lahir' => 'required|string|min:1|max:400',
            'tanggal_lahir' => 'required|string|min:1|max:400',
            'jenis_kelamin' => 'required|string|min:1|max:400',
            'alamat_nasabah' => 'required|string|min:1|max:400',
            'status_pekerjaan' => 'required|string|min:1|max:400',
            'mulai_bekerja' => 'required|string|min:1|max:400',
            'status_pernikahan' => 'required|string|min:1|max:400',
            'pendidikan' => 'required|string|min:1|max:400',
            'agama' => 'required|string|min:1|max:400',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $nasabah->produk = $input['produk'];
        $nasabah->tujuan = $input['tujuan'];
        $nasabah->identitas = $input['identitas'];
        $nasabah->nomor_identitas = $input['nomor_identitas'];
        $nasabah->nama_nasabah = $input['nama_nasabah'];
        $nasabah->nama_ibu = $input['nama_ibu'];
        $nasabah->tempat_lahir = $input['tempat_lahir'];
        $nasabah->tanggal_lahir = $input['tanggal_lahir'];
        $nasabah->jenis_kelamin = $input['jenis_kelamin'];
        $nasabah->alamat_nasabah = $input['alamat_nasabah'];
        $nasabah->status_pekerjaan = $input['status_pekerjaan'];
        $nasabah->pendidikan = $input['pendidikan'];
        $nasabah->agama = $input['agama'];
        $nasabah->save();

        return $this->sendResponse(new NasabahResource($nasabah), 'Post updated.');
    }

    public function destroy(Nasabah $nasabah)
    {
        $nasabah->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
