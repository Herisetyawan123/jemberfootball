<x-dashboard-layout>
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Daftar Match</h1>
            <a href={{ route("pertandingan.tambah", "match") }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-plus mr-3"></i> Tambah</a>
        </div>
        <div class="card-body">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">No</th>
                        <th class="px-4 py-2 border-r">Title</th>
                        <th class="px-4 py-2 border-r">Place</th>
                        <th class="px-4 py-2 border-r">Date</th>
                        <th class="px-4 py-2 border-r">Description</th>
                        <th class="px-4 py-2 border-r">Detail</th>
                        
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($posts as $post)
                        <tr>                    
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">{{ $post->title }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $post->place }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $post->date }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ substr($post->description, 0, 90) }}...</td>
                            <td class="border border-l-0 px-4 py-2">
                                <a href="{{ route('pertandingan.detail', $post->id) }}" class="btn">
                                    <i class="fas fa-eye"></i>
                                    View
                                </a>
                            </td>
                        
                            <td class="border border-l-0 border-r-0 px-4 py-2">
                                <a href={{ route("pertandingan.delete", $post->id) }} class="btn-danger mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-trash-alt mr-3"></i> Hapus</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>