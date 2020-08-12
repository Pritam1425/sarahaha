<?php
// Initialize the session
require_once "config.php";
session_start();

$email = "";
$id = "";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty(trim($_POST["message"]))){
      $email_err = "Please enter a message.";
  } else{
    $email = $_SESSION["email"];
    $sql = "INSERT INTO messages (email,message) VALUES (?,?)";
    if($stmt = mysqli_prepare($link, $sql)){
      $message = htmlentities($_POST["message"]);
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $message);
    //echo "Something went wrong. Please try again later.";
    // Set parameters
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        header("location: Thankyou.php");
    } else{
        //echo "Something went wrong. Please try again later.";
        echo("Error description: " . mysqli_error($link));
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:url"           content="http://www.sarahaha.tk/welcome.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Welcome" />
  <meta property="og:description"   content="Anonymous Messaging" />
  <meta property="og:image"         content="http://www.sarahaha.tk/welcome.php/img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-image: url("./img/bg1.jpg");}
        input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
        input[type=submit] {

  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top app-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/welcome.php" class="navbar-brand">
                    <span><img src="/img/logo.png" srcset="" height="30" width="54" class="fblogevent" data-fbevent="actions.actionClickedLogo" /></span>
                </a>
                <div class="col-xs-3">
                </div>

                <div class="pull-right">

                </div>
            </div>

            <div class="navbar-collapse collapse" id="navbar-collapse-main">

                <ul class="nav navbar-nav navbar-right">

    <li><a href="/message.php">My Messages</a></li>
                    <li>
                        <a href="./about.php">About Us</a>
                    </li>
                    <li>
                        <a href="./logout.php">Log Out</a>
                    </li>
                    <li class="visible-xs">
                        <a href="#" data-toggle="modal" data-target="#changeLanguageModal" class="fblogevent" data-fbevent="actions.changeLanguageButton">
                            <span class="icon icon-globe languageIcon"></span>
                            Language
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="padding-top:295px">
      <div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something..." style="height:400px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
    </div>
    <div style="padding-top:200px;text-align:center">
        <h3 style="color:white">Share Your Own Profile</h3>
    </div>
    <div style="padding-top:10px;text-align:center">
        <ul style="list-style-type:none;padding-left:0px">
<li> <a href="whatsapp://send?text=http://www.sarahaha.tk/" target="_blank"><img src="/img/wp.jfif" alt="Whatsapp" style="width:50px;height:50px;"></a></li>
</ul>
    </div>
</body>
</html>
