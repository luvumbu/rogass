<h1 class="center">Créativité</h1>
<style type="text/css">
	.center
	{
		text-align: center;
	}
	#total .creativite
	{
		opacity: 0.2;
	}
	.creativite:hover
	{
		cursor: default;
	}
</style>

<div class="ordre">

<?php 
$dir = ".././images";
//  si le dossier pointe existe
if (is_dir($dir)) {

   // si il contient quelque chose
   if ($dh = opendir($dir)) {

       // boucler tant que quelque chose est trouve
       while (($file = readdir($dh)) !== false) {

           // affiche le nom et le type
       	if($file!="." and $file!="..")
       	{
       		 echo '<img src="images/'.$file.'" class="imoo">';
           
       	}
          
       }
       // on ferme la connection
       closedir($dh);
   }
}
?>
</div>