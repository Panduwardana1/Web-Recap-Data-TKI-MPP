@extends('landingpage')

@section('login')
    <div class="items-center font-manrope flex-wrap p-6 rounded-md border shadow-sm">
            <h1 class="font-bold text-center text-3xl">Login to your account</h1>
        <div class="py-4">
            <form action="" class="space-y-4 flex flex-col items-center justify-center">
                <div class="min-w-full">
                    <p class="font-semibold pb-2">Username</p>
                    <input type="text" name="username" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200" placeholder="Username">
                </div>

                <div class="min-w-full">
                    <div class="flex items-center justify-between pb-2">
                        <p class="font-semibold">Password</p>
                        <a href="#" class="font-semibold">Forgot Password</a>
                    </div>
                    <input type="password" name="password" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-200" placeholder="Password">
                </div>

                <button class="py-2 min-w-full rounded-md bg-teal-600 hover:bg-teal-700 text-white font-semibold">Login</button>
            </form>
        </div>
    </div>
@endsection
