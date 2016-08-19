<?php 

/* CONNECT TO DB PDO */
function PDOconn() {
 $user = "root";
 $pass = "a1b2c3d4";
 $db = new PDO('mysql:host=localhost;dbname=zild_db', $user, $pass);
 return $db;
}


/* RECORD UPLOADED FILE PATH and FILENAME */
 
function recordUser($name) {
 $db = PDOconn();
 $query = "INSERT INTO `camera_user` (`id`, `name`, `descri`) VALUES (:id, :name, :descri)";
 $statement = $db->prepare($query);
 $statement->execute(array(':id'    => NULL, 
                           ':name'  => $name, 
                           'descri' => sample_data()));

 $id = $db->lastInsertId(); //get last inserted ID

 return $id;
}


/* GET USERS */
function getUsers() {
 $db = PDOconn();
 $query = "SELECT * FROM camera_user";
 $sql = $db->prepare($query);
 $sql->execute();
 $row = $sql->fetchALL();
 return $row;
}


function sample_data() {
 $lorem = "Lorem Ipsum is simply dummy text of the printing and 
 typesetting industry. Lorem Ipsum has been the industry's standard 
 dummy text ever since the 1500s, when an unknown printer took a 
 galley of type and scrambled it to make a type specimen book.";

 return $lorem;
}
















?>