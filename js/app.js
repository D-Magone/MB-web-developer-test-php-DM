window.onload = function () {

    let btn = document.getElementById("subscribeBtn");
    let error = document.getElementById("errorMsg");

    btn.addEventListener("click", function() {

        let email = document.getElementById("inputField").value;
        error.innerHTML = "";
        
        function validateEmail() {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
                error.innerHTML = "";
                let btn = document.getElementById("subscribeBtn");
                window.location.replace("./formaction.php");
                return true;
                
            } else {
                error.innerHTML = "Please provide a valid e-mail address";
                return false;
            }
        }
        
        if (!this.form.checkbox.checked) {
            error.innerHTML = "You must accept the terms and conditions";
        } else if (email <= 0) {
            error.innerHTML = "Email address is required";
        } else if (email.slice(email.length - 3) == ".co") {
            error.innerHTML = "We are not accepting subscriptions from Colombia emails";
        } else {
            validateEmail();
        }
    })
}