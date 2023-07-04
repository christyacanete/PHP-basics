<?php 
header('Content-type: text/javascript'); 

$random = rand(10,14);
?>

$(document).ready(function(){
  console.log("You are <?= $random*10 ?>x better than before!");
});