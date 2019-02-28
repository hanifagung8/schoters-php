<!DOCTYPE html>
<html>
<head>
	<title>Personalize</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="top">
	<div class="contain fontsatu">
		<a href ="" class="hamburger">
			<div class="ham"></div>
			<div class="ham"></div>
			<div class="ham"></div>
		</a>
		<div class="logo" onclick="location.href='index.php'">
			<p>Schoters</p>
		</div>
		<div class="search-box">
	      <input class="form-control" id="inputdefault" type="search" placeholder="Cari beasiswa apa?" aria-label="Cari beasiswa apa?">
		</div>
		<div class="login">
			<p>Login</p>
		</div>
		<div class="user icon">
			<i class="material-icons">person</i>
		</div>
		<div class="bell icon">
			<i class="material-icons">notifications</i>
		</div>
	</div>
	</div>

	<div class="body-content fontdua">
		<div class="preference">
			<p>Home > Profile > Preference</p>
		</div>
		<div class="inner-body">
			<div class="atasHead"></div>
			<div class="heads">
				<p>Personalize your Schoters homepage</p>
			</div>
			<div class="contents">
				<p>Pick 5 top scholarships categories that you are interested to help us deliver
				the most relevant information with your preferences</p>
			</div>
			<div class="tombols">
				<div class="tombol" id="S1/Bachelor">
					S1/Bachelor
				</div>
				<div class="tombol" id="S2/Master">
					S2/Master
				</div>
				<div class="tombol" id="S3/PhD">
					S3/Ph.D
				</div>
				<div class="tombol" id="Short Course">
					Short Course
				</div>
				<div class="tombol" id="Degree">
					Degree
				</div>
				<div class="tombol" id="Non-degree">
					Non-degree
				</div>
				<div class="tombol panjang" id="Medical degree">
					Medical degree
				</div>
				<div class="tombol" id="Post doc">
					Post doc
				</div>
				<div class="tombol" id="Technology">
					Technology
				</div>
				<div class="tombol" id="CV Writing">
					CV Writing
				</div>
				<div class="tombol" id="Research">
					Research
				</div>
				<div class="tombol panjang" id="Motivation letter">
					Motivation letter
				</div>
				<div class="tombol panjang" id="Personalized mentor">
					Personalized mentor
				</div>
				<div class="tombol panjangbgt" id="Professional scholarship">
					Professional scholarship
				</div>
				<div class="tombol" id="Consultation">
					Consultation
				</div>
				<div class="tombol" id="TOEFL">
					TOEFL
				</div>
				<div class="tombol" id="IELTS">
					IELTS
				</div>
			</div>
			<button class="doneButton">Done</button>
			<div class="beasiswa"></div>
			<!-- <div class="scholars">
			</div> -->
		</div>
	</div>

	<script>
		var jsonCollected = [];
		$(".tombol").click(function() {
			$(this).toggleClass("tombolBiru");
		});
		$(".doneButton").click(function() {
			var arr = [];
			$(".tombolBiru").each(function() {
				arr.push($(this).attr('id'));
			});
			var content = arr;
			$.ajax({
				dataType: 'json',
				data: content,
				url: 'https://private-90552-schoterspersonal.apiary-mock.com/categories',
				success: function(result) {
					var newArr = [];
					for (let i = 0; i < result.length; i++) {
						if (content.includes(result[i].name)) {
							newArr.push(result[i]);
						}
					}
					$(".preference").remove();
					$(".doneButton").remove();
					$(".heads").remove();
					$(".contents").remove();
					$(".tombol").remove();
					$('.atasHead').append('<div class="heads"><p>List of Scholarship Programs</p></div>')
					for (let i = 0; i < newArr.length; i++) {
						$('.beasiswa').append('<div class="scholars"><div class="image-scholars"><img class="gbr" src="https://www.chemtecpest.com/images/college-students.png"></div> <div class="tulisan-scholars"> <div class="nama-scholars">' + newArr[i].name + '</div><div class="description-scholars">' + newArr[i].description_eng + '</div></div></div></div>');	
					}
					
				}
			})
		});
	</script>

</body>
</html>