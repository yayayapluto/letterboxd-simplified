<div class="card w-96 bg-neutral-800 shadow-xl">
    <figure class="px-10 pt-10">
      <h1 class="text-5xl">972</h1>
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Total reviews</h2>
      <p>Choose action</p>
      <div class="card-actions">
        <button class="btn btn-primary text-neutral-900" onclick="read_reviews.showModal()">See reviews data</button>
        <button class="btn btn-success" onclick="insert_reviews.showModal()">Create new review</button>
      </div>
    </div>
</div>

<dialog id="read_reviews" class="modal">
    <div class="modal-box w-11/12 h-5/6 max-h-full max-w-full">
        <button class="btn btn-success" onclick="insert_reviews.showModal()">Crete new review</button>
        <form method="dialog">
            <button class="btn btn-lg btn-circle btn-ghost absolute right-2 top-2 text-lg">✕</button>
        </form>
        <div class="overflow-x-auto p-10">
            <table class="table table-fixed">
                <!-- head -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>user_id</th>
                        <th>movie_id</th>
                        <th>review</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>1</td>
                        <td>1</td>
                        <td>good</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_reviews.showModal()">Update</button>
                            <button class="btn" onclick="delete_reviews.showModal()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>1</td>
                        <td>2</td>
                        <td>nice</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_reviews.showModal()">Update</button>
                            <button class="btn" onclick="delete_reviews.showModal()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>1</td>
                        <td>9</td>
                        <td>awsome</td>
                        <td>1</td>
                        <td>
                            <button class="btn" onclick="update_reviews.showModal()">Update</button>
                            <button class="btn" onclick="delete_reviews.showModal()">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</dialog>
<!-- Open the modal using ID.showModal() method -->
<dialog id="insert_reviews" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Create new review</h3>
        <form action="" method="post" class="flex flex-col space-y-4 mt-5">
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="user_id" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="movie_id" />
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="review" />
            </label>
            <button type="submit" class="btn btn-success">Create!</button>
        </form>
        <form method="dialog" class="mt-5">
            <button class="btn">Close</button>
        </form>
    </div>
</dialog>
<dialog id="delete_reviews" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-5">Delete review data with id: </h3>
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