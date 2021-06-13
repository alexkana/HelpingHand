CREATE DATABASE  IF NOT EXISTS `database_structure` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 */;
USE `database_structure`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: database_structure
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emails_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizationdata`
--

DROP TABLE IF EXISTS `organizationdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizationdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(35) NOT NULL,
  `imagePath` varchar(70) NOT NULL,
  `description_GR` text NOT NULL,
  `description_EN` text NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `OrganizationData_id_uindex` (`id`),
  UNIQUE KEY `organizationData_imagePath_uindex` (`imagePath`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizationdata`
--

LOCK TABLES `organizationdata` WRITE;
/*!40000 ALTER TABLE `organizationdata` DISABLE KEYS */;
INSERT INTO `organizationdata` VALUES (1,'Village Enterprise','../images/OrganizationImages/Village_enterprise.png','Η Village Enterprise είναι ένας οργανισμός που εργάζεται για τον τερματισμό της ακραίας φτώχειας στην αγροτική Αφρική μέσω της επιχειρηματικότητας και της καινοτομίας, εφαρμόζοντας ένα απλό και οικονομικά αποδοτικό πρόγραμμα. Μέχρι στιγμής, η Village Enterprises έχει ξεκινήσει πάνω από 48.000 επιχειρήσεις και έχει εκπαιδεύσει πάνω από 185.000 Αφρικανούς που ζουν σε ακραία φτώχεια για να ξεκινήσουν βιώσιμες επιχειρήσεις και ομάδες αποταμίευσης.','The Village Enterprise is an organizations that works to end extreme poverty in rural Africa through entrepreneurship and innovation by implementing simple and cost-effective program. So far, the Village Enterprises has started over 48.000 businesses and trained over 185.000 Africans living in extreme poverty to start sustainable businesses and savings groups.','https://villageenterprise.org/'),(2,'Trickle Up','../images/OrganizationImages/Trickle_Up.png','Η Trickle Up είναι ένας οργανισμός που ιδρύθηκε το 1979 για να βοηθήσει τους ανθρώπους που ζουν σε συνθήκες ακραίας φτώχειας και ευπάθειας με σκοπό να προωθήσουν την οικονομική και κοινωνική τους ευημερία. Μέχρι στιγμής, το Trickle Up έχει βοηθήσει πολλές γυναίκες να αποκτήσουν δεξιότητες και αυτοπεποίθηση για να επιτύχουν μεγαλύτερη αυτάρκεια, η οποία επηρέασε άμεσα περίπου 1,5 εκατομμύρια άτομα. Ο οργανισμός έχει δεσμευτεί να βοηθήσει τα επόμενα εκατομμύρια να ξεπεράσουν από την ακραία φτώχεια.','Trickle Up is an organization that was established in 1979 to help people living in extreme poverty and vulnerability to advance their economic and social well-being. So far, the Trickle Up has helped many women gain skills and confidence to achieve greater self-sufficiency, which directly affected around 1.5 million people. The organization is committed to help the next million rise from extreme poverty.','https://trickleup.org/'),(3,'Global Citizen','../images/OrganizationImages/Global_Citizen.png','Το Global Citizen είναι ένας διεθνής οργανισμός υπεράσπισης που εργάζεται για τον τερματισμό της ακραίας φτώχειας. Λειτουργεί ως ένα κίνημα αφοσιωμένων πολιτών που χρησιμοποιούν τη συλλογική τους φωνή με στόχο τον τερματισμό της ακραίας φτώχειας έως το 2030. Η έδρα του οργανισμού βρίσκεται στη Νέα Υόρκη, με υποκαταστήματα στον Καναδά, την Αυστραλία, τη Νότια Αφρική, τη Γερμανία και το Ηνωμένο Βασίλειο.','The Global Citizen is an international advocacy organization working on ending extreme poverty. It serves as a movement of engaged citizens who use their collective voice with a goal to end extreme poverty by 2030. The organization’s headquarters is in New York, with branch offices in Canada, Australia, South Africa, Germany and the UK.','https://www.globalcitizen.org/en/'),(4,'IPA','../images/OrganizationImages/IPA.jpg','Η Innovations for Poverty Action (IPA) είναι μια ΜΚΟ έρευνας και πολιτικής που ανακαλύπτει και προωθεί αποτελεσματικές λύσεις σε παγκόσμια προβλήματα φτώχειας. Συγκεντρώνει ερευνητές και υπεύθυνους λήψης αποφάσεων για να αξιολογήσουν αυτές τις λύσεις και να τις εφαρμόσουν ώστε να βελτιώσουν τη ζωή των φτωχών πληθυσμών.','Η Innovations for Poverty Action (IPA) είναι μια ΜΚΟ έρευνας και πολιτικής που ανακαλύπτει και προωθεί αποτελεσματικές λύσεις σε παγκόσμια προβλήματα φτώχειας. Συγκεντρώνει ερευνητές και υπεύθυνους λήψης αποφάσεων για να αξιολογήσουν αυτές τις λύσεις και να τις εφαρμόσουν ώστε να βελτιώσουν τη ζωή των φτωχών πληθυσμών.','https://www.poverty-action.org/'),(5,'brac','../images/OrganizationImages/brac.png','Η BRAC είναι η μεγαλύτερη διεθνής ΜΚΟ με έδρα το Μπαγκλαντές με αποστολή να ανακουφίσει τη φτώχεια και να ενθαρρύνει την οικονομική συμμετοχή ενισχύοντας τους ανθρώπους μέσω κοινωνικών και οικονομικών προγραμμάτων. Ο οργανισμός λειτουργεί και έχει θετικό αντίκτυπο στις φτωχότερες χώρες της Ασίας και της Αφρικής στον κόσμο, φτάνοντας περίπου 138 εκατομμύρια ανθρώπους.','BRAC is the largest Bangladesh based international NGO with a mission to alleviate poverty and encourage economic participation by empowering people through social and economic programs. The organization works and has positive impact in the poorest Asian and African countries in the world, reaching around 138 million people.','http://www.brac.net/'),(6,'EAPN','../images/OrganizationImages/EAPN.jpg','Το Ευρωπαϊκό Δίκτυο Καταπολέμησης της Φτώχειας (EAPN) ιδρύθηκε το 1990 και έκτοτε έχει γίνει το μεγαλύτερο δίκτυο με έδρα την Ευρώπη που συγκεντρώνει ΜΚΟ κατά της φτώχειας, λαϊκές οργανώσεις και ευρωπαϊκές οργανώσεις που δραστηριοποιούνται στην καταπολέμηση της φτώχειας και του κοινωνικού αποκλεισμού. Επί του παρόντος, η EAPN είναι ένα δίκτυο 31 εθνικών δικτύων ΜΚΟ και 13 ευρωπαϊκών οργανισμών.','The European Anti-Poverty Network (EAPN) was established in 1990 and since then it has become the largest Europe based network gathering anti-poverty NGOs, grassroots organizations and European organizations that are active in fight against poverty and social exclusion. Currently, the EAPN is a network of 31 national networks of NGOs and 13 European organizations.','https://www.eapn.eu/'),(7,'HOPE','../images/OrganizationImages/HOPE.jpeg','Η ανθρωπιστική οργάνωση για την εξάλειψη της φτώχειας (HOPE) ιδρύθηκε το 1998 με στόχο την ενδυνάμωση των περιθωριοποιημένων ατόμων που στερούνται των δικαιωμάτων τους, παρέχοντάς τους ευκαιρίες και πόρους. Προωθεί και προστατεύει τα θεμελιώδη ανθρώπινα δικαιώματα ευάλωτων ομάδων, όπως αιτούντες άσυλο, πρόσφυγες και μετανάστες, των οποίων οι ζωές έχουν τραυματιστεί από καταστροφές, φτώχεια, διώξεις ή διακρίσεις. Το HOPE λειτουργεί επί του παρόντος στη Νέα Ζηλανδία, την Ταϊλάνδη και το Πακιστάν.','The Humanitarian Organization for Poverty Eradication (HOPE) was established in 1998 with a goal to empower marginalized people who are deprived of their rights by providing them with opportunities and resources. It promotes and protects the fundamental human rights of vulnerable groups such asylum seekers, refugees and migrants, whose lives have been traumatized by disasters, poverty, persecution or discrimination. The HOPE currently operates in New Zealand, Thailand and Pakistan.','https://hope-charity.org/'),(8,'Oxfam International','../images/OrganizationImages/Oxfam_International.png','Η Oxfam International είναι ένας παγκόσμιος οργανισμός ανάπτυξης που κινητοποιεί τη δύναμη των ανθρώπων ενάντια στη φτώχεια. Χρησιμεύει ως μια διεθνής συνομοσπονδία αποτελούμενη από 19 οργανισμούς που συνεργάζονται με τοπικές κοινότητες σε περίπου 90 χώρες. Όταν προκύψει κρίση, η Oxfam International βοηθά στην ανοικοδόμηση των μέσων διαβίωσης και εργάζεται για να βρει καινοτόμες και πρακτικές λύσεις για τους ανθρώπους να τερματίσουν τη φτώχεια τους.','Oxfam International is a global development organization mobilizing the power of people against poverty. It serves as an international confederation consisted of 19 organizations that work together with local communities in around 90 countries. When crisis occurs, Oxfam International helps rebuild livelihoods and works to find innovative and practical solutions for people to end their poverty.','https://www.oxfam.org/en'),(9,'Concern Worldwide','../images/OrganizationImages/Concern_Worldwide.png','Το Concern Worldwide είναι ένας διεθνής ανθρωπιστικός οργανισμός που εργάζεται για να απελευθερώσει τον κόσμο από τη φτώχεια, τον φόβο και την καταπίεση. Παρεμβαίνει στις φτωχότερες χώρες του κόσμου και βοηθά τους πιο ευάλωτους ανθρώπους. Ο απώτερος στόχος της οργάνωσης είναι ο τερματισμός της ακραίας φτώχειας. Το Concern Worldwide συνεργάζεται για πάνω από 50 χρόνια με τους φτωχότερους ανθρώπους στον κόσμο για να μεταμορφώσει τη ζωή του. Η ομάδα της αποτελείται από 3.500 επαγγελματίες που προέρχονται από 50 χώρες και οι οποίοι, κάθε χρόνο, εργάζονται με 25 εκατομμύρια άτομα με μειονεκτική θέση.','Concern Worldwide is an international humanitarian organization working to free the world from poverty, fear and oppression. It intervenes in the world’s poorest countries and helps the most vulnerable people. The ultimate goal of the organization is to end extreme poverty. Concern Worldwide has, thus, been working for over 50 years with the world’s poorest people to transform their lives. Its team is comprised of 3.500 professionals coming from 50 countries, and who, each year, work with 25 million underprivileged people.','https://www.concern.net/'),(10,'Opad','../images/OrganizationImages/opad.png','Ο Οργανισμός OPAD είναι μια διεθνής ΜΚΟ που εργάζεται ενεργά για την καταπολέμηση της φτώχειας προωθώντας τα ανθρώπινα δικαιώματα, τη βιώσιμη ανάπτυξη και την κλιματική αλλαγή. Το όραμα της οργάνωσης είναι να «βελτιώσει το βιοτικό επίπεδο όλων των ανθρώπων αναγνωρίζοντάς τους ως πόρους και όχι ως θύματα.','The Organization for Poverty Alleviation and Development (OPAD) is an international NGO that actively works on poverty alleviation by promoting human rights, sustainable development and climate change. The vision of the organization is to “improve the standard of living of all people by recognizing them as resources and not as victims.','https://www.opadint.org/'),(11,'World relief','../images/OrganizationImages/world_relief.png','Το World Relief είναι ένας διεθνής χριστιανικός ανθρωπιστικός οργανισμός που εργάζεται για την αντιμετώπιση της φτώχειας, της αδικίας και της βίας. Φέρνει αποκατάσταση και επούλωση σε εκατομμύρια πιο ευάλωτες κατηγορίες του κόσμου μέσω προγραμμάτων οικονομικής ανάπτυξης, διατήρησης της ειρήνης, υγείας και παιδικής ανάπτυξης και προσφύγων και μεταναστευτικών υπηρεσιών.','World Relief is an international Christian humanitarian organization working to overcome poverty, injustice and violence. It brings restoration and healing to millions of world’s most vulnerable categories through programs in economic development, peace keeping, health and child development and refugee and immigration services.','https://worldrelief.org/'),(12,'Care International','../images/OrganizationImages/Care.png','Η Care International είναι ένας από τους μεγαλύτερους οργανισμούς βοήθειας με αποστολή την καταπολέμηση της φτώχειας και της αδικίας. Λειτουργεί σε περισσότερες από 90 χώρες και βοηθά περίπου 65 εκατομμύρια ανθρώπους ετησίως για να βρει διαδρομές από τη φτώχεια.','Care International is one of the biggest aid organizations with a mission to fight poverty and injustice. It works in over 90 countries and helps around 65 million people annually to find routes out of poverty.','https://www.care-international.org/'),(13,'Muslim Hands','../images/OrganizationImages/Muslim_Hands.png','Η Muslim Hands είναι μια διεθνής ΜΚΟ που εδρεύει στο Ηνωμένο Βασίλειο εργαζόμενη σε περισσότερες από 50 χώρες σε όλο τον κόσμο και είναι αφοσιωμένη στην αντιμετώπιση των βασικών αιτιών της φτώχειας. Ο οργανισμός είναι παθιασμένος να εργάζεται πέρα από την άμεση καταπολέμηση της φτώχειας, προς την υποστήριξη των κοινοτήτων μακροπρόθεσμα.','Muslim Hands is an international NGO based in the UK that works in over 50 countries around the globe and is dedicated to tackling the root causes of poverty. The organization is passionate about working beyond the immediate relief, towards supporting communities in the long-term.','https://muslimhands.org.uk/home'),(14,'Green Shoots','../images/OrganizationImages/Green_Shoots.png','Η Green Shoots ιδρύθηκε το 2010 με κύριο στόχο «την πρόληψη ή την καταπολέμηση της φτώχειας μέσω της εφαρμογής στην Ολλανδία ή της Αφρικής προγραμμάτων ολιστικής και βιώσιμης ανάπτυξης που συνδυάζουν την οικονομική ενδυνάμωση με την πρόσβαση στην εκπαίδευση ή / και στην ιατρική βοήθεια». Ο οργανισμός αντιμετωπίζει το ζήτημα της φτώχειας μέσω μικροχρηματοδοτήσεων, βιώσιμης ανάπτυξης και ολιστικών προσεγγίσεων.','Green Shoots was established in 2010 with a mission “to prevent or relief of poverty through the implementation in greater Asia or Africa of holistic and sustainable development programmes combining economic empowerment with access to education and/or medical aid.” The organization tackles the issue of poverty through microfinance, sustainable development and holistic approaches.','https://greenshootsfoundation.org/'),(15,'International Child Care','../images/OrganizationImages/Grace.png','Η International Child Care (ICC) είναι ένας χριστιανικός οργανισμός ανάπτυξης της υγείας που λειτουργεί στην Αϊτή από το 1967 και στη Δομινικανή Δημοκρατία από το 1988 με σκοπό την εξάλειψη της φτώχειας που επηρεάζει την υγεία και την ευημερία. Το όραμα της ICC είναι «υγεία και ολότητα για τα παιδιά και τις οικογένειες σε εξουσιοδοτημένες κοινότητες».','International Child Care (ICC) is a Christian health development organization that operates in Haiti since 1967 and in the Dominican Republic since 1988 to eradicate poverty that impacts health and well -being. The vision of ICC is “health and wholeness for children and families in empowered communities”.','https://www.internationalchildcare.org/'),(16,'World Vision','../images/OrganizationImages/World_Vision.png','Η World Vision είναι ένας από τους μεγαλύτερους οργανισμούς που εστιάζουν σε παιδιά του κόσμου και απασχολεί περίπου 40.000 μέλη του προσωπικού που εργάζονται σε σχεδόν 100 χώρες. Ο στόχος του οργανισμού είναι να αντιμετωπίσει τις βασικές αιτίες της φτώχειας και επί του παρόντος, επηρεάζει τη ζωή περισσότερων από 200 εκατομμυρίων ευάλωτων παιδιών. Ο οργανισμός λειτουργεί με βάση τις χριστιανικές αξίες και είναι ένας οργανισμός υπεράσπισης και ανάπτυξης που είναι επιφορτισμένος με τη βελτίωση των ζωών των παιδιών, των οικογενειών τους, των κοινοτήτων και τη δημιουργία μακροχρόνιων επιπτώσεων. Το World Vision εξυπηρετεί όλους τους ανθρώπους, ανεξαρτήτως φύλου, εθνικότητας, φυλής ή θρησκείας.','World Vision is one of the largest child-focused organizations in the world employing around 40.000 staff members working in nearly 100 countries. The organization’s task is to tackle the root causes of poverty and currently, it impacts the lives of over 200 million vulnerable children. The organization works based on Christian values and it is an advocacy and development organization tasked to improve the lives of children, their families and communities and create a long-lasting impact. World Vision serves all people, regardless of their gender, ethnicity, race or religion.','https://www.worldvision.org/'),(17,'World Hope International','../images/OrganizationImages/Word_Hope.png','Η World Hope International (WHI) είναι ένας χριστιανικός οργανισμός ανακούφισης και ανάπτυξης που συνεργάζεται με ευάλωτες και εκμεταλλευόμενες κοινότητες για την ανακούφιση της φτώχειας, της ταλαιπωρίας και της αδικίας. Το όραμα της οργάνωσης είναι «να παρέχει σε αυτούς που έχουν ανάγκη ευκαιρία, αξιοπρέπεια και ελπίδα, ώστε να μπορούν να διαθέτουν τα εργαλεία για αλλαγή στον εαυτό τους, στην οικογένειά τους και στην κοινότητά τους». Η WHI υποστηρίζει όλους τους ανθρώπους ανεξαρτήτως εθνικότητας, φύλου, φυλής ή θρησκείας.','World Hope International (WHI) is a Christian relief and development organization working with vulnerable and exploited communities to alleviate poverty, suffering, and injustice. The vision of the organization is “to provide those in need with opportunity, dignity, and hope so they can possess the tools for change in themselves, their family, and their community”. WHI supports all people regardless of ethnicity, gender, race, or religion.','https://www.worldhope.org/');
/*!40000 ALTER TABLE `organizationdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_uindex` (`email`),
  UNIQUE KEY `users_name_uindex` (`name`),
  UNIQUE KEY `users_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin1234','admin@helpinghand.com','Hi, I am helping hand\'s administrator!');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

CREATE USER IF NOT EXISTS 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin1234';
GRANT ALL PRIVILEGES ON database_structure.* TO 'admin'@'localhost';
CREATE USER IF NOT EXISTS 'app'@'localhost' IDENTIFIED WITH mysql_native_password BY '1234';
GRANT SELECT,INSERT,UPDATE,DELETE ON database_structure.* TO 'app'@'localhost';


-- Dump completed on 2021-06-13 19:58:47
