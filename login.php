<html>

<head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: sans-serif;
    }

    a {
      color: #666;
      font-size: 14px;
      display: block;
    }

    .login-title {
      text-align: center;
    }

    #login-page {
      display: flex;
    }

    .notice {
      font-size: 13px;
      text-align: center;
      color: #666;
    }

    .login {
      width: 30%;
      height: 100vh;
      background: #FFF;
      padding: 70px;
    }

    .login a {
      margin-top: 25px;
      text-align: center;
    }

    .form-login {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      align-content: center;
    }

    .form-login label {
      text-align: left;
      font-size: 13px;
      margin-top: 10px;
      margin-left: 20px;
      display: block;
      color: #666;
    }

    .input-email,
    .input-password {
      width: 100%;
      background: #ededed;
      border-radius: 25px;
      margin: 4px 0 10px 0;
      padding: 10px;
      display: flex;
    }

    .icon {
      padding: 4px;
      color: #666;
      min-width: 30px;
      text-align: center;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 4px 0;
      outline: none;
    }

    button[type="submit"] {
      width: 100%;
      border: 0;
      border-radius: 25px;
      padding: 14px;
      background: #008552;
      color: #FFF;
      display: inline-block;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      margin-top: 10px;
      transition: ease all 0.3s;
    }

    button[type="submit"]:hover {
      opacity: 0.9;
    }

    .background {
      width: 70%;
      padding: 40px;
      height: 100vh;
      background: linear-gradient(60deg, rgba(158, 189, 19, 0.5), rgba(0, 133, 82, 0.7)),
        url('https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg') center no-repeat;
      background-size: cover;
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      justify-content: flex-end;
      align-content: center;
      flex-direction: row;
    }

    .background h1 {
      max-width: 420px;
      color: #FFF;
      text-align: right;
      padding: 0;
      margin: 0;
    }

    .background p {
      max-width: 650px;
      color: #1a1a1a;
      font-size: 15px;
      text-align: right;
      padding: 0;
      margin: 15px 0 0 0;
    }

    .created {
      margin-top: 40px;
      text-align: center;
    }

    .created p {
      font-size: 13px;
      font-weight: bold;
      color: #008552;
    }

    .created a {
      color: #666;
      font-weight: normal;
      text-decoration: none;
      margin-top: 0;
    }

    .checkbox label {
      display: inline;
      margin: 0;
    }
  </style>
</head>
<title></title>

<body>
  <?php
  session_start();

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the username and password are correct (This is a simple example, replace it with your authentication logic)
    if ($email === "admin" && $password === "password") {
      // Authentication successful, redirect to dashboard or another page
      $_SESSION["email"] = $email;
      header("Location: homeproject.php"); // Redirect to homeproject.php
      exit;
    } else {
      // Authentication failed, redirect back to login page with an error message
      header("Location: login.php"); // Redirect to login.php with an error flag
      exit;
    }
  }
  ?>



  <div id="login-page">
    <div class="login">
      <h2 class="login-title">Login</h2>
      <p class="notice">Please login to access the website</p>
      <form class="form-login" method="post">
        <label for=" email">E-mail</label>
        <div class="input-email">
          <i class="fas fa-envelope icon"></i>
          <input type="email" name="email" placeholder="Enter your e-mail" required>
        </div>
        <label for="password">Password</label>
        <div class="input-password">
          <i class="fas fa-lock icon"></i>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="checkbox">
          <label for="remember">
            <input type="checkbox" name="remember">
            Remember me
          </label>
        </div>
        <button type="submit"><i class="fas fa-door-open"></i> Sign in</button>
      </form>
      <a href="#">Forgot your password?</a>
      <div class="created">
      </div>
    </div>
    <div class="background">
      <h1>Login page</h1>
    </div>
  </div>
</body>

</html>