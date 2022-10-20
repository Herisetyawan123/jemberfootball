<x-dashboard-layout>
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Tambah wali siswa</h1>
            <a href={{ url()->previous() }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-backward mr-3"></i></i> Back</a>
        </div>
        <div class="card-body">
            <form method="post" action={{ route("wali.store") }}>
                @csrf
                <div class="w-full mb-3">
                    <x-input-label>Nama Wali</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="nama wali" name="wali">
                </div>
                <div class="w-full flex space-x-5 mb-3">
                    <div class="w-full">
                        <x-input-label>Email</x-input-label>
                        <input type="email" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="wali@wali.com" name="email">
                    </div>
                    <div class="w-full">
                        <x-input-label>No. Wa</x-input-label>
                        <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="628xxxx" name="nomor">
                    </div>
                </div>
                <div class="w-full mb-3">
                    <x-input-label>password</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500 bg-slate-600" placeholder="default: 12345678" readonly>
                    <span class="text-xs text-red-500">Tidak bisa di ketik (readonly)</span>
                </div>
                <div class="w-full mb-3">
                    <x-input-label>Nama Anak</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="nama anak" name="siswa">
                </div>
                <div class="w-full mb-3">
                    <x-input-label>Nama Sekolah</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="nama Sekolah" name="sekolah">
                </div>
                <div class="w-full mb-3">
                    <x-input-label>Domisili</x-input-label>
                    <input type="text" class="w-full border mt-2 px-3 py-2 rounded-md focus:ring-1 focus:ring-blue-500  focus:border-blue-500" required placeholder="domisili" name="domisili">
                </div>
                <button type="submit" class="btn-shadow mr-6 lg:mr-0 lg:mb-6 w-full">Save</button>
            </form>
        </div>
    </div>
</x-dashboard-layout>