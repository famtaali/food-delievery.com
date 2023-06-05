<!DOCTYPE html>



<?php 

session_start();if (empty($_SESSION['id']) ){
    header("location:simplephp/index.php");
}


?>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"content="width=device-width,initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Best Online Food delievery services in Pakistan| My OnlineMeals.com</title>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
     
     

    </head>
<body>
    <nav id="navbar">
        <div id="logo ">
            <img src="logo.jpg" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="simplephp/home.php">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <section id="Home">
        <div id="bg ">
            <img src="bg.jpg" alt=""  style="width: 100%;"   >
            <h1 class="h1"  style="color: black;position: absolute; bottom: 390px; left: 430px; "    >Welcome To MyOnlineMeal</h1>
        </div>
        <P class="center" style=" color: white;position: absolute; bottom: 330px; left: 265px">MyOnlineMeal is a service that sends customers fresh or frozen,
             prepared meals delivered to their homes and offices. 
            </P> 
         <p class="center" style=" color: white;position: absolute; bottom: 310px; left: 155px; font-family:Brush Script;"  >These services cook and prepare meals for customers. Meals 
            may come in small tupperware  containers and are often labeled
             with nutritional information.
            </P>
            <button class="btn">Order Now</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.jpg" alt="" style="margin-left: 40px ;">
                <h2 class="h-secondary center" >Food Catering</h2>
                <p class="center" style="margin-left: 40px ;">These services cook and prepare 
                    meals for customers.</p>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="" style="margin-left: 70px ;">
                <h2 class="h-secondary center" style="margin-left: 10px ;">Bulk Ordering</h2>
                <p class="center" style="margin-left: 70px ;">These services cook and prepare
                     meals for customers.</p>
            </div>
            <div class="box">
                <img src="img/3.jpg" alt="" style="margin-left: 80px; height: 180px;">
                <h2 class="h-secondary center" style="margin-left: 70px ;" >Food Ordering</h2>
                <p class="center" style="margin-left: 70px ;" >These services cook and prepare 
                    meals for customers.</p>
            </div>
            
        </div>
        <div id="services">
        <div class="box">
            <img src="img/goat.png" alt="" style="margin-left: 80px ;  height:180px;">
            <h2 class="h-secondary center"  style="margin-left: 70px ;">Delicious Food </h2>
            <p class="center" style="margin-left: 70px ;">These services cook and prepare 
                meals for customers.</p>
        </div>
        <div class="box">
            <img src="img/lamb-livers.jpeg" alt="" style="margin-left: 70px ;  height: 180px;">
            <h2 class="h-secondary center"  style="margin-left: 70px ;">Punjabi Food </h2>
            <p class="center" style="margin-left: 70px ;">These services cook and prepare 
                meals for customers.</p>
        </div>
        <div class="box">
            <img src="img/original.jpeg" alt="" style="margin-left: 80px ;  height: 180px;">
            <h2 class="h-secondary center"  style="margin-left: 70px ;">Desi Food </h2>
            <p class="center" style="margin-left: 70px ;">These services cook and prepare 
                meals for customers.</p>
        </div>
    
    </section>
    <div class="image-container">
        <img id="myImage" src="path/to/image.jpg" alt="Image">
    </div>

    <script src="path/to/script.js"></script>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/logo1.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo2.jpg" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo3.png" alt="Our Client">
            </div>
             <div class="client-item">
                <img src="img/logo4.jpg" alt="Our Client">
            </div>
        </div>

    </section>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action onsubmit="sendEmail(); reset();return false;" >
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="number" name="name" id="phone" placeholder="Enter your phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button onclick="mysendEmail()"  type="submit">Send</button>
            </form>
        </div>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
        //         Email.send({
        //         Host : "smtp.gmail.com",
        //          Username : "fatima123@gmail.com",
        //          Password : "123456",
        //         To : 'faiqaa578@gmail.com',
        //        From : document.getElementById("email").value,
        //        Subject : "This is the subject",
        //            Body : "Name :"+ document.getElementById("name").value
        //            + "<br >Email:"+document.getElementById("email").value
        //            + "<br >Phone Number:"+document.getElementById("phone").value

        //            + "<br >Message:"+document.getElementById("message").value
        // }).then(
            alert("Submite Successfully");
//);

            }
        </script>
        
          


    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.MyOnlineMeal.com. All rights reserved!
        </div>
    </footer>
    
</body>
</html>