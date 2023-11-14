{{-- use AppLayout Component located in app\View\Components\AppLayout.php which use resources\views\layouts\app.blade.php view --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Data Nasabah' }}
            </h2>
            <a href="{{ route('nasabahs.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded-md">ADD</a>
        </div>

        <div class="mt-1 mb-4">
            <div class="relative max-w-xs">
                <form action="{{ route('nasabahs.index') }}" method="GET">
                    <label for="search" class="sr-only">
                        Search
                    </label>
                    <input type="text" name="s"
                           class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                           placeholder="Search..." />
                </form>
            </div>
        </div>




    </x-slot>

    <div class="py-12">
        <div class="max-w-center mx-auto sm:px-8 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                        <tr>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Produk</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Tujuan Buka Rekening</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Jenis Identitas</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Nomor Identitas</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Nama Nasabah</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Nama Ibu</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Tempat Lahir</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Tanggal Lahir</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Jenis Kelamin</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Alamat Nasabah</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Status Pekerjaan</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Mulai Bekerja</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Status Pernikahan</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Pendidikan</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Agama</th>
                            <th class="border-b font-medium p-4 pl-6 pt-0 pb-3 text-slate-300 text-left">Action</th>

                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        {{-- populate our Bo data --}}
                        @foreach ($nasabah as $nasabahs)
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->produk }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->tujuan }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->identitas }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->nomor_identitas }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->nama_nasabah }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->nama_ibu }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->tempat_lahir }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->tanggal_lahir }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->jenis_kelamin }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->alamat_nasabah }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->status_pekerjaan }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->mulai_bekerja }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->status_pernikahan }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->pendidikan }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">{{ $nasabahs->agama }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-300 dark:text-slate-400">
                                    <a href="{{ route('nasabahs.show', $nasabahs->id) }}" class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">SHOW</a>
                                    <a href="{{ route('nasabahs.edit', $nasabahs->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                                    {{-- add delete button using form tag --}}
                                    <form method="post" action="{{ route('nasabahs.destroy', $nasabahs->id) }}" class="inline">
                                        @csrf
                                        @method('delete')
                                        <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row mb-5">
                        <div class="col-md-auto col-xl-auto text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                            {{$nasabah->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
