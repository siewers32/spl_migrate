<?php 

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

//deb7255_spl
//2348sd83je0sjj329DDwe39EGA

//create user if not exists 'deb7255_spl'@'localhost' identified by '2348sd83je0sjj329DDwe39EGA';
//grant select, insert, update, delete ON school.* TO 'fk5fdVr.'@'localhost';
//CREATE USER IF NOT EXISTS 'user'@'localhost' IDENTIFIED BY 'password';