<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Μεταφορά XOOPS Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Αποτελέσματα Σαρωτή');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Εκτέλεση Σάρωσης');
define('_XOOPS_SMARTY4_SCANNER_END', 'Έξοδος από τον Σαρωτή');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Κανόνας');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Αντιστοίχιση');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Αρχείο');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Αριθμός Διορθώσεων');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Απαιτείται χειροκίνητος έλεγχος');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Δεν είναι εγγράψιμο');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Επιλογές Επανασάρωσης');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Επιλέξτε το κουτάκι "Ναι" παρακάτω και στη συνέχεια πατήστε το κουμπί Εκτέλεση Σάρωσης για να προσπαθήσετε να διορθώσετε αυτόματα τυχόν προβλήματα που εντοπίστηκαν.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Σήμανση ως Ολοκληρωμένο');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Κατάλογος Προτύπων (προαιρετικό)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Επέκταση Προτύπου (προαιρετικό)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>Η έκδοση XOOPS 2.5.12 εισάγει μια σημαντική αλλαγή: Smarty 4</h3>

<p>Δυστυχώς, αυτή η αλλαγή μπορεί να προκαλέσει διαταραχές σε ορισμένα παλαιότερα θέματα. Επομένως, πριν προχωρήσετε στην αναβάθμιση, παρακαλούμε να ακολουθήσετε τα εξής βήματα:

<li>Εκτελέστε το preflight.php για να ελέγξετε αν υπάρχουν παλιά θέματα ή πρότυπα ενοτήτων.</li>
<li>Αν εντοπιστούν προβλήματα, συμβουλευτείτε αυτό το έγγραφο για να κατανοήσετε τις απαραίτητες τροποποιήσεις πριν προχωρήσετε στην αναβάθμιση.</li>
<li>Μετά την πραγματοποίηση των απαιτούμενων αλλαγών, εκτελέστε ξανά το preflight.php.</li>
<li>Αν δεν υπάρχουν πλέον προβλήματα, μπορείτε να ξεκινήσετε τη διαδικασία αναβάθμισης.</li>
</p>
EOT,
);
