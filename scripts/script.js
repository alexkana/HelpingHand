function trans_navbar() {
    let i1, i2, i3, i4, i5,i6,footer_msg,sb;
    if (sessionStorage.getItem('language') === 'en') {
        i1 = 'Home page'
        i2 = 'About us'
        i3 = 'Organizations'
        i4 = 'Contact'
        i5 = 'Sign-Up/Log-in'
        i6 = 'User info'
        sb = 'Search an organization';
        footer_msg = 'Support our cause by following us on our social media. Stay up to date with our current events and share our news.'
        document.getElementById("lang_selector").innerHTML = "<img class=\"flag_icon\" src=\"../images/flag-icons/united-states.png\" alt=\"\">&nbsp English"
    } else {
        i1 = 'Αρχική Σελίδα'
        i2 = 'Σχετικά με εμάς'
        i3 = 'Οργανισμοί'
        i4 = 'Επικοινωνία'
        i5 = 'Εγγραφή/Σύνδεση'
        i6 = 'Προφίλ'
        sb = 'Αναζήτηση οργανισμών';
        footer_msg = 'Υποστηρίξτε το έργο μας ακολουθώντας μας σε όλα τα social media. Eνημερωθείτε αμέσα για τις τρέχουσες δράσεις μας και μοιραστείτε τα νέα μας.'
        document.getElementById("lang_selector").innerHTML = "<img class=\"flag_icon\" src=\"../images/flag-icons/greece.png\" alt=\"\">&nbsp Ελληνικά"
    }

    document.getElementById("item1").innerHTML = i1;
    document.getElementById("item2").innerHTML = i2;
    document.getElementById("item3").innerHTML = i3;
    document.getElementById("item4").innerHTML = i4;
    document.getElementById("item5").innerHTML = i5;
    document.getElementById("item6").innerHTML = i6;
    document.getElementById("footer_msg").innerHTML = footer_msg;
    if(document.getElementById('search_bar_title')!==null)
        document.getElementById('search_bar_title').innerText = sb;

}