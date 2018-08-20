<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Gifsa Inc.</title>
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Gifsa Inc.</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

      <div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" tabindex="2" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>


  <div class="container">
    <header>
      <h1>Follow us on social media</h1>
    </header>
    <ul class="accordion">
      <li class="tab">
        <div class="social youtube">
          <a href="#" target="_blank_">Youtube</a>
        </div>
        <div class="content">
          <h1>youtube</h1>
          <p>Subscribe on our youtube channel for more information</p>
        </div>
      </li>
      <li class="tab">
        <div class="social facebook">
          <a href="#" target="_blank_">facebook</a>
        </div>
        <div class="content">
          <h1>facebook</h1>
          <p>we appreciate all your likes and comments</p>
        </div>
      </li>
      <li class="tab">
        <div class="social twitter">
          <a href="#" target="_blank_">twitter</a>
        </div>
        <div class="content">
          <h1>twitter</h1>
          <p>Follow us on twitter for daily offers and discounts</p>
        </div>
      </li>
      <li class="tab">
        <div class="social instagram">
          <a href="#" target="_blank_">instagram</a>
        </div>
        <div class="content">
          <h1>instagram</h1>
          <p>Follow us on instagram for a personal touch and insider look to our products</p>
        </div>
      <li class="tab">
        <div class="social gmail">
          <a href="#" target="_blank_">gmail</a>
        </div>
        <div class="content">
          <h1>Gmail</h1>
          <p>Send us your feedback and comments through mail</p>
        </div>
      </li>
      <li class="tab">
        <div class="social whatsapp">
          <a href="#" target="_blank_">whatsapp</a>
        </div>
        <div class="content">
          <h1>whatsapp</h1>
          <p>connect with us on whatsapp</p>
        </div>
      </li>
    </ul>
  </div>


        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; 2018 Gifsa Inc. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
