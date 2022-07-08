<?php

/**
 * upload user class from csv
 */
class upload_users{

    /**
     * check valid email 
     * returns boolean
     */
    public function checkemail($email) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
    }

    /**
     * this function is for create connection 
     */
    public function save_users(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to create table
        $sql = "CREATE TABLE if not exists users (
                    id INT(11) AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    surname VARCHAR(30) NOT NULL,
                    email VARCHAR(50) NOT NULL
                )";

        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        //checking read permission
        if (($open = fopen("users.csv", "r")) !== FALSE) {
            //parsing csv data
            fgetcsv($open, 1000, ",");
            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {  
                    if($this->checkemail($data[2])) {
                        //inserting csv data
                        $conn->query("insert into users (name, surname, email) values ('".ucwords($data[0])."','".ucwords($data[1])."','".strtolower($data[2])."')");
                    }
                    else{
                        echo "Invalid email format, cannot save in db ".strtolower($data[2])."<br>";
                    }
                }
        
            fclose($open);
        }
    }
}

//create an object then calling a method
$upload_users=new upload_users();
$upload_users->save_users();
    
