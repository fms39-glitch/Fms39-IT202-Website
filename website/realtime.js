function getRealTime() {
    var domwatchtypes = document.getElementById("watchtypecount");
    var domwatches = document.getElementById("watchcount");
    var dombuypricetotal = document.getElementById("buypricetotal");
    var domsellpricetotal = document.getElementById("sellpricetotal");
    var request = new XMLHttpRequest();
    request.open("GET", "realtime.php", true);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var xmldoc = request.responseXML;
            var xmlwatchtypes = xmldoc.getElementsByTagName("watchtypes")[0];
            var watchtypes = xmlwatchtypes.childNodes[0].nodeValue;
            var xmlwatches = xmldoc.getElementsByTagName("watches")[0];
            var watches = xmlwatches.childNodes[0].nodeValue;
            var xmlbuypricetotal = xmldoc.getElementsByTagName("buypricetotal")[0];
            var buypricetotal = xmlbuypricetotal.childNodes[0].nodeValue;
            var xmlsellpricetotal = xmldoc.getElementsByTagName("sellpricetotal")[0];
            var sellpricetotal = xmlsellpricetotal.childNodes[0].nodeValue;
            domwatchtypes.innerHTML = watchtypes;
            domwatches.innerHTML = watches;
            dombuypricetotal.innerHTML = "$" + parseFloat(buypricetotal).toFixed(2);
            domsellpricetotal.innerHTML = "$" + parseFloat(sellpricetotal).toFixed(2);
        }
    };
    request.send();
}