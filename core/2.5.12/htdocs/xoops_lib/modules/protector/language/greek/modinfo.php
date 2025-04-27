<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // Το όνομα αυτού του module
    define($constpref . '_NAME', 'Protector');

    // Σύντομη περιγραφή αυτού του module
    define($constpref . '_DESC', 'Αυτό το module προστατεύει τον ιστότοπο XOOPS σας από διάφορες επιθέσεις όπως DoS, SQL Injection και μόλυνση μεταβλητών.');

    // Μενού
    define($constpref . '_ADMININDEX', 'Κέντρο Protector');
    define($constpref . '_ADVISORY', 'Συμβουλευτική Ασφαλείας');
    define($constpref . '_PREFIXMANAGER', 'Διαχειριστής Προθέματος');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Δικαιώματα');

    // Ρυθμίσεις
    define($constpref . '_GLOBAL_DISBL', 'Προσωρινά απενεργοποιημένο');
    define($constpref . '_GLOBAL_DISBLDSC', 'Όλες οι προστασίες είναι προσωρινά απενεργοποιημένες.<br>Μην ξεχάσετε να το ενεργοποιήσετε ξανά μετά την επίλυση του προβλήματος');

    define($constpref . '_DEFAULT_LANG', 'Προεπιλεγμένη γλώσσα');
    define($constpref . '_DEFAULT_LANGDSC', 'Καθορίστε το σύνολο γλώσσας για την εμφάνιση μηνυμάτων πριν την επεξεργασία του common.php');

    define($constpref . '_RELIABLE_IPS', 'Αξιόπιστες IP');
    define($constpref . '_RELIABLE_IPSDSC', 'Ορίστε τις IP που μπορείτε να εμπιστευτείτε, διαχωρισμένες με |. Το ^ ταιριάζει με την αρχή της συμβολοσειράς, το $ ταιριάζει με το τέλος της συμβολοσειράς.');

    define($constpref . '_LOG_LEVEL', 'Επίπεδο καταγραφής');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Χρόνος αναστολής αποκλεισμένης IP (δευτερόλεπτα)');

    define($constpref . '_LOGLEVEL0', 'κανένα');
    define($constpref . '_LOGLEVEL15', 'Ήσυχο');
    define($constpref . '_LOGLEVEL63', 'ήσυχο');
    define($constpref . '_LOGLEVEL255', 'πλήρες');

    define($constpref . '_HIJACK_TOPBIT', 'Προστατευμένα bit IP για τη συνεδρία');
    define($constpref . '_HIJACK_TOPBITDSC', 'Προστασία από κλοπή συνεδρίας:<br>Προεπιλογή 24/56 (netmask για IPV4/IPV6). (Όλα τα bit προστατεύονται)<br>Όταν η IP σας δεν είναι σταθερή, ορίστε το εύρος IP με τον αριθμό των bit.<br>(π.χ.) Εάν η IP σας μπορεί να μετακινηθεί στο εύρος 192.168.0.0-192.168.0.255, ορίστε 24(bit) εδώ');
    define($constpref . '_HIJACK_DENYGP', 'Ομάδες που δεν επιτρέπεται να μετακινούν την IP σε μια συνεδρία');
    define($constpref . '_HIJACK_DENYGPDSC', 'Προστασία από κλοπή συνεδρίας:<br>Επιλέξτε ομάδες που δεν επιτρέπεται να μετακινούν την IP τους σε μια συνεδρία.<br>(Συνιστώ να ενεργοποιήσετε τον Διαχειριστή.)');
    define($constpref . '_SAN_NULLBYTE', 'Καθαρισμός null-bytes');
    define($constpref . '_SAN_NULLBYTEDSC', 'Ο χαρακτήρας τερματισμού "\\0" χρησιμοποιείται συχνά σε κακόβουλες επιθέσεις.<br>Ένα null-byte θα μετατραπεί σε κενό διάστημα.<br>(συνιστάται ιδιαίτερα ως Ενεργό)');
    define($constpref . '_DIE_NULLBYTE', 'Τερματισμός εάν βρεθούν null bytes');
    define($constpref . '_DIE_NULLBYTEDSC', 'Ο χαρακτήρας τερματισμού "\\0" χρησιμοποιείται συχνά σε κακόβουλες επιθέσεις.<br>(συνιστάται ιδιαίτερα ως Ενεργό)');
    define($constpref . '_DIE_BADEXT', 'Τερματισμός εάν ανεβαίνουν κακόβουλα αρχεία');
    define($constpref . '_DIE_BADEXTDSC', 'Εάν κάποιος προσπαθήσει να ανεβάσει αρχεία με κακόβουλες επεκτάσεις όπως .php, αυτό το module τερματίζει το XOOPS σας.<br>Εάν συχνά επισυνάπτετε αρχεία php στο B-Wiki ή το PukiWikiMod, απενεργοποιήστε αυτήν την επιλογή.');
    define($constpref . '_CONTAMI_ACTION', 'Ενέργεια εάν βρεθεί μόλυνση');
    define($constpref . '_CONTAMI_ACTIONDS', 'Επιλέξτε την ενέργεια όταν κάποιος προσπαθεί να μολύνει τις καθολικές μεταβλητές του συστήματος στο XOOPS σας.<br>(συνιστώμενη επιλογή είναι κενή οθόνη)');
    define($constpref . '_ISOCOM_ACTION', 'Ενέργεια εάν βρεθεί απομονωμένο σχόλιο');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Προστασία από SQL Injection:<br>Επιλέξτε την ενέργεια όταν βρεθεί ένα απομονωμένο "/*".<br>"Καθαρισμός" σημαίνει προσθήκη ενός άλλου "*/" στο τέλος.<br>(συνιστώμενη επιλογή είναι Καθαρισμός)');
    define($constpref . '_UNION_ACTION', 'Ενέργεια εάν βρεθεί UNION');
    define($constpref . '_UNION_ACTIONDSC', 'Προστασία από SQL Injection:<br>Επιλέξτε την ενέργεια όταν βρεθεί κάποια σύνταξη όπως UNION του SQL.<br>"Καθαρισμός" σημαίνει αλλαγή του "union" σε "uni-on".<br>(συνιστώμενη επιλογή είναι Καθαρισμός)');
    define($constpref . '_ID_INTVAL', 'Εξαναγκασμός intval σε μεταβλητές όπως id');
    define($constpref . '_ID_INTVALDSC', 'Όλα τα αιτήματα με όνομα "*id" θα αντιμετωπίζονται ως ακέραιοι.<br>Αυτή η επιλογή σας προστατεύει από ορισμένα είδη επιθέσεων XSS και SQL Injection.<br>Αν και συνιστώ να ενεργοποιήσετε αυτήν την επιλογή, μπορεί να προκαλέσει προβλήματα με ορισμένα modules.');
    define($constpref . '_FILE_DOTDOT', 'Προστασία από Directory Traversals');
    define($constpref . '_FILE_DOTDOTDSC', 'Εξαλείφει το ".." από όλα τα αιτήματα που μοιάζουν με Directory Traversals');

    define($constpref . '_BF_COUNT', 'Προστασία από Brute Force');
    define($constpref . '_BF_COUNTDSC', "Ορίστε τον μέγιστο αριθμό φορών που επιτρέπεται σε έναν επισκέπτη να προσπαθήσει να συνδεθεί μέσα σε 10 λεπτά. Εάν οι αποτυχημένες προσπάθειες σύνδεσης υπερβούν αυτόν τον αριθμό, η διεύθυνση IP του επισκέπτη θα αποκλειστεί.");

    define($constpref . '_BWLIMIT_COUNT', 'Περιορισμός εύρους ζώνης');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Καθορίστε τη μέγιστη πρόσβαση στο mainfile.php κατά τη διάρκεια του χρόνου παρακολούθησης. Αυτή η τιμή πρέπει να είναι 0 για κανονικά περιβάλλοντα που έχουν επαρκές εύρος ζώνης CPU. Ο αριθμός μικρότερος από 10 θα αγνοηθεί.');

    define($constpref . '_DOS_SKIPMODS', 'Modules εκτός ελέγχου DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'Ορίστε τα ονόματα καταλόγων των modules διαχωρισμένα με |. Αυτή η επιλογή θα είναι χρήσιμη με modules συνομιλίας κ.λπ.');

    define($constpref . '_DOS_EXPIRE', 'Χρόνος παρακολούθησης για υψηλούς φόρτους (δευτερόλεπτα)');
    define($constpref . '_DOS_EXPIREDSC', 'Αυτή η τιμή καθορίζει τον χρόνο παρακολούθησης για επαναφορτώσεις υψηλής συχνότητας (επίθεση F5) και crawlers υψηλού φόρτου.');

    define($constpref . '_DOS_F5COUNT', 'Κακός αριθμός για Επίθεση F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Πρόληψη από επιθέσεις DoS.<br>Αυτή η τιμή καθορίζει τον αριθμό επαναφορτώσεων που θεωρείται κακόβουλη επίθεση.');
    define($constpref . '_DOS_F5ACTION', 'Ενέργεια κατά της Επίθεσης F5');

    define($constpref . '_DOS_CRCOUNT', 'Κακός αριθμός για Crawlers');
    define($constpref . '_DOS_CRCOUNTDSC', 'Πρόληψη από crawlers υψηλού φόρτου.<br>Αυτή η τιμή καθορίζει τον αριθμό προσβάσεων που θεωρείται κακότροπος crawler.');
    define($constpref . '_DOS_CRACTION', 'Ενέργεια κατά των Crawlers υψηλού φόρτου');

    define($constpref . '_DOS_CRSAFE', 'Αποδεκτός User-Agent');
    define($constpref . '_DOS_CRSAFEDSC', 'Ένα μοτίβο regex perl για User-Agent.<br>Εάν ταιριάζει, ο crawler δεν θεωρείται ποτέ ως crawler υψηλού φόρτου.<br>π.χ.) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Κανένα (μόνο καταγραφή)');
    define($constpref . '_OPT_SAN', 'Καθαρισμός');
    define($constpref . '_OPT_EXIT', 'Κενή Οθόνη');
    define($constpref . '_OPT_BIP', 'Αποκλεισμός IP (Χωρίς όριο)');
    define($constpref . '_OPT_BIPTIME0', 'Αποκλεισμός IP (αναστολή)');

    define($constpref . '_DOSOPT_NONE', 'Κανένα (μόνο καταγραφή)');
    define($constpref . '_DOSOPT_SLEEP', 'Αναμονή');
    define($constpref . '_DOSOPT_EXIT', 'Κενή Οθόνη');
    define($constpref . '_DOSOPT_BIP', 'Αποκλεισμός IP (Χωρίς όριο)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Αποκλεισμός IP (αναστολή)');
    define($constpref . '_DOSOPT_HTA', 'DENY από .htaccess (Πειραματικό)');

    define($constpref . '_BIP_EXCEPT', 'Ομάδες που δεν καταγράφονται ποτέ ως Κακές IP');
    define($constpref . '_BIP_EXCEPTDSC', 'Ένας χρήστης που ανήκει στην ομάδα που καθορίζεται εδώ δεν θα αποκλειστεί ποτέ.<br>(Συνιστώ να ενεργοποιήσετε τον Διαχειριστή.)');

    define($constpref . '_DISABLES', 'Απενεργοποίηση επικίνδυνων χαρακτηριστικών στο XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Ενεργοποίηση παγίδευσης DB Layer κατά της SQL-Ένεσης');
    define($constpref . '_DBLAYERTRAPDSC', 'Σχεδόν όλες οι επιθέσεις SQL Injection θα ακυρωθούν από αυτήν τη λειτουργία. Αυτή η λειτουργία απαιτεί υποστήριξη από το databasefactory. Μπορείτε να το ελέγξετε στη σελίδα Συμβουλευτικής Ασφαλείας. Αυτή η ρύθμιση πρέπει να είναι ενεργοποιημένη. Μην την απενεργοποιείτε ελαφρά τη καρδία.');
    define($constpref . '_DBTRAPWOSRV', 'Ποτέ μην ελέγχετε το _SERVER για προστασία από SQL-Ένεση');
    define($constpref . '_DBTRAPWOSRVDSC', 'Ορισμένοι διακομιστές ενεργοποιούν πάντα την παγίδευση DB Layer. Αυτό προκαλεί λανθασμένες ανιχνεύσεις ως επίθεση SQL Injection. Εάν αντιμετωπίσετε τέτοια σφάλματα, ενεργοποιήστε αυτήν την επιλογή. Πρέπει να γνωρίζετε ότι αυτή η επιλογή αποδυναμώνει την ασφάλεια της παγίδευσης DB Layer κατά της SQL-Ένεσης.');

    define($constpref . '_BIGUMBRELLA', 'Ενεργοποίηση προστασίας από XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Αυτό σας προστατεύει από σχεδόν όλες τις επιθέσεις μέσω ευπαθειών XSS. Αλλά δεν είναι 100%');

    define($constpref . '_SPAMURI4U', 'Αντι-SPAM: URLs για κανονικούς χρήστες');
    define($constpref . '_SPAMURI4UDSC', 'Εάν αυτός ο αριθμός URLs βρεθεί στα δεδομένα POST από χρήστες εκτός από διαχειριστές, το POST θεωρείται SPAM. Το 0 σημαίνει απενεργοποίηση αυτής της λειτουργίας.');
    define($constpref . '_SPAMURI4G', 'Αντι-SPAM: URLs για επισκέπτες');
    define($constpref . '_SPAMURI4GDSC', 'Εάν αυτός ο αριθμός URLs βρεθεί στα δεδομένα POST από επισκέπτες, το POST θεωρείται SPAM. Το 0 σημαίνει απενεργοποίηση αυτής της λειτουργίας.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Αρχική');
    define($constpref . '_ADMINABOUT', 'Σχετικά');

    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Ελέγχει τα δεδομένα POST έναντι των spammers που είναι καταχωρημένοι στη βάση δεδομένων www.stopforumspam.com. Απαιτεί τη βιβλιοθήκη php CURL.');

    // 3.60
    define($constpref . '_ADMINSTATS', 'Επισκόπηση');
    define($constpref . '_BANIP_TIME0DSC', 'Χρόνος αναστολής σε δευτερόλεπτα για αυτόματους αποκλεισμούς IP');
}
