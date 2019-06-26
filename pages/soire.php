<h1 class="center">Soiree</h1>


<div class="timoo">
<?php 
$dir = ".././images/rogass/soiree";
//  si le dossier pointe existe
if (is_dir($dir)) {

   // si il contient quelque chose
   if ($dh = opendir($dir)) {

       // boucler tant que quelque chose est trouve
       while (($file = readdir($dh)) !== false) {

           // affiche le nom et le type
       	if($file!="." and $file!="..")
       	{
       		 echo '<img src="images/rogass/soiree/'.$file.'" class="imoo">';
       		           
       	}
          
       }
       // on ferme la connection
       closedir($dh);
   }
}
?>
</div>

<style type="text/css">
	.soire
	{
		opacity: 0.2 ; 
	}
</style>