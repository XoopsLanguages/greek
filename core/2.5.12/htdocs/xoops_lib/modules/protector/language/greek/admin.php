<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', 'Δικαιώματα');
define('_MD_A_MYMENU_MYPREFERENCES', 'Προτιμήσεις');
// index.php
define('_AM_TH_DATETIME', 'Χρόνος');
define('_AM_TH_USER', 'Χρήστης');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Τύπος');
define('_AM_TH_DESCRIPTION', 'Περιγραφή');
define('_AM_TH_BADIPS', 'Κακές IP<br><br><span style="font-weight:normal;">Γράψτε κάθε IP σε μια γραμμή<br>κενό σημαίνει ότι όλες οι IP επιτρέπονται</span>');
define('_AM_TH_GROUP1IPS', 'Επιτρεπόμενες IP για Ομάδα=1<br><br><span style="font-weight:normal;">Γράψτε κάθε IP σε μια γραμμή.<br>192.168. σημαίνει 192.168.*<br>κενό σημαίνει ότι όλες οι IP επιτρέπονται</span>');
define('_AM_LABEL_COMPACTLOG', 'Συμπτυγμένο αρχείο καταγραφής');
define('_AM_BUTTON_COMPACTLOG', 'Συμπτύξτε το!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Οι διπλές εγγραφές (IP,Τύπος) θα αφαιρεθούν');
define('_AM_LABEL_REMOVEALL', 'Αφαίρεση όλων των εγγραφών');
define('_AM_BUTTON_REMOVEALL', 'Αφαίρεση όλων!');
define('_AM_JS_REMOVEALLCONFIRM', 'Όλα τα αρχεία καταγραφής θα αφαιρεθούν οριστικά. Είστε πραγματικά εντάξει με αυτό;');
define('_AM_LABEL_REMOVE', 'Αφαίρεση των επιλεγμένων εγγραφών:');
define('_AM_BUTTON_REMOVE', 'Αφαίρεση!');
define('_AM_JS_REMOVECONFIRM', 'Αφαίρεση εντάξει;');
define('_AM_MSG_IPFILESUPDATED', 'Τα αρχεία για τις IP έχουν ενημερωθεί');
define('_AM_MSG_BADIPSCANTOPEN', 'Το αρχείο για κακές IP δεν μπορεί να ανοίξει');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Το αρχείο για την ομάδα=1 δεν μπορεί να ανοίξει');
define('_AM_MSG_REMOVED', 'Οι εγγραφές αφαιρέθηκαν');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Κάντε τον κατάλογο ρυθμίσεων εγγράψιμο: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Διαχειριστής Προθέματος');
define('_AM_MSG_DBUPDATED', 'Η βάση δεδομένων ενημερώθηκε επιτυχώς!');
define('_AM_CONFIRM_DELETE', 'Όλα τα δεδομένα θα διαγραφούν. Εντάξει;');
define('_AM_TXT_HOWTOCHANGEDB', "Εάν θέλετε να αλλάξετε το πρόθεμα,<br> επεξεργαστείτε το %s/data/secure.php χειροκίνητα.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Μη ασφαλές');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Εάν μπορείτε να δείτε μια εικόνα -NG- ή ο σύνδεσμος επιστρέφει κανονική σελίδα, το XOOPS_TRUST_PATH σας δεν έχει τοποθετηθεί σωστά. Η καλύτερη θέση για το XOOPS_TRUST_PATH είναι εκτός του DocumentRoot. Εάν δεν μπορείτε να το κάνετε αυτό, πρέπει να τοποθετήσετε ένα .htaccess (DENY FROM ALL) ακριβώς κάτω από το XOOPS_TRUST_PATH ως δεύτερη καλύτερη λύση.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Ελέγξτε ότι τα αρχεία PHP μέσα στο TRUST_PATH είναι ορισμένα μόνο για ανάγνωση (πρέπει να είναι σφάλμα 404, 403 ή 500)');
define('_AM_ADV_REGISTERGLOBALS', "Εάν είναι 'ON', αυτή η ρύθμιση προκαλεί διάφορες επιθέσεις ένεσης. Εάν μπορείτε, ορίστε το 'register_globals off' στο php.ini, ή εάν δεν είναι δυνατόν, δημιουργήστε ή επεξεργαστείτε το .htaccess στον κατάλογο XOOPS σας:");
define('_AM_ADV_ALLOWURLFOPEN', "Εάν είναι 'ON', αυτή η ρύθμιση επιτρέπει στους επιτιθέμενους να εκτελούν αυθαίρετα σενάρια σε απομακρυσμένους διακομιστές.<br>Μόνο ο διαχειριστής μπορεί να αλλάξει αυτήν την επιλογή.<br>Εάν είστε διαχειριστής, επεξεργαστείτε το php.ini ή το httpd.conf.<br><b>Παράδειγμα httpd.conf:<br>   php_admin_flag   allow_url_fopen   off</b><br>Αλλιώς, ζητήστε το από τους διαχειριστές σας.");
define('_AM_ADV_USETRANSSID', "Εάν είναι 'ON', το ID της συνεδρίας σας θα εμφανίζεται σε ετικέτες anchor κ.λπ.<br>Για να αποτρέψετε την κλοπή συνεδρίας, προσθέστε μια γραμμή στο .htaccess στο XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "Αυτή η ρύθμιση προκαλεί 'SQL Injections'.<br>Μην ξεχάσετε να ενεργοποιήσετε το 'Force sanitizing *' στις προτιμήσεις αυτού του module.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Μετάβαση στον διαχειριστή προθέματος');
define('_AM_ADV_MAINUNPATCHED', 'Θα πρέπει να επεξεργαστείτε το mainfile.php σας όπως περιγράφεται στο README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Η databasefactory σας είναι έτοιμη για το DBLayer Trapping κατά της SQL-Ένεσης');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Η databasefactory σας δεν είναι έτοιμη για το DBLayer Trapping κατά της SQL-Ένεσης. Απαιτούνται ορισμένες ενημερώσεις.');
define('_AM_ADV_SUBTITLECHECK', 'Έλεγχος εάν το Protector λειτουργεί σωστά');
define('_AM_ADV_CHECKCONTAMI', 'Μόλυνση');
define('_AM_ADV_CHECKISOCOM', 'Απομονωμένα Σχόλια');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'και τοποθετήστε την παρακάτω γραμμή σε αυτό:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Πρόθεμα');
define('_AM_PROTECTOR_TABLES', 'Πίνακες');
define('_AM_PROTECTOR_UPDATED', 'Ενημερώθηκε');
define('_AM_PROTECTOR_COPY', 'Αντιγραφή');
define('_AM_PROTECTOR_ACTIONS', 'Ενέργειες');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Αποκλεισμός των IP στις επιλεγμένες εγγραφές:');
define('_AM_BUTTON_BAN_BY_IP', 'Αποκλεισμός IP!');
define('_AM_JS_BANCONFIRM', 'Αποκλεισμός IP εντάξει;');
define('_AM_MSG_BANNEDIP', 'Οι IP αποκλείστηκαν');
define('_AM_ADMINSTATS_TITLE', 'Περίληψη Αρχείου Καταγραφής Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Τελευταίος Μήνας');
define('_AM_ADMINSTATS_LAST_WEEK', 'Τελευταία Εβδομάδα');
define('_AM_ADMINSTATS_LAST_DAY', 'Τελευταία Ημέρα');
define('_AM_ADMINSTATS_LAST_HOUR', 'Τελευταία Ώρα');
