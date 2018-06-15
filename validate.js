function validate() {
    var usr = document.form.user.value;
    var pass = document.form.pass.value;

    if (usr == "" || pass == "") {



        alert("Enter your username and password");


    }


}

function validate1() {
    var usr1 = document.form.user.value;
    var pass1 = document.form.pass.value;
    var rpass = document.form.pass1.value;
    if (usr1 == "" || pass1 == "" || rpass == "") {
        alert("Enter your username and password");


    }
    if (pass1 == rpass) {

        alert("Passwords are not maching.....");
    }
}

function redirect() {


    window.location="login.html"

}