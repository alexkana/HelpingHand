function checkLanguageText() {
    let title_text, title_sub_text, title1, p11, p12, title2, p21, p22, title3, p31, footer_title, note1, note2, note3, note4, note5, note6

    if(sessionStorage.getItem('language') === 'en'){
        title_text = "Our goal is to eradicate global poverty."
        title_sub_text = "Your contribution to our work is crucial"
        title1 = "The universal phenomenon of poverty and its causes"
        p11 = "Poverty is a universal phenomenon affected by global stratification, the international economy and social inequalities, " +
            "which are found in all countries, even the economically powerful."
        p12 = "One of the main causes of poverty is social inequality, which means an unequal distribution of wealth, income and assets between individuals and states. Other causes are prejudice, discrimination and racism towards certain social groups. Causes of poverty include war, natural disasters and unemployment. " +
            "The phenomena of the informal economy, tax evasion and mismanagement are not primary causes, " +
            "but they cause the deterioration of poverty at the level of society as a whole."
        title2 = "Poverty plagues the planet"
        p21 = "Extreme poverty rates have fallen by more than half since 1990. However, one in five people in developing areas continue to live on less than $ 1.25 a day, " +
            "and there are millions of people earning just over that amount, with many at risk of falling back into poverty."
        p22 = "Poverty is more than a lack of income and resources to ensure sustainable living conditions. Poverty takes the form of hunger, malnutrition, limited access to education and other basic services, social discrimination and exclusion," +
            " and a lack of participation in decision-making. Economic growth must be inclusive, provide sustainable jobs and promote equality."
        title3 = "More than 11% of the world's population lives below the poverty line"
        p31 = "Nearly 800 million people (about 11% of the world's population) live on less than $ 1.9 a day. The number was even higher back in 1990 with 35% (1.9 billion) of the population living under those conditions. " +
            "According to the World Bank, in 2013, 4 billion people, more than half the world's population, lived on $ 1.9-10 a day." +
            "Sub-Saharan Africa is the poorest region, with 390 million people living on less than $ 1.90 a day in 2013. In the same year there were 25 million extremely poor in China and Indonesia combined, while in 2011 in India lived more than 260 million extremely poor." +
            " According to the World Bank, an additional 100 million people will cross the poverty line if climate change is not curtailed."
        footer_title = "Statistics & numbers"
        note1 = "836 million people are still living in extreme poverty"
        note2 = "One in five people in developing areas live on less than $ 1.25 a day"
        note3 = "The vast majority of people living on less than $ 1.25 a day belong to two regions: South Asia and Sub-Saharan Africa"
        note4 = "High poverty rates often occur in small and vulnerable countries affected by conflict"
        note5 = "One in seven children under the age of five in the world are short in proportion to their age"
        note6 = "Every day in 2014, 42,000 children were forced to flee their homes in search of conflict protection"

    }else{
        title_text = "Στόχος μας η εξάλειψη της παγκόσμιας φτώχειας."
        title_sub_text = "Η συμβολή σας στο έργο μας είναι καθοριστική"
        title1 = "Το οικουμενικό φαινόμενο της φτώχειας και τα αίτια της"
        p11 = "Η Φτώχεια είναι ένα οικουμενικό φαινόμενο που επηρεάζεται από την παγκόσμια διαστρωμάτωση, " +
            "την διεθνή οικονομία και τις κοινωνικές ανισότητες, καθώς τη συναντάμε σε όλα τα κράτη, ακόμα και στα οικονομικά ισχυρά."
        p12 = "Μια από τις βασικότερες αιτίες τις φτώχειας είναι η κοινωνική ανισότητα, που σημαίνει άνιση κατανομή των πλουτοπαραγωγικών πηγών, του εισοδήματος και των περιουσιακών στοιχείων μεταξύ των ατόμων και των κρατών. Άλλες αιτίες είναι η προκατάληψη, " +
            "οι διακρίσεις και ο ρατσισμός απέναντι σε ορισμένες κοινωνικές ομάδες. Ακόμα, αιτίες φτώχειας αποτελούν ο πόλεμος, οι φυσικές καταστροφές και η ανεργία. Τα φαίνομενα της παραοικονομίας, " +
            "της φοροδιαφυγής και της κακοδιαχείρισης, δεν αποτελούν πρωτογενείς αιτίες, αλλά προκαλούν επιδείνωση της φτώχειας στο επίπεδο του κοινωνικού συνόλου."
        title2 = "Η φτώχεια μαστίζει το πλανήτη"
        p21 = "Τo ποσοστό της ακραίας φτώχειας έχει μειωθεί πάνω από το μισό από το 1990. Ωστόσο, ένας στους πέντε ανθρώπους στις αναπτυσσόμενες περιοχές συνεχίζει να ζει με" +
            " λιγότερο από 1,25 δολάρια την ημέρα ενώ υπάρχουν εκατομμύρια άνθρωποι που κερδίζουν μόλις λίγο παραπάνω από αυτό το ποσό," +
            " με αρκετούς να κινδυνεύουν να ξανακυλήσουν στη φτώχεια."
        p22 = "Η φτώχεια είναι κάτι περισσότερο από την έλλειψη εισοδήματος και πόρων για την εξασφάλιση βιώσιμων συνθηκών διαβίωσης. Η φτώχεια έχει μορφές όπως η πείνα," +
            " ο υποσιτισμός, η περιορισμένη πρόσβαση στην εκπαίδευση και σε άλλες βασικές υπηρεσίες, η κοινωνική διάκριση και ο αποκλεισμός, καθώς και η απουσία συμμετοχής στη λήψη αποφάσεων." +
            " Η οικονομική ανάπτυξη πρέπει να συντελείται χωρίς αποκλεισμούς, να παρέχει βιώσιμες θέσεις εργασίας και να προάγει την ισότητα."
        title3 = "Πάνω απο το 11% του παγκόσμιου πληθυσμού ζούν κάτω απο το όριο της φτώχειας"
        p31 = "Σχεδόν 800 εκατ. άνθρωποι (περίπου 11% του παγκόσμιου πληθυσμού) ζουν με λιγότερα από 1,9 δολ. την ημέρα, αν και το 1990 στην κατάσταση αυτή βρισκόταν 35% του παγκόσμιου πληθυσμού (1,9 δισ. άτομα)." +
            " Σύμφωνα με την Παγκόσμια Τράπεζα, το 2013, 4 δισ. άτομα, περισσότερα από τον μισό παγκόσμιο πληθυσμό ζούσαν με 1,9- 10 δολάρια την ημέρα. Η υποσαχάρια Αφρική είναι η περιοχή με τον περισσότερο φτωχό πληθυσμό, καθώς το 2013, 390 εκατ. άτομα ζούσαν με λιγότερα από 1,90 δολάρια την ημέρα." +
            " Το ίδιο έτος υπήρχαν 25 εκατ. εξαιρετικά φτωχοί σε Κίνα και Ινδονησία μαζί, ενώ το 2011 στην Ινδία ζούσαν περισσότερα από 260 εκατ. εξαιρετικά φτωχοί." +
            " Σύμφωνα με την Παγκόσμια Τράπεζα, επιπλέον 100 εκατ. άτομα θα περάσουν το κατώφλι της φτώχειας αν δεν περιοριστεί η κλιματική αλλαγή."
        footer_title = "Στατιστικά & αριθμοί"
        note1 = "836 εκατομμύρια άνθρωποι ζουν ακόμα σε συνθήκες ακραίας φτώχειας"
        note2 = "Ένας στους πέντε ανθρώπους στις αναπτυσσόμενες περιοχές ζει με λιγότερο από 1,25 δολάρια την ημέρα"
        note3 = "Η συντριπτική πλειονότητα των ανθρώπων που ζουν με λιγότερο από 1,25 δολάρια την ημέρα ανήκουν σε δύο περιοχές: στη νότια Ασία και στην Υποσαχάρια Αφρική"
        note4 = "Υψηλά ποσοστά της φτώχειας συχνά εμφανίζονται σε μικρές και ευάλωτες χώρες που πλήττονται από διαμάχες"
        note5 = "Ένα στα επτά παιδιά, ηλικίας κάτω των πέντε, στον κόσμο, έχουν χαμηλό ανάστημα αναλογικά με την ηλικία τους"
        note6 = "Το 2014 καθημερινά, 42,000 παιδιά αναγκάζονταν να εγκαταλείψουν τα σπίτια τους προς αναζήτηση προστασίας λόγω συγκρούσεων"
    }
    document.getElementById('title_text').innerHTML = title_text
    document.getElementById('title_sub_text').innerHTML = title_sub_text
    document.getElementById('title1').innerHTML = title1
    document.getElementById('p11').innerHTML = p11
    document.getElementById('p12').innerHTML = p12
    document.getElementById('title2').innerHTML = title2
    document.getElementById('p21').innerHTML = p21
    document.getElementById('p22').innerHTML = p22
    document.getElementById('title3').innerHTML = title3
    document.getElementById('p31').innerHTML = p31
    document.getElementById('footer_title').innerHTML = footer_title
    document.getElementById('note1').innerHTML = note1
    document.getElementById('note2').innerHTML = note2
    document.getElementById('note3').innerHTML = note3
    document.getElementById('note4').innerHTML = note4
    document.getElementById('note5').innerHTML = note5
    document.getElementById('note6').innerHTML = note6
}