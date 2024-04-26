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
    public function createUser(string $name, string $password, string $email) {
        
    }

    public function getUser(array $params = []) {
        
    }

    public function updateUser(int $id, array $updateData = []) {
        
    }

    public function deleteUser(array $based = []) {
        
    }

    public function login(string $name, string $password) {
        
    }

    public function createSession(int $userId, string $userName) {
        session_start();
        $_SESSION['USER_ID'] = $userId;
        $_SESSION['USER_NAME'] = $userName;
    }

    public function hashPassword(string $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 20));
        return $hashed_password;
    }
}

class AdminController extends BaseController 
{
    public function getAdmin(array $params = []) {
       
    }

    public function createAdmin(string $name, string $password) {
        
    }

    public function updateAdmin(int $id, array $updateData = []) {
       
    }

    public function deleteAdmin(array $based = []) {
        
    }

    public function login(string $name, string $password) {
        
    }

    public function createSession(int $userId, string $userName) {
        session_start();
        $_SESSION['USER_ID'] = $userId;
        $_SESSION['USER_NAME'] = $userName;
    }

    public function hashPassword(string $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 20));
        return $hashed_password;
    }
}

class MovieController extends BaseController 
{
    
    function getAllMovies() {
        
    }

    // Function to get movie data by name
    function getMovieByName(string $name) {
        
    }

    // Function to get movie data by year
    function getMovieByYear(int $year) {
        
    }

    
    function getMoviesOrderByHighestRating() {
        
    }

    
    function getMoviesOrderByLowestRating() {
       
    }

    
    function getMoviesOrderByPopularity() {
        
    }

    
    function getMoviesByGenres(array $genres) {
       
    }

    
    function insertMovie(string $cover_link, string $trailer_link, string $title, string $director, string $release_date, int $duration, string $description, array $actors, array $genres) {
    }

    
    function updateMovie(array $data) {
        
    }

    
    function deleteMovie($movieId, $permanentDeletion = false) {
        
    }
}

class RatingController extends BaseController 
{
    
    function getAllRatings() {
        
    }

    
    function getRatingsByUserName(string $userName) {
        
    }

    
    function getRatingsByMovieTitle(string $movieTitle) {
        
    }

    
    function createRating(string $userName, string $movieTitle, float $rating) {
        
    }

    
    function updateRating(array $data) {
        
    }

    
    function deleteRating($ratingId, $permanentDeletion = false) {
        
    }
}

class ReviewController extends BaseController 
{

    
    function getAllReviews() {
        
    }

    
    function getReviewsByUserName(string $userName) {
        
    }

    
    function getReviewsByMovieTitle(string $movieTitle) {
        
    }

    // Function to create new review
    function createReview(string $userName, string $movieTitle, string $content) {
        
    }

    
    function updateReview(array $data) {
        
    }

    
    function deleteReview($reviewId, $permanentDeletion = false) {
        
    }
}

class InputHandler 
{
    public static function sanitizeString(string $input): string {
        $cleanedInput = strip_tags(trim($input));
        return $cleanedInput;
    }

    public static function validateEmail(string $email): bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePasswordStrength(string $password): bool {
        return strlen($password) >= 8;
    }

    public static function validateStatus(string $status): bool {
        return strtoupper($status) === "ACTIVE" || strtoupper($status) === "INACTIVE";
    }

    public static function validateOrder(string $order): bool {
        return strtoupper($order) === "ASC" || strtoupper($order) === "DESC";
    }

    public static function validateBoolean(string $boolean): bool {
        return strtoupper($boolean) === "TRUE" || strtoupper($boolean) === "FALSE";
    }
}

?>