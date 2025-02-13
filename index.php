<?php


   session_start();
 unset($_SESSION['login']);
	include('connect.php');
		
		$bgimage= "background.jpeg";

?>



<!DOCTYPE html>
<html>

<head>
  <title>Hotel Management System</title>
  <meta name="description" content="captcha,captcha-generator">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.google.com/recaptcha/api.js"></script>	
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <style>
    html,
    body {
      min-height: 100%;
    }


    body,
    div,
    form,
    input,
    select,
    p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #000;
    }

    body {
		<!-- background: url("images/background.jpg") no-repeat center; -->
      
      background-size: cover;
	  
    }

    h1,
    h2 {
      text-transform: uppercase;
      font-weight: 400;
    }

    h2 {
      margin: 0 0 0 8px;
    }
		h1 {
      color: white;
    }

    .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5);
    }

    .left-part,
    form {
      padding: 25px;
    }

    .left-part {
      text-align: center;
    }

    .fa-graduation-cap {
      font-size: 72px;
    }

    form {
      background: #fff;
      border-radius:10px;
    }
	.alert {
      color: #fd0002;
    }

    .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .info {
      display: flex;
      flex-direction: column;
    }

    input,
    select {
      padding: 5px;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #000;
    }

    input::placeholder {
      color: dark grey;
    }

    option:focus {
      border: none;
    }

    option {
      background: black;
      border: none;
    }

    .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
    }

    .checkbox a {
      color: #26a9e0;
    }

    .checkbox a:hover {
      color: #85d6de;
    }

    .btn-item,
    button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px;
      border: none;
      background: rgb(109, 109, 228);
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
    }

    .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
    }

    button {
      width: 100%;
    }

    button:hover,
    .btn-item:hover {
      background: #85d6de;
    }

    @media (min-width: 568px) {

      html,
      body {
        height: 100%;
      }

      .main-block {
        flex-direction: row;
        height: calc(100% - 50px);
        padding: 20px 10vw;
        <!-- 20px top/bottom padding, 10% of viewport width on sides -->

        width: 80%;
      }

      @media only screen and (max-width: 600px) {
        .form-group {
          display: flex;
          flex-direction: column;
          width: 50%;
        }

        @media (max-width: 768px) {
          .main-block {
            flex-direction: column;
            <!-- Stack elements vertically on smaller screens -->
          }

          .left-part,
          form {
            width: 100%;
            <!-- Ensure they take full width on smaller screens -->
          }
        }
      }

      .left-part,
      form {
        flex: 1;
        height: auto;
      }

      .LINKARISE{
        color:white;
      }
.fas{
  color:white;
}

    }
  </style>
</head>

<body>
  <div class="main-block">
    <div class="left-part">
	<?phpecho "logo";?>
     <!-- <i class="fas fa-graduation-cap"></i>-->
      <div class="LINKARISE">
      <h1>Hotel Management</h1>
      </div>
    </div>
    
  
    <form action="login.php" method="POST">
      <div class="title">
		
        <i class="fas fa-user-circle" style="font-size:23px;"></i>
        <h2>Login Form</h2>
      </div>
      <div class="info">
	  <?php
					if(isset($_SESSION['msg1']))
					{
					?>
					<div class="alert alert-danger">
						<strong><?php echo $_SESSION['msg1'];?></strong>
					</div>
					<?php
					}
					unset($_SESSION['msg1']);
					?>
        <input class="fname" type="text" name="username" placeholder="Username" required>

        <input type="text" name="password" placeholder="Password" required>

			

      <button type="submit" id="submit" name="submit" class="btn btn-success">Login</button>
  
      <div class="footer py-4 d-flex flex-lg-column" id="kt-footer">
    <!--begin container-->
    <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
      <!--begin::copyright-->
      <br>
      <center>
      <div class="text-dark order-2 order-md-1">
        <span class="text-gray-400 fw-semibold me-1">&copy</span>

        <a class="ArthTechnology">myOnsite</a>
      </div>
  </center>

    </div>

  </div>
    </form>


 
     
  </div>

 
</body>

</html>