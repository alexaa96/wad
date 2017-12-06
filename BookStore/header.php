<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
            <style type="text/css">

            body{ font: 14px sans-serif; text-align: center; }

        </style>
    </head>
    

<body>
    <header>
       
        <div id="lognav">
            <p><a href="logout.php" class="btn btn-danger">Sign Out</a></p>
                <form>
                    <input type="text" name="uid" placeholder="username/e-mail">
                    <input type="password" name="pwd" placeholder="password">
                    <input type="button" value="Login" onclick="window.location.href='login.php'" />
                    <input type='button' value ="Sign up" onclick="window.location.href='signup1.php'"/>
                    <input type='button' value ="Sign Out" onclick="window.location.href='logout.php'"/>
                    </form> 
            
                   
                    
                    

        </div>
    </header>          
</body>
</html>