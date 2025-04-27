<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Assocated with editor_registry.php
 */
// Όνομα του επεξεργαστή
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// Η τιμή πρέπει να είναι η ίδια με το /tinymce/jscripts/langs/your_language_code, για παράδειγμα, "en" για Αγγλικά, "fr" για Γαλλικά
// Για λεπτομέρειες, δείτε το http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'en');
// ΛΙΣΤΑ ΓΡΑΜΜΑΤΩΝ, ΜΟΡΦΗ: "Όνομα=τιμή1,τιμή2;Όνομα=τιμή"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'Αποτυχία λήψης εικόνας %s');
