<div class="bg-white min-h-[100vh] flex flex-col">
    {{-- Navbar --}}
    <x-navbar-dashboard-admin>
        {{--  --}}
    </x-navbar-dashboard-admin>

    <div class="flex-1 grid grid-cols-4 grid-rows-[auto,1fr] gap-1">
        @include('layouts.primary-data')
        {{-- Calendar card besar --}}
        <div class="row-span-2 p-2 border bg-slate-200 rounded-lg flex flex-col min-h-full">
            {{-- <x-dashboard-calender></x-dashboard-calender> --}}
        </div>

        <div class="row-span-2 col-span-3 p-2 border bg-slate-200 rounded-lg flex flex-col min-h-full">
            {{-- <x-dashboard-calender></x-dashboard-calender> --}}
        </div>

        <div class="p-2 col-span-4 border rounded-lg">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, eius!</p>
        </div>
    </div>
</div>
