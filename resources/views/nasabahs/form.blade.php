<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($nasabah) ? 'Edit' : 'Create' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($nasabah) ? route('nasabahs.update', $nasabah->id) : route('nasabahs.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($nasabah)
                            @method('put')
                        @endisset


                        <div>
                            <x-input-label for="produk" value="produk" />
                            <select name="produk" class="form-control" id="produk">
                                <option value="">Produk</option>
                                <option value="Tabungan Easy Wadiah" @if (old('produk') == "Tabungan Easy Wadiah") {{ 'selected' }} @endif>Tabungan Easy Wadiah</option>
                                <option value="Tabungan Easy Mudharab" @if (old('produk') == "Tabungan Easy Mudharab") {{ 'selected' }} @endif>Tabungan Easy Mudharab</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('produk')" />
                        </div>


                        <div>
                            <x-input-label for="tujuan" value="tujuan" />
                            <select name="tujuan" class="form-control" id="tujuan">
                                <option value="">Tujuan Buka Rekening</option>
                                <option value="Haji" @if (old('tujuan') == "Haji") {{ 'selected' }} @endif>Haji</option>
                                <option value="Investasi" @if (old('tujuan') == "Investasi") {{ 'selected' }} @endif>Investasi</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('tujuan')" />
                        </div>


                        <div>
                            <x-input-label for="nomor_identitas" value="nomor_identitas" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="nomor_identitas" name="nomor_identitas" class="mt-1 block w-full" required autofocus>{{ $nasabah->nomor_identitas ?? old('nomor_identitas') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('nomor_identitas')" />
                        </div>

                        <div>
                            <x-input-label for="identitas" value="identitas" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="identitas" name="identitas" class="mt-1 block w-full" required autofocus>{{ $nasabah->identitas ?? old('identitas') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('identitas')" />
                        </div>

                        <div>
                            <x-input-label for="nama_nasabah" value="nama_nasabah" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="nama_nasabah" name="nama_nasabah" class="mt-1 block w-full" required autofocus>{{ $nasabah->nama_nasabah ?? old('nama_nasabah') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('nama_nasabah')" />
                        </div>


                        <div>
                            <x-input-label for="nama_ibu" value="nama_ibu" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="nama_ibu" name="nama_ibu" class="mt-1 block w-full" required autofocus>{{ $nasabah->nama_nasabah ?? old('nama_nasabah') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('nama_nasabah')" />
                        </div>


                        <div>
                            <x-input-label for="tempat_lahir" value="tempat_lahir" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="tempat_lahir" name="tempat_lahir" class="mt-1 block w-full" required autofocus>{{ $nasabah->nama_nasabah ?? old('tempat_lahir') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('tempat_lahir')" />
                        </div>


                        <div class="mb-3 row">
                            <label for="join"
                                   class="mt-1 block w-full">{{__('tanggal_lahir')}}</label>
                            <div class="col-md-6">
                                <input type="datetime-local" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>

                        <div>
                            <x-input-label for="jenis_kelamin" value="jenis_kelamin" />
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-Laki" @if (old('jenis_kelamin') == "Laki-Laki") {{ 'selected' }} @endif>Laki-Laki</option>
                                <option value="Perempuan" @if (old('jenis_kelamin') == "Perempuan") {{ 'selected' }} @endif>Perempuan</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
                        </div>


                        <div>
                            <x-input-label for="alamat_nasabah" value="alamat_nasabah" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="alamat_nasabah" name="alamat_nasabah" class="mt-1 block w-full" required autofocus>{{ $nasabah->alamat_nasabah ?? old('alamat_nasabah') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('alamat_nasabah')" />
                        </div>

                        <div>
                            <x-input-label for="status_pekerjaan" value="status_pekerjaan" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="status_pekerjaan" name="status_pekerjaan" class="mt-1 block w-full" required autofocus>{{ $nasabah->status_pekerjaan ?? old('status_pekerjaan') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('status_pekerjaan')" />
                        </div>


                        <div class="mb-3 row">
                            <label for="join"
                                   class="mt-1 block w-full">{{__('mulai_bekerja')}}</label>
                            <div class="col-md-6">
                                <input type="datetime-local" class="form-control" name="mulai_bekerja">
                            </div>
                        </div>

                        <div>
                            <x-input-label for="status_pernikahan" value="status_pernikahan" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="status_pernikahan" name="status_pernikahan" class="mt-1 block w-full" required autofocus>{{ $nasabah->status_pernikahan ?? old('status_pernikahan') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('status_pernikahan')" />
                        </div>

                        <div>
                            <x-input-label for="pendidikan" value="pendidikan" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="pendidikan" name="pendidikan" class="mt-1 block w-full" required autofocus>{{ $nasabah->pendidikan ?? old('pendidikan') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('pendidikan')" />
                        </div>


                        <div>
                            <x-input-label for="agama" value="agama" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="agama" name="agama" class="mt-1 block w-full" required autofocus>{{ $nasabah->agama ?? old('agama') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('agama')" />
                        </div>





                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
