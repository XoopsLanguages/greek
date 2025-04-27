<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Φυσικές διαδρομές XOOPS');
define('LEGEND_DATABASE', 'Σύνολο Χαρακτήρων Βάσης Δεδομένων');

define('XOOPS_LIB_PATH_LABEL', 'Κατάλογος βιβλιοθηκών XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Φυσική διαδρομή προς τον κατάλογο βιβλιοθηκών XOOPS ΧΩΡΙΣ τελική κάθετο, για μελλοντική συμβατότητα. Τοποθετήστε τον φάκελο εκτός του ' . XOOPS_ROOT_PATH . ' για λόγους ασφαλείας.');
define('XOOPS_DATA_PATH_LABEL', 'Κατάλογος αρχείων δεδομένων XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Φυσική διαδρομή προς τον κατάλογο αρχείων δεδομένων (εγγράψιμο) XOOPS ΧΩΡΙΣ τελική κάθετο, για μελλοντική συμβατότητα. Τοποθετήστε τον φάκελο εκτός του ' . XOOPS_ROOT_PATH . ' για λόγους ασφαλείας.');

define('DB_COLLATION_LABEL', 'Σύνολο χαρακτήρων και συρραφή βάσης δεδομένων');
define('DB_COLLATION_HELP', "Από την έκδοση 4.12, η MySQL υποστηρίζει προσαρμοσμένο σύνολο χαρακτήρων και συρραφή. Ωστόσο, είναι πιο περίπλοκο από το αναμενόμενο, επομένως ΜΗΝ κάνετε καμία αλλαγή εκτός αν είστε σίγουροι για την επιλογή σας.");
define('DB_COLLATION_NOCHANGE', 'Να μην αλλάξει');

define('XOOPS_PATH_FOUND', 'Η διαδρομή βρέθηκε.');
define('ERR_COULD_NOT_ACCESS', 'Δεν ήταν δυνατή η πρόσβαση στον καθορισμένο φάκελο. Παρακαλώ βεβαιωθείτε ότι υπάρχει και είναι αναγνώσιμος από τον διακομιστή.');
define('CHECKING_PERMISSIONS', 'Έλεγχος δικαιωμάτων αρχείων και καταλόγων...');
define('ERR_NEED_WRITE_ACCESS', 'Πρέπει να δοθεί πρόσβαση εγγραφής στον διακομιστή στα ακόλουθα αρχεία και φάκελο<br>(δηλ. <em>chmod 777 όνομα_καταλόγου</em> σε διακομιστή UNIX/LINUX)');
define('IS_NOT_WRITABLE', 'Το %s ΔΕΝ είναι εγγράψιμο.');
define('IS_WRITABLE', 'Το %s είναι εγγράψιμο.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Σφάλμα κατά την εγγραφή περιεχομένου στο mainfile.php, γράψτε το περιεχόμενο στο mainfile.php χειροκίνητα.');
