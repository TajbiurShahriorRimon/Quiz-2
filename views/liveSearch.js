function liveSearchHere(){
    alert("i am here");
}

function something(text) {

    var xhttp = new XMLHttpRequest();
    //alert(text);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("some").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../views/test.php?text="+ text, true);
    xhttp.send();
    //alert('value: ' +text.value);
}
function liveSearch(){
    var v = document.getElementById('textSearch').value;
    //alert(v);
    something(v);

}

function something2() {
    //alert('sfs');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("some").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "test.php?text=", true);
    xhttp.send();
    //alert("fef");
}