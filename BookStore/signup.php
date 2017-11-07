<html>    
    <head>
        <title><?php echo Signup; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head> 
    <body>       
        <div id="lognav">
            <a href="signup.php">Sign up</a>
            <form>
            <input type="text" name="uid" placeholder="username/e-mail">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <nav id="navigation">
            <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Book.php">Books</a></li>                 <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            </ul>
        </nav>  
    <section class='main-container'>
         <div class='main-wrapper'>
            <h2>Signup</h2>
            <form class="signform" action="includes/signup.inc.php" method="POST">
                <input type='text' name='first' placeholder='First Name'>
                <input type='text' name='last' placeholder='Last Name'>
                <input type='text' name='email' placeholder='E-mail'>
                <input type='text' name='uid' placeholder='Username'>
                <input type='password' name='pwd' placeholder='Password'>
                <button type="submit" name="submit>">Sign Up</button>
            </form>
    
    
        </div>
    </section>
        </body>
</html>

