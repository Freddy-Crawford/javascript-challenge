<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>javascript</title>
		<script>
			function lighton() {
				document.getElementById('myimage').src = "bulbon.gif";
			}
			function lightoff() {
				document.getElementById('myimage').src = "bulboff.gif";
			}
		</script

	</head>
	<body>
		<img id="myimage" onclick="lighton()" onmouseup="lightoff()" src="bulboff.gif" width="100" height="180" />



		<p id="p1">Yeah, apparently the taco shack was robbed. They left the money but took the tacos. Let’s do a beef and a chicken, and one with both. Black or pinto beans? Tacos Al pastor De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins. Add in a few el Pastor with guac and diced onions. If you were a taco, would you eat yourself? If you were a taco, would you eat yourself? Yeah, apparently the taco shack was robbed. They left the money but took the tacos.</p>

		<p id="p2">Bacon ipsum dolor amet alcatra ham hamburger jerky ball tip brisket flank salami prosciutto pork belly tri-tip. Shankle tenderloin cupim kevin fatback biltong t-bone ribeye andouille strip steak leberkas tri-tip drumstick shoulder. Pork belly short loin tenderloin, bacon cow pastrami shankle pork loin meatball kevin frankfurter tri-tip biltong pig ham. Doner pork burgdoggen, picanha spare ribs t-bone cupim cow tail ground round pastrami boudin tongue chicken filet mignon.</p>

		<p>And blowing into maximum warp speed, you appeared for an instant to be in two places at once. I've had twelve years to think about it. And if I had it to do over again, I would have grabbed the phaser and pointed it at you instead of them. A surprise party? Mr. Worf, I hate surprise parties. I would *never* do that to you. Fear is the true enemy, the only enemy. Mr. Worf, you sound like a man who's asking his friend if he can start dating his sister.</p>

		<script>
			document.getElementById("p2").style.color = "blue";
			document.getElementById("p2").style.fontFamily = "Arial";
			document.getElementById("p2").style.fontSize = "larger";
		</script>

		<script>
			function changeColor(p4)
			{
				document.getElementById(p4).style.color = "#FFE0C6"; // textcolor
				document.getElementById(p4).style.backgroundColor = "#ff3446"; // backcolor
			}
		</script>

		<div id="p4">Hello There !!</div>

		<a href="#" onclick="changeColor('p4'); return false;">Change Color</a>
	</body>
</html>