<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
//Nav
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', 'Συντήρηση');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', 'Όλες οι συντηρήσεις');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', 'Εξαγωγή');
define('_AM_SYSTEM_MAINTENANCE_SESSION', 'Άδειασμα πίνακα συνεδριών');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', 'Συντήρηση συνεδρίας: Εντάξει');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', 'Συντήρηση συνεδρίας: Σφάλμα');
define('_AM_SYSTEM_MAINTENANCE_AVATAR', 'Καθαρισμός αχρησιμοποίητων προσαρμοσμένων άβαταρ');
define('_AM_SYSTEM_MAINTENANCE_CACHE', 'Καθαρισμός φακέλου cache');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', 'Συντήρηση cache: Εντάξει');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', 'Συντήρηση cache: Σφάλμα');
define('_AM_SYSTEM_MAINTENANCE_TABLES', 'Συντήρηση πινάκων');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', 'Συντήρηση πινάκων: Εντάξει');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', 'Συντήρηση πινάκων: Σφάλμα');
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', 'Βελτιστοποίηση, Έλεγχος, Επισκευή και Ανάλυση των πινάκων σας');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', 'Συντήρηση βάσης δεδομένων: Εντάξει');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', 'Συντήρηση βάσης δεδομένων: Σφάλμα');
define('_AM_SYSTEM_MAINTENANCE_CHOICE1', 'Βελτιστοποίηση πίνακα(ων)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', 'Έλεγχος πίνακα(ων)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', 'Επισκευή πίνακα(ων)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', 'Ανάλυση πίνακα(ων)');
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC', 'Η ΕΝΑΝΑΛΥΣΗ ΠΙΝΑΚΑ αναλύει και αποθηκεύει την κατανομή κλειδιών για έναν πίνακα. Κατά την ανάλυση, ο πίνακας κλειδώνεται με κλείδωμα ανάγνωσης.<br>
Ο ΕΛΕΓΧΟΣ ΠΙΝΑΚΑ ελέγχει έναν ή περισσότερους πίνακες για σφάλματα.<br>
Η ΒΕΛΤΙΣΤΟΠΟΙΗΣΗ ΠΙΝΑΚΑ ανακτά τον αχρησιμοποίητο χώρο και αποσυμπιέζει το αρχείο δεδομένων.<br>
Η ΕΠΙΣΚΕΥΗ ΠΙΝΑΚΑ επισκευάζει έναν ενδεχομένως κατεστραμμένο πίνακα.');
define('_AM_SYSTEM_MAINTENANCE_RESULT', 'Αποτέλεσμα');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', 'Δεν υπήρξε αποτέλεσμα');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', 'Καθήκον Καθαρισμού Cache');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', 'Καθήκον Καθαρισμού Πίνακα Συνεδριών');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', 'Καθήκον Βάσης Δεδομένων');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', 'Καθήκον Καθαρισμού Αχρησιμοποίητων Άβαταρ');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', 'Δεν επιλέξατε καμία συντήρηση');
define('_AM_SYSTEM_MAINTENANCE_TABLES1', 'Πίνακες');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', 'Βελτιστοποίηση');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', 'Έλεγχος');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', 'Επισκευή');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', 'Ανάλυση');
//Dump
define('_AM_SYSTEM_MAINTENANCE_DUMP', 'Εξαγωγή');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', 'Επιλέξτε πίνακες ή modules');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', "Προσθήκη εντολής DROP TABLE IF EXISTS 'tables' στην εξαγωγή");
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', 'Ή');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', 'Και');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', 'Πρέπει να επιλέξετε πίνακες ή modules');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', 'Δεν υπάρχουν πίνακες');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', 'Πίνακες');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', 'Δομές');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', 'Αριθμός Εγγραφών');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', 'Δημιουργήθηκε αρχείο');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', 'Αποτέλεσμα');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', 'εγγραφή/εγγραφές');
// Tips
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>Μπορείτε να εκτελέσετε μια απλή συντήρηση της εγκατάστασης XOOPS: καθαρίστε την cache και τον πίνακα συνεδριών, και κάντε συντήρηση των πινάκων σας</li>
</ul>');
