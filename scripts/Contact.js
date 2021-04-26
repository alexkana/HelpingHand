function checkLanguageText() {
    let text1, text2, text3, text4, text5, text6;
    if (sessionStorage.getItem('language') === 'en') {
        text1 = "Text :";
        text2 = "Send";

    } else {
        text1 = "Κείμενο :";
        text2 = "Αποστολή";

    }
    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;


    // document.getElementById("text3").innerHTML = text3;
    // document.getElementById("text4").innerHTML = text4;
    // document.getElementById("text5").innerHTML = text5;
    // document.getElementById("text6").innerHTML = text6;

}