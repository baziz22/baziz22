let check_username = document.getElementById("check-message")
document.getElementById("username").addEventListener("keyup", checkUsername);
    //Function for checking if username already exists in the database.
    function checkUsername(event) {
        console.log("I've been clicked by you!!!!");
        event.preventDefault();
        let getName = document.getElementById("username").value;
        console.log(getName);
        let params = 'username='+getName;
        let xhr = new XMLHttpRequest();
        console.log(xhr);
        xhr.open('GET', 'login/check_username_run', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            console.log(this.responseText);
            check_result.innerHTML = this.responseText;
        };
        xhr.send(params);
        // xhr.send("name=Bader&message=Welcome!");
    }