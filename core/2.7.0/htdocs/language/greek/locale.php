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
 * Xoops locale
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Περιορισμένη πρόσβαση');

setlocale(LC_ALL, 'el_GR');

// !!ΣΗΜΑΝΤΙΚΟ!! Εισάγετε '\' πριν από οποιονδήποτε χαρακτήρα μεταξύ των δεσμευμένων χαρακτήρων: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// Εισάγετε διπλό '\\' πριν από 't','r','n'
define('_TODAY', "\T\o\d\a\y G:i");
define('_YESTERDAY', "\\Y\\e\\s	\\e\\d\\a\\y G:i");
define('_MONTHDAY', 'n/j G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', '%s πριν');
define('_TIMEFORMAT_DESC', "Έγκυροι τύποι: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" ή \"custom\" - μορφή καθορισμένη σύμφωνα με το διάστημα που παρουσιάζεται; \"e\" - Παρελθόν; \"mysql\" - Y-m-d H:i:s;<br>" . "καθορισμένη συμβολοσειρά - Ανατρέξτε στο <a href=\"https://php.net/manual/en/function.date.php\" rel=\"external\">εγχειρίδιο PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Ένα Xoops Local
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /** Per-locale currency formatting data. Pattern uses positional placeholders: %1$s = amount, %2$s = symbol. */
    private const CURRENCY = ['locale' => 'el_GR', 'code' => 'EUR', 'symbol' => '€',  'decimals' => 2, 'decSep' => ',', 'thouSep' => '.', 'pattern' => '%1$s %2$s'];

    /**
     * Μορφές Αριθμών
     *
     * The @param annotation accepts string for backward compatibility with
     * callers that still pass numeric strings, but PHP's number_format()
     * requires float. Cast at the boundary ONLY when the input is a
     * numeric string — otherwise pass through unchanged so PHP's
     * number_format() raises its own TypeError on genuinely invalid
     * input (arrays, objects, non-numeric strings) instead of silently
     * coercing them to 0 / 1 and returning a misleading formatted zero.
     *
     * @param  int|float|string $number
     * @return string
     */
    public function number_format($number)
    {
        if (is_string($number) && is_numeric($number)) {
            $number = (float) $number;
        }

        return number_format($number, self::CURRENCY['decimals'], self::CURRENCY['decSep'], self::CURRENCY['thouSep']);
    }

    /**
     * Μορφή Χρημάτων
     *
     * @param  string    $format  legacy money_format()-style format string (ignored, kept for BC)
     * @param  int|float $number
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function money_format($format, $number)
    {
        $c = self::CURRENCY;

        if (extension_loaded('intl')) {
            static $fmt = null;
            if (null === $fmt) {
                $fmt = new \NumberFormatter($c['locale'], \NumberFormatter::CURRENCY);
            }
            $result = $fmt->formatCurrency((float) $number, $c['code']);
            if ($result !== false) {
                return $result;
            }
        }

        $amount = $this->number_format($number);

        return sprintf($c['pattern'], $amount, $c['symbol']);
    }
}
