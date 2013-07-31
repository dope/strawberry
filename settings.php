<?php

// The name of your server eg. Localhost or http://127.0.0.1
define("DB_host","localhost");

// This is where the MySQL user details are set
define("DB_username","root");
define("DB_password","root");

// This is the "database" name of the login system...
define("DB_name","strawberry");

// This is where your email is desired
define("SET_email","your@domain.com");

// The directory of Strawberry (where you've installed it)
define("SET_directory","your location for Strawberry");

// This is where the name of the system can be set!
define("SET_name","Strawberry");

/* SECURITY-RELATED VARIABLES */

// This is the "salt", ignore it or add more to it if cryptography isn't a strong point
define("DB_salt","6duMSUlEqr6bU2pvkX1yaQBMlNZ6qIsVfoeTSlfX982F8C1F0C66F4D94FA76e1HOizDWj6mrTE6AgMxGZkrj18FF5CCA5EC15C47491FBE381E937C1A9642D81868");


// This is the function that generates the user's passwords!
function genPassword($password,$username){

    // Encrypt the password using an impossibly impossible format
    return hash("sha256", $password . (sha1(md5($password . strtolower($username) . DB_salt))));
}


