@vite('resources/css/app.css')
<div class="font-manrope p-4 w-full max-w-sm" id="login">
    <div class="flex flex-col justify-center items-center pb-4">
        <img src="{{ asset('img/lombok_tengah2.png') }}" alt="iamge" class="h-24 w-auto">
    </div>
    <h1 class="font-semibold text-center text-3xl">SIREDA</h1>
    <p class="text-lg font-semibold text-center">Sistem Informasi Rekap Data</p>
    <p class="text-sm pt-2 items-center text-center">Lorem ipsum dolor sit, amet consectetur adipisicing</p>
    <div class="py-2 gap-5">
        <form action="{{ route('login.post') }}" method="POST"
            class="space-y-4 flex flex-col items-center justify-center select-none">
            @csrf
            @if ($errors->any())
                <div class="text-red-600 font-manrope font-medium" id="error-login">
                    {{ $errors->first() }}
                </div>
            @endif
            <div class="min-w-full">
                <p class="font-medi pb-2">Email</p>
                <input type="email" name="email"
                    class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200 focus:outline-none" placeholder="email"
                    required>
            </div>

            <div class="min-w-full">
                <div class="flex items-center justify-between pb-2">
                    <p class="font-medium">Password</p>
                </div>
                <input type="password" name="password"
                    class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200 focus:outline-none" placeholder="Password"
                    required>
            </div>

            <button
                class="py-2 min-w-full rounded-md bg-blue-600 hover:bg-blue-700 text-white font-semibold">Login</button>
            <div>
                <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, laboriosam.</p>
            </div>
        </form>
    </div>
</div>
