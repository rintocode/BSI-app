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
                            {{ $nasabahs->produk }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tujuan Buka Rekening' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->tujuan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Jenis Identitas' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->identitas }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nomor Identitas' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->nomor_identitas }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nama Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->nama_nasabah }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Nama Ibu Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->nama_ibu }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tempat Lahir' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->tempat_lahir }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tanggal Lahir' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->tanggal_lahir }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Jenis Kelamin' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->jenis_kelamin }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Alamat Nasabah' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->alamat_nasabah }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Status Pekerjaan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->status_pekerjaan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Mulai Bekerja' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->mulai_bekerja }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Status Pernikahan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->status_pernikahan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Pendidikan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->pendidikan }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Agama' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->agama }}
                        </p>
                    </div>



                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Created At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->created_at }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Updated At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $nasabahs->updated_at }}
                        </p>
                    </div>
                    <a href="{{ route('nasabahs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
