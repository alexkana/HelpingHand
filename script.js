function set_head(img, lang) {
    document.getElementById("lang_selector").innerHTML = "<img class=\"flag_icon\" src=\"images/" + img + "\" alt=\"...\">&nbsp" + lang
}

function trans_navbar(language) {
    let i1 = 'Αρχική Σελίδα'
    let i2 = 'Σχετικά με εμάς'
    let i3 = 'Οργανώσεις'
    let i4 = 'Επικοινωνία'
    let i5 = 'Εγγραφή/Σύνδεση'
    if (language === 'en') {
        i1 = 'Home page'
        i2 = 'About us'
        i3 = 'Organizations'
        i4 = 'Contact'
        i5 = 'Sign-Up/Log-in'
    }
    document.getElementById("item1").innerHTML = i1;
    document.getElementById("item2").innerHTML = i2;
    document.getElementById("item3").innerHTML = i3;
    document.getElementById("item4").innerHTML = i4;
    document.getElementById("item5").innerHTML = i5;
}