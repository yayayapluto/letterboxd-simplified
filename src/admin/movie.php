<?php 
require_once('./controller/baseController.php');

$movies = new MovieController();

$movies->insertMovie('https://a.ltrbxd.com/resized/film-poster/4/8/8/7/5/1/488751-monkey-man-0-1000-0-1500-crop.jpg','','','',0,0,'',[],[]);
$movies->insertMovie('https://a.ltrbxd.com/resized/film-poster/8/2/0/4/4/8/820448-the-beast-0-1000-0-1500-crop.jpg','','','',0,0,'',[],[])

?>