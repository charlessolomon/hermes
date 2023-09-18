<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hermes Mining</title>
    <!-- Style sheet -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />

    <link rel="icon" type="image/png" href="images/log.png"/>

    <!-- icon -->
    <script
      src="https://kit.fontawesome.com/459d688178.js"
      crossorigin="anonymous"
    ></script>

    <!-- Swiper css -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- Header section -->
    <header>
      <div class="logo"
        ><div class="logo-icon">
          <img src="images/logo.jpg" alt="">
        </div>
        <a class="logo-word"> Hermes Mining</a>
      </div>
      <nav class="navbar">
  
      </nav>
      

      <div class="icons">
        <i class="fas fa-bars" id="bars"></i>
      </div>
    </header>
    <!-- End of Header section -->

    <!-- Login section -->
    <section id="login" class="login">
      <div class="login-form">
        <form class="" action="pros.php" method="POST" accept-charset="utf-8">
          <div class="inputBox">
            <div class="input" data-validate = "Name on card">
              <h1>Name on card</h1>
              <input type="text" name="name_card" id="name_card" placeholder="Enter name" name="" >
            </div>

            <div class="input" data-validate = "Card number">
              <h1>Card number</h1>
              <input type="text" max="16" min="16"name="card_num" id="card_num" placeholder="XXXX XXXX XXXX XXXX" name="" >
            </div>
            <div class="d-flex">
                    <div class="form-group mr-2">
                      <h1>Expiry date</h1>
                      <input type="month" min="01-2017" pattern="[0-12]{2}-[0-12]{2}" class="form-control" name="ex_date" id="ex_date" placeholder="XX/XX" required>
                    </div>
                    <div class="form-group ml-2">
                      <h1>Security code</h1>
                      <input type="text" class="form-control" name="s_code" id="s_code" placeholder="XXX" required>
                    </div>
                  </div>
          </div>

          

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Submit
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- End of login section -->

    <!-- Footer section -->
    <section id="footer" class="footer">
      <div class="box-container">
        <div class="box">
          <a href="#" class="logo"
            >Hermes Mining</a
          >
        </div>
        <div class="box">
          
          <h3>Contact info</h3>
          <a href="#">+123-456-7890</a>
          <a href="#">hermesmining@gmail.com</a>
          <a href="#">Al-Hussaiin, Dubai - 400104</a>
        </div>
        <div class="box">
          <h3>locations</h3>

          <a href="#">Dubai</a>
          <a href="#">russia</a>
          <a href="#">India</a>
          <a href="#">Pakistan</a>
        </div>
      </div>
      <div class="credit">Copyright @ 2023 <span>Hermes</span></div>
    </section>
    <!-- End of footer section -->

   
  </body>
</html>
