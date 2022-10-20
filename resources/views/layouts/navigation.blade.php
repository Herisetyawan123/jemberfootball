    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
      </button>
      <!-- end navbar content toggle -->
  
      <!-- navbar content -->
      <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-end items-center md:flex-col md:items-center">
       
  
        <!-- right -->
        <div class="flex flex-row-reverse items-center"> 
  
          <!-- user -->
          <div class="dropdown relative md:static">
  
            <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
              <div class="w-8 h-8 overflow-hidden rounded-full">
                <img class="w-full h-full object-cover" src={{asset("img/user.svg")}} >
              </div> 
  
              <div class="ml-2 capitalize flex ">
                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{ Auth::user()->name }}</h1>
                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
              </div>                        
            </button>
  
            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
  
            <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
  
              <!-- item -->
              <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href={{ route('dashboard.profile') }}>
                <i class="fad fa-user-edit text-xs mr-1"></i> 
                edit my profile
              </a>     
              <!-- end item -->
  
              <hr>
  
              <!-- item -->
              <form method="post" action="{{ route('logout') }}" class="w-full">
                @csrf
                <a class="px-4 py-2 flex justify-start items-center gap-x-3 w-full capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"  onclick="event.preventDefault();
                this.closest('form').submit();"  :href="route('logout')" >
                  <i class="fad fa-user-times text-xs mr-1" ></i> 
                  log out
                </a>     
              </form>
              <!-- end item -->
  
            </div>
          </div>
          <!-- end user -->
  
          <!-- notifcation -->
          <div class="dropdown relative mr-5 md:static">
  
            <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
              <i class="fad fa-bells"></i>               
            </button>
  
            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
  
            <div class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
              <!-- top -->
              <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                <h1>notifications</h1>
                <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                  <strong>5</strong>
                </div>
              </div>
              <hr>
              <!-- end top -->
  
              <!-- body -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                  <i class="fad fa-birthday-cake text-sm"></i>
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">poll..</h1>
                    <p class="text-xs text-gray-500">text here also</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>4 min ago</p>
                  </div>
                </div>
  
              </a>
              <hr>
              <!-- end item -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                  <i class="fad fa-user-circle text-sm"></i>
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">mohamed..</h1>
                    <p class="text-xs text-gray-500">text here also</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>78 min ago</p>
                  </div>
                </div>
  
              </a>
              <hr>
              <!-- end item -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                  <i class="fad fa-images text-sm"></i>
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">new imag..</h1>
                    <p class="text-xs text-gray-500">text here also</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>65 min ago</p>
                  </div>
                </div>
  
              </a>
              <hr>
              <!-- end item -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                  <i class="fad fa-alarm-exclamation text-sm"></i>
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">time is up..</h1>
                    <p class="text-xs text-gray-500">text here also</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>1 min ago</p>
                  </div>
                </div>
  
              </a>
              <!-- end item -->
  
  
              <!-- end body -->
  
              <!-- bottom -->
              <hr>
              <div class="px-4 py-2 mt-2">
                <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                  view all
                </a>
              </div>
              <!-- end bottom -->            
            </div>
          </div>
          <!-- end notifcation -->
  
          <!-- messages -->
          <div class="dropdown relative mr-5 md:static">
  
            <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
              <i class="fad fa-comments"></i>               
            </button>
  
            <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
  
            <div class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
              <!-- top -->
              <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                <h1>messages</h1>
                <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                  <strong>3</strong>
                </div>
              </div>
              <hr>
              <!-- end top -->
  
              <!-- body -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                  <img class="w-full h-full object-cover" src={{asset("img/user1.jpg")}} alt="">
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">mohamed said</h1>
                    <p class="text-xs text-gray-500">yeah i know</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>4 min ago</p>
                  </div>
                </div>
  
              </a>
              <hr>
              <!-- end item --> 
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                  <img class="w-full h-full object-cover" src={{asset("img/user2.jpg" )}}alt="">
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">sull goldmen</h1>
                    <p class="text-xs text-gray-500">for sure</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>1 day ago</p>
                  </div>
                </div>
  
              </a>
              <hr>
              <!-- end item -->
  
              <!-- item -->
              <a class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
  
                <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                  <img class="w-full h-full object-cover" src={{asset("img/user3.jpg")}} alt="">
                </div>
  
                <div class="flex-1 flex flex-rowbg-green-100">
                  <div class="flex-1">
                    <h1 class="text-sm font-semibold">mick</h1>
                    <p class="text-xs text-gray-500">is typing ....</p>
                  </div>
                  <div class="text-right text-xs text-gray-500">
                    <p>31 feb</p>
                  </div>
                </div>
  
              </a>
              <!-- end item -->
  
  
              <!-- end body -->
  
              <!-- bottom -->
              <hr>
              <div class="px-4 py-2 mt-2">
                <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                  view all
                </a>
              </div>
              <!-- end bottom -->            
            </div>
          </div>
          <!-- end messages -->               
  
  
        </div>
        <!-- end right -->
      </div>
      <!-- end navbar content -->
  
    </div>
  <!-- end navbar -->