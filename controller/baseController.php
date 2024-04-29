<?php
class BaseController
{
    protected $pdo;

    private function connect()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=LETTERBOXD_simplified', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Cannot connect to the database\t") . $e->getMessage() . "\t" . $e->getCode();
        }
    }

    public function __construct()
    {
        $this->connect();
    }
}

class UserController extends BaseController
{
    /**
     * Get user data by params
     * @param array $params association array with KEY: name, status, order, and random
     * @param string name
     * @param string status ACTIVE and INACTIVE only
     * @param string order ASC and DESC only
     * @param bool random TRUE and FALSE only
     * @return array
     */
    public function getUser(array $params = [])
    {
        $name = null;
        $status = null;
        $order = null;
        $random = null;

        foreach ($params as $key => $value) {
            if ($key === "name") {
                $name = $value;
            } elseif ($key === "status") {
                $status = $value;
            } elseif ($key === "order") {
                $order = $value;
            } elseif ($key === "random") {
                $random = $value;
            }
        }

        $sql = "SELECT * FROM tb_user WHERE `status` = 1";

        if ($name !== null) {
            $sql .= " WHERE `user_name` = :name";
        }

        if ($status !== null) {
            $sql .= ($name !== null ? " AND" : " WHERE") . " `status` = :status";
        }

        if ($order !== null) {
            $sql .= " ORDER BY `user_name` $order";
        }

        if ($random !== null) {
            $sql .= ($random ? " ORDER BY RAND()" : "");
        }

        try {
            $stmt = $this->pdo->prepare($sql);

            if ($name !== null) {
                $stmt->bindParam(':name', $name);
            }

            if ($status !== null) {
                $user_status = "";
                if ($status == "active") {
                    $user_status = 1;
                } elseif ($status == "inactive") {
                    $user_status = 0;
                }
                $stmt->bindParam(':status', $user_status, PDO::PARAM_INT);
            }

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            die("Cannot get users data from database\t") . $e->getLine();
        }
    }

    /**
     * Function to create new user
     * check if name already taken or not (case sensitive)
     * with sanitized name
     * with validated email
     * with hashed password
     */
    public function createUser(string $name, string $password, string $email)
    {
        $sql = "INSERT INTO tb_user(`user_name`,`user_email`,`user_password`,`status`) VALUES (:name, :email, :password, 1)";
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM tb_user WHERE `user_name` = :name");
            $stmt->bindParam(':name', $name);
            $stmt->execute();
            $existingName = $stmt->fetch();

            if ($existingName) {
                return "Name already taken";
            }

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            return "Create new user success";

        } catch (\PDOException $e) {
            die("Cannot create new user\t") . $e->getLine();
        }
    }

    /**
     * Function to login
     * with sanitized name
     * validated email
     * and hashed password
     * logic: comparing hashed input and hashed password on database
     */
    public function login(string $username, string $password){

    }

    /**
     * Function to update just neccessary data using array
     * also with sanitized name
     * validated email
     * and hashed password
     */
    public function updateUser(int $id, array $updateData = [])
    {
        $sql = "UPDATE tb_user SET ";
        try {
            $firstdata = true;
            $params = [];
            foreach ($updateData as $col => $val) {
                if ($firstdata) {
                    $firstdata = false;
                } else {
                    $sql .= ", ";
                }
                $sql .= "`$col` = :$col";
                $params[":$col"] = $val;
            }
            $sql .= " WHERE `id` = :id";
            $params[':id'] = $id;

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return "Update data success";
        } catch (\PDOException $e) {
            die("Cannot update user\t") . $e->getLine();
        }
    }

    /**
     * Function to delete data with just set status to inactive or delete forever
     * with reset auto increment
     */
    public function deleteUser(array $based = [])
    {
        $sql = "UPDATE tb_user SET `status` = 0 ";

        $id = null;
        $name = null;

        foreach ($based as $key => $value) {
            if (strtolower($key) === 'id') {
                $id = $value;
            }

            if (strtolower($key) === 'name') {
                $name = $value;
            }
        }

        try {
            if ($id === null) {
                $sql .= "WHERE `user_name` = :name";
            }

            if ($name === null) {
                $sql .= "WHERE `id = :id";
            }

            $stmt = $this->pdo->prepare($sql);

            if ($id !== null) {
                $stmt->bindParam(":id", $id);
            } else if ($name !== null) {
                $stmt->bindParam(':name', $name);
            } else {
                return "ID and NAME cannot be empty or null";
            }

            $stmt->execute();
            return "Delete data success";
        } catch (\PDOException $e) {
            die("Cannot delete data\t") . $e->getMessage();
        }
    }
    //SET THE SESSION USER_ID WITH ID, USER_NAME WITH NAME
}

