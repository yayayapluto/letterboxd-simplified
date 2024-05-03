<?php
require 'connect.php';
if (isset($_SESSION['id'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>A Letter</title>
</head>

<body class="bg-neutral-900">
    <div id="navbar" class="container mx-auto px-5 md:px-7 lg:px-10">
        <div class="navbar bg-transparent">
            <div class="flex-1">
                <a class="btn btn-ghost text-lg md:text-xl lg:text-2xl">A-Letter</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a onclick="login.showModal()" class="text-lg">Sign in</a></li>
                    <li><a onclick="register.showModal()" class="text-lg">Create account</a></li>
                    <li><a href="films_tiny.html" class="text-lg">Films</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="main-content" class="container mx-auto grid grid-cols-1 gap-y-10 md:gap-y-16 lg:gap-y-20 px-10 md:px-20 lg:px-32 mt-5">
        <div id="random-huge-movie-cover" class="mx-auto">
            <img src="https://a.ltrbxd.com/resized/sm/upload/1v/t5/ny/lk/MV5BYWRmZWM2ZTktMzE1Ny00NmQyLWE3ZDItZTk5MjY5OGQ5NzdhXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_-1920-1920-1080-1080-crop-000000.jpg" alt="" class="rounded-md">
        </div>
        <div id="orientation" class="mx-auto">
            <button class="btn btn-wide btn-md lg:btn-lg">Get started</button>
        </div>
        <div id="popular-movie">
            <strong>Most popular movie</strong>
            <hr class="my-3">
            <div id="movies-list" class="w-full grid grid-cols-5 gap-x-2">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
            </div>
        </div>
        <div id="high-rated-movies">
            <strong>High rated movies</strong>
            <hr class="my-3">
            <div id="movies-list" class="w-full grid grid-cols-7 gap-x-2">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
                <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="rounded-lg">
            </div>
        </div>
        <div id="recent-review">
            <strong>Recent review</strong>
            <hr class="my-3">
            <div class="flex flex-col">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
                <hr class="my-2">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
                <hr class="my-2">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
                <hr class="my-2">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
                <hr class="my-2">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
                <hr class="my-2">
                <div id="user-review" class="grid grid-rows-4 grid-cols-3 h-1/6 gap-x-0">
                    <img src="https://a.ltrbxd.com/resized/film-poster/8/4/2/3/0/1/842301-challengers-0-1000-0-1500-crop.jpg" alt="" class="row-span-4 h-40">
                    <strong class="col-span-2">Challenger</strong>
                    <p>Pablo</p>
                    <div id="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto labore veritatis. Ducimus sequi sed eveniet dolorem, blanditiis quam. Voluptate!</p>
                    <p>review date</p>
                </div>
            </div>
        </div>
    </div>

    <!--Login modal-->
    <dialog id="register" class="modal">
        <div class="modal-box">
            <div class="container mx-auto place-items-center px-3 space-y-3">
                <h1 class="text-lg">Get into A-Letter</h1>
                <form action="" autocomplete="off" method="post">
                    <label class="form-control w-full max-w-xs gap-y-1">
                        <p class="label label-text font-semibold">Email Address</p>
                        <input type="email" class="input input-bordered w-full max-w-xs" name="email" />
                        <p class="label label-text font-semibold">Username</p>
                        <input type="text" class="input input-bordered w-full max-w-xs" name="username" />
                    
                        <p class="label label-text font-semibold">Password</p>
                        <input type="password" class="input input-bordered w-full max-w-xs" name="password" />
                       
                        <input type="submit" class="btn btn-success" name="action" value="register">
                        
                    </label>
                </form>

            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <dialog id="login" class="modal">
        <div class="modal-box">
            <div class="container mx-auto place-items-center px-3 space-y-3">
                <h1 class="text-lg">Get into A-Letter</h1>
                <form action="" autocomplete="off" method="post">
                    <label class="form-control w-full max-w-xs gap-y-1">
                        <p class="label label-text font-semibold">Username</p>
                        <input type="text" class="input input-bordered w-full max-w-xs" name="username" />
                        <p class="label label-text font-semibold">Password</p>
                        <input type="text" class="input input-bordered w-full max-w-xs" name="password" />
                        <input type="submit" class="btn btn-success" value="get in">
                    </label>
                </form>

            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <!--Login modal-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>