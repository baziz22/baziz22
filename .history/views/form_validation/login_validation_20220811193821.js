let check_result = document.getElementById("check-result")
document.getElementById("field-contents").addEventListener("keyup", checkUsername);
    //Function for checking if username already exists in the database.
    function checkUsername(event) {
        console.log("I've been clicked by you!!!!");
        event.preventDefault();
        let getName = document.getElementById("field-contents").value;
        console.log(getName);
        let params = 'username='+getName;
        let xhr = new XMLHttpRequest();
        console.log(xhr);
        xhr.open('POST', 'select.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            console.log(this.responseText);
            check_result.innerHTML = this.responseText;
        };
        xhr.send(params);
        // xhr.send("name=Bader&message=Welcome!");
    }
    //Function for checking if email already exists in the database.
    /* function checkEmail(email) {
        
        var xhttp;
        if (email != "") {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "actionpage.php?uname=" + '' + "&uemail=" + email , true);
            xhttp.send();
        }
    }