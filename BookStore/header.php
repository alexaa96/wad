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
            <div id="avatar">
             
            
            <b><?php if(isset($_SESSION['username']) && !empty($_SESSION['username']))
                  echo $_SESSION['username']; ?></b>
            </div>
                <form>
                    <input type="button" value="Admin" onclick="window.location.href='admin.php'" id ="buttonlogin"/>
                    <input type="button" value="Login" onclick="window.location.href='login.php'" id ="buttonlogin"/>
                    <input type='button' value ="Sign up" onclick="window.location.href='signup1.php'"/>
                    <input type='button' value ="Sign Out" onclick="window.location.href='logout.php'"/>
                    </form> 
            

        </div>
    </header>          
</body>
</html>