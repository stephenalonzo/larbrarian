<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larbrarian</title>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <main>
        <header class="p-4 bg-white shadow-md">
            <nav class="flex flex-row items-center justify-between w-full">
                <a href="#" class="font-semibold text-xl">
                    {{ Str::ucfirst(Route::currentRouteName()) }}
                </a>

                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                    src="/docs/images/people/profile-picture-5.jpg" alt="User dropdown">

                <div id="userDropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 border rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>Bonnie Green</div>
                        <div class="font-medium truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </nav>
        </header>
        <section class="px-4 py-6">
            <div class="container mx-auto w-3/4">
                <div class="grid grid-cols-4 gap-8 items-start w-full">
                    <div class="col-span-1">
                        <div class="bg-stone-900 rounded-sm w-full">
                            <a href="/" class="text-stone-400">
                                <div class="p-4">Dashboard</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="/students/approval" class="text-stone-400">
                                <div class="p-4">Student Approval</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="./registered.html" class="text-stone-400">
                                <div class="p-4">Registered Students</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="" class="text-stone-400">
                                <div class="p-4">Full Library</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="#" class="text-stone-400">
                                <div class="p-4">List Books</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="./issue.html" class="text-stone-400">
                                <div class="p-4">Issue/Return Books</div>
                            </a>
                            <hr class="h-px bg-stone-400 border-0">
                            <a href="./registered.html" class="text-stone-400">
                                <div class="p-4">Currently Issued Books</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-3 flex flex-col items-start space-y-6 w-full">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>