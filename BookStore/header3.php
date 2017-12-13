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
             
            
            <b><?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin']))
                  echo 'admin' ?></b>
            </div>
                <form>           
                    <input type='button' value ="Edit Books" onclick="window.location.href='admin_book.php'"/>
                    <input type='button' value ="Sign Out" onclick="window.location.href='admin_signout.php'"/>
                    </form> 
            <div id="cart" onclick="window.location.href='cart.php?empty='"/>
        </div>
        </div>
    </header>          
</body>
</html>