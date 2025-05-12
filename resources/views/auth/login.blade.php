@extends('layouts.guest')

@section('content')
<div class="min-h-screen w-full flex">
    <!-- Left side - Login form -->
    <div class="w-full md:w-1/2 bg-white flex flex-col justify-center p-8 md:p-16">
        <div class="max-w-md mx-auto w-full">
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-normal text-gray-900">LOGIN</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username instead of Email -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Username</label>
                    <input id="email" name="email" type="email" required autofocus 
                           class="mt-1 block w-full px-3 py-2 bg-[#F2F2F2] border-none rounded-md" />
                </div>

                <!-- Password -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="password">Password</label>
                    <input id="password" name="password" type="password" required 
                           class="mt-1 block w-full px-3 py-2 bg-[#F2F2F2] border-none rounded-md" />
                </div>

                <!-- Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="px-8 py-2 bg-[#CAEDB8] hover:bg-[#3E5526] text-gray-800 font-medium rounded-md transition">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Right side - Decorative area -->
    <div class="hidden md:block md:w-1/2 bg-[#3E5526]">
        <!-- This is the peach/pink decorative area -->
    </div>
</div>
@endsection