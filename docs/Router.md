


Another PHP Router
===========================


Introduction
-----------------------------

it's another router class for php. read the rest of manual for the detailed features and sample codes.

License
-----------------------------

This is a free software and published under GPL v3.0 license. so you can freely use it, modify it to fit your needs and use it in your applications and finally share your changes with your friends and specially me. there is a plain text file containing the GPL v3.0 terms and definitions in the project or you can go online and check it for yourself at [www.gnu.org/copyleft/gpl.html](http://www.gnu.org/copyleft/gpl.html)

Features
-----------------------------

* Pattern based routing
* powerful reverse routing include cross domain reverse routing
* very flexible routing supporting different/user-defined protocols, subdomains, domanins, web server port and request methods
* very simple to use

Versions & Change Log
-----------------------------
* version 0.1

How to [Simply] Use it
-----------------------------

there are 3 entities that must be defined in Router class.

### 1. Patterns

a pattern defines how dynamic parts of a URL must look like. in fact, the patterns are essential to define dynamic routes. for example, the _post\_id_ and _published\_date_ in a url will be detected by three different patterns. 

    // Syntax
    Router::pattern($pattern_name, $pattern_regex);

**Example**: consider these two URL schema: [/news/2013/12/](http://example.com/news/2012/12) and [/post/162/](http://example.com/post/162). the first URL consists of two dynamic part: **Year** and **Month** and the second one consists of one, **id**. these dynamic parts are naturally different, so we need to define 3 different patterns to detect them properly.

    Router::pattern('year', '/^[1-2][0-9]{3}$/i');
    Router::pattern('month', '/^[0-9]{1,2}$/i');
    Router::pattern('id', '/^[1-9][0-9]+$/i');


### 2. defaults

a default value will be used for part of a URL when we don't want to mention every time we are defining a route or creating a link. 

    // Syntax
    Router::defaults($default_name, [$default_value[, $default_pattern]]);

**Example**: consider these URL schema: [http://www.examlpe.com:80/](http://www.examlpe.com:80/)
there are 5 different default value available. 

    Router::defaults('method', 'GET|POST');
    Router::defaults('protocol', 'http');
    Router::defaults('subdomain', 'www');
    Router::defaults('domain', 'example.com');
    Router::defaults('port', 80);

### 2. Routes

finally we need to define routes.

    // Syntax
    Router::route($route_name, $route_array, $route_value);

**Example**: consider defining routes for the same URL schema we mentioned before: [/news/2013/12/](http://example.com/news/2012/12) and [/post/162/](http://example.com/post/162).

    Router::route('archive', array('url'=>'/news/:year/:month'), array('class'=>'news', 'method'=>'archive'));
    Router::route('article', array('url'=>'/post/:id'), array('class'=>'posts', 'method'=>'view'));

**Explanation**: for the first route, we defined the URL consists of two dynamic part detectable by two patterns we defined earlier. any request like [http://www.example.com/news/2013/02](http://www.example.com/news/2013/02) will be matched. 

### Putting it all together

    //index.php
    // defining the patterns
    Router::pattern('year', '/^[0-9]{4}$/i');
    Router::pattern('month', '/^[0-9]{2}$/i');
    Router::pattern('id', '/^[1-9][0-9]+$/i');
    
    // defining the default values
    Router::defaults('method', 'GET|POST');
    Router::defaults('protocol', 'http');
    Router::defaults('subdomain', 'www');
    Router::defaults('domain', 'example.com');
    Router::defaults('port', 80);

    // defining the routes
    Router::route('archive', array('url'=>'/news/:year/:month'), array('class'=>'news', 'method'=>'archive'));
    Router::route('article', array('url'=>'/post/:id'), array('class'=>'posts', 'method'=>'view'));
    
    // match
    $result = Router::find();
    if(is_array($result)){
        $class_name = $result[0];
        $method_name = $result[1];
        $class_obj = new $class_name();
        if(method_exists($class_obj, $method_name)){
            $class_obj->$method_name();
        }
    }

    // news.php
    class news{
       public function archive(){
           $year = Router::get('year');
           $month = Router::get('month');
           // do something
       }
    }


### same routing, different patterns

    include('lib/router.class.php');
    Router::pattern('email', '/^[a-z0-9\._]+@[a-z0-9\._]+\.[a-z]{2,}$/i');
    Router::pattern('mobile', '0[1-9][0-9]{9}');
    Router::route('user_verification', array('url'=>'/verification/:email'), array('class'=>'users', 'method'=>'verification_by_email'));
    Router::route('user_verification', array('url'=>'/verification/:mobile'), array('class'=>'users', 'method'=>'verification_by_mobile'));



Advanced Usage
-----------------------------

### override default values

it is possible to override default values for a specific route. for example, what if you have different subdomain for only media files or different protocol for high security routes? we can override any default value by defining them in $route_array parameter in route method.

    // overriding subdomain
    Router::route('image', array('url'=>'/img/:id', 'subdomain'=>'media'), array('class'=>'media', 'method'=>'image'));
    Router::route('login', array('url'=>'/login', 'protocol'=>'https'), array('class'=>'users', 'method'=>'logni'));

### set pattern for default values

you can define a default value with a pattern. in this case, if you want to override it in some routes, it should match the pattern given. 

    Router::pattern('protocol_pattern', '/https/i');
    Router::defaults('prorocol', 'https', 'protocol_pattern');

so if you want to override the protocol value in a route, it should match the pattern first. the following code fails because we strictly forced the protocol to not be http

    $login_link = Router::link('login', array('url'=>'/login', 'protocol'=>'http'), true);

### Override a default value/pattern in an individual route

we can also override a default's value/patterns in defining a route

    // set default protocol to https
    Router::route('login', array('url'=>'/login', 'protocol'=>array('https')), array('class'=>'users', 'method'=>'login'))
    // set default protocol to http but allows https if overridden 
    Router::pattern('https_pattern', '/https?/i');
    Router::route('setting', array('url'=>'/settings', 'protocol'=>array('http', :https_pattern)), array('class'=>'users', 'method'=>'login'))

### generating routes URL

you can generate a URL from a defined route by calling *link()* method.

    // Syntax
    Router::link($route_name, $route_parameters[, $fqdn=false]);

**Example**: consider the routes we defined earlier, *archive*, *article*, *login* and *image*. we can generate appropriate URL links for them to use in html forms.

    $article_link = Router::link('article', array(12));
    $archive_link = Router::link('archive', array(2013, 2));
    $same_archive_link = Router::link('archive', array('month'=>2, 'year'=>2013));
    $login_link = Router::link('login', array(), true);
    $image_link = Router::link('image', array(20), true);

    // the above code produce the following results
    $article_link == "/post/12";
    $archive_link == "/archive/2013/2";
    $same_archive_link == "/archive/2013/2";
    $login_link == "https://www.example.com/login";
    $image_link == "http://media.example.com/img/20"

**Note**: by overriding the default values, it is possible to create links pointing to other websites like CDNs.

    // using jQuery from CDN
    // defining it's pattern and route
    Router::pattern('jquery', '/^jquery\-[0-9\.]+\.min\.js$/i');
    Router::route('jquery', array('url'=>'/:jquery', 'subdomain'=>'code', 'domain'=>'jquery.com'), array());

    // generating cdn link
    $jquery_link = Router::link('jquery', array('jquery-1.9.1.min.js'), true);

    // result
    $jquery_link == 'http://code.jquery.com/jquery-1.9.1.min.js'

### getting URL parameters

when requested URL matched with one of the defined routes, the dynamic parts of the URL will be accessible using Router::get() method as we mentioned before:

    // news.php
    class news{
        public function archive(){
            $year = Router::get('year');
            $month = Router::get('month');
        }
    }

we can also override the variable name these variables will be held in Router. 

    // index.php
    // defining routes
    Router::route('archive', array('url'=>'/archive/from:year/to:year'), array('class'=>'news', 'method'=>'ranged_archive'))

    // news.php
    class news{
        public function ranged_archive(){
            $from = Router::get('from');
            $to = Router::get('to');
        }
    }

### Custom route value

it's possible to define a custom value for routes. it can be an array containing any kinds of information inside.

**Example**: simple static HTML file as route value

    // index.php
    Router::route('home', array('url'=>'/'), array('public/index.html'));
    
    $result = Router::find();
    include($result[0]);


Real World Examples
-----------------------------

### Register and verification

the project consists of these routes:

* [http://www.example.com/](http://www.example.com/)
* [https://www.example.com/register](https://www.example.com/register)
* [http://www.example.com/register/verification/](http://www.example.com/register/verification/)
* [http://www.example.com/register/verification/{phone-number}](http://www.example.com/register/verification/{phone-number})
* [http://www.example.com/register/verification/{email-address}](http://www.example.com/register/verification/{email-address})


if the web application was in Development or Test environment, we want host to be *localhost*. in continue, if using current stable PHP, set the port number to 80, otherwise to 8080. these allows us to create FQDN (full qualified domain names) properly in each environment without any further code-change.

    include('lib/router.class.php');
    
    Router::pattern('id', '/^[0-9]+$/i');
    Router::pattern('name', '/^[a-z][a-z0-9_]+$/i');
    Router::pattern('nickname', '/^\p{L}[\p{L}\p{N} \.،,]+$/iu');
    Router::pattern('mobile', '/^09[0-9]{9}$/');
    Router::pattern('email', '/^[a-z0-9\._]+@[a-z0-9\._]+\.[a-z]{2,}$/i');

    Router::defaults('method', 'GET|POST|PUT|DELETE');
    Router::defaults('protocol', 'http');
    if(DEVELOPEMENT||TEST){
        Router::defaults('subdomain', '');
        if(phpversion()=='5.4.11'){
            Router::defaults('domain', 'localhost');
            Router::defaults('port', 80);
        }else{
            Router::defaults('domain', 'localhost');
            Router::defaults('port', 8080);
        }
    }else{
        Router::defaults('subdomain', 'www');
        Router::defaults('domain', 'example.com');
        Router::defaults('port', 80);
    }

    Router::route('home', array('url'=>'/'), array('app/pages/home/home.php'));

    Router::route('register', array('url'=>'/register', 'protocol'=>'https'), array('class'=>'users', 'action'=>'register'));
    Router::route('verification', array('url'=>'/register/verification'), array('class'=>'users', 'action'=>'verification'));
    Router::route('verification', array('url'=>'/register/verification/mobile:mobile'), array('class'=>'users', 'action'=>'verification_by_mobile'));
    Router::route('verification', array('url'=>'/register/verification/email:email'), array('class'=>'users', 'action'=>'verification_by_email'));

    $result = Router::find();
    if(is_array($result)){
        $class_name = $result[0];
        $method_name = $result[1];
        $class_obj = new $class_name();
        if(method_exists($class_obj, $method_name)){
        $class_obj->$method_name();
        }else{
            header('Location: /public/500.html');
        }
    }else{
        header('Location: /public/404.html');
    }


### Multiple Servers

in This project, we have users Avatars in different server [avatar.example.com](http://avatar.example.com) and other media files on another server named [media.example.com](http://media.example.com). to create proper URLs using reverse routing we need to override each route's subdomain. follow the code:

* [http://www.example.com/](http://www.example.com/)
* [http://avatar.example.com/{username}](http://www.example.com/admin)
* [http://media.example.com/{media-type}/{media-id}](http://www.example.com/video/12)

the following code illustrates the code:

    // index.php
    Router::pattern('nickname', '/[a-z][a-z0-9]{2,}/i');
    Router::pattern('id', '/[0-9]+/i');
    Router::pattern('type', '/(photo|video)$/i');

    Router::defaults('method', 'GET|POST');
    Router::defaults('protocol', 'http');
    Router::defaults('subdomain', 'www');
    Router::defaults('domain', 'example.com');
    Router::defaults('port', 80);

    Router::route('home', array('url'=>'/'), array('class'=>'static', 'method'=>'home'));
    Router::route('home', array('url'=>'/:nickname', 'subdomain'=>'avatar'), array('class'=>'media', 'method'=>'avatar'));
    Router::route('home', array('url'=>'/media-type:type/media-id:id', 'subdomain'=>'media'), array('class'=>'media', 'method'=>'show'));

    // html_macro.php
    function avatar_image($username){
        $avatar_link = Router::link('avatar', array($username), true);
        return "<img src='$avatar_link' class='avatar'>";
    }
    function media_download_link($media_type, $media_id){
        $media_link = Router::link('media', array($media_type, $media_id), true);
        // or
        // $media_link = Router::link('media', array('media_id'=>$media_id, 'media_type'=>$media_type), true);
        return "<a href='$media_link'>Download</a>";
    }

### Cross-domain routing

it's possible to use Router class to generate links to other web services, like CDNs. for example here we try to load jQuery and Twitter Bootstrap from CDN using Router route.

    // index.php

    Router::pattern('version', '/[0-9]\.[0-9]\.[0-9]/i');
    Router::pattern('jquery', '/^jquery\-[0-9\.]+\.min\.js$/i');

    Router::defaults('method', 'GET|POST');
    Router::defaults('protocol', 'http');
    Router::defaults('subdomain', 'www');
    Router::defaults('domain', 'example.com');
    Router::defaults('port', 80);

    Router::route('jquery', array('url'=>'/:jquery', 'subdomain'=>'code', 'domain'=>'jquery.com'), array());
    Router::route('bootstrap_css', array('url'=>'/twitter-bootstrap/:version/css/bootstrap-combined.min.css', 'subdomain'=>'netdna', 'domain'=>'bootstrapcdn.com'), array());
    Router::route('bootstrap_js', array('url'=>'/twitter-bootstrap/:version/js/bootstrap.min.js', 'subdomain'=>'netdna', 'domain'=>'bootstrapcdn.com'), array());

    // html_macro.php
    function jquery_js($version='jquery-1.9.1.min.js'){
        $jquery_link = Router::link('jquery', array($version), true);
        return "<script src="$jquery_link"></script>"
    }
    function bootstrap_css($version='2.3.0'){
        $bootstrap_link = Router::link('bootstrap_css', array($version), true);
        return "<link href="$bootstrap_link" rel="stylesheet">"
    }
    function bootstrap_js($version='2.3.0'){
        $bootstrap_link = Router::link('bootstrap_js', array($version), true);
        return "<script src="$bootstrap_link"></script>"
    }