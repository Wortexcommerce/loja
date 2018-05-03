<?php
require("../../config.php");


$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Produto cadastrado com sucesso.';


header("Location: ".ADMIN_WORTEX."produtos");

?>