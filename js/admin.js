var form2 = document.getElementById("form2");
var repo = document.getElementById("report_add");

var xmlhttp = new XMLHttpRequest();

form2.addEventListener('submit',
    function edd(e) {
        e.preventDefault();

        let forData = new FormData(form2);


        xmlhttp.open('POST', 'http://localhost/Leafberri/php/leafberri.php', true);


        xmlhttp.onload = function(oEvent) {
            if (xmlhttp.status == 200) {

                repo.innerHTML = xmlhttp.responseText;

            } else {
                console.log("Error " + xmlhttp.status + " occurred when trying to upload your file.<br \/>");
            }
        };

        xmlhttp.send(forData);

    }


);