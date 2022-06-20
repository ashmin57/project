<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./style/footer.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php
        include "header.php";
        ?>
        
        <div class="hero">
            <div class="backgroun-image"></div>
        
            <h1>Have a complaint?</h1>
                <h2>Register Below    <i class="fas fa-hand-point-down"></i></h2>
            <a href="register.php" class="btn">Sign up</a>
        </div>
        <div id= "content">
        
            <div id="col1">
                <h2>News</h2>

            </div>
            <div id="col2">
                <?php 
                    include "faq.php";
                ?>
                <div id="quest">
                <h2>Do You Have Any Questions?</h2>
                <form action="faq.php" method="post">
                    <input type="text" name="quest" placeholder="write your question"> <br><br>
                    <button>Submit</button>
                </form>
            </div>
        </div>
    <br>
        
            <footer> 
                <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li> 
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p>&copy; <script> document.write(new Date().getFullYear());</script>
                -OnlineCrimeSystem.All rights reserved
                <br>
                <i class="fas fa-phone">+977-1-4411210</i>
                <br>
                <a href="#"><i class="fas fa-envelope-square"> info@crimereport.com</i></a>
                
            
                </p>
            </footer> 
            <script>
                const body = document.body;
                let lastScroll = 0;

                window.addEventListener("scroll", () => {
                    const currentScroll = window.pageYOffset;
                    if (currentScroll <= 0) {
                        body.classList.remove("scroll-up");
                        return;
                    }

                    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
                        body.classList.remove("scroll-up");
                        body.classList.add("scroll-down");
                    } else if (
                        currentScroll < lastScroll &&
                        body.classList.contains("scroll-down")
                    ) {
                        body.classList.remove("scroll-down");
                        body.classList.add("scroll-up");
                    }
                    lastScroll = currentScroll;
                });
            </script>
        
    </body>
</html>