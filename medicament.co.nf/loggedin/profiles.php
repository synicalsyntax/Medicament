<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Medicament</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/custom.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</head>

<nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="requests.php" class="brand-logo">
            <div class="hide-on-small-only"><img src="logo.png"></div>
            <div class="hide-on-med-and-up"><img src="logo.png" height="56"></div>
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="requests.php">Requests</a></li>
            <li><a href="requestform.php">Request Form</a></li>
            <li><a href="profiles.php">Profiles</a></li>
            <li><a href="chat.html">Chat</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="requests.php">Requests</a></li>
            <li><a href="requestform.php">Request Form</a></li>
            <li><a href="profiles.php">Profiles</a></li>
            <li><a href="chat.html">Chat</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h2 class="header center red-text text-darken-2">Profiles</h2>
        <div class="row center">
            <p class="light center col s12">A listing of all participating organizations</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s10 offset-s1">
                <ul class="tabs">
                    <li class="tab col s4"><a href="#requests">Users</a></li>
                </ul>
            </div>
            <div class="container">
                <div id="requests" class="col s12">
                    <ul class="collection">
                      <!--Profiles-->
                      <!--<li class="collection-item center">
                        <span class="title"><b>(Organization Name)</b><br><i>Located in (Location)</i></span>
                                <p>
                                Phone Number: (telephone)
                                <br>
                                Email:(email)
                                </p>
                            </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="terms1" class="modal">
    <div class="modal-content">
        <h4>Terms and Conditions</h4>
        <p>By answering this request, you agree to contact the requesting organization within the next 24 hours. If else, your account will be deactivated for 24 hours. Repeated offenses will result in permanent account deactivation.</p>
    </div>
    <div class="modal-footer">
        <button class="waves-effect waves-light red darken-2 btn modal-action modal-close">Agree</button>
    </div>
</div>

<footer class="page-footer red darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 m12 s12">
                    <h5 class="white-text">Medicament Inc.</h5>
                    <p class="grey-text text-lighten-4">We are a team of six high-school students with a vision for a better future in healthcare. Any support or feedback would be appreciated.</p>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col l10 s8 m10">
                        Medicament Inc. | 2016
                    </div>
                    <div class="col l2 s4 col m2">
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
