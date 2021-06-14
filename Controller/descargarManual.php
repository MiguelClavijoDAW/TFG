<?php
header("Content-disposition: attachment; filename=Manual_de_Uso.pdf");
header("Content-type: application/pdf");
readfile("../manual/Manual_de_Uso.pdf");
?>