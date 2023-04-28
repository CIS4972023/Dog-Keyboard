<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, intial-scale=1" />
	<link rel="stylesheet" href="../styles/setting.css">
	<link rel="stylesheet" href="../styles/pets.css">
	<link rel="icon" type="image/x-icon" href="../Logo.png">
	<title>Dog Keyboard</title>
	
	



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
        <li><a href="../navigation/lexigram.php" ><li>Lexigram</li></a>
        <li><a href="../navigation/setting.php"><li>Settings</li></a>
		 <li><a href="../navigation/logut.php"><li>Logout</li></a>
	 </div>
        </div>
      </div>
    </nav>
	
		<main>
		<h2>Outside</h2>
		</main>
		<article>
		
<img id="image1" src="../outside/outside.JPEG" onclick="changeImage()"/>

<script>
  var images = ["../outside/outside.JPEG", "../outside/outside1.JPEG", "../outside/outside.JPEG", "../outside/outside2.JPEG", "../outside/outside.JPEG", "../outside/outside3.JPEG", "../outside/outside.JPEG", "../outside/outside4.JPEG", "../outside/outside.JPEG"];
  var currentImageIndex = 0;
  var text = ["outside"];
  var currentTextIndex = 0;

  function changeImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length; // Increment the current index and loop back to 0 if we reach the end of the array
    document.getElementById("image1").src = images[currentImageIndex]; // Update the image source to the next image in the array
  }
  function speakText() {
    var utterance = new SpeechSynthesisUtterance(text[currentTextIndex]);
    window.speechSynthesis.speak(utterance);
  }
</script>



</div>




		</article>
			<main class=second>
		<a href="../inside/inside.php"class="left">Back Page</a>	
		<a href="../wood/wood.php"class="right">Next Page</a>
			</main>
</body>
<footer>

<h2>Designed By: Ebonie, Carrington, Cameron, Garret</h2>
</footer>
</html>