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

class UserController extends BaseController {
    /**
     * Get user data by params
     * @param array $params association array with KEY: name, status, order, and random
     * @param string name
     * @param string status ACTIVE and INACTIVE only
     * @param string order ASC and DESC only
     * @param bool random TRUE and FALSE only
     * @return array
     */
    public function getUser(array $params = []){
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

            if($name !== null) {
                $stmt->bindParam(':name',$name);
            }

            if($status !== null) {
                $user_status = "";
                if ($status == "active") {
                    $user_status = 1;
                } elseif ($status == "inactive") {
                    $user_status = 0;
                }
                $stmt->bindParam(':status',$user_status,PDO::PARAM_INT);
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
    public function createUser(string $name, string $password, string $email) {
        $sql = "INSERT INTO tb_user(`user_name`,`user_email`,`user_password`,`status`) VALUES (:name, :email, :password, 1)";
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM tb_user WHERE `user_name` = :name");
            $stmt->bindParam(':name',$name);
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
    /**
     * Function to update just neccessary data using array
     * also with sanitized name
     * validated email
     * and hashed password
     */
    public function updateUser(int $id, array $updateData = []) {
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
    public function deleteUser(array $based = []) {
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
                $stmt->bindParam(":id",$id);
            } else if ($name !== null) {
                $stmt->bindParam(':name',$name);
            } else {
                return "ID and NAME cannot be empty or null";
            }

            $stmt->execute();
            return "Delete data success";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    //SET THE SESSION USER_ID WITH ID, USER_NAME WITH NAME
}

class AdminController extends BaseController{
    /**
     * Function to create new user
     * with sanitized name
     * with hashed password
     */
    /**
     * Function to login
     * with sanitized name
     * and hashed password
     * logic: comparing hashed input and hashed password on database
     */
    //SET THE SESSION ROLE TO ADMIN
    //MAKE ADMIN DASH BOARD
}

class MovieController extends BaseController{
    /**
     * Function to get all movies data
     * Function to get movie data by name
     * Function to get movie data by year
     * Function to get movie data order by highest rating
     * Function to get movie data order by lowest rating
     * Function to get movie data order by popular (high rating and many review)
     * Function to get movies data by genres 
     */
    /**
     * Function to insert movie data(
     * id
     * cover_link
     * trailer_link
     * title
     * director
     * release_date
     * duration
     * description
     * actors
     * genre
     * )
     * genre and actor SHOULD be return as array, so it could be looped
     */
    /**
     * Function to update just neccessary data using array
     */
    /**
     * Function to delete data with just set status to inactive or delete forever
     * with reset auto increment
     */
}

class RatingController extends BaseController{
    /**
     * Function to get all ratings data
     * Function to get rating data by user name
     * Function to get rating data by movie title
     */
    /**
     * Function to create new rating with range 0.0 - 5.0
     */
    /**
     * Function to update just neccessary data using array
     */
    /**
     * Function to delete data with just set status to inactive or delete forever
     * with reset auto increment
     */
}

class ReviewController extends BaseController{
    /**
     * Function to get all reviews data
     * Function to get review data by user name
     * Function to get review data by movie title
     */
    /**
     * Function to create new rating with range 0.0 - 5.0
     */
    /**
     * Function to update just neccessary data using array
     */
    /**
     * Function to delete data with just set status to inactive or delete forever
     * with reset auto increment
     */
}
?>