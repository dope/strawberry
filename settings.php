<?php


/* DATABASE-RELATED VARIABLES */

// This is where your MySQL server should be located..
define("DB_host","localhost");

// This is where the MySQL credientials is set
define("DB_username","Your DB Username");
define("DB_password","Your Password");

// This is the "database" name of the login system...
define("DB_name","Your DB name");





/* LOGINSYSTEM-RELATED VARIABLES */

// This is the email that is to be used in the email's headers
define("SET_email","your@domain.com");

// This is where the login system to be located at..
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


