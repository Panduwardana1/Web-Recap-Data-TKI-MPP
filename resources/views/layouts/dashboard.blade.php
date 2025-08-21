{{-- @extends('admins.app')
@section('dashboard') --}}
    <div class="bg-white p-2 min-h-[100vh] flex flex-col">
        {{-- Navbar --}}
        <div class="flex justify-between border-b mb-1 py-2 px-2">
            <h1 class="text-black font-semibold">Dashboard</h1>
            <div class="flex gap-2">
                <x-heroicon-o-arrow-down-tray class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-arrow-down-tray>
                <x-heroicon-o-document-text class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-document-text>
                <x-heroicon-o-circle-stack class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-circle-stack>
                <x-heroicon-o-plus class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-plus>
            </div>
        </div>

        <div class="flex-1 grid grid-cols-4 grid-rows-[auto,1fr] gap-2">
            {{-- Metric Card --}
            {{-- <div class="p-2 border rounded-lg bg-stone-900 text-white">
            ...
        </div> --}}
            <div class="p-2 border rounded-lg h-auto bg-blue-500 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-user-group class="h-4 w-4"></x-heroicon-s-user-group>
                        <span class="font-medium">User</span>
                    </div>
                    <span>
                        <x-heroicon-s-arrow-up-right class="h-4 w-4 text-white"></x-heroicon-s-arrow-up-right>
                    </span>
                </div>
                <section class="p-4 text-center">
                    <h1 class="font-semibold text-2xl">9722902</h1>
                </section>
            </div>

            {{-- <div class="p-2 border rounded-lg bg-stone-900 text-white">
            ...
        </div> --}}
            <div class="p-2 border rounded-lg h-auto bg-blue-500 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-user-group class="h-4 w-4"></x-heroicon-s-user-group>
                        <span class="font-medium">User</span>
                    </div>
                    <span>
                        <x-heroicon-s-arrow-up-right class="h-4 w-4 text-white"></x-heroicon-s-arrow-up-right>
                    </span>
                </div>
                <section class="p-4 text-center">
                    <h1 class="font-semibold text-2xl">9722902</h1>
                </section>
            </div>
            {{-- Calendar card besar --}}
            <div class="row-span-2 p-2 border rounded-lg flex flex-col min-h-full">
                <x-dashboard-calender></x-dashboard-calender>
            </div>

            {{-- Big Card --}}
            <div class="col-span-3 p-2 border rounded-lg flex flex-col">
                ...
            </div>
            <div class="p-2 col-span-3 border rounded-lg">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, eius!</p>
            </div>
        </div>
    </div>
{{-- @endsection --}}
