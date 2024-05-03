

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="output.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div id="navbar" class="container mx-auto px-10 md:px-20 lg:px-28">
            <div class=" navbar bg-transparent">
            <div class="flex-1">
                <a class="btn btn-ghost text-lg md:text-xl lg:text-2xl" href="index.html">A-Letter</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="" class="text-lg">Sign in</a></li>
                    <li><a href="" class="text-lg">Create account</a></li>
                    <li><a href="#" class="text-lg">Films</a></li>
                </ul>
            </div>
        </div>
        </div>
    </header>
    <main class="container mx-auto grid grid-cols-1 gap-y-10 md:gap-y-16 lg:gap-y-20 px-10 md:px-20 lg:px-32 mt-5">
        <div id="content">
            <div class="grid justify-start">
                <strong class="m-3">Films</strong>
                <label class="input input-bordered flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
                </label>
                <div id="search-order-by" class="grid justify-end">
                    <div class="join join-horizontal">
                        <div class="join-item dropdown dropdown-hover">
                            <div tabindex="0" role="button" class="btn btn-md mx-2">
                                Decade
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li>
                            </ul>
                        </div>
                        <div class="join-item dropdown dropdown-hover">
                            <div tabindex="0" role="button" class="btn btn-md mx-2">
                                Rating
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li>
                            </ul>
                        </div>
                        <div class="join-item dropdown dropdown-hover">
                            <div tabindex="0" role="button" class="btn btn-md mx-2">
                                Genre
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li>
                            </ul>
                        </div>
                        <button class="join-item btn self-center">Randomize</button>
                    </div>
                </div>
                <a href="#"><ion-icon name="apps" class="m-3"></ion-icon></a>
                <a href="films_huge.html"><ion-icon name="menu" class="m-3"></ion-icon></a>
            </div>
            <hr class="my-3">
            <div id="sum-movies" class="w-full bg-slate-500 text-center mb-3 rounded-sm h-12 place-content-center">
                <strong>There is 999,999 movies</strong>
            </div>
            <div id="movies-list" class="w-full grid grid-cols-12 auto-rows-auto gap-4">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
            </div>
            <hr class="my-3">
        </div>
    </main>
    <footer></footer>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>