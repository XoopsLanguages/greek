xoopseditor παρέχει μια συλλογή συντακτών για το XOOPS

οδηγός χρήστη:

1 ελέγξτε τα αρχεία xoops_version.php στο /xoopseditor/ για να βεβαιωθείτε ότι είναι νεότερα από τα τρέχοντα

2 μεταφόρτωση /xoopseditor/ στο /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 διαμορφώστε τις προτιμήσεις όπου υπάρχουν
3.1 ./dhtmlext(all editors)/language/: δημιουργήστε το τοπικό σας αρχείο γλώσσας με βάση το english.php
3.3 ./dhtmlext(all editors)/editor_registry.php: ορίστε διαμορφώσεις για τον επεξεργαστή: σειρά - σειρά εμφάνισης σε περίπτωση που χρησιμοποιείται η επιλογή επεξεργαστή, 0 για απενεργοποιημένη. nohtml - λειτουργεί για σύνταξη που δεν είναι html
3.3 ./FCKeditor/module/: αντιγράψτε τα αρχεία στους φακέλους των λειτουργικών μονάδων σε περίπτωση που απαιτούνται δικαιώματα μεταφόρτωσης για συγκεκριμένες μονάδες, αποθήκευση και επιλογές επεξεργασίας
3.3.1 ./FCKeditor/module/fckeditor.config.js: για τις επιλογές του επεξεργαστή, συνήθως δεν χρειάζεται να το αλλάξετε
3.3.2 ./FCKeditor/module/fckeditor.connector.php: για να καθορίσετε το φάκελο για την περιήγηση αρχείων (και τη μεταφόρτωση αποθήκευσης) => XOOPS/uploads/XOOPS_FCK_FOLDER/, απαιτείται η μη αυτόματη δημιουργία του φακέλου
3.3.3 ./FCKeditor/module/fckeditor.upload.php: καθορίστε την άδεια μεταφόρτωσης και τον αποθηκευτικό χώρο μεταφόρτωσης
3.4 XOOPS/uploads/fckeditor/: για τη δημιουργία του φακέλου εάν είναι ενεργοποιημένο το FCKeditor, χρησιμοποιείται για μεταφορτώσεις από όπου δεν καθορίζεται ο φάκελος μεταφόρτωσης
3.5 ./tinymce/tinymce/jscripts/: κατεβάστε τα αρχεία τοπικής γλώσσας από http://tinymce.moxiecode.com/language.php

4 έλεγχος ονομάτων αρχείων: για σύστημα με διάκριση πεζών-κεφαλαίων, βεβαιωθείτε ότι έχετε τα ονόματα των αρχείων κυριολεκτικά σωστά, δηλαδή, το "FCKeditor" δεν είναι πανομοιότυπο με το "fckeditor"

5 ελέγξτε το /xoopseditor/sampleform.inc.php για οδηγό ανάπτυξης
