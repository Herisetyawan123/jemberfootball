<x-dashboard-layout>
    <div class="card relative">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Penilaian</h1>

        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action={{ route('penilaian.store') }} >
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
                <input name="evaluasi" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                <input class="mt-5 btn-indigo cursor-pointer" type="submit" value="tambah">
            </form>
        </div>

    </div>
</x-dashboard-layout>