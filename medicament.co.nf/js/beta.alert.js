function timeMsg() {
    var t = setTimeout("alertMsg()", 1000);
}

function alertMsg() {
    alert("Welcome to Medicament! Our website is currently in beta mode; it's still in the process of testing, debugging, and experimenting. That's why some of our features have not been fully implemented. Click OK to continue to the page.");
}
//Activate by calling <body onLoad="timeMsg()">
