<?php
if ($_GET['randomId'] != "wGA7_JSP0t0I0zzrSHmRgEw3TQY5MnR_z058Pd9O2vfnFC4ZRMIQ7bSaOeSHt30v") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
