<div class="bg-white border rounded-lg p-4 min-h-[100vh]">
    {{-- Navbar --}}
    <div class="border mb-2 py-2 pl-2 rounded-md">
        <h1 class="text-black font-semibold">Dashboard</h1>
    </div>

    <div class="grid grid-cols-4 auto-rows-[100px] gap-2">
        {{-- Metric Card --}}
        <div class="p-2 border rounded-lg bg-stone-900 text-white">
            ...
        </div>
        <div class="p-2 border rounded-lg bg-stone-900 text-white">
            ...
        </div>
        <div class="p-2 border rounded-lg bg-stone-900 text-white">
            ...
        </div>

        {{-- Calendar card besar --}}
        <div class="row-span-6 p-2 border rounded-lg flex flex-col min-h-full">
            <div class="flex items-center justify-between border-b mb-2">
                <p class="font-semibold">Calendar</p>
            </div>
            <div class="flex-1 flex items-center justify-center">
                <!-- Isi kalender di sini -->
                <p>42</p>
            </div>
        </div>

        {{-- Big Card --}}
        <div class="col-span-3 row-span-4 p-2 border rounded-lg flex flex-col">
            <div class="flex items-center justify-between border-b">
                ...
            </div>
            <div class="flex-1 flex items-center justify-center">
                ...
            </div>
        </div>
        <div class="p-2 col-span-3 border rounded-lg">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, eius!</p>
        </div>
    </div>
</div>
