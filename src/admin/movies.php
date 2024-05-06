<div class="card w-96 bg-neutral-800 shadow-xl">
    <figure class="px-10 pt-10">
      <h1 class="text-5xl">762</h1>
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Total movies</h2>
      <p>Choose action</p>
      <div class="card-actions">
        <button class="btn btn-primary text-neutral-900" onclick="read_movies.showModal()">See movies data</button>
        <button class="btn btn-success" onclick="insert_movies.showModal()">Create new movie</button>
      </div>
    </div>
</div>

<dialog id="read_movies" class="modal">
    <div class="modal-box w-11/12 h-5/6 max-h-full max-w-full">
        <button class="btn btn-success" onclick="insert_movies.showModal()">Crete new movie</button>
        <form method="dialog">
            <button class="btn btn-lg btn-circle btn-ghost absolute right-2 top-2 text-lg">✕</button>
        </form>
        <div class="overflow-x-auto p-10">
            <table class="table table-fixed">
                <!-- head -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Farras</td>
                        <td>Farras123</td>
                        <td>Farras@gmail.com</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_movies.showModal()">Update</button>
                            <button class="btn" onclick="delete_movies.showModal()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Ikmal</td>
                        <td>Ikmal123</td>
                        <td>Ikmal@gmail.com</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_movies.showModal()">Update</button>
                            <button class="btn" onclick="delete_movies.showModal()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Satria</td>
                        <td>Satria123</td>
                        <td>Satria@gmail.com</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_movies.showModal()">Update</button>
                            <button class="btn" onclick="delete_movies.showModal()">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</dialog>
<!-- Open the modal using ID.showModal() method -->
<dialog id="insert_movies" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Insert new movie</h3>
        <form action="" method="post" class="flex flex-col space-y-4 mt-5">
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Cover link" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Trailer link" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Movie title" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Director" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Release year" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Daration" />
            </label>
            <textarea placeholder="Description" class="textarea textarea-bordered textarea-md w-full" ></textarea>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Actors" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Genre" />
            </label>
            <button type="submit" class="btn btn-success">Insert!</button>
        </form>
        <form method="dialog" class="mt-5">
            <button class="btn">Close</button>
        </form>
    </div>
    </div>
</dialog>
<dialog id="update_movies" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Update movie data with id: </h3>
        <form action="" method="post" class="flex flex-col space-y-4 mt-5">
            <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="w-4 h-4 opacity-70">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input type="text" class="grow" placeholder="moviename" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="w-4 h-4 opacity-70">
                    <path
                        d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path
                        d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
                <input type="text" class="grow" placeholder="Email" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="w-4 h-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                        clip-rule="evenodd" />
                </svg>
                <input type="password" class="grow" placeholder="password" />
            </label>
            <button type="submit" class="btn">Update!</button>
        </form>
        <form method="dialog" class="mt-5">
            <button class="btn">Close</button>
        </form>
    </div>
    </div>
</dialog>
<dialog id="delete_movies" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-5">Delete movie data with id: </h3>
        <div class="mx-auto">
            <button class="btn btn-warning text-neutral-900">Cancel</button>
            <button class="btn btn-error text-neutral-900">Delete</button>
        </div>
        <form method="dialog" class="mt-5">
            <button class="btn">Close</button>
        </form>
    </div>
    </div>
</dialog>