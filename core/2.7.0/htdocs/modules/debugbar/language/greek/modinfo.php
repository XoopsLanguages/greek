<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: el

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Αναφορά σφαλμάτων και ανάλυση απόδοσης με PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Εμφάνιση DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Ενεργοποίηση Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Ενεργοποίηση καρτέλας συμπεριλαμβανόμενων αρχείων');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Εμφάνιση όλων των αρχείων PHP που φορτώθηκαν κατά τη διάρκεια του αιτήματος');
define('_MI_DEBUGBAR_SLOWQUERY', 'Όριο αργού ερωτήματος (δευτερόλεπτα)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Τα ερωτήματα πιο αργά από αυτό επισημαίνονται κόκκινα (π.χ. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Καταγραφή ερωτημάτων');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Όλα τα ερωτήματα ή μόνο αργά και σφάλματα');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Όλα τα ερωτήματα');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Μόνο αργά και σφάλματα');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ενεργοποίηση ενσωμάτωσης Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Αποστολή δεδομένων debug στο Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Αρχική');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Πληροφορίες');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Επιστροφή στη διαχείριση ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Επισκόπηση');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Αποποίηση ευθύνης');
\define('_MI_DEBUGBAR_LICENSE', 'Άδεια χρήσης');
\define('_MI_DEBUGBAR_SUPPORT', 'Υποστήριξη');
