<?= $this->doctype('XHTML1_STRICT') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?=$this->assets(new Kwf_Assets_Package_TestPackage('Kwf_Js_DoubleTapToGo'))?>
    </head>
    <body>
        <div id="main"></div>
        <div id="qunit"></div>
        <div id="qunit-fixture"></div>
    </body>
</html>
