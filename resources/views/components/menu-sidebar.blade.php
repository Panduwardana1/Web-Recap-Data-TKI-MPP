<div class="block justify-between">
    <div class="pb-4 border-b border-slate-300">
        <input type="search" name="search" id="search"
            class="bg-slate-200 w-full p-2 py-1 focus:outline-none border-none rounded-md" max="100"
            placeholder="Search">
    </div>
    {{-- Dashboard --}}
    <div class="block display-4 border-b border-b-slate-300">
        <x-nav-link :active="request()->routeIs('admin.dashboard')" href="{{ route('admin.dashboard') }}">
            <x-heroicon-s-home class="w-5 h-5 text-slate-800" />
            Dashboard
        </x-nav-link>
        {{-- Data --}}
        <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
            <x-heroicon-s-table-cells class="w-5 h-5 text-slate-800" />
            Data
        </x-nav-link>
        {{-- Statistik --}}
        <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 px-1">
            <x-heroicon-s-chart-pie class="w-5 h-5 text-slate-800" />
            <span class="font-medium">Statistik</span>
        </div>

        <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 px-1">
            <x-heroicon-s-archive-box class="w-5 h-5 text-slate-800" />
            <span class="font-medium">Archive</span>
        </div>
        {{-- Company --}}
        <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 px-1">
            <x-heroicon-s-building-office class="w-5 h-5 text-slate-800" />
            <span class="font-medium">Company</span>
        </div>

        {{-- Destination --}}
        <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 px-1">
            <x-heroicon-s-globe-asia-australia class="w-5 h-5 text-slate-800" />
            <span class="font-medium">Destination</span>
        </div>
    </div>
    <div class="items-center flex hover:bg-slate-200 text-slate-700 py-1 rounded-md gap-2 my-2 px-1">
        //
    </div>
</div>
