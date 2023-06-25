



<?php

/*require 'autoload.php';*/


require 'view/parts/header.php';
require 'model/manager/connectDb.php';

require 'model/class/geterandseter.php';


require 'model/manager/display.php';

require 'view/detailaddeditlist/list.php';





$object = new display(); 

$object->getAll()

?>
<?php 
require 'view/parts/footer.php';
?>