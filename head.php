<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/header.css">
    <script src="https://kit.fontawesome.com/68d206eb63.js" crossorigin="anonymous"></script>
   
    <title>header</title>
    
</head>

<body>

    <div>
        <nav>
            <a href="index.php"> 
                <img id="logo" src="images/log.png" alt="logo" style="height:65px;">
            </a>     
            <ul class="nav-links">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <li> <a href="index.php"><i class="fas fa-home">Home</i></a></li>
                <li> <a href="#"><i class="fas fa-newspaper">News</i></a></li>
                <li> <a href="#" id="logout" onclick ="getConfirmation();">
                <i class="fas fa-sign-out-alt"></i>Logout</a></li>
        
         
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
       
    </div>
    <script src="./js/header.js"></script>
    <script>
            function getConfirmation() {
                var retVal = confirm("Are You Sure to Logout ?");
                if( retVal == true ) {
                   return window.location.href ="logout.php";
                } else{
                    return false;
                }
            }
            // function dontGo(event) {
            //     event.preventDefault();
            // }

            // document.getElementById("logout").addEventListener("click",dontGo);
    </script>
</body>
</html>