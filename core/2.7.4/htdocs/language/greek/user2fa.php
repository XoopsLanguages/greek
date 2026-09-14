<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Δεύτερο βήμα');
define('_US_2FA_PROMPT', 'Εισαγάγετε τον κωδικό από την εφαρμογή ελέγχου ταυτότητας');
define('_US_2FA_CODE', 'Κωδικός ελέγχου ταυτότητας');
define('_US_2FA_PROMPT_EMAIL', 'Στείλαμε έναν εξαψήφιο κωδικό στο %s. Εισαγάγετέ τον παρακάτω.');
define('_US_2FA_CODE_EMAIL', 'Ο κωδικός από το email σας');
define('_US_2FA_SEND', 'Αποστολή νέου κωδικού');
define('_US_2FA_SENT', 'Ένας νέος κωδικός στάλθηκε στο %s. Ισχύει για δέκα λεπτά.');
define('_US_2FA_SEND_WAIT', 'Ένας κωδικός στάλθηκε πριν από λιγότερο από ένα λεπτό. Ελέγξτε τα εισερχόμενα και τον φάκελο ανεπιθύμητης αλληλογραφίας πριν ζητήσετε άλλον.');
define('_US_2FA_SEND_FAILED', 'Ο κωδικός δεν ήταν δυνατό να σταλεί αυτή τη στιγμή. Δοκιμάστε ξανά σε λίγο ή χρησιμοποιήστε έναν κωδικό ανάκτησης.');
define('_US_2FA_EMAIL_SUBJECT', '%s: ο κωδικός σύνδεσής σας');
define('_US_2FA_EMAIL_BODY', 'Ο κωδικός σύνδεσής σας για το %s είναι:

%s

Ισχύει για %d λεπτά και λειτουργεί μία φορά. Αν δεν τον ζητήσατε εσείς, αγνοήστε αυτό το μήνυμα και σκεφτείτε να αλλάξετε τον κωδικό πρόσβασής σας.');
define('_US_2FA_RECOVERY', 'Χρήση κωδικού ανάκτησης αντ\' αυτού');
define('_US_2FA_RECOVERY_HINT', 'Κάθε κωδικός ανάκτησης λειτουργεί μία φορά. Η χρήση ενός σας στέλνει ένα email.');
define('_US_2FA_SUBMIT', 'Συνέχεια');
define('_US_2FA_STARTAGAIN', 'Αυτή η σύνδεση έληξε ή διακόπηκε. Ξεκινήστε ξανά.');
define('_US_2FA_BACKTOLOGIN', 'Επιστροφή στη φόρμα σύνδεσης');
define('_US_2FA_BADCODE', 'Αυτός ο κωδικός δεν έγινε αποδεκτός.');
define('_US_2FA_LOCKED', 'Πάρα πολλές προσπάθειες. Το δεύτερο βήμα είναι κλειδωμένο για δεκαπέντε λεπτά· ένας κωδικός ανάκτησης εξακολουθεί να λειτουργεί.');
define('_US_2FA_UNAVAILABLE', 'Το δεύτερο βήμα δεν είναι διαθέσιμο αυτή τη στιγμή. Ένας κωδικός ανάκτησης εξακολουθεί να λειτουργεί, ή επικοινωνήστε με τον διαχειριστή του ιστότοπου.');
define('_US_2FA_REQUIRED', 'Αυτός ο λογαριασμός έχει ενεργοποιημένο τον έλεγχο ταυτότητας δύο παραγόντων. Συνδεθείτε μέσω της σελίδας σύνδεσης του ιστότοπου.');
define('_US_2FA_HTTP_LOGIN', 'Αυτό το αναδυόμενο παράθυρο δεν μπορεί να ολοκληρώσει μια σύνδεση δύο παραγόντων μέσω HTTP επειδή ο κωδικός πρόσβασής σας θα σταλεί χωρίς κρυπτογράφηση. Χρησιμοποιήστε τη σύνδεση του ιστότοπου ή ζητήστε από τον διαχειριστή να ενεργοποιήσει το HTTPS για τον ιστότοπο.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: το δεύτερο βήμα κλειδώθηκε');
define('_US_2FA_LOCKED_MAIL_BODY', 'Καταχωρίστηκαν πέντε λανθασμένοι κωδικοί δεύτερου βήματος για τον λογαριασμό σας στο %s από %s. Το δεύτερο βήμα είναι κλειδωμένο για δεκαπέντε λεπτά. Αν δεν ήσασταν εσείς, αλλάξτε τον κωδικό πρόσβασής σας.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: χρησιμοποιήθηκε κωδικός ανάκτησης');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Ένας κωδικός ανάκτησης χρησιμοποιήθηκε για σύνδεση στον λογαριασμό σας στο %s από %s. Αυτός ο κωδικός δεν λειτουργεί πλέον. Αν δεν ήσασταν εσείς, αλλάξτε τον κωδικό πρόσβασής σας και επαναφέρετε τους κωδικούς ανάκτησης.');
