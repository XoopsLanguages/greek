<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: el

define('_MD_DEBUGBAR_DEBUG', 'Εντοπισμός Σφαλμάτων');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Συμπεριλαμβανόμενα αρχεία');
define('_MD_DEBUGBAR_PHP_VERSION', 'Έκδοση PHP');
define('_MD_DEBUGBAR_NONE', 'Κανένα');
define('_MD_DEBUGBAR_ERRORS', 'Σφάλματα');
define('_MD_DEBUGBAR_DEPRECATED', 'Αποσυρμένο');
define('_MD_DEBUGBAR_QUERIES', 'Ερωτήματα');
define('_MD_DEBUGBAR_BLOCKS', 'Μπλοκ');
define('_MD_DEBUGBAR_EXTRA', 'Επιπλέον');
define('_MD_DEBUGBAR_TIMERS', 'Χρονόμετρα');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s χρειάστηκε %s δευτερόλεπτα για να φορτώσει.');
define('_MD_DEBUGBAR_TOTAL', 'Σύνολο');
define('_MD_DEBUGBAR_NOT_CACHED', 'Χωρίς cache');
define('_MD_DEBUGBAR_CACHED', 'Στη cache (ανανεώνεται κάθε %s δευτερόλεπτα)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(κενή συμβολοσειρά)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool ΑΛΗΘΕΙΑ');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Ερωτήματα βάσης δεδομένων');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Χρήση μνήμης');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d ερωτήματα');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d διπλότυπα)');
define('_MD_DEBUGBAR_BYTES', '%s byte');
define('_MD_DEBUGBAR_DB_VERSION', '%s έκδοση');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Αριθμός σφάλματος: %s Μήνυμα σφάλματος: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Σφάλμα #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Εξαίρεση');
define('_MD_DEBUGBAR_RAY_QUERY', 'Ερώτημα #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'ΑΡΓΑ');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Αποκλεισμός (αποθηκευμένα %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Αποκλεισμός (δεν έχει αποθηκευτεί στην κρυφή μνήμη)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Εξαγωγή');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Πλαίσιο προτύπου');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(χωρίς μεταβλητές προτύπου)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Ο κατάλογος "modules/debugbar/%s" δεν δημιουργήθηκε');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Αποτυχία δημιουργίας καταλόγου "%s" κατά την αντιγραφή στοιχείων');
