<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link href="project.css" rel="stylesheet" type="text/css">
  <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript">
	function random(num) {
		var myrandom = Math.floor(Math.random() * num)
		return myrandom
	}
    var names = ["Natalia", "Dan", "Kate", "Moris", "Maria", "Teon", "Kris", "Marina", "Nikita", "Natan"]
	var ages = [25, 33, 22, 36, 30, 46, 50, 42, 40, 29]
	var theImages = [ "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg" ];
	var complaints = ['headache', 'toothache', 'stomachache', 'swollen leg'];
	var recommendations = ['1 day rest', 'visit the dentist', 'take a pill', 'make an X-ray'];
	var recommendations2 = ['nothing to do', 'drink water', 'drink hot milk', 'eat meat', '2 day rest', 'walk in the park'];
	var randomCompl = random(4)
	</script>
 </head>
<body>
<form method="post" action="contact.php">
  <fieldset>
    <legend>Contact information</legend>
	<div class="bar-line">
	<div class="bar-line__left">
	<p><a id="photo"></a></p>
	<script>
	var random = random(10);
	document.getElementById('photo').innerHTML = '<img src="' + theImages[random] + '" class="fig" alt="Here must be photo">';
	</script>
    <p><label>Name: </label><a id="name" name="name"></a></p>
	<input type="hidden" id="name1" name="name1">
	<script>
	var name = names[random];
	document.getElementById('name').innerHTML = name;
	document.getElementById('name1').value = name;
	</script>
    <p><label for="age">Age: </label><a id="age" name="age"></a></p>
	<input type="hidden" id="age1" name="age1">
	<script>
	var age =  ages[random];
	document.getElementById('age').innerHTML = age;
	document.getElementById('age1').value = age;
	</script>
	<div class="bar-line__right"><p><label for="complaint">Complaint: </label><a id="compl"></a></p></div>
	<input type="hidden" id="compl1" name="compl1">
	<script>
	var compll = complaints[randomCompl];
	document.getElementById('compl').innerHTML = compll;
	document.getElementById('compl1').value = compll;
	</script>
	</div>
  </fieldset>
  <fieldset>
    <legend>Select destination</legend>
	<div class="bar-line">
	<p><label>Recommendation: </label><a id="recommendation"></a></p></div>
	<input type="hidden" id="recomm" name="recomm">
	<script>
	var rec = recommendations[randomCompl];
	document.getElementById('recommendation').innerHTML = rec;
	document.getElementById('recomm').value = rec;
	</script>
<div class="radio-container">
		<div class="form-item radio-btn nth-4">
		  <input type="radio" name="option1" id="radio6">
		  <label for="radio6"><a id="radio1"></a></label>
		  <script>
		  var val1 = recommendations2[Math.floor(Math.random() * 6)];
		  document.getElementById('radio1').innerHTML = val1;
		  document.getElementById('radio6').value = val1;
		  </script>
		</div>
		  <div class="form-item radio-btn nth-4">
		  <input type="radio" name="option1" id="radio7">
		  <label for="radio7"><a id="radio2"></a></label>
		  <script>
		  var val2 = recommendations2[Math.floor(Math.random() * 6)];
		  document.getElementById('radio2').innerHTML = val2;
		  document.getElementById('radio7').value = val2;
		  </script>
		  </div>
		<div class="form-item radio-btn nth-4">
		  <input type="radio" name="option1" id="radio8" value ="val3">
		  <label for="radio8"><a id="radio3"></a></label>
		  <script>
		  var val3 = recommendations2[Math.floor(Math.random() * 6)];
		  document.getElementById('radio3').innerHTML = val3;
		  document.getElementById('radio8').value = val3;
		  </script>
		</div>
		<div class="form-item radio-btn nth-4">
		  <input type="radio" name="option1" id="radio9" checked>
		  <label for="radio9"><a id="radio4"></a></label>
		   <script>
		  var val4 = recommendations[randomCompl];
		  document.getElementById('radio4').innerHTML = val4;
		  document.getElementById('radio9').value = val4;
		  </script>
		</div>
	  </div>
  </fieldset>
<div>
<input type="submit" name="Submit" id="button" value="Send" class="button-wrapper">
</div>
</form>
 </body>
</html>