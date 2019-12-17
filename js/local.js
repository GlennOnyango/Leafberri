var form1 = document.getElementById("form1");
var respo = document.getElementById("response");
var xmlhttp = new XMLHttpRequest();

form1.addEventListener('submit',
    function tedd(e) {

        e.preventDefault();
        var formData = new FormData(form1);


        if (formData.get("Email1") !== "" && formData.get("Password1") !== "") {
            xmlhttp.open('POST', 'http://localhost/Leafberri/php/leafberri.php', true);


            xmlhttp.onload = function(oEvent) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.response == "No such data") {
                        respo.innerHTML = xmlhttp.responseText;
                    } else {

                        window.location.assign('http://localhost/Leafberri/php/admin.php/?user_email=' + xmlhttp.responseText);
                    }


                } else {
                    console.log("Error " + xmlhttp.status + " occurred when trying to upload your file.<br \/>");
                }
            };

            xmlhttp.send(formData);

        } else {

            respo.innerHTML = "There is an empty field";
        }


    }
);