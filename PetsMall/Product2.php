<?php
include("head.php");
 ?>
<!--Меню категории------------------------------------------------------------------------------------------------------------------------>
	<div id="category">
		<?php
		include("menu.php");
		?>
	</div>
	
	<div id="reklama">
		<div id="reklampic" >REKLAMA 1</div>
		<div id="reklampic">REKLAMA 2</div>
	</div>
<!--Поръчка на продукт------------------------------------------------------------------------------------------------------------------------>
	<div class="blockcenter">
		
		<div id="productblock1">
			<div id="prodname">
			<h2 class="name" style="text-align:left">Двойна купичка- Цена:<font color="red" style="text-align:right">9,99</font>лв</h2>
			</div>
			<div id="view">
				<img id="photo2" src="photos/cupWood.jpg">
				<div id="miniview">
				<img id="lentapic" src="photos/cupWood.jpg">
				<img id="lentapic" src="photos/cupWood.jpg">
				<img id="lentapic" src="photos/cupWood.jpg">
				</div>			
			</div>
			<div id="blockform">
				<?php
				include("form.php");
				?>
			</div>
		</div>
<!--промоционални оферти------------------------------------------------------------------------------------------------------------------------>

		<div class="oferti">
			<div id="blockofertaX2">
				<a  href="" target="_blank">
					<img id="picX2" src="photos/watercup1.jpg">
					<div id="blocklpus">+</div>
					<img id="picX2" src="photos/skipper3kg.jpg">
					<button class="buttonplus" ><p>23,99лв <font color="bordo">-9лв</font> </p></button>
				</a>
			</div>
			<div id="blockofertaX3">
				<a  href="" target="_blank">
					<img id="picX2" src="photos/watercup1.jpg">
					<div id="blocklpus">+</div>
					<img id="picX2" src="photos/watercup1.jpg">
					<button class=" buttonplus" ><p>21,99лв <font color="bordo">-9лв</font></p> </button>
				</a>
			</div>
		</div>
<!--Блок за коментари------------------------------------------------------------------------------------------------------------------------>

		<div id="blockcoment">
			<div id="coments"></div>
			<div id="writecoment">
				<form action="/action_page.php" id="form" method="post" >
						<textarea  class="comment"  name="comment" maxlength="40" placeholder="Коментар">
						</textarea>
						<input type="submit" style="width:15%;height:100%;margin:5px;" value="Коментирай"onclick="alert('Здравей,ти ме натисна!')">
				</form>
			</div>
		</div>
	</div>
<!--Лента с сходящи  продукти------------------------------------------------------------------------------------------------------------------------>
	<div id="blocklenta"> 
		<div id="bl1">
			<a  href="test.php" target="_blank">
				<img id="linepic"src="photos/ceramicCupbl.jpeg">
				<div class="line" >Поръчай сега</div>
			</a>
		</div>
		<div id="bl1">
			<a  href="test.php" target="_blank">
				<img id="linepic"src="photos/ceramiccup.jpg">
				<div class="line" >Поръчай сега</div>
			</a>
		</div>
		<div id="bl1">
			<a  href="test.php" target="_blank">
				<img id="linepic"src="photos/Royal5kg.jpg">
				<div class="line" >Поръчай сега</div>
			</a>
		</div>
		<div id="bl1">
			<a  href="test.php" target="_blank">
				<img id="linepic"src="photos/darling10kg.jpg">
				<div class="line" >Поръчай сега</div>
			</a>
		</div>
		<div id="bl1">
			<a  href="test.php" target="_blank">
				<img id="linepic"src="photos/Pedigrie15kg.jpg">
				<div class="line" >Поръчай сега</div>
			</a>
		</div>
	</div>
<!--Крайна част FOOTER------------------------------------------------------------------------------------------------------------------------->

	
<?php
include("foot.php");
?>
