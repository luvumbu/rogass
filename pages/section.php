
<div class="margin-top"></div>
<meta charset="utf-8">

<div class="center">

<iframe src="https://player.vimeo.com/video/64222380" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>


<style type="text/css">
	.center
	{
		
		
		text-align: center;
	}
	.center2
	{
		margin: auto;
		width: 80%;
		background-color:black;
		padding: 30px;
		
		color: #b08340 ;
	}
	.margin-top
	{
		height: 100px;
		
	}
	body
	{

	}
</style>


<div class="center2">
	<h1>Rogass</h1>
	<p>
En tant qu'artiste plasticien et consommateur de prÃªt-Ã -porter, j'ai ressenti le besoin de porter des vÃªtements subtilement imprÃ©gnÃ©s des courants artistiques, d'oÃ¹ le projet de combler ce vide et de crÃ©er des vÃªtements peints avec un grand travail sur la matiÃ¨re. De vÃ©ritables oeuvres d'art uniques en leur genre.</p>
</div>
<div class="margin-top"></div>
<div class="ccp">DECOUVREZ L'UNIVERS DE ROGASS // PORTFOLIO</div>


<div id="total">
	
<div class="creativite cursor" onclick="creativite()"><p>Créativité</p></div>
<div class="rgroupe cursor" onclick="rgroupe()"><p>Gabi Groupe</p></div>
<div class="penture cursor" onclick="penture()"><p>Penture</p></div>
<div class="soire cursor" onclick="soire()"><p>Soirée</p></div>
</div>
<div class="margin-top"></div>
<style type="text/css">

#total
{
	
	display: flex;
	justify-content: space-around;
	flex-wrap: wrap;
	width: 80%;
	margin: auto;

}
.cursor
{
	cursor: pointer;
}
#total p
{
	background-color:rgba(1,1,1,0.8); 
	border: 1px solid rgba(255,255,255,0.5) ;
	position: relative;
	top: 100px;
	text-align: center;
	padding: 15px;
}
#total
{

}
.rgroupe
{
	width: 293px;
	height: 293px;
	background-image: url("images/1678508160_small.jpg");
	
	
}

.dd,.penture,.selebrite,.soire
{
	width: 293px;
	height: 293px;
	
}
.soire
{
	background-image: url("images/714982687_small.jpg");
}
.selebrite
{
	background-image: url("images/190424856_small.jpg");
}
.penture
{
	background-image: url("images/190424856_small.jpg");
}
.creativite,.und
{
	background-color: rgba(0,0,0,0.8); ;
	
	width: 293px;
	height: 293px;
	background-image: url("images/714984522_small.jpg");
	background-size: 100% 100%;
}
#total 
{
	color: white ;
	text-decoration: none;
	
	

}
#total  p
{
/*	background-color: rgba(176,131,64,0.7);
	text-align: center;
	margin-top: 100px;
	padding: 15px;
	color: rgba(0,0,0,0.6);
	*/
}

</style>


<div id="creativite"></div>

<script>


	function requet(page)
	{
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("creativite").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", page, true);
  xhttp.send();
	}
function creativite() {
	requet("pages/creativite.php");
  
}


function rgroupe() 
{
	requet("pages/rgroupe.php");
}
function penture() 
{
	requet("pages/penture.php");
}
function soire() 
{
	requet("pages/soire.php");
}
</script>



<style type="text/css">
	.imoo
	{
		width: 300px;
		height: 300px;
		margin: 5px;
	}
	.ordre
	{
		width: 70%;
		margin: auto;
		flex-wrap: wrap;
	}

		.imoo
	{
		width: 300px;
		height: 300px;
	}
	.timoo
	{
		display: flex;justify-content: space-around;
		width: 80%;
		margin: auto;
		flex-wrap: wrap;
	}
</style>
<div class="ordre">
