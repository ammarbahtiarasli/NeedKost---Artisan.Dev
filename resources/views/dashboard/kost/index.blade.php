<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelola Kamar Kost') }}
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mb-6">
                <x-primary-button x-data="" href="#">
                    {{ __('Tambah Kamar Kost') }}
                </x-primary-button>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100">
                    <div class="container w-1/2">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kamar Kost</h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Kamar Kost</p>
                    </div>
                    <div class="container flex justify-end w-1/2">
                        <form>
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative items-end justify-end">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-2.4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                    class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-sky-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cari Kamar ..." required>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($kosts->count() > 0)

                <table class="min-w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kost
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fasilitas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kosts as $kost)

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th class="p-4">
                                    <img src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg"
                                        class="w-16 max-w-full max-h-full md:w-32" alt="image">
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $kost->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $kost->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    AC, Kamar Mandi Dalam, Wifi
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ number_format($kost->harga_per_bulan, 2) }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <x-warning-button x-data=""
                                        href="">{{ __('Edit') }}</x-warning-button>
                                    <form action="" method="post" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button x-data=""
                                            onclick="confirm('Kamar Kost ini akan dihapus ?');">{{ __('Delete') }}</x-danger-button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

                @else
                {{-- pagination laravel --}}
                <div class="p-6 font-semibold text-center text-rose-500">
                    {{ __('Data Kamar Kost tidak ada.') }}
                </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
