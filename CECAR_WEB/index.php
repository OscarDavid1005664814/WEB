<?php

if(isset($_GET['programa'])) {
  include "vista/programa.php";
}
elseif(isset($_GET['curso'])) {
  include "vista/cursos.php";
}
elseif(isset($_GET['docentes'])) {
  include "vista/docente.php";
}elseif(isset($_GET['personaladm'])){
  include "vista/personalADM.php";
}
else{
  include('C:\xampp\htdocs\PHP\CECAR_WEB\includes\header.php');
}
?>