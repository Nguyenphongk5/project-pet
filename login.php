<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./styles/login.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="title-container">
        <h1>CIT EDU SHOP</h1>
        <p>Học lập trình cùng CIT Education</p>
        <button><a href="./register.php">Register</a></button>
      </div>

      <div class="form-container">
        <form>
          <h1>Sign In</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account </span>
          <input type="text" placeholder="Name" />
          <input type="password" placeholder="Password" />
          <a href="#">Forgot your password?</a>
          <p>
            DON'T HAVE AN ACCOUNT ? <a href="./register.php">REGISTER NOW</a>
          </p>
          <button>Login</button>
        </form>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/login.js"></script>
  </body>
</html>
