<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Information System</title>
        <link rel="icon" href="/src/assets/LOGO.png" type="image/png">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/e81754ee21.js" crossorigin="anonymous"></script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <style>
        details[open] .rotate-icon {
            transform: rotate(90deg);
        }
    </style>

<body class="text-[#1b1b18] flex items-center lg:justify-center h-screen flex-col">
    <div id="PreLoaderBar" class="fixed top-0 left-0 w-full h-1 bg-white z-[9999] overflow-hidden">
        <div class="absolute h-full bg-sky-500 animate-indeterminate"></div>
        <div class="absolute h-full bg-sky-500 animate-indeterminate-short"></div>
    </div>

    <div class="w-full h-screen fixed bg-gradient-to-b from-sky-300 to-white -z-50"></div>

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
    </button>

    <aside id="logo-sidebar" class="fixed left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="py-6 shadow-[4px_0_10px_rgba(0,0,0,0.1)] flex flex-col m-4 rounded-2xl bg-blue-400 h-9/10">
            <a href="#" class="flex items-center ps-2.5 mb-5 justify-center">
                <img src="https://avatar.iran.liara.run/public/1" class="h-12 sm:h-24 rounded-full" alt="image" />
            </a>
            <p class="text-center text-s w-full break-words whitespace-normal text-black mb-2 capitalize">{{ Auth::user()->name }}</p>
            <p class="text-center text-xl font-bold w-full break-words whitespace-normal text-black mb-4">Student Information<br>System</p>
            
            <div class="flex flex-col h-4/5 justify-between">
                <div>
                <ul class="mt-6 space-y-2 tracking-wide">
                    <li class="min-w-max">
                        <x-navLink href="/homepage" aria-label="dashboard" type="a" :active="request()->is('homepage')">
                        <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                            <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="text-cyan-300 dark:fill-slate-600"></path>
                            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current group-hover:text-cyan-300 {{ request()->is('homepage') ? 'text-cyan-300' : 'text-black' }}"></path>
                            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-cyan-300 {{ request()->is('homepage') ? 'text-cyan-300' : 'text-black' }}"></path>
                        </svg>
                        <span class="group-hover:text-white group-hover:font-bold active:font-bold">Dashboard</span>
                        </x-navLink>
                    </li>
                    <li class="min-w-max">
                        <x-navLink href="/enrollStudent" :active="request()->is('enrollStudent')">
                        <i class="fa-solid fa-graduation-cap group-hover:text-cyan-300 {{ request()->is('enrollStudent') ? 'text-cyan-300' : 'text-black' }}"></i>
                        <span class="group-hover:text-white group-hover:font-bold">Enroll Student</span>
                        </x-navLink>
                    </li>

                    <!-- For Dropdown so it sticks open when opening links in the dropdown -->
                    @php
                        $studentRoutes = ['gradeStudent', 'studentInformation'];
                        $isStudentRoute = in_array(request()->path(), $studentRoutes);
                    @endphp

                    <details class="min-w-max" {{ $isStudentRoute ? 'open' : '' }}>
                        <x-navLink type="summary">
                            <i class="fa-solid fa-user-graduate text-black group-hover:text-cyan-300"></i>
                            <div class="w-full flex justify-between h-fit items-center">
                                <span class="group-hover:text-white group-hover:font-bold">About Student</span>
                                <i class="fa-solid fa-angle-right rotate-icon transition-transform duration-300"></i>
                            </div>
                            </a>
                        </x-navLink>
                        <ul>
                            <li class="min-w-max pl-4">
                                <x-navLink href="/studentInformation" :active="request()->is('studentInformation')">
                                <i class="fa-solid fa-user group-hover:text-cyan-300 {{ request()->is('studentInformation') ? 'text-cyan-300' : 'text-black' }}"></i>
                                <span class="group-hover:text-white group-hover:font-bold">Student Details</span>
                                </x-navLink>
                            </li>
                            <li class="min-w-max pl-4">
                                <x-navLink href="/gradeStudent" :active="request()->is('gradeStudent')">
                                <i class="fa-solid fa-receipt group-hover:text-cyan-300 {{ request()->is('studentFees') ? 'text-cyan-300' : 'text-black' }}"></i>
                                <span class="group-hover:text-white group-hover:font-bold">Grade Students</span>
                                </x-navLink>
                            </li>
                        </ul>
                    </details>
                    </ul>
                </div>
                <div class="min-w-max -mb-3">
                    <x-navLink href="/">
                    <i class="fa-solid fa-right-from-bracket text-gray-600 group-hover:text-cyan-300"></i>
                    <span class="group-hover:text-white group-hover:font-bold">Log Out</span>
                    </x-navLink>
                </div>
            </div>
        </div>
    </aside>
    {{ $slot }}
</body>
</html>