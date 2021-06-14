function checkLanguageText() {
    let text1, text2,i1,i2,i3,i4,i5,nav,social;
    if (sessionStorage.getItem('language') === 'en') {
        text1 = "Text :";
        text2 = "Send";
        i1 = 'Home page'
        i2 = 'About us'
        i3 = 'Organizations'
        i4 = 'Contact'
        i5 = 'Sign-Up/Log-in'
        nav = 'Navigation'
        social ='Social Media'

    } else {
        text1 = "Κείμενο :";
        text2 = "Αποστολη";
        i1 = 'Αρχική Σελίδα'
        i2 = 'Σχετικά με εμάς'
        i3 = 'Οργανισμοί'
        i4 = 'Επικοινωνία'
        i5 = 'Εγγραφή/Σύνδεση'
        nav = 'Πλοήγηση'
        social = 'Κοινωνικά Δίκτυα'

    }

    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("footer1").textContent = i1;
    document.getElementById("footer2").textContent = i2;
    document.getElementById("footer3").textContent = i3;
    document.getElementById("footer4").textContent = i4;
    document.getElementById("footer5").textContent = i5;
    document.getElementById("list_title").innerHTML = nav;
    document.getElementById("social").innerHTML = social;
}