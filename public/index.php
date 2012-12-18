<?php

require_once '../app/config/definitions.php';

require_once INC_DIR . 'head.php';

require_once INC_DIR . 'header.php';

$tpl = $mustache->loadTemplate('index');

echo $tpl->render(array(

    ));

require_once INC_DIR . 'footer.php';


?>