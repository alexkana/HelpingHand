function checkLanguageText() {
    let title_text, text1, text2, text3, text4, text5, text6,social;
    if (sessionStorage.getItem('language') === 'en') {
        title_text = "About us";
        text1 = "The website \"Helping Hand\" is a project undertaken by a group of 4 students of the Department of Informatics of AUTh. " +
            "It was formed as part of a team work, which was prepared for the needs of the World Wide Web Information Systems course." +
            " Our team consists of the following members: Alexandros Kanakaris, Charalambos Metallinos, Christos Kouros, Michalis Amasialidis";
        text2 = "The ultimate goal of this web application is to achieve the first goal set by the United Nations World Organization for Humanity, namely the eradication of global poverty.\n";
        text3 = "Indubitably, poverty is an unfavorable phenomenon, which despite its downward trend in recent years, " +
            "still plagues the planet to a great extent and makes the living standards of millions of people difficult. " +
            "Diverse population groups living in underdeveloped and third world countries are unable to meet their basic needs," +
            "face malnutrition and at the same time are deprived of their fundamental right to education.";
        text4 = "The above conditions prevailing in the world particularly troubled our team, " +
            "which decided to develop an online application to present the effects of poverty on the world and offer solutions to the problems that arose.\n";
        text5 = "Our website aims to inform and raise public awareness about global poverty, to promote information about its evolution in the world, " +
            "to present non-profit organizations that contribute to the improvement of the situation and to provide services that facilitate the people in need." +
            " Through our action we seek to improve the living conditions of populations plagued by poverty, " +
            "to offer solutions to key problems they face and to shape a fair world with equal opportunities for all.\n";
        text6 = "We invite you to contribute to our project by registering on our website and becoming an active member of our effort." +
            " Together we can lay the foundations to shape a better world!\n";

        social ='Social Media'

    } else {
        title_text = "Σχετικά με εμάς";
        text1 = "Ο ιστότοπος “Helping Hand“ αποτελεί ένα εγχείρημα που υλοποιήθηκε απο μια ομάδα 4 φοιτητών του τμήματος" +
            " Πληροφορικής του ΑΠΘ.Διαμορφώθηκε στα πλαίσια μιας ομαδικής εργασίας,η οποία εκπονήθηκε για τις ανάγκες του" +
            " μαθήματος των Πληροφοριακών Συστημάτων Παγκόσμιου Ιστού.Η ομάδας μας απαρτίζεται απο τα ακόλουθα μέλη:τους" +
            "Αλέξανδρο Κανακάρη,Χαράλαμπο Μεταλληνό,Χρήστο Κούρο,Μιχάλη Αμασιαλίδη            ";
        text2 = "Απώτερος σκοπός της συγκεκριμένης διαδικτυακής εφαρμογής είναι η επίτευξη του 1ου στόχου που\n" +
            "                έχει θέσει ο Παγκόσμιος Οργανισμός Ηνωμένων Εθνών για την ανθρωπότητα,δηλαδή η εξάλειψη της παγκόσμιας\n" +
            "                φτώχειας.";
        text3 = "Αναμφίβολα,η φτώχεια αποτελεί ένα δυσμενές φαινόμενο,που παρά την καθοδική του τάση τα\n" +
            "                τελευταία χρόνια,\n" +
            "                μαστίζει ακόμη το πλανήτη σε τεράστιο βαθμό και δυσχεραίνει το βιοτικό επίπεδο εκατομμυρίων ανθρώπων.\n" +
            "                Ποικίλες πληθυσμιακές ομάδες που διαβιώνουν σε υποανάπτυκτες και τριτοκοσμικές χώρες δεν δύνανται να\n" +
            "                ικανοποιήσουν τις βασικές τους ανάγκες ,αντιμετωπίζουν προβλήματα υποσιτισμού ενώ παράλληλα στερούνται\n" +
            "                το θεμελιώδες δικαίωμα τους στην εκπαίδευση.";

        text4 = "Οι παραπάνω συνθήκες που επικρατούν στο κόσμο προβλημάτισαν ιδιαίτερα την ομάδα μας ,που αποφάσισε να\n" +
            "                αναπτύξει μια διαδικτυακή εφαρμογή για να παρουσιάσει τις επιπτώσεις της φτώχειας στο κόσμο και να\n" +
            "                προσφέρει λύσεις στα προβλήματα που παρουσιάστηκαν.";

        text5 = "Ο ιστότοπος μας αποσκοπεί στην ενημέρωση και ευαισθητοποίηση του κοινού σχετικά με την παγκόσμια\n" +
            "                φτώχεια,στη προβολή πληροφοριών που αφορούν την εξέλιξη της στο κόσμο,στη παρουσίαση μη-κερδοσκοπικών\n" +
            "                οργανώσεων που συνεισφέρουν στη βελτίωση της κατάστασης και στη παροχή υπηρεσιών που διευκολύνουν τους\n" +
            "                ανθρώπους που το έχουν ανάγκη. Μέσα απο τη δράση μας επιδιώκουμε να βελτιώσουμε τις συνθήκες διαβίωσης\n" +
            "                των πληθυσμών που ταλανίζονται απο τη φτώχεια,να προσφέρουμε λύσεις σε καίρια προβλήματα που\n" +
            "                αντιμετωπίζουν και να διαμορφώσουμε ένα δίκαιο κόσμο με ίσες ευκαιρίες για όλους.";

        text6 = "Σας καλούμε να συνδράμετε στο έργο μας με το να πραγματοποίησετε εγγραφή στον ιστότοπο μας και να γίνετε\n" +
            "                ενεργά μέλη της προσπάθειας μας.Μαζί μπορούμε να τοποθετήσουμε τα θεμέλια για να διαμορφώσουμε ένα\n" +
            "                καλύτερο κόσμο!";

        social = 'Κοινωνικά Δίκτυα'
    }
    document.getElementById("title_text").innerHTML = title_text;
    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("text3").innerHTML = text3;
    document.getElementById("text4").innerHTML = text4;
    document.getElementById("text5").innerHTML = text5;
    document.getElementById("text6").innerHTML = text6;
    document.getElementById("social").innerHTML = social;
}