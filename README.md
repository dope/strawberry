# [Strawberry](http://lifes.gd/strawberry)

Strawberry is a simplistic but advanced user system. It was designed by [@joericho](http://twitter.com/joericho) & developed by [@extramaster](https://twitter.com/extramaster)

Strawberry was built with PHP & MySQL and uses [Smarty](http://www.smarty.net) as the template engine and [Lemonade](http://joey.so/lemonade) as the grid system.


# Getting Started

First download the [master.zip](https://github.com/lifesgood/strawberry/archive/master.zip) and extract to your server and then open up `settings.php` and change the follow

```
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
```

Once completed the above, open: http://yoururl.com/strawberry and create your account, confirm your email and then login.

# It's that simple.

Yes, we've kept it simple - there is no admin panel or profile page (something we'd probably like to expand to), but it's really just a simplistic user system where
designers/developers can easily build their product on top of it.

If you have any issues or questions please [get in touch](https://github.com/lifesgood/strawberry/issues/new).

You can follow us on twitter at: [@joericho](http://twitter.com/joericho) & [@extramaster](http://twitter.com/extramaster)
<3
