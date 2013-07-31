# [Strawberry](http://lifes.gd/strawberry)
Strawberry is a simplistic but advanced user system. It was built with PHP & MySQL and uses [Smarty](http://www.smarty.net) and [Lemonade](http://joey.so/lemonade).

Designed by [@joericho](http://twitter.com/joericho) & developed by [@extramaster](https://twitter.com/extramaster)

# Install with [Bower](http://bower.io)
```
bower install strawberry
```

# Getting Started
First download the [master.zip](https://github.com/lifesgood/strawberry/archive/master.zip) and extract to your server and then open up `settings.php` and change the following details:

```
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
```

Once completed the above, open the directory you have extracted Strawberry to, and create your account, confirm your email and then login.

# What's what
Obviously you're looking for the page to add your "hidden" content, navigate to `templates > index_registered.html`

Structuring your content with [Lemonade](https://github.com/dope/lemonade/blob/master/README.md) has never been easier, read the [docs](https://github.com/dope/lemonade/blob/master/README.md) for more help.

# It's that simple.
Yes, we've kept it simple - there is no admin panel or profile page (something we'd probably like to expand to), but it's really just a simplistic user system where
designers/developers can easily build their product on top of it.

If you have any issues or questions please [get in touch](https://github.com/lifesgood/strawberry/issues/new).

You can follow us on twitter at: [@joericho](http://twitter.com/joericho) & [@extramaster](http://twitter.com/extramaster)

Thanks <3
