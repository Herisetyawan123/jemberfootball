    <!-- start sidebar -->
    <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    
        <!-- sidebar content -->
        <div class="flex flex-col">
    
            <!-- sidebar toggle -->
            <div class="text-right hidden md:block mb-4">
                <button id="sideBarHideBtn">
                    <i class="fad fa-times-circle"></i>
                </button>
            </div>
            <!-- end sidebar toggle -->
        
            <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>
        
       
                
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('dashboard.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('dashboard.index') }}>
                <i class="fad fa-chart-pie w-5 mr-2"></i>                
                dashboard
            </a>
        
            <!-- link -->
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('pemain.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('pemain.index') }}>
                <i class="fad fa-running w-5 mr-2"></i>
                Pemain
            </a>
            <!-- end link -->
        
            <!-- link -->
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('wali.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('wali.index') }}>
                <i class="fad fa-poll-people w-5 mr-2"></i>
                Orang Tua
            </a>
            <!-- end link -->

            <!-- link -->
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('pertandingan.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('pertandingan.index') }}>
                <i class="fad fa-futbol w-5 mr-2"></i>
                Pertandingan
            </a>
            <!-- end link -->

            <!-- link -->
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('pertemuan.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('pertemuan.index') }}>
                <i class="fad fa-handshake-alt w-5 mr-2"></i>
                Pertemuan
            </a>
            <!-- end link -->

            <!-- link -->
            <a class="mb-3 px-3 py-2 rounded {{ Route::is('penilaian.*') ? 'bg-teal-200 text-teal-700' : '' }} hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500" href={{ route('penilaian.index') }}>
                <i class="fad fa-book w-5 mr-2"></i>
                Penilaian
            </a>
            <!-- end link -->
    
    
        </div>
        <!-- end sidebar content -->
    
      </div>
      <!-- end sidbar -->