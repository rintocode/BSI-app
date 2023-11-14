<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Show' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Produk' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->produk }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tujuan Buka Rekening' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->tujuan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Jenis Identitas' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->identitas }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nomor Identitas' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->nomor_identitas }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nama Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->nama_nasabah }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nama Ibu Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->nama_ibu }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tempat Lahir' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->tempat_lahir }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tanggal Lahir' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->tanggal_lahir }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Jenis Kelamin' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->jenis_kelamin }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Alamat Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->alamat_nasabah }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Status Pekerjaan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->status_pekerjaan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Mulai Bekerja' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->mulai_bekerja }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Status Pernikahan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->status_pernikahan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Pendidikan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->pendidikan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Agama' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->agama }}
                        </p>
                    </div>



                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Created At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->created_at }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Updated At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabah->updated_at }}
                        </p>
                    </div>
                    <a href="{{ route('nasabahs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
