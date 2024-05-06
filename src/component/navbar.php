<div id="navbar" class="container mx-auto px-5 md:px-7 lg:px-10">
    <div class="navbar bg-transparent">
        <div class="flex-1">
            <a href="index.php" class="btn btn-ghost text-lg md:text-xl lg:text-2xl">A-Letter</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a onclick="login.showModal()" class="text-lg">Sign in</a></li>
                <li><a onclick="register.showModal()" class="text-lg">Create account</a></li>
                <li><a href="films_tiny.php" class="text-lg">Films</a></li>
            </ul>
        </div>
    </div>
</div>
<!--regiter modal-->
<dialog id="register" class="modal">
        <div class="modal-box h-auto p-10">
          <div class="container mx-auto space-y-3">
            <h1 class="text-xl text-center font-bold">Register</h1>
            <label class="form-control gap-y-1">
                <p class="label label-text font-semibold">Email Address</p>
                <input type="text" class="input input-bordered w-full" />
                <p class="label label-text font-semibold">Username</p>
                <input type="text" class="input input-bordered w-full" />
                <p class="label label-text font-semibold">Password</p>
                <input type="text" class="input input-bordered w-full"/>
                <input type="submit" class="btn btn-success mt-10" value="okay">
            </label>
          </div>    
        </div>
        <form method="dialog" class="modal-backdrop">
          <button>close</button>
        </form>
    </dialog>

    <dialog id="login" class="modal">
        <div class="modal-box h-auto p-10">
          <div class="container mx-auto space-y-3">
            <h1 class="text-xl text-center font-bold">Get into A-Letter</h1>
            <label class="form-control gap-y-1">
                <p class="label label-text font-semibold">Username</p>
                <input type="text" class="input input-bordered" />
                <p class="label label-text font-semibold">Password</p>
                <input type="text" class="input input-bordered" />
                <input type="submit" class="btn btn-success mt-5" value="get in">
            </label>
          </div>    
        </div>
        <form method="dialog" class="modal-backdrop">
          <button>close</button>
        </form>
    </dialog>
    <!--Login modal-->