class AdminController extends BaseController
{
    public function login(string $name, string $password){

    }
    //SET THE SESSION ROLE TO ADMIN
    //MAKE ADMIN DASH BOARD
}

class MovieController extends BaseController
{
    function getAllMovies()
    {
        $sql = "SELECT * FROM tb_movie WHERE `status` = 1";
        $res = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    // Function to get movie data by name
    function getMovieByName(string $name)
    {
        $sql = "SELECT * FROM tb_review WHERE `status`= 1 AND `title` = :name";
        try {
            $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
        } catch (\PDOException $e) {
            die("Cannot get movies data\t") . $e->getMessage();
        }
    }

    // Function to get movie data by year
    function getMovieByYear(int $year, int $endYear = null)
    {
        $sql = "SELECT * FROM tb_review WHERE `status` = 1 ";

        if($endYear !== null) {
            $sql .= "AND WHERE `release_year` BETWEEN :year AND :endyear";
        } else {
            $sql .= "AND `release_year` = :year";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':year', $year);
            
            if($endYear !== null){
                $stmt->bindParam(":endyear",$endYear);
            }

            $stmt->execute();
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
        } catch (\PDOException $e) {
            die("Cannot get movies data\t") . $e->getMessage();
        }
    }

    function getMoviesOrderByRating(bool $ascending = false)
    {
        
    }

    // Function to get movie data order by popularity (high rating and many reviews)
    function getMoviesOrderByPopularity()
    {
        // Implementasi kode untuk mengambil data film yang diurutkan berdasarkan popularitas
    }

    // Function to get movies data by genres
    function getMoviesByGenres(array $genres)
    {
        // Implementasi kode untuk mengambil data film berdasarkan genre
    }

    // Function to insert movie data
    function insertMovie(string $cover_link, string $trailer_link, string $title, string $director, string $release_year, int $duration, string $description, array $actors, array $genres)
    {
        $sql = "INSERT INTO tb_movie(`cover_link`,`trailer_link`,`title`,`director`,`release_year`,`duration`,`description`,`actors`,`genre`) VALUES (:cover_link, :trailer_link, :title, :director, :release_year, :duration, :description, :actors, :genres)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':cover_link', $cover_link);
            $stmt->bindParam(':trailer_link', $trailer_link);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':release_year', $release_year);
            $stmt->bindParam(':duration', $duration);
            $stmt->bindParam(':description', $description);
            $stmt->bindValue(':actors', implode(',', $actors)); // Actors disimpan sebagai string terpisah dengan koma
            $stmt->bindValue(':genres', implode(',', $genres)); // Genre disimpan sebagai string terpisah dengan koma
            $stmt->execute();
            return "Successfully insert data";
        } catch (\PDOException $e) {
            die("Cannot insert movie data\t" . $e->getMessage());
        }
    }

    // Function to update just necessary data using array
    function updateMovie(int $id, array $updateData)
    {
        $sql = "UPDATE tb_movie SET ";
        try {
            $firstdata = true;
            $params = [];
            foreach ($updateData as $col => $val) {
                if ($firstdata) {
                    $firstdata = false;
                } else {
                    $sql .= ", ";
                }
                $sql .= "`$col` = :$col";
                $params[":$col"] = $val;
            }
            $sql .= " WHERE `id` = :id";
            $params[':id'] = $id;

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return "Update data success";
        } catch (\PDOException $e) {
            die("Cannot update movie\t") . $e->getMessage();
        }
    }

    // Function to delete data with just set status to inactive or delete forever with reset auto increment
    function deleteMovie($movieId, $permanentDeletion = false)
    {
        $sql = "";

        if($permanentDeletion === false) {
            $sql = "UPDATE tb_movie SET `status` = 0 WHERE `id` = :id";
        } else {
            $sql = "DELETE FROM tb_movie WHERE `id` = :id";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $movieId);
            $stmt->execute();
            return "Delete data success";
        } catch (\PDOException $e) {
            die("Cannot delete movie data\t") . $e->getMessage();
        }
    }
}

class RatingController extends BaseController {

    // Function to get all ratings data
    function getAllRatings() {
        $sql = "SELECT * FROM tb_rating WHERE `status` = 1";
        $res = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    // Function to get rating data by user name
    function getRatingsByUserName(string $userName) {
        // Implementasi kode untuk mengambil data rating berdasarkan nama pengguna
    }

    // Function to get rating data by movie title
    function getRatingsByMovieTitle(string $movieTitle) {
        // Implementasi kode untuk mengambil data rating berdasarkan judul film
    }

    // Function to create new rating with range 0.0 - 5.0
    function createRating(string $userId, string $movieId, float $rating) {
        $sql = "INSERT INTO tb_rating(`user_id`,`movie_id`,`rating`) VALUES (:userId, :movieId, :rating)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':userId',$userId);
            $stmt->bindParam(':movieId',$movieId);
            $stmt->bindParam(':rating',$rating);
            $stmt->execute();
            return "Successfuly create rating";
        } catch (\PDOException $e) {
            die("Cannot create new rating\t") . $e->getMessage();
        }
    }

    // Function to update just necessary data using array
    function updateRating(int $id, array $updateData) {
        $sql = "UPDATE tb_rating SET ";
        try {
            $firstdata = true;
            $params = [];
            foreach ($updateData as $col => $val) {
                if ($firstdata) {
                    $firstdata = false;
                } else {
                    $sql .= ", ";
                }
                $sql .= "`$col` = :$col";
                $params[":$col"] = $val;
            }
            $sql .= " WHERE `id` = :id";
            $params[':id'] = $id;

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return "Update data success";
        } catch (\PDOException $e) {
            die("Cannot update movie\t") . $e->getMessage();
        }
    }

    // Function to delete data with just set status to inactive or delete forever with reset auto increment
    function deleteRating($ratingId, $permanentDeletion = false) {
        $sql = "";

        if($permanentDeletion) {
            $sql = "DELETE FROM tb_rating WHERE `id` = :id";
        } else {
            $sql = "UPDATE tb_rating SET `status` = 0 WHERE `id` = :id";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $ratingId);
            $stmt->execute();
            return "Delete data success";
        } catch (\PDOException $e) {
            die("Cannot delete movie data\t") . $e->getMessage();
        }
    }
}


class ReviewController extends BaseController 
{
    function getAllReviews() {
        $sql = "SELECT * FROM tb_review WHERE `status` = 1";
        $res = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    // Function to get review data by user name
    function getReviewsByUserName(string $userName) {
        
    }

    // Function to get review data by movie title
    function getReviewsByMovieTitle(string $movieTitle) {
        // Implementasi kode untuk mengambil data review berdasarkan judul film
    }

    // Function to create new review
    function createReview(string $userId, string $movieId, string $review) {
        $sql = "INSERT INTO tb_review(`user_id`,`movie_id`,`review`) VALUES (:userId, :movieId, :review)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':userId',$userId);
            $stmt->bindParam(':movieId',$movieId);
            $stmt->bindParam(':review',$review);
            $stmt->execute();
            return "Successfuly create rating";
        } catch (\PDOException $e) {
            die("Cannot create new review\t") . $e->getMessage();
        }
    }

    // Function to update just necessary data using array
    function updateReview(int $id, array $updateData) {
        $sql = "UPDATE tb_review SET ";
        try {
            $firstdata = true;
            $params = [];
            foreach ($updateData as $col => $val) {
                if ($firstdata) {
                    $firstdata = false;
                } else {
                    $sql .= ", ";
                }
                $sql .= "`$col` = :$col";
                $params[":$col"] = $val;
            }
            $sql .= " WHERE `id` = :id";
            $params[':id'] = $id;

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return "Update data success";
        } catch (\PDOException $e) {
            die("Cannot update movie\t") . $e->getMessage();
        }
    }

    // Function to delete data with just set status to inactive or delete forever with reset auto increment
    function deleteReview($reviewId, $permanentDeletion = false) {
        $sql = "";

        if($permanentDeletion !== false) {
            $sql = "DELETE FROM tb_review WHERE `id` = :id";
        } else {
            $sql = "UPDATE tb_review SET `status` = 1 WHERE `id` = :id";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $reviewId);
            $stmt->execute();
            return "Delete data success";
        } catch (\PDOException $e) {
            die("Cannot delete movie data\t") . $e->getMessage();
        }
    }
}

?>