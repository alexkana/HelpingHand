function trans_navbar() {
    let i1, i2, i3, i4, i5;
    if (sessionStorage.getItem('language') === 'en') {
        i1 = 'Home page'
        i2 = 'About us'
        i3 = 'Organizations'
        i4 = 'Contact'
        i5 = 'Sign-Up/Log-in'
        document.getElementById("lang_selector").innerHTML = "<img class=\"flag_icon\" src=\"../images/flag-icons/united-states.png\" alt=\"\">&nbsp English"
    } else {
        i1 = 'Αρχική Σελίδα'
        i2 = 'Σχετικά με εμάς'
        i3 = 'Οργανώσεις'
        i4 = 'Επικοινωνία'
        i5 = 'Εγγραφή/Σύνδεση'
        document.getElementById("lang_selector").innerHTML = "<img class=\"flag_icon\" src=\"../images/flag-icons/greece.png\" alt=\"\">&nbsp Ελληνικά"
    }
    document.getElementById("item1").innerHTML = i1;
    document.getElementById("item2").innerHTML = i2;
    document.getElementById("item3").innerHTML = i3;
    document.getElementById("item4").innerHTML = i4;
    document.getElementById("item5").innerHTML = i5;
}