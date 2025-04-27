<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Εμφάνιση/Απόκρυψη κειμένου βοήθειας');
// Άδεια
//define('LICENSE_NOT_WRITEABLE', 'Το αρχείο άδειας "%s" δεν είναι εγγράψιμο!');
//define('LICENSE_IS_WRITEABLE', 'Η άδεια %s είναι εγγράψιμη.');
// Σελίδα ελέγχου διαμόρφωσης
define('SERVER_API', 'API διακομιστή');
define('PHP_EXTENSION', 'Επέκταση %s');
define('CHAR_ENCODING', 'Κωδικοποίηση χαρακτήρων');
define('XML_PARSING', 'Ανάλυση XML');
define('REQUIREMENTS', 'Απαιτήσεις');
define('_PHP_VERSION', 'Έκδοση PHP');
define('RECOMMENDED_SETTINGS', 'Συνιστώμενες ρυθμίσεις');
define('RECOMMENDED_EXTENSIONS', 'Συνιστώμενες επεκτάσεις');
define('SETTING_NAME', 'Όνομα ρύθμισης');
define('RECOMMENDED', 'Συνιστώμενο');
define('CURRENT', 'Τρέχουσα');
define('RECOMMENDED_EXTENSIONS_MSG', 'Αυτές οι επεκτάσεις δεν είναι απαραίτητες για τη φυσιολογική χρήση, αλλά μπορεί να είναι απαραίτητες για να εξερευνήσετε κάποιες συγκεκριμένες δυνατότητες (όπως η υποστήριξη πολλών γλωσσών ή RSS). Επομένως, συνιστάται να τις εγκαταστήσετε.');
define('NONE', 'Καμία');
define('SUCCESS', 'Επιτυχία');
define('WARNING', 'Προειδοποίηση');
define('FAILED', 'Αποτυχία');
// Τίτλοι (κύριοι και σελίδες)
define('XOOPS_INSTALL_WIZARD', 'Οδηγός εγκατάστασης XOOPS');
define('LANGUAGE_SELECTION', 'Επιλογή γλώσσας');
define('LANGUAGE_SELECTION_TITLE', 'Επιλέξτε τη γλώσσα σας');        // L128
define('INTRODUCTION', 'Εισαγωγή');
define('INTRODUCTION_TITLE', 'Καλώς ήρθατε στον Οδηγό Εγκατάστασης XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Έλεγχος διαμόρφωσης');
define('CONFIGURATION_CHECK_TITLE', 'Έλεγχος της διαμόρφωσης του διακομιστή σας');
define('PATHS_SETTINGS', 'Ρυθμίσεις διαδρομών');
define('PATHS_SETTINGS_TITLE', 'Ρυθμίσεις διαδρομών');
define('DATABASE_CONNECTION', 'Σύνδεση βάσης δεδομένων');
define('DATABASE_CONNECTION_TITLE', 'Σύνδεση με τη βάση δεδομένων');
define('DATABASE_CONFIG', 'Διαμόρφωση βάσης δεδομένων');
define('DATABASE_CONFIG_TITLE', 'Διαμόρφωση βάσης δεδομένων');
define('CONFIG_SAVE', 'Αποθήκευση διαμόρφωσης');
define('CONFIG_SAVE_TITLE', 'Αποθήκευση της διαμόρφωσης του συστήματος');
define('TABLES_CREATION', 'Δημιουργία πινάκων');
define('TABLES_CREATION_TITLE', 'Δημιουργία πινάκων βάσης δεδομένων');
define('INITIAL_SETTINGS', 'Αρχικές ρυθμίσεις');
define('INITIAL_SETTINGS_TITLE', 'Εισάγετε τις αρχικές ρυθμίσεις σας');
define('DATA_INSERTION', 'Εισαγωγή δεδομένων');
define('DATA_INSERTION_TITLE', 'Αποθήκευση των ρυθμίσεών σας στη βάση δεδομένων');
define('WELCOME', 'Καλώς ήρθατε');
define('WELCOME_TITLE', 'Καλώς ήρθατε στην ιστοσελίδα XOOPS σας');        // L0
// Ρυθμίσεις (ετικέτες και κείμενα βοήθειας)
define('XOOPS_PATHS', 'Φυσικές διαδρομές XOOPS');
define('XOOPS_URLS', 'Διαδικτυακές τοποθεσίες');
define('XOOPS_ROOT_PATH_LABEL', 'Φυσική διαδρομή ριζικού καταλόγου εγγράφων XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Φυσική διαδρομή στον φάκελο εγγράφων XOOPS (που σερβίρεται) ΧΩΡΙΣ τελικό διαχωριστικό (slash)');
define('XOOPS_LIB_PATH_LABEL', 'Φάκελος βιβλιοθήκης XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Φυσική διαδρομή στον φάκελο βιβλιοθήκης XOOPS ΧΩΡΙΣ τελικό διαχωριστικό, για μελλοντική συμβατότητα. Τοποθετήστε τον φάκελο εκτός από τον ' . XOOPS_ROOT_PATH_LABEL . ' για μεγαλύτερη ασφάλεια.');
define('XOOPS_DATA_PATH_LABEL', 'Φάκελος δεδομένων XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Φυσική διαδρομή στον φάκελο δεδομένων XOOPS (που είναι εγγράψιμος) ΧΩΡΙΣ τελικό διαχωριστικό, για μελλοντική συμβατότητα. Τοποθετήστε τον φάκελο εκτός από τον ' . XOOPS_ROOT_PATH_LABEL . ' για μεγαλύτερη ασφάλεια.');
define('XOOPS_URL_LABEL', 'Τοποθεσία ιστοσελίδας (URL)'); // L56
define('XOOPS_URL_HELP', 'Κύριο URL που θα χρησιμοποιηθεί για την πρόσβαση στην εγκατάσταση XOOPS σας'); // L58
define('LEGEND_CONNECTION', 'Σύνδεση διακομιστή');
define('LEGEND_DATABASE', 'Βάση δεδομένων'); // L51
define('DB_HOST_LABEL', 'Όνομα διακομιστή');    // L27
define('DB_HOST_HELP', 'Όνομα διακομιστή της βάσης δεδομένων. Αν δεν είστε σίγουροι, το <em>localhost</em> λειτουργεί στις περισσότερες περιπτώσεις'); // L67
define('DB_USER_LABEL', 'Όνομα χρήστη');    // L28
define('DB_USER_HELP', 'Όνομα του λογαριασμού χρήστη που θα χρησιμοποιηθεί για τη σύνδεση στον διακομιστή της βάσης δεδομένων'); // L65
define('DB_PASS_LABEL', 'Κωδικός πρόσβασης');    // L52
define('DB_PASS_HELP', 'Κωδικός πρόσβασης του λογαριασμού χρήστη της βάσης δεδομένων'); // L68
define('DB_NAME_LABEL', 'Όνομα βάσης δεδομένων');    // L29
define('DB_NAME_HELP', 'Το όνομα της βάσης δεδομένων στον διακομιστή. Ο εγκαταστάτης θα προσπαθήσει να δημιουργήσει τη βάση δεδομένων αν δεν υπάρχει'); // L64
define('DB_CHARSET_LABEL', 'Κωδικοποίηση βάσης δεδομένων');
define('DB_CHARSET_HELP', 'Η MySQL περιλαμβάνει υποστήριξη για κωδικοποίηση χαρακτήρων που σας επιτρέπει να αποθηκεύετε δεδομένα χρησιμοποιώντας διάφορους χαρακτήρες και να εκτελείτε συγκρίσεις σύμφωνα με διάφορους τύπους ταξινόμησης.');
define('DB_COLLATION_LABEL', 'Ταξινόμηση βάσης δεδομένων');
define('DB_COLLATION_HELP', 'Η ταξινόμηση είναι ένα σύνολο κανόνων για τη σύγκριση χαρακτήρων σε έναν χαρακτήρα.');
define('DB_PREFIX_LABEL', 'Πρόθεμα πίνακα');    // L30
define('DB_PREFIX_HELP', 'Αυτό το πρόθεμα θα προστεθεί σε όλους τους νέους πίνακες που δημιουργούνται για να αποφευχθούν συγκρούσεις ονομάτων στη βάση δεδομένων. Αν δεν είστε σίγουροι, κρατήστε το προεπιλεγμένο'); // L63
define('DB_PCONNECT_LABEL', 'Χρήση μόνιμης σύνδεσης');    // L54
define('DB_PCONNECT_HELP', "Η προεπιλογή είναι 'Όχι'. Αφήστε το κενό αν δεν είστε σίγουροι"); // L69
define('DB_DATABASE_LABEL', 'Βάση δεδομένων');
define('LEGEND_ADMIN_ACCOUNT', 'Λογαριασμός διαχειριστή');
define('ADMIN_LOGIN_LABEL', 'Σύνδεση διαχειριστή'); // L37
define('ADMIN_EMAIL_LABEL', 'Ηλ. ταχυδρομείο διαχειριστή'); // L38
define('ADMIN_PASS_LABEL', 'Κωδικός πρόσβασης διαχειριστή'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Επιβεβαίωση κωδικού πρόσβασης'); // L74
// Κουμπιά
define('BUTTON_PREVIOUS', 'Προηγούμενο'); // L42
define('BUTTON_NEXT', 'Συνέχεια'); // L47
// Μηνύματα
define('XOOPS_FOUND', '%s βρέθηκε');
define('CHECKING_PERMISSIONS', 'Έλεγχος δικαιωμάτων αρχείων και φακέλων...'); // L82
define('IS_NOT_WRITABLE', '%s δεν είναι εγγράψιμο.'); // L83
define('IS_WRITABLE', '%s είναι εγγράψιμο.'); // L84
define('XOOPS_PATH_FOUND', 'Βρέθηκε η διαδρομή.');
//define('READY_CREATE_TABLES', 'Δεν βρέθηκαν πίνακες XOOPS.<br>Ο εγκαταστάτης είναι έτοιμος να δημιουργήσει τους πίνακες του συστήματος XOOPS.');
define('XOOPS_TABLES_FOUND', 'Οι πίνακες συστήματος XOOPS υπάρχουν ήδη στη βάση δεδομένων σας.'); // L131
define('XOOPS_TABLES_CREATED', 'Οι πίνακες συστήματος XOOPS δημιουργήθηκαν.');
//define('READY_INSERT_DATA', 'Ο εγκαταστάτης είναι έτοιμος να εισάγει τα αρχικά δεδομένα στη βάση δεδομένων.');
//define('READY_SAVE_MAINFILE', 'Ο εγκαταστάτης είναι έτοιμος να αποθηκεύσει τις καθορισμένες ρυθμίσεις στο <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Οι ρυθμίσεις αποθηκεύτηκαν');
define('SAVED_MAINFILE_MSG', 'Ο εγκαταστάτης αποθήκευσε τις καθορισμένες ρυθμίσεις στο <em>mainfile.php</em> και <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Βρέθηκαν δεδομένα XOOPS στη βάση δεδομένων.');
define('DATA_INSERTED', 'Τα αρχικά δεδομένα εισήχθησαν στη βάση δεδομένων.');
// %s είναι το όνομα της βάσης δεδομένων
define('DATABASE_CREATED', 'Η βάση δεδομένων %s δημιουργήθηκε!'); // L43
// %s είναι το όνομα του πίνακα
define('TABLE_NOT_CREATED', 'Αδύνατη η δημιουργία του πίνακα %s'); // L118
define('TABLE_CREATED', 'Ο πίνακας %s δημιουργήθηκε.'); // L45
define('ROWS_INSERTED', '%d εγγραφές εισήχθησαν στον πίνακα %s.'); // L119
define('ROWS_FAILED', 'Αποτυχία εισαγωγής %d εγγραφών στον πίνακα %s.'); // L120
define('TABLE_ALTERED', 'Ο πίνακας %s ενημερώθηκε.'); // L133
define('TABLE_NOT_ALTERED', 'Αποτυχία ενημέρωσης του πίνακα %s.'); // L134
define('TABLE_DROPPED', 'Ο πίνακας %s διαγράφηκε.'); // L163
define('TABLE_NOT_DROPPED', 'Αποτυχία διαγραφής του πίνακα %s.'); // L164
// Μηνύματα σφάλματος
define('ERR_COULD_NOT_ACCESS', 'Αδυναμία πρόσβασης στον καθορισμένο φάκελο. Παρακαλώ ελέγξτε αν υπάρχει και αν είναι αναγνώσιμος από τον διακομιστή.');
define('ERR_NO_XOOPS_FOUND', 'Δεν βρέθηκε εγκατάσταση XOOPS στον καθορισμένο φάκελο.');
define('ERR_INVALID_EMAIL', 'Μη έγκυρο Email'); // L73
define('ERR_REQUIRED', 'Απαιτούνται πληροφορίες.'); // L41
define('ERR_PASSWORD_MATCH', 'Οι δύο κωδικοί πρόσβασης δεν ταιριάζουν');
define('ERR_NEED_WRITE_ACCESS', 'Ο διακομιστής πρέπει να έχει δικαίωμα εγγραφής στους παρακάτω φακέλους και αρχεία<br>(δηλαδή <em>chmod 775 directory_name</em> σε διακομιστή UNIX/LINUX)<br>Αν δεν είναι διαθέσιμα ή δεν δημιουργήθηκαν σωστά, παρακαλώ δημιουργήστε τα χειροκίνητα και ρυθμίστε τα σωστά δικαιώματα.');
define('ERR_NO_DATABASE', 'Αδυναμία δημιουργίας βάσης δεδομένων. Επικοινωνήστε με τον διαχειριστή του διακομιστή για λεπτομέρειες.'); // L31
define('ERR_NO_DBCONNECTION', 'Αδυναμία σύνδεσης με τον διακομιστή της βάσης δεδομένων.'); // L106
define('ERR_WRITING_CONSTANT', 'Αποτυχία γραφής της σταθεράς %s.'); // L122
define('ERR_COPY_MAINFILE', 'Αδυναμία αντιγραφής του αρχείου διανομής στο %s');
define('ERR_WRITE_MAINFILE', 'Αδυναμία εγγραφής στο %s. Παρακαλώ ελέγξτε τα δικαιώματα του αρχείου και προσπαθήστε ξανά.');
define('ERR_READ_MAINFILE', 'Αδυναμία άνοιγμα του %s για ανάγνωση');
define('ERR_INVALID_DBCHARSET', "Η κωδικοποίηση χαρακτήρων '%s' δεν υποστηρίζεται.");
define('ERR_INVALID_DBCOLLATION', "Η ταξινόμηση '%s' δεν υποστηρίζεται.");
define('ERR_CHARSET_NOT_SET', 'Η προεπιλεγμένη κωδικοποίηση χαρακτήρων δεν έχει οριστεί για τη βάση δεδομένων XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Υποστήριξη');
define('LOGIN', 'Αυθεντικοποίηση');
define('LOGIN_TITLE', 'Αυθεντικοποίηση');
define('USER_LOGIN', 'Σύνδεση διαχειριστή');
define('USERNAME', 'Όνομα χρήστη :');
define('PASSWORD', 'Κωδικός πρόσβασης :');
define('ICONV_CONVERSION', 'Μετατροπή κωδικοποίησης χαρακτήρων');
define('ZLIB_COMPRESSION', 'Συμπίεση Zlib');
define('IMAGE_FUNCTIONS', 'Λειτουργίες εικόνας');
define('IMAGE_METAS', 'Μεταδεδομένα εικόνας (exif)');
define('FILTER_FUNCTIONS', 'Λειτουργίες φίλτρων');
define('ADMIN_EXIST', 'Ο λογαριασμός διαχειριστή υπάρχει ήδη.');
define('CONFIG_SITE', 'Ρυθμίσεις ιστότοπου');
define('CONFIG_SITE_TITLE', 'Ρυθμίσεις ιστότοπου');
define('MODULES', 'Εγκατάσταση ενσωμάτων');
define('MODULES_TITLE', 'Εγκατάσταση ενσωμάτων');
define('THEME', 'Επιλογή θέματος');
define('THEME_TITLE', 'Επιλογή προεπιλεγμένου θέματος');
define('INSTALLED_MODULES', 'Τα παρακάτω ενσωμάτα έχουν εγκατασταθεί.');
define('NO_MODULES_FOUND', 'Δεν βρέθηκαν ενσωμάτα.');
define('NO_INSTALLED_MODULES', 'Δεν έχει εγκατασταθεί κανένα ενσωμάτωμα.');
define('THEME_NO_SCREENSHOT', 'Δεν βρέθηκε εικόνα στιγμιότυπου');
define('IS_VALOR', ' => ');
// Μήνυμα κωδικού πρόσβασης
define('PASSWORD_LABEL', 'Δύναμη κωδικού πρόσβασης');
define('PASSWORD_DESC', 'Ο κωδικός πρόσβασης δεν εισήχθη');
define('PASSWORD_GENERATOR', 'Γεννήτρια κωδικού πρόσβασης');
define('PASSWORD_GENERATE', 'Δημιουργία');
define('PASSWORD_COPY', 'Αντιγραφή');
define('PASSWORD_VERY_WEAK', 'Πολύ αδύναμος');
define('PASSWORD_WEAK', 'Αδύναμος');
define('PASSWORD_BETTER', 'Καλύτερος');
define('PASSWORD_MEDIUM', 'Μέτριος');
define('PASSWORD_STRONG', 'Ισχυρός');
define('PASSWORD_STRONGEST', 'Πιο ισχυρός');
//2.5.7
define('WRITTEN_LICENSE', 'Έγραψε XOOPS %s Κλειδί Άδειας: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Επανάληψη');
define('CHMOD_CHGRP_IGNORE', 'Χρήση παρόλα αυτά');
define('CHMOD_CHGRP_ERROR', 'Ο εγκαταστάτης ενδέχεται να μην μπορεί να γράψει το αρχείο διαμόρφωσης %1$s.<p>Η PHP γράφει αρχεία υπό τον χρήστη %2$s και την ομάδα %3$s.<p>Ο φάκελος %4$s/ έχει χρήστη %5$s και ομάδα %6$s');
//2.5.9
define("CURL_HTTP", "Βιβλιοθήκη URL πελάτη (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Τομέας Cookie για τον Ιστότοπο');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Τομέας για την αποθήκευση cookies. Μπορεί να είναι κενό, ο πλήρης τομέας από το URL (www.example.com) ή ο καταχωρημένος τομέας χωρίς υποτομείς (example.com) για κοινή χρήση μεταξύ υποτομέων (www.example.com και blog.example.com).');
define('INTL_SUPPORT', 'Λειτουργίες Διεθνοποίησης');
define('XOOPS_SOURCE_CODE', "XOOPS στο GitHub");
define('XOOPS_INSTALLING', 'Εγκατάσταση');
define('XOOPS_ERROR_ENCOUNTERED', 'Σφάλμα');
define('XOOPS_ERROR_SEE_BELOW', 'Δείτε παρακάτω για μηνύματα.');
