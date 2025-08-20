{{-- @extends('landingpage') --}}

{{-- @section('login') --}}
@vite('resources/css/app.css')
<div class="font-manrope flex-wrap p-12 bg-white rounded-md border shadow-sm" id="login">
    <h1 class="font-bold text-center text-3xl">Login to your account</h1>
    <div class="py-4">

        <form action="{{ route('login.post') }}" method="POST"
            class="space-y-4 flex flex-col items-center justify-center select-none">
            @csrf
            @if ($errors->any())
                <div class="text-red-500 font-manrope underline font-semibold">
                    {{ $errors->first() }}
                </div>
            @endif
            <div class="min-w-full">
                <p class="font-medium pb-2">Email</p>
                <input type="email" name="email" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200 focus:outline-none"
                    placeholder="email" required>
            </div>

            <div class="min-w-full">
                <div class="flex items-center justify-between pb-2">
                    <p class="font-medium">Password</p>
                    <a href="#" class="font-medium hover:text-blue-600 underline">Forgot Password</a>
                </div>
                <input type="password" name="password" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200 focus:outline-none"
                    placeholder="Password" required>
            </div>

            <button
                class="py-2 min-w-full rounded-md bg-blue-600 hover:bg-blue-700 text-white font-semibold">Login</button>
        </form>
    </div>
</div>
{{-- @endsection --}}
