<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .container4{
          height: 75%;
          width: 75%;
          margin: auto;
          text-align: center;
        }
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

        .container4.h1{}
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

                    <span class="icon icon-globe hidden-xs fblogevent" data-fbevent="actions.changeLanguageButton" style="color : #fff;padding : 15px;display: inline-block;font-size : 18px" data-toggle="modal" data-target="#changeLanguageModal"></span>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
            </div>

            <div class="navbar-collapse collapse" id="navbar-collapse-main">

                <ul class="nav navbar-nav navbar-right">

    <li><a href="/message.php">My Messages</a></li>
                    <li>
                        <a href="./about.php" style="color:red">About Us</a>
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
    <div class="about-section">
  <h1>About Us Page</h1>
  <p>Send anonymous messages by a single click...</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Be anonymous Be safe</p>
        <p>jane@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Art is everything</p>
        <p>mike@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Design is the source of beauty</p>
        <p>john@example.com</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>

</html>
