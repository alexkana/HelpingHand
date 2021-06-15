function checkLanguageText() {
    let text1, text2,social;
    if (sessionStorage.getItem('language') === 'en') {
        text1 = "Text :";
        text2 = "Send";
        social ='Social Media'
    } else {
        text1 = "Κείμενο :";
        text2 = "Αποστολη";
        social = 'Κοινωνικά Δίκτυα'

    }

    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("social").innerHTML = social;
}