<x-dashboard-layout>
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Tambah {{ $category }}</h1>
            <a href={{ url()->previous() }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-backward mr-3"></i></i> Back</a>
        </div>
        <div class="card-body">
            <form method="post" action={{ route("posts.store") }} enctype="multipart/form-data" class="dropzone">
                @csrf
                <input type="hidden" name="category" value="{{ $category }}">
                <div class="w-full mb-3">
                    <x-input-label>Title</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="title" name="title">
                </div>
                <div class="w-full mb-3 space-x-3 flex flex-wrap">
                    <div class="flex-1">
                        <x-input-label>Place</x-input-label>
                        <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="place" name="place">
                    </div>
                    <div class="flex-1">
                        <x-input-label>Date</x-input-label>
                        <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="format: 19-January-2020" name="date">
                    </div>
                </div>
                <div class="w-full mb-3">
                    <x-input-label>Description</x-input-label>
                    <textarea class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="Description" name="description"></textarea>
                </div>
                <div class="flex justify-center items-center w-full mb-3">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 dropzone-area">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" name="gambar[]" class="hidden" onchange="handChange" multiple/>
                    </label>
                </div> 
                
   
                
                <button type="submit" class="btn-shadow mr-6 lg:mr-0 lg:mb-6 w-full">Save</button>
            </form>
        </div>
    </div>
    @section("script")
        <script>
            let dropZoneArea = document.querySelector(".dropzone-area");
            let inputZone = document.getElementById("dropzone-file");
            const handleChange = (e) => {
                console.log("ok")
            }
            dropZoneArea.addEventListener("dragover", (e) => {
                e.preventDefault()
                dropZoneArea.classList.remove('bg-gray-50')
                dropZoneArea.classList.add('bg-blue-100')
            });
            dropZoneArea.addEventListener("dragleave", (e) => {
                e.preventDefault()
                dropZoneArea.classList.add('bg-gray-50')
                dropZoneArea.classList.remove('bg-blue-100')
            });
            dropZoneArea.addEventListener("drop", (e) => {
                e.preventDefault();
                e.stopPropagation();
                console.log("oke")
                files = event.dataTransfer.files;
                [...files].forEach(file => {
                    console.log(file.name)
                });
                // console.log(fileobj)
                // var fname = fileobj.name;
                // var fsize = fileobj.size;
                // if (fname.length > 0) {
                //     document.getElementById('file_info').innerHTML = "File name : " + fname +' <br>File size : ' + bytesToSize(fsize);
                // }
            });
        </script>
    @endsection
</x-dashboard-layout>
