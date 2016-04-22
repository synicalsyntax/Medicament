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

<body>
  <nav class="red darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class="brand-logo">
                <div class="hide-on-small-only"><img src="logo.png"></div>
                <div class="hide-on-med-and-up"><img src="logo.png" height="56"></div>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h2 class="header center red-text text-darken-2">Register</h2>
            <div class="row center">
                <p class="light center col s12">Already have an account? <a href="login.php" class="red-text text-darken-2">Login</a></p>
            </div>
        </div>
    </div>
    <form action="register.php" method="post">
        <div class="container">
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="hospital" name="hospital" type="text" class="validate">
                    <label for="hospital" class="">Organization Name</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-action-explore prefix"></i>
                    <input id="location" name="location" type="text" class="validate">
                    <label for="location" class="">Location (City, State)</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-social-person prefix"></i>
                    <input id="name" type="text" name="name" class="validate">
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">phone</i>
                    <input id="telephone" name="telephone" type="text" class="validate">
                    <label for="telephone">Telephone (ex: 8001234567)</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-communication-vpn-key prefix"></i>
                    <input id="username" name="username" type="text" class="validate">
                    <label for="username" class="">Username</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-hardware-security prefix"></i>
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="mdi-action-verified-user prefix"></i>
                    <input id="confirm" name="confirm" type="password" class="validate">
                    <label for="confirm">Confirm Password</label>
                </div>
                <div class="col s12">
                    <p class="center">
                        <input class="center" type="checkbox" id="agree" name="agree" />
                        <label for="agree">I agree to the <a class="modal-trigger" href="#terms">Terms and Conditions</a></label>
                    </p>
                </div>
                <div class="container">
                    <div class="row center">
                    </div>
                </div>
            </div>
        </div>
        <div class="section center">
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Register
		<i class="mdi-content-send right"></i>
		</button>
        </div>
    </form>

    <div id="terms" class="modal">
        <div class="modal-content">
            <h4>Terms and Conditions</h4>
            <p>By registering, you agree that the provided information is accurate. All information provided will solely be used for the purpose of contacting your organization. Failure to enter valid information may result in account deactivation. You and your organization will <b>NOT</b> hold Medicament accountable for any damage under any circumstances.</p>
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
