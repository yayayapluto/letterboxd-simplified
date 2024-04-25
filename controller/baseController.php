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
     * Function to get all users data
     * Function to get user data by name
     * Function to get user data order by name desc and asc
     * Function to get active or inactive user data
     * Function to get movie data by random
     */
    /**
     * Function to create new user
     * check if name already taken or not (case sensitive)
     * with sanitized name
     * with validated email
     * with hashed password
     */
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
    /**
     * Function to delete data with just set status to inactive or delete forever
     * with reset auto increment
     */
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