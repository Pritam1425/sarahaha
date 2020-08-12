<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-image: url(./img/bg1.jpg);}
        .container4{
          height: 75%;
          width: 75%;
          margin: auto;
          text-align: center;
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
    <div style="padding-top:300px" class=container4>
      <h1 style="font-size:100px;color:white;">Thank You</h1>
    </div>
</body>
</html>

</html>
