<div class="container">

<div class="row">

<div class="col-lg-12">

<?php
require 'src/Model/pekerja.php';

$pekerja= new Pekerja();

echo 'Hi '.$pekerja->nama.'<br/>';
echo $pekerja->jantina.'<br/>';
 

?>


</div>

</div>


</div>
