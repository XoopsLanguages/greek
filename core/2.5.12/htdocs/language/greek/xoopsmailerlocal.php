<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Περιορισμένη πρόσβαση');

/**
 * Τοπικοποίηση των λειτουργιών αλληλογραφίας
 *
 * Η ελληνική τοπικοποίηση είναι αποκλειστικά για επίδειξη
 */
// Μην αλλάξετε το όνομα της κλάσης
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Κατασκευαστής
     */
    public function __construct()
    {
        parent::__construct();
        // Υποτίθεται ότι δεν χρειάζεται να αλλάξει το σύνολο χαρακτήρων
        $this->charSet = strtolower(_CHARSET);
        // ΠΡΕΠΕΙ να καθορίσετε την τιμή του κωδικού γλώσσας ώστε να υπάρχει το αρχείο: XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["your-language-code"].php
        $this->multimailer->setLanguage('el');
    }

    /**
     * Οι γλώσσες πολλαπλών bytes ενθαρρύνονται να δημιουργήσουν τη δική τους μέθοδο για την κωδικοποίηση του FromName
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Ενεργοποιήστε την παρακάτω γραμμή εάν χρειάζεται
        $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }

    /**
     * Οι γλώσσες πολλαπλών bytes ενθαρρύνονται να δημιουργήσουν τη δική τους μέθοδο για την κωδικοποίηση του Θέματος
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Ενεργοποιήστε την παρακάτω γραμμή εάν χρειάζεται
        $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
