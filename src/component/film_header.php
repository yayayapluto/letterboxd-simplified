<div class="grid grid-cols-4 w-full">
            <strong class="m-3">Films</strong>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
            </label>
            <div id="search-order-by" class="flex flex-row justify-between w-full">
                <div class="join join-horizontal">
                    <div class="join-item dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="btn btn-md mx-2">
                            Decade
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a> 2020</a></li>
                            <li><a> 2010</a></li>
                            <li><a> 2000</a></li>
                            <li><a> 1990</a></li>
                            <li><a> 1980</a></li>
                            <li><a> 1970</a></li>
                            <li><a> 1960</a></li>
                        </ul>
                    </div>
                    <div class="join-item dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="btn btn-md mx-2">
                            Rating
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a>Highly rated first</a></li>
                            <li><a>lowest rated first</a></li>
                        </ul>
                    </div>
                    <div class="join-item dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="btn btn-md mx-2">
                            Genre
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a>Sci-fi</a></li>
                            <li><a>Horror</a></li>
                            <li><a>Comedy</a></li>
                            <li><a>Drama</a></li>
                            <li><a>Action</a></li>
                            <li><a>Fantasy</a></li>
                            <li><a>Thriller</a></li>
                            <li><a>Romance</a></li>
                            <li><a>Adventure</a></li>
                            <li><a>Mystery</a></li>
                        </ul>
                    </div>
                </div>
                <button class="join-item btn self-center">Randomize</button>
                <div id="grid" class="join join-horizontal">
                    <a class="join-item" href="films_tiny.php"><ion-icon name="apps" class="m-3"></ion-icon></a>
                    <a class="join-item" href="films_huge.php"><ion-icon name="menu" class="m-3"></ion-icon></a>
                </div>
            </div>
        </div>