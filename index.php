<!DOCTYPE html>
<html>
<head>
	<title>Min Webbsida</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="genericons/genericons.css">
</head>
<body>
	<div class="pagepart startscreen centercontent centercontent-vertical whitetext">
		<h1 class="centertext">Välkommen till min webbsida</h1>
		<div class="centercontent centercontent-dynamicrows">
			<a class="popelement" href="#one">
				<span class="genericon genericon-user sitelinkimages"></span>
			</a>
			<a class="popelement" href="#two">
				<span class="genericon genericon-category sitelinkimages"></span>
			</a>
			<a class="popelement" href="#three">
				<span class="genericon genericon-mail sitelinkimages" aria-hidden="true"></span>
			</a>
		</div>
		<p class="centertext">Klicka på en av ikonerna eller scrolla ned för att se mer!</p>
	</div>
	<a name="one" class="anchor"></a>
	<div class="pagepart centercontent centercontent-vertical">
		<h2>Om mig</h1>
		<div class="collumns">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis, quam ut fringilla ultricies, nibh velit commodo dui, in malesuada arcu nisi et neque. Ut egestas velit ut mi vehicula volutpat. Aliquam tincidunt ligula vel ex elementum ultricies. Curabitur sed ante massa. Phasellus hendrerit dui at facilisis varius. Pellentesque laoreet, odio non malesuada ornare, nulla tellus ornare neque, imperdiet faucibus leo nisl quis dolor. Phasellus eget lacus commodo, faucibus turpis sed, vulputate tortor. Etiam laoreet ullamcorper lectus, et eleifend urna aliquet vitae. Aenean sagittis est sed porttitor sodales. Aenean scelerisque neque quis ullamcorper condimentum.<br>Suspendisse consectetur vulputate nisl, eget molestie mauris molestie dapibus. Pellentesque tortor massa, consequat sit amet dolor at, laoreet finibus nibh. In dignissim arcu quis nulla tincidunt, nec laoreet purus ultrices. Cras malesuada metus id bibendum commodo. Vestibulum dapibus, lacus eget gravida viverra, nibh odio malesuada eros, eu pellentesque augue nibh non erat. Nam sit amet semper risus. Nam massa lacus, porta nec vulputate et, interdum a eros. Nunc ultricies nulla sit amet nulla tincidunt feugiat. Proin sed nisl sapien.<br>Morbi vitae rutrum nibh. Pellentesque pulvinar cursus eros, quis dapibus ipsum tincidunt et. Fusce consequat bibendum orci, non commodo eros ullamcorper eu. Suspendisse luctus diam et commodo convallis. Sed tempor ex quis sem bibendum gravida. Vestibulum scelerisque sit amet risus eu cursus. Mauris finibus, nisi eget pulvinar viverra, ipsum massa ornare ipsum, vitae vestibulum massa lacus vitae odio. Vestibulum tempus, enim vitae pellentesque mattis, est nisi mattis lorem, at interdum quam tortor ut risus. Vestibulum ac ante odio. Morbi posuere nibh est, id ullamcorper nunc tristique ut. Nullam vulputate ex laoreet lectus consequat, a tincidunt arcu pretium. Donec luctus eget urna ut pharetra. Donec malesuada sapien nec lacinia egestas. Donec id dolor in urna egestas ornare. Duis lacinia quam urna, sed commodo ligula sagittis ut. Nam mollis enim nisi, a facilisis quam feugiat vitae.</div>
	</div>
	<a name="two" class="anchor"></a>
	<div class="pagepart blue centercontent centercontent-vertical whitetext">
		<h2>Portfolio</h1>
		<div class="centercontent centercontent-dynamicrows">
			<div class="portfolioobject">
				<img class="portfolioimage" src="portfolioimages/CV.png">
				<h3 class="portfoliotitle" >CV</h3>
			</div>
			<div class="portfolioobject">
				<img class="portfolioimage" src="portfolioimages/LMS.jpg">
				<h3 class="portfoliotitle" >easyLMS</h3>
			</div>
			<div class="portfolioobject">
				<img class="portfolioimage" src="portfolioimages/kodstuga.png">
				<h3 class="portfoliotitle" >Kodstuga</h3>
			</div>
			<div class="portfolioobject">
				<img class="portfolioimage" src="portfolioimages/kvallskurs.png">
				<h3 class="portfoliotitle" >Kvällskurser</h3>
			</div>
		</div>
	</div>
	<a name="three" class="anchor"></a>
	<div class="pagepart centercontent centercontent-vertical">
		<h2>Kontakta mig</h1>
		<form>
			<input class="formfield" type="text" name="name" placeholder="Namn"><br>
			<br>
			<input class="formfield" type="text" name="email" placeholder="E-post"><br>
			<br>
			<textarea class="formfield" type="text" name="message" placeholder="Meddelande" rows="7" cols="30" ></textarea><br>
			<br>
			<input class="button" type="submit">
		</form>
	</div>
</body>
</html>