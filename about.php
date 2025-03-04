<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>許閔慈簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:#FF9224	; font-size:55px;}
		h2 {color:#AAAAFF	; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Hsu MinTzu";
		}
	</script>


</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" width="110%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

	<td>
	   <h1>許閔慈</h1>
	   <h2 id="h2text">Hsu MinTzu</h2>
    </td>
    </tr>
    </table>

	<table width="70%" border="1">
		<tr>
			<td>
	靜宜大學網頁：<a href="https://www.pu.edu.tw">https://www.pu.edu.tw/</a><br>
	FB：<a href="https://www.facebook.com/graymystar"target="_blank">https://www.facebook.com/graymystar</a><br>
	Tel:<a href="tel:0966307611">0966307611</a><br>
	E-Mail:<a href="mailto:melisaqq55@gmail.com">melisaqq55@gmail.com</a><br>
    </td>
    <td>
	大象席地而坐電影配樂<br>
	<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
</td>
  <td>
	不要去臺灣<br>
	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
  </td>
  </tr>
  </table>
  <table>
  <iframe height="430" width="350" src="https://bot.dialogflow.com/7d7d5a1e-178f-4f99-b334-5117881c94b1"></iframe>
</table>


<?php echo date("Y-m-d") ?>
</body>
</html>