<?php
    require_once("../src/nameSpace.php");
    use RCS\Common;
    use RCS\Common as CM;
    use RCS\Common\myC;  //here our myC class is available globally
    // since PHP 5.6 we can use function to allow global access to specific function
    // https://wiki.php.net/rfc/use_function
    use function RCS\printh;
    use function RCS\common\printC;
    echo "Testing Namespaces";
    RCS\printH();
    printH();

    RCS\Utilities\printL();

    Common\printC();
    CM\printC();
    printC();

    $myc = new RCS\Common\myC();
    $myc2 = new Common\myC();
    $myc3 = new CM\myC();
    $myc4 = new myC();

    $myc->prC();
    $myc2->prC();
    $myc3->prC();
    $myc4->prC();
