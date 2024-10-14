<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css"/>
  </head>
  <body>
    <nav class="navbar" style="color: black">
      <div class="navbar-logo">
        <img src="assets/img/logo-1.png" alt="" height="50rem" />
      </div>
    </nav>

    <center>
      <h1 style="color: #010100; margin-top: 10rem; font-size: 2rem">
        Sign in or create an account
      </h1>
    </center>

    <div class="login-box">
      <form id="loginForm">
        <p style="opacity: 0.5; color: #010100; margin-bottom: 2rem">
          * indicates required field
        </p>
        <div class="user-box">
          <input
            type="text"
            name="username"
            id="username"
            required=""
            style="border: 1px solid #010101; height: 3rem"
          />
          <label for="username">* Username or email addres</label>

        </div>
        <div class="user-box">
          <input
            type="password"
            name="password"
            required=""
            id="password"
            style="border: 1px solid #010101; height: 3rem"
          />  
          <label for="password">* Password</label>
        </div>
        <div class="checkbox" style="display: flex">
          <input type="checkbox" />
          <p style="color: #010100; margin-left: 1rem">Keep me signed in.</p>
        </div>
        <div class="login-btn" style="margin-top: 7rem">
          <button type="submit">SIGN IN</button>
        </div>
      </form>

      <div class="signup-link">
        <a href="/AccountPage/register/index.html">Dont have an account?</a>
      </div>
      <div class="signup-link-second" style="margin-top: 1rem">
        <a href="#">Forgot Your Password?</a>
      </div>
    </div>
    <h3 style="text-align: center; color: green; margin-top: 45rem">
      JOIN STARBUCKS® REWARDS
    </h3>
    <p style="color: #010100; text-align: center; margin-left: 10rem; margin-right: 10rem; margin-top: 2rem; margin-bottom: 10rem;">
      Join Starbucks® Rewards to earn free food and<br>drinks, get free refills,
      pay and order with your<br> phone, and more.
    </p>
    <script src="assets/js/script.js"></script>
  </body>
</html>
