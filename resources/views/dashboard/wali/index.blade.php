<x-dashboard-layout>
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Daftar wali siswa</h1>
            <a href={{ route("wali.tambah") }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-plus mr-3"></i> Tambah</a>
        </div>
        <div class="card-body">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">No</th>
                        <th class="px-4 py-2 border-r">Nama</th>
                        <th class="px-4 py-2 border-r">No. Wa</th>
                        <th class="px-4 py-2 border-r">Email</th>
                        <th class="px-4 py-2 border-r">Domisili</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($walis as $wali)
                        <tr>                    
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">{{ $wali->name }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $wali->nowa }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $wali->email }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $wali->domisili }}</td>
                            <td class="border border-l-0 border-r-0 px-4 py-2 flex">
                                <a href={{ route("wali.delete", $wali->id) }} class="btn-danger mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-trash-alt mr-3"></i> Hapus</a>
                                <a href={{ route("wali.delete", $wali->id) }} class="btn-indigo mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-edit mr-3"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>