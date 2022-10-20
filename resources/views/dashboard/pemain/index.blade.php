<x-dashboard-layout>
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Daftar siswa</h1>
            {{-- <a href={{ route("wali.tambah") }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-plus mr-3"></i> Tambah</a> --}}
        </div>
        <div class="card-body">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">No</th>
                        <th class="px-4 py-2 border-r">Nama</th>
                        <th class="px-4 py-2 border-r">Sekolah</th>
                        <th class="px-4 py-2 border-r">Domisili</th>
                        <th class="px-4 py-2 border-r">Nama Ortu</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($siswas as $siswa)
                        <tr>                    
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">{{ $siswa->nama }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $siswa->sekolah }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $siswa->domisili }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $siswa->wali->name }}</td>
                            <td class="border border-l-0 border-r-0 px-4 py-2">

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>