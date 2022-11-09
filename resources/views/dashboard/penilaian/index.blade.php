<x-dashboard-layout>
    <div class="card relative">
        <div class="card-header flex items-center justify-between">
            <h1 class="h6">Penilaians</h1>
            {{-- <a href={{ route("wali.tambah") }} class="btn-shadow mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-plus mr-3"></i> Tambah</a> --}}
            <select id="bulan" name="bulan">
                @for ($i = 1; $i <= 12; $i++)
                    <option @if (date("m") == $i)
                        selected
                    @endif value="{{ $i }}">{{ $bulan[$i] }}</option>
                @endfor
            </select>
            <select id="tahun" name="tahun">
                @for ($i = 2022; $i <= 2023; $i++)
                    <option @if (date("m") == $i)
                        selected
                    @endif value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="card-body">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">No</th>
                        <th class="px-4 py-2 border-r">Nama</th>
                        <th class="px-4 py-2 border-r">Ortu</th>
                        <th class="px-4 py-2 border-r">status</th>
                        <th class="px-4 py-2 border-r">Review</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600" id="data">

                </tbody>
            </table>
        </div>

    </div>

    @section('script')
        <script>
            let bulan = document.getElementById("bulan")
            let tahun = document.getElementById("tahun")
            
            bulan.addEventListener('change', (e) => {
                e.preventDefault();
                console.log(e.target.value)
                getData(e.target.value, tahun.value)
            })
            tahun.addEventListener('change', (e) => {
                e.preventDefault();
                console.log(e.target.value)
                getData(bulan.value, e.target.value)
            })

            const getData = async (bulan, tahun) => {
                let table = ""
                const data = await fetch('/api/penilaian/'+bulan+'/'+tahun+'');
                const response = await data.json()
                // console.log(response)
                response.data.map((item) => {
                    // console.log(item.nama)
                    table += `                     
                        <tr>                    
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">${item.nama}</td>
                            <td class="border border-l-0 px-4 py-2">${item.wali}</td>
                            <td class="border border-l-0 px-4 py-2">${item.nilai ? '<p class="text-green-500">done</p>' : '<p class="text-red-500">waiting</p>'}</td>
                            <td class="border border-l-0 px-4 py-2">${item.nilai ? `<a href="${item.nilai}">download</a>` : '<p class="text-red-500">waiting</p>'}</td>
                            <td class="border border-l-0 px-4 py-2">
                                <a href="/penilaian/${item.id}" data-modal-toggle="defaultModal" class="btn-indigo mr-6 lg:mr-0 lg:mb-6"><i class="fad fa-plus mr-3"></i> Add Evaluation</a>
                            </td>
                        </tr>`
                })
                // console.log(table)
                const id = document.getElementById("data")
                id.innerHTML = table
                console.log(table)
                // return table
            }

            getData(bulan.value, tahun.value)


        </script>
    @endsection
</x-dashboard-layout>