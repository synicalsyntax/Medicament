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
            <h2 class="header center red-text text-darken-2">Request Form</h2>
            <div class="row center">
                <p class="light center col s12">Create a request!</p>
            </div>
        </div>
</div>
<form action="requestform.php" method="post">
<div class="container">
    <div class="row">
        <div class="input-field col s12 m6 offset-m3 l6 offset-l3">
            <i class="material-icons prefix">label_outline</i>
            <input id="title" name="title" type="text" class="validate">
            <label for="title" class="">Item Title</label>
        </div>
        <div class="input-field col s12 m12 l12">
            <i class="material-icons prefix">info_outline</i>
            <input id="description" name="description" type="text" length="300" class="validate">
            <label for="description">Item Description</label>
        </div>
        <div class="input-field col s12 m6 offset-m3 l6 offset-l3">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" name="name" type="text" class="validate">
            <label for="name">Confirm Organization Name</label>
        </div>
        <div class="col s12">
            <p class="center">
                <input class="center" type="checkbox" id="agree" name="agree" />
                <label for="agree">I agree to the <a class="modal-trigger" href="#terms">Terms and Conditions</a></label>
            </p>
        </div>
    </div>
</div>
<div class="section center">
    <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Request
		<i class="mdi-content-send right"></i>
		</button>
</div>
</form>
<div id="terms" class="modal">
    <div class="modal-content">
        <h4>Terms and Conditions</h4>
        <p>Medicament is a marketplace for hospital-to-hospital medical supplies commerce, including transactions and exchanges between organizations. However, the actual contract for sales is between the recipient and the donor.</p>
        <p>While we may provide shipping, listing, and other services, such guidance is solely informational and you may decide to follow it or not. Also, while Medicament may help facilitate the resolution of disputes through various programs, Medicament has no control over and does not guarantee the existence, quality, safety or legality of items offered; the truth or accuracy of requests' content or requests; the ability of donors to deliver items; the ability of recipients to pay in transactions; or that a donor or recipient will actually complete a transaction or return an item.</p>
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
