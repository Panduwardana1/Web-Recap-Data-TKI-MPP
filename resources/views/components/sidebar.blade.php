<div class="h-screen">
    <div class="border fixed rounded-lg p-2 bg-white top-2 h-[calc(100vh-20px)]">
        {{-- h-[calc(100vh-32px-48px)] --}}
        <div class="flex flex-col h-full">
            <x-account-profile></x-account-profile>
            <x-menu-sidebar></x-menu-sidebar>
            <div class="mt-auto pt-4 pb-2">
                <h1 class="font-manrope font-semibold">SIREDA</h1>
                <p class="text-xs">Compy right @Sireda 2025</p>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="flex items-stretch justify-center ">
                @csrf
                <button type="submit"
                    class="flex py-1 items-center justify-center gap-2 bg-stone-800 hover:bg-stone-700 active:bg-stone-950 text-stone-50 w-full rounded-md">
                    <i data-feather="log-out" class="h-4 w-4"></i>
                    <span class="font-medium">Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>
