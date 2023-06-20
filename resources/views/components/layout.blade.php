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
        <div class="antialiased bg-black w-full min-h-screen text-slate-300 relative py-4">
            <x-flash-message />
            <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
                <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4 ">
                    <h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-transparent">Dashboard<span class="text-indigo-400">.</span></h1>
                    <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
                    <a href="#" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                        <div>
                            <img class="rounded-full w-10 h-10 relative object-cover" src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125" alt="">
                        </div>
                        <div>
                            <p class="font-medium group-hover:text-indigo-400 leading-4">{{Auth::user()->name}}</p>
                            <span class="text-xs text-slate-400">{{Auth::user()->email}}</span>
                        </div>
                    </a>
                    <a href="/logout">
                        <button class="group rounded-2xl h-6 w-24 bg-indigo-400 font-bold text-sm text-slate-200 relative overflow-hidden">
                            Logout
                            <div class="absolute duration-300 inset-0 w-full h-full transition-all scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl">
                            </div>
                        </button>
                    </a>
                    <hr class="my-2 border-slate-700">
                    <div id="menu" class="flex flex-col space-y-2 my-5">
                        <a href="{{route( 'home')}}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group {{ Route::currentRouteNamed( 'home' ) ?  'bg-white/10 text-indigo-400' : 'text-slate-200' }}">
                            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                      </svg>
                                      
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg leading-4 group-hover:text-indigo-400">Dashboard</p>
                                <p class="text-slate-400 text-sm hidden md:block">Data overview</p>
                                </div>
                                
                            </div>
                        </a>
                        <a href="{{route( 'notification')}}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group {{ Route::currentRouteNamed( 'notification' ) ?  'bg-white/10 text-indigo-400' : 'text-slate-200' }}">
                            <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                      </svg>                              
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg leading-4 group-hover:text-indigo-400">Notifications</p>
                                <p class="text-slate-400 text-sm hidden md:block">Show notifications</p>
                                </div>
                                <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">{{count(auth()->user()->unreadNotifications)}}</div>
                            </div>
                        </a>
                        <a href="{{route( 'task.create')}}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group {{ Route::currentRouteNamed( 'task.create' ) ?  'bg-white/10 text-indigo-400' : 'text-slate-200' }}">
                            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M12.3691 8.87988H17.6191" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M6.38086 8.87988L7.13086 9.62988L9.38086 7.37988" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M12.3691 15.8799H17.6191" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M6.38086 15.8799L7.13086 16.6299L9.38086 14.3799" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg leading-4 group-hover:text-indigo-400">Create Tasks</p>
                                    <p class="text-slate-400 text-sm hidden md:block">New Task</p>
                                </div>
                                
                            </div>
                        </a>
                        <a href="{{route('task.assigned')}}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group  {{ Route::currentRouteNamed( 'task.assigned' ) ?  'bg-white/10 text-indigo-400' : 'text-slate-200' }}"">
                            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                      </svg>
                                        
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg leading-4 group-hover:text-indigo-400">Assigned task</p>
                                <p class="text-slate-400 text-sm hidden md:block">Assigned tasks to you</p>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <p class="text-sm text-center text-gray-600">v3.0.1.5 | &copy; 2023 Kinan Karafallah</p>
                </div>
                <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
                    
                    
                    {{$slot}}
                   
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </body>
    
</html>