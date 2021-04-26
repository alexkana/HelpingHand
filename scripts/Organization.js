const LoadMoreButton = document.querySelector('.button');
var i = 0;

LoadMoreButton.addEventListener('click', e => {
    if (i === 0) {
        LoadMoreButton.innerText = 'Show less';
        document.getElementById("more").style.display = "inline";
        document.getElementById("dots").style.display = "none";
        i = 1;
    } else {
        LoadMoreButton.innerText = 'Show more';
        document.getElementById("more").style.display = "none";
        document.getElementById("dots").style.display = "inline";
        i = 0;
    }

})

function checkLanguageText() {
    let text1, text2, text3, text4, text5, text6, text7, text8, text9, text10, text11, text12, text13, text14, text15,
        text16, text17;

    if (sessionStorage.getItem('language') === 'en') {
        text1 = ' The Village Enterprise is an organizations that works to end extreme poverty in rural Africa through\n' +
            '                    entrepreneurship and innovation by implementing simple and cost-effective program. So far, the\n' +
            '                    Village\n' +
            '                    Enterprises has started over 48.000 businesses and trained over 185.000 Africans living in extreme\n' +
            '                    poverty\n' +
            '                    to start sustainable businesses and savings groups.';

        text2 = 'Trickle Up is an organization that was established in 1979 to help people living in extreme poverty\n' +
            '                    and vulnerability to advance their economic and social well-being. So far, the Trickle Up has helped\n' +
            '                    many women gain skills and confidence to achieve greater self-sufficiency, which directly affected\n' +
            '                    around 1.5 million people. The organization is committed to help the next million rise from extreme\n' +
            '                    poverty.';

        text3 = 'The Global Citizen is an international advocacy organization working on ending extreme poverty. It\n' +
            '                    serves as a movement of engaged citizens who use their collective voice with a goal to end extreme\n' +
            '                    poverty by 2030. The organization’s headquarters is in New York, with branch offices in Canada,\n' +
            '                    Australia, South Africa, Germany and the UK.';

        text4 = 'Innovations for Poverty Action (IPA) is a research and policy NGO that discovers and promotes\n' +
            '                    effective solutions to worldwide poverty problems. It brings together researchers and\n' +
            '                    decision-makers to evaluate these solutions and apply them so to improve the lives of poor\n' +
            '                    populations.';

        text5 = ' BRAC is the largest Bangladesh based international NGO with a mission to alleviate poverty and\n' +
            '                    encourage economic participation by empowering people through social and economic programs. The\n' +
            '                    organization works and has positive impact in the poorest Asian and African countries in the world,\n' +
            '                    reaching around 138 million people.';

        text6 = 'The European Anti-Poverty Network (EAPN) was established in 1990 and since then it has become the\n' +
            '                    largest Europe based network gathering anti-poverty NGOs, grassroots organizations and European\n' +
            '                    organizations that are active in fight against poverty and social exclusion. Currently, the EAPN is\n' +
            '                    a network of 31 national networks of NGOs and 13 European organizations.';

        text7 = 'The Humanitarian Organization for Poverty Eradication (HOPE) was established in 1998 with a goal to\n' +
            '                    empower marginalized people who are deprived of their rights by providing them with opportunities\n' +
            '                    and resources. It promotes and protects the fundamental human rights of vulnerable groups such\n' +
            '                    asylum seekers, refugees and migrants, whose lives have been traumatized by disasters, poverty,\n' +
            '                    persecution or discrimination. The HOPE currently operates in New Zealand, Thailand and Pakistan.';

        text8 = ' Oxfam International is a global development organization mobilizing the power of people against\n' +
            '                    poverty. It serves as an international confederation consisted of 19 organizations that work\n' +
            '                    together with local communities in around 90 countries. When crisis occurs, Oxfam International\n' +
            '                    helps rebuild livelihoods and works to find innovative and practical solutions for people to end\n' +
            '                    their poverty.';

        text9 = 'Concern Worldwide is an international humanitarian organization working to free the world from\n' +
            '                    poverty, fear and oppression. It intervenes in the world’s poorest countries and helps the most\n' +
            '                    vulnerable people. The ultimate goal of the organization is to end extreme poverty. Concern\n' +
            '                    Worldwide has, thus, been working for over 50 years with the world’s poorest people to transform\n' +
            '                    their lives. Its team is comprised of 3.500 professionals coming from 50 countries, and who, each\n' +
            '                    year, work with 25 million underprivileged people.';

        text10 = 'The Organization for Poverty Alleviation and Development (OPAD) is an international NGO that actively ' +
            'works on poverty alleviation by promoting human rights, sustainable development and climate change. The' +
            ' vision of the organization is to “improve the standard of living of all people by recognizing them as ' +
            'resources and not as victims.';

        text11 = 'World Relief is an international Christian humanitarian organization working to overcome poverty,\n' +
            '                    injustice and violence. It brings restoration and healing to millions of world’s most vulnerable\n' +
            '                    categories through programs in economic development, peace keeping, health and child development and\n' +
            '                    refugee and immigration services.';

        text12 = 'Care International is one of the biggest aid organizations with a mission to fight poverty and injustice.\n' +
            '                 It works in over 90 countries and helps around 65 million people annually to find routes out of poverty.';

        text13 = 'Muslim Hands is an international NGO based in the UK that works in over 50 countries around the globe\n' +
            '                and is dedicated to tackling the root causes of poverty. The organization is passionate about working\n' +
            '                beyond the immediate relief, towards supporting communities in the long-term.';

        text14 = 'Green Shoots was established in 2010 with a mission “to prevent or relief of poverty through the\n' +
            '                    implementation in greater Asia or Africa of holistic and sustainable development programmes combining\n' +
            '                    economic empowerment with access to education and/or medical aid.” The organization tackles the issue\n' +
            '                    of poverty through microfinance, sustainable development and holistic approaches.';

        text15 = 'International Child Care (ICC) is a Christian health development organization that operates in Haiti\n' +
            '                    since 1967 and in the Dominican Republic since 1988 to eradicate poverty that impacts health and well\n' +
            '                    -being. The vision of ICC is “health and wholeness for children and families in empowered communities”.';

        text16 = 'World Vision is one of the largest child-focused organizations in the world employing around 40.000\n' +
            '                    staff members working in nearly 100 countries. The organization’s task is to tackle the root causes\n' +
            '                    of poverty and currently, it impacts the lives of over 200 million vulnerable children.\n' +
            '                    The organization works based on Christian values and it is an advocacy and development organization\n' +
            '                    tasked to improve the lives of children, their families and communities and create a long-lasting impact.\n' +
            '                    World Vision serves all people, regardless of their gender, ethnicity, race or religion.';

        text17 = 'World Hope International (WHI) is a Christian relief and development organization working with\n' +
            '                    vulnerable and exploited communities to alleviate poverty, suffering, and injustice. The vision of\n' +
            '                    the organization is “to provide those in need with opportunity, dignity, and hope so they can possess\n' +
            '                    the tools for change in themselves, their family, and their community”. WHI supports all people\n' +
            '                    regardless of ethnicity, gender, race, or religion.';
    } else {
        text1 = 'Η Village Enterprise είναι ένας οργανισμός που εργάζεται για τον τερματισμό της ακραίας φτώχειας στην' +
            ' αγροτική Αφρική μέσω της επιχειρηματικότητας και της καινοτομίας, εφαρμόζοντας ένα απλό και οικονομικά' +
            ' αποδοτικό πρόγραμμα. Μέχρι στιγμής, η Village Enterprises έχει ξεκινήσει πάνω από 48.000 επιχειρήσεις και' +
            ' έχει εκπαιδεύσει πάνω από 185.000 Αφρικανούς που ζουν σε ακραία φτώχεια για να ξεκινήσουν βιώσιμες επιχειρήσεις' +
            ' και ομάδες αποταμίευσης.';

        text2 = 'Η Trickle Up είναι ένας οργανισμός που ιδρύθηκε το 1979 για να βοηθήσει τους ανθρώπους που ζουν σε ' +
            'συνθήκες ακραίας φτώχειας και ευπάθειας με σκοπό να προωθήσουν την οικονομική και κοινωνική τους ευημερία. Μέχρι στιγμής,' +
            ' το Trickle Up έχει βοηθήσει πολλές γυναίκες να αποκτήσουν δεξιότητες και αυτοπεποίθηση για να επιτύχουν μεγαλύτερη' +
            ' αυτάρκεια, η οποία επηρέασε άμεσα περίπου 1,5 εκατομμύρια άτομα. Ο οργανισμός έχει δεσμευτεί να βοηθήσει τα ' +
            'επόμενα εκατομμύρια να ξεπεράσουν από την ακραία φτώχεια.';

        text3 = 'Το Global Citizen είναι ένας διεθνής οργανισμός υπεράσπισης που εργάζεται για τον τερματισμό της ακραίας' +
            ' φτώχειας. Λειτουργεί ως ένα κίνημα αφοσιωμένων πολιτών που χρησιμοποιούν τη συλλογική τους φωνή με στόχο τον' +
            ' τερματισμό της ακραίας φτώχειας έως το 2030. Η έδρα του οργανισμού βρίσκεται στη Νέα Υόρκη, με υποκαταστήματα' +
            ' στον Καναδά, την Αυστραλία, τη Νότια Αφρική, τη Γερμανία και το Ηνωμένο Βασίλειο.';

        text4 = 'Η Innovations for Poverty Action (IPA) είναι μια ΜΚΟ έρευνας και πολιτικής που ανακαλύπτει και προωθεί' +
            ' αποτελεσματικές λύσεις σε παγκόσμια προβλήματα φτώχειας. Συγκεντρώνει ερευνητές και υπεύθυνους λήψης αποφάσεων' +
            ' για να αξιολογήσουν αυτές τις λύσεις και να τις εφαρμόσουν ώστε να βελτιώσουν τη ζωή των φτωχών πληθυσμών.';

        text5 = 'Η BRAC είναι η μεγαλύτερη διεθνής ΜΚΟ με έδρα το Μπαγκλαντές με αποστολή να ανακουφίσει τη φτώχεια και' +
            ' να ενθαρρύνει την οικονομική συμμετοχή ενισχύοντας τους ανθρώπους μέσω κοινωνικών και οικονομικών προγραμμάτων.' +
            ' Ο οργανισμός λειτουργεί και έχει θετικό αντίκτυπο στις φτωχότερες χώρες της Ασίας και της Αφρικής στον κόσμο,' +
            ' φτάνοντας περίπου 138 εκατομμύρια ανθρώπους.';

        text6 = 'Το Ευρωπαϊκό Δίκτυο Καταπολέμησης της Φτώχειας (EAPN) ιδρύθηκε το 1990 και έκτοτε έχει γίνει το μεγαλύτερο' +
            ' δίκτυο με έδρα την Ευρώπη που συγκεντρώνει ΜΚΟ κατά της φτώχειας, λαϊκές οργανώσεις και ευρωπαϊκές οργανώσεις' +
            ' που δραστηριοποιούνται στην καταπολέμηση της φτώχειας και του κοινωνικού αποκλεισμού. Επί του παρόντος, η' +
            ' EAPN είναι ένα δίκτυο 31 εθνικών δικτύων ΜΚΟ και 13 ευρωπαϊκών οργανισμών.';

        text7 = 'Η ανθρωπιστική οργάνωση για την εξάλειψη της φτώχειας (HOPE) ιδρύθηκε το 1998 με στόχο την ενδυνάμωση ' +
            'των περιθωριοποιημένων ατόμων που στερούνται των δικαιωμάτων τους, παρέχοντάς τους ευκαιρίες και πόρους. ' +
            'Προωθεί και προστατεύει τα θεμελιώδη ανθρώπινα δικαιώματα ευάλωτων ομάδων, όπως αιτούντες άσυλο, πρόσφυγες' +
            ' και μετανάστες, των οποίων οι ζωές έχουν τραυματιστεί από καταστροφές, φτώχεια, διώξεις ή διακρίσεις. Το ' +
            'HOPE λειτουργεί επί του παρόντος στη Νέα Ζηλανδία, την Ταϊλάνδη και το Πακιστάν.';

        text8 = 'Η Oxfam International είναι ένας παγκόσμιος οργανισμός ανάπτυξης που κινητοποιεί τη δύναμη των ανθρώπων' +
            ' ενάντια στη φτώχεια. Χρησιμεύει ως μια διεθνής συνομοσπονδία αποτελούμενη από 19 οργανισμούς που συνεργάζονται' +
            ' με τοπικές κοινότητες σε περίπου 90 χώρες. Όταν προκύψει κρίση, η Oxfam International βοηθά στην ανοικοδόμηση' +
            ' των μέσων διαβίωσης και εργάζεται για να βρει καινοτόμες και πρακτικές λύσεις για τους ανθρώπους να τερματίσουν' +
            ' τη φτώχεια τους.';

        text9 = 'Το Concern Worldwide είναι ένας διεθνής ανθρωπιστικός οργανισμός που εργάζεται για να απελευθερώσει τον' +
            ' κόσμο από τη φτώχεια, τον φόβο και την καταπίεση. Παρεμβαίνει στις φτωχότερες χώρες του κόσμου και βοηθά τους' +
            ' πιο ευάλωτους ανθρώπους. Ο απώτερος στόχος της οργάνωσης είναι ο τερματισμός της ακραίας φτώχειας. Το Concern ' +
            'Worldwide συνεργάζεται για πάνω από 50 χρόνια με τους φτωχότερους ανθρώπους στον κόσμο για να μεταμορφώσει τη' +
            ' ζωή του. Η ομάδα της αποτελείται από 3.500 επαγγελματίες που προέρχονται από 50 χώρες και οι οποίοι, κάθε' +
            ' χρόνο, εργάζονται με 25 εκατομμύρια άτομα με μειονεκτική θέση.';

        text10 = 'Ο Οργανισμός OPAD είναι μια διεθνής ΜΚΟ που εργάζεται' +
            ' ενεργά για την καταπολέμηση  της φτώχειας προωθώντας τα ανθρώπινα δικαιώματα, τη βιώσιμη ανάπτυξη και την ' +
            'κλιματική αλλαγή. Το όραμα της οργάνωσης είναι να «βελτιώσει το βιοτικό επίπεδο όλων των ανθρώπων αναγνωρίζοντάς' +
            ' τους ως πόρους και όχι ως θύματα.';

        text11 = 'Το World Relief είναι ένας διεθνής χριστιανικός ανθρωπιστικός οργανισμός που εργάζεται για την αντιμετώπιση τ' +
            'ης φτώχειας, της αδικίας και της βίας. Φέρνει αποκατάσταση και επούλωση σε εκατομμύρια πιο ευάλωτες κατηγορίες' +
            ' του κόσμου μέσω προγραμμάτων οικονομικής ανάπτυξης, διατήρησης της ειρήνης, υγείας και παιδικής ανάπτυξης' +
            ' και προσφύγων και μεταναστευτικών υπηρεσιών.';

        text12 = 'Η Care International είναι ένας από τους μεγαλύτερους οργανισμούς βοήθειας με αποστολή την καταπολέμηση' +
            ' της φτώχειας και της αδικίας. Λειτουργεί σε περισσότερες από 90 χώρες και βοηθά περίπου 65 εκατομμύρια ' +
            'ανθρώπους ετησίως για να βρει διαδρομές από τη φτώχεια.';

        text13 = 'Η Muslim Hands είναι μια διεθνής ΜΚΟ που εδρεύει στο Ηνωμένο Βασίλειο εργαζόμενη σε περισσότερες ' +
            'από 50 χώρες σε όλο τον κόσμο και είναι αφοσιωμένη στην αντιμετώπιση των βασικών αιτιών της φτώχειας. Ο ' +
            'οργανισμός είναι παθιασμένος να εργάζεται πέρα από την άμεση καταπολέμηση της φτώχειας, προς την υποστήριξη των ' +
            'κοινοτήτων μακροπρόθεσμα.';

        text14 = 'Η Green Shoots ιδρύθηκε το 2010 με κύριο στόχο «την πρόληψη ή την καταπολέμηση της φτώχειας μέσω της εφαρμογής' +
            ' στην Ολλανδία ή της Αφρικής προγραμμάτων ολιστικής και βιώσιμης ανάπτυξης που συνδυάζουν την οικονομική ' +
            'ενδυνάμωση με την πρόσβαση στην εκπαίδευση ή / και στην ιατρική βοήθεια». Ο οργανισμός αντιμετωπίζει το ζήτημα' +
            ' της φτώχειας μέσω μικροχρηματοδοτήσεων, βιώσιμης ανάπτυξης και ολιστικών προσεγγίσεων.';

        text15 = 'Η International Child Care (ICC) είναι ένας χριστιανικός οργανισμός ανάπτυξης της υγείας που λειτουργεί' +
            ' στην Αϊτή από το 1967 και στη Δομινικανή Δημοκρατία από το 1988 με σκοπό την εξάλειψη της φτώχειας που επηρεάζει' +
            ' την υγεία και την ευημερία. Το όραμα της ICC είναι «υγεία και ολότητα για τα παιδιά και τις οικογένειες σε' +
            ' εξουσιοδοτημένες κοινότητες».';

        text16 = 'Η World Vision είναι ένας από τους μεγαλύτερους οργανισμούς που εστιάζουν σε παιδιά του κόσμου και' +
            ' απασχολεί περίπου 40.000 μέλη του προσωπικού που εργάζονται σε σχεδόν 100 χώρες. Ο στόχος του οργανισμού' +
            ' είναι να αντιμετωπίσει τις βασικές αιτίες της φτώχειας και επί του παρόντος, επηρεάζει τη ζωή περισσότερων' +
            ' από 200 εκατομμυρίων ευάλωτων παιδιών. Ο οργανισμός λειτουργεί με βάση τις χριστιανικές αξίες και είναι ' +
            'ένας οργανισμός υπεράσπισης και ανάπτυξης που είναι επιφορτισμένος με τη βελτίωση των ζωών των παιδιών, των' +
            ' οικογενειών τους, των κοινοτήτων και τη δημιουργία μακροχρόνιων επιπτώσεων. Το World Vision εξυπηρετεί ' +
            'όλους τους ανθρώπους, ανεξαρτήτως φύλου, εθνικότητας, φυλής ή θρησκείας.';

        text17 = 'Η World Hope International (WHI) είναι ένας χριστιανικός οργανισμός ανακούφισης και ανάπτυξης που ' +
            'συνεργάζεται με ευάλωτες και εκμεταλλευόμενες κοινότητες για την ανακούφιση της φτώχειας, της ταλαιπωρίας' +
            ' και της αδικίας. Το όραμα της οργάνωσης είναι «να παρέχει σε αυτούς που έχουν ανάγκη ευκαιρία, αξιοπρέπεια ' +
            'και ελπίδα, ώστε να μπορούν να διαθέτουν τα εργαλεία για αλλαγή στον εαυτό τους, στην οικογένειά τους και ' +
            'στην κοινότητά τους». Η WHI υποστηρίζει όλους τους ανθρώπους ανεξαρτήτως εθνικότητας, φύλου, φυλής ή θρησκείας.';
    }
    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("text3").innerHTML = text3;
    document.getElementById("text4").innerHTML = text4;
    document.getElementById("text5").innerHTML = text5;
    document.getElementById("text6").innerHTML = text6;
    document.getElementById("text7").innerHTML = text7;
    document.getElementById("text8").innerHTML = text8;
    document.getElementById("text9").innerHTML = text9;
    document.getElementById("text10").innerHTML = text10;
    document.getElementById("text11").innerHTML = text11;
    document.getElementById("text12").innerHTML = text12;
    document.getElementById("text13").innerHTML = text13;
    document.getElementById("text14").innerHTML = text14;
    document.getElementById("text15").innerHTML = text15;
    document.getElementById("text16").innerHTML = text16;
    document.getElementById("text17").innerHTML = text17;

}




