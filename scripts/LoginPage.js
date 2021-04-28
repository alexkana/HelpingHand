function checkLanguageText() {
    let text1, text2, text3, text4, text5, login1, password1, password2, login3;
    if (sessionStorage.getItem('language') === 'en') {
        text1 = "Register by filling in the following information! ";
        text2 = "Sign up";
        text3 = "Fill the following information to sign in!";
        text4 = "Sign in";
        text5 = "Did you forger your password?";
        login1 = "User name";
        login3 = "Email or user name";
        password1 = "Password";
        password2 = "Confirm password";
    } else {
        text1 = "Κάνε εγγραφή συμπληρώνοντας τα παρακάτω στοιχεία!";
        text2 = "Εγγραφη";
        text3 = "Συμπλήρωσε τα παρακάτω στοιχεία για να συνδεθείς στον λογαριασμό σου!";
        text4 = "Συνδεση";
        text5 = "Ξέχασες τον Κωδικό σου?";
        login1 = "Ονομα χρήστη";
        login3 = "Email ή όνομα χρήστη";
        password1 = "Κωδικός πρόσβασης";
        password2 = "Επαλήθευση Κωδικού";
    }
    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("text3").innerHTML = text3;
    document.getElementById("text4").innerHTML = text4;
    document.getElementById("text5").innerHTML = text5;
    document.getElementsByName("login1")[0].placeholder = login1;
    document.getElementsByName('login3')[0].placeholder = login3;
    document.getElementsByName('password1')[0].placeholder = password1;
    document.getElementsByName('password2')[0].placeholder = password2;
    document.getElementsByName('password3')[0].placeholder = password1;


}