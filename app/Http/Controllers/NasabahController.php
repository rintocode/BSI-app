<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Nasabah;

class NasabahController extends Controller
{
    public function index(Request $request)
    {
        $nasabah = Nasabah::where([
            ['nama_nasabah', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nama_nasabah', 'LIKE', '%' . $s . '%')
                        ->orWhere('nama_ibu', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(6);

        return view('nasabahs.index', compact('nasabah'));
    }

    /**
     * Show the form for creating a new resource.
     * @param Request $request
     * @param $query
     * @return RedirectResponse
     */

    /**
     * Store a newly created resource in storage.
     */
    public function create(): Response
    {
        return response()->view('nasabahs.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
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
        Nasabah::create([
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
            'agama' => $request->agama
        ]);
        session()->flash('notif.success', 'Post updated successfully!');
        return redirect()->route('nasabahs.index');

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('nasabahs.show', [
            'nasabah' => Nasabah::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('nasabahs.edit', [
            'nasabah' => Nasabah::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nasabah $nasabah): RedirectResponse
    {
        $request->validate([
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

        $nasabah->update($request->all());

        return redirect()->route('nasabahs.index')
            ->with('success', 'Post Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $nasabah = Nasabah::findOrFail($id);

        $delete = $nasabah->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'Post deleted successfully!');
            return redirect()->route('nasabahs.index');
        }

        return abort(500);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */

}

