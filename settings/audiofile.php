<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, intial-scale=1" />
	<link rel="stylesheet" href="../styles/setting.css">
	<link rel="stylesheet" href="../styles/re.css">
			<link rel="icon" type="image/x-icon" href="../Logo.png">
	<title>Dog KeyBoard</title>
	
</head>
<body>
		<header>
		<div class=yea>
		<img src="../images/F.JPG">
		</div>
		<h1>Team K9</h1>
</header>
    <nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          <div class="logo">
           
          </div>
		 <div class="navs">
        <li><a href="../navigation/lexigram.php" ><li>Lexigrams</li></a>
        <li><a href="../navigation/setting.php"><li>Settings</li></a>
		 <li><a href="../navigation/logut.php"><li>Logout</li></a>
	 </div>
        </div>
      </div>
    </nav>
		<main>
		<h2>Audio Files</h2>
		</main>
		<h2>Things</h2>
		<button onclick="speakText('food')">Food</button>
		<button onclick="speakText('treat')">Treat</button>
		<button onclick="speakText('toy')">Toy</button>
		<button onclick="speakText('kong')">Kong</button>
		<button onclick="speakText('rope')">Rope</button>
		<button onclick="speakText('ball')">Ball</button>
		<h2>Places</h2>
		<button onclick="speakText('beach')">Beach</button>
		<button onclick="speakText('crate')">Crate</button>
		<button onclick="speakText('dogpark')">DogPark</button>
		<button onclick="speakText('inside')">Inside</button>
		<button onclick="speakText('outside')">Outside</button>
		<button onclick="speakText('wood')">Wood</button>
		<h2>Feelings</h2>
		<button onclick="speakText('Hungry')">Hungry</button>
		<button onclick="speakText('Ouch')">Ouch</button>
		<h2>Action</h2>
		<button onclick="speakText('chew')">Chew</button>
		<button onclick="speakText('petting')">Petting</button>
		<script>
		function speakText(text) {
	const utterance = new SpeechSynthesisUtterance(text);
	speechSynthesis.speak(utterance);
		}
	</script>
	<main class=second>
	 <a href="../settings/lexigramoptions.php"class=left>Back Page</a>
	 </main>
</body>

</html>
<footer>

<h2>Designed By: Ebonie, Carrington, Cameron, Garret</h2>
</footer>