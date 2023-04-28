<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, intial-scale=1" />
	<link rel="stylesheet" href="../styles/setting.css">
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
        <li><a href="../navigation/lexigram.php" ><li>Lexigrams</li></a>
        <li><a href="../navigation/setting.php"><li>Settings</li></a>
		 <li><a href="../navigation/logut.php"><li>Logout</li></a>
	 </div>
        </div>
      </div>
    </nav>
	
	<script>
  const navToggle = document.querySelector('.checkbox');
  const navLinks = document.querySelectorAll('.navs li');

  function toggleNavbar() {
    document.body.classList.toggle('nav-open');
  }

  navToggle.addEventListener('click', toggleNavbar);
  navLinks.forEach(link => link.addEventListener('click', toggleNavbar));
</script>
<main>
	<h2>Lexigram Albums</h2>
		</main>
		<article>
	 

		<ul>
		<div class="selfcontainer">
		<div class="box">
			<div class="content">
			<img src= "../images/dogs.JPG">
			<a href="../food/food.php"><h3>Things</h3></a>
		</div>
		</div>
		<div class="box">
			<div class="content">
			<img src= "../images/feel.JPG">
			<a href="../hungry/hungry.php"><h3>Feelings</h3></a>
		</div>
		</div>
		<div class="box">
			<div class="content">
			<img src= "../images/action.JPG">
			<a href="../actions/action.php"><h3>Actions</h3></a>
		</div>
		</div>
		<div class="box">
			<div class="content">
			<img src= "../images/place.JPG">
			<a href="../beach/beach.php"><h3>Places</h3></a>
		</div>
		</div>
		</div>
		</div>

		
		</article>
			
		
			
</body>
<footer>
<h2>Designed By : Ebonie, Carrington, Cameron, Garret</h2>
</footer>
</html>