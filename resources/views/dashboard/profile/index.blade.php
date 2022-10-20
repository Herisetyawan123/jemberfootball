<x-dashboard-layout>
    <div class="card bg-slate-50 min-w-max">
        <div class="card-body flex">
            <!-- image -->
            <div class="group relative w-56 h-72 rounded-lg overflow-hidden border flex">
                <img src={{asset("/img/empty.jpg")}} class="w-full h-full object-cover" alt="img title">
                <div class="bg-white bg-opacity-25 absolute left-0 right-0 top-0 bottom-0 ">
                    <a href="/" class="px-4 py-2 bg-teal-700 text-teal-100 rounded-tl-md absolute bottom-0 right-0">
                        <i class="fad fa-pencil py-2"></i>
                    </a>
                </div>
            </div>
            <!-- end image -->

            <!-- info -->
            <div class="py-2 ml-10 flex flex-col justify-between">
                <h1 class="h6">{{ Auth::user()->name }}</h1>
                <p class="text-white text-xs">You've finished all of your tasks for this week.</p>

                <ul class="mt-4">
                    <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> {{ Auth::user()->email }}</li>
                    <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> {{ Auth::user()->role }}</li>
                </ul>
                <div class="alert alert-success mb-5">
                    correct your identity! if something goes wrong, <b>fix it immediately</b>
                </div>

            </div>
            <!-- end info -->
        </div>
    </div>
</x-dashboard-layout>