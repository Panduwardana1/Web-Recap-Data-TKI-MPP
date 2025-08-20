<div class="">
    <div class="border block sticky rounded-lg p-4 bg-white top-2 h-[calc(100vh-20px)]">
        {{-- h-[calc(100vh-32px-48px)] --}}
        <div class="flex flex-col h-full">
            <x-account-profile></x-account-profile>
            <div class="block justify-between">
                <div class="pb-4 border-b border-slate-300">
                    <input type="search" name="search" id="search"
                        class="bg-slate-200 w-full p-2 py-1 focus:outline-none border-none rounded-md" max="100"
                        placeholder="Search">
                </div>
                <div class="block display-4 border-b border-b-slate-300">
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 w-full">
                        <i data-feather="home" class="h-4"></i>
                        <span class="font-medium">Dashboard</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="database" class="h-4"></i>
                        <span class="font-medium text-base">Data</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="folder" class="h-4"></i>
                        <span class="font-medium">List</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="bar-chart-2" class="h-4"></i>
                        <span class="font-medium">Statistik</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="file" class="h-4"></i>
                        <span class="font-medium">Info</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="tool" class="h-4"></i>
                        <span class="font-medium">Other</span>
                    </div>
                    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                        <i data-feather="globe" class="h-4"></i>
                        <span class="font-medium">Destination</span>
                    </div>
                </div>
                <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2">
                    <i data-feather="trash" class="h-4"></i>
                    <span class="font-medium">Trash</span>
                </div>
            </div>
            <div class="mt-auto pt-4">
                <h1 class="font-manrope font-semibold">SIREDA</h1>
                <p class="text-xs">Compy right @Sireda 2025</p>
            </div>
        </div>
    </div>
</div>
