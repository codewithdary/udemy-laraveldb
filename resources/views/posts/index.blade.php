<html lang="en">
<head>
    <meta
        charset="UTF-8"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Databases & Eloquent
    </title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-800">
<header>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-transparent">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                    Databases & Eloquent
                </span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-transparent">
                    <li>
                        <a href="{{ route('posts.index') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white" aria-current="page">
                            Articles
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="mx-auto w-3/5 md:4/5">
    <div class="space-y-2 pt-6 pb-8 md:space-y-5">
        <h1 class='text-3xl py-10 font-extrabold leading-9 tracking-tight text-center text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14'>
            New Articles...
        </h1>

        @foreach($posts as $post)
        <div class="divide-y divide-gray-200 dark:divide-gray-700">
            <div class="space-y-2 xl:items-baseline xl:space-y-0">
                <a href="">
                    <div class="border-b-2 border-neutral-700 pb-10 pt-10">
                        <span class="sm:float-right float-left text-gray-400"></span>

                        <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-4xl font-bold sm:pb-2 w-full block">
                            {{ $post->title }}
                        </h2>

                        <p class="text-gray-300 font-light leading-8 pb-6 text-lg">
                            {{ $post->excerpt }}
                        </p>

                        <p class="text-gray-400 font-light leading-8 pb-6 text-md">
                            {{ date('j M Y', strtotime($post->created_at)) }}
                            <span class="text-red-700">•</span> {{ $post->min_to_read }} min read
                        </p>

                        <ul class="inline">
                            <li class="inline pr-3">
                                <a href="" class="inline bg-red-700 rounded-md text-sm py-1 px-2 text-white font-bold">
                                    laravel
                                </a>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="py-10">
        {{ $posts->links() }}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
