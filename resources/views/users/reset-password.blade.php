<!DOCTYPE html>
<html lang="en" class="h-full" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <link
	        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	         rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <title>Task | Oranise your life</title>
        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <style>
            :root { font-family: 'Inter', sans-serif; }
            @supports (font-variation-settings: normal) {
            :root { font-family: 'Inter var', sans-serif; }
            }
        </style>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class=" bg-black w-full min-h-screen text-slate-800 relative py-4">
            <x-flash-message />
            <div class="flex justify-center items-center gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 rounded-lg p-6 my-10 px-2">
                <div class="max-w-xl mx-auto my-10 bg-white p-8 rounded-xl shadow-xl shadow-slate-300 antialiased">
                    <h1 class="text-4xl font-medium">Reset password</h1>
                    <p class="text-slate-500">Fill up the form to reset the password</p>

                    <form action="{{route('password.update')}}" method="POST" class="my-10">
                        @csrf
                        <div class="flex flex-col space-y-5">
                            <label for="password">
                                <p class="font-medium text-slate-700 pb-2">New Password</p>
                                <input id="password" name="password" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter new password">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </label>
                            <label for="password_confirmation">
                                <p class="font-medium text-slate-700 pb-2">Password Confirmation</p>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter password confirmation">
                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </label>
                            <input id="token" value="{{$token}}" name="token" type="text" class="sr-only">
                            <input id="email" value="{{Request::get('email')}}" name="email" type="text" class="sr-only">
                            

                            <button class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>
                                
                                <span>Reset password</span>
                            </button>
                            <p class="text-center">Not registered yet? <a href="/register" class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Register now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg></span></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>