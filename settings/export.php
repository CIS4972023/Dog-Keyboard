<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, intial-scale=1" />
	<link rel="stylesheet" href="../styles/setting.css">
	<link rel="stylesheet" href="../styles/excel.css">
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
	<main>
		<h2>Export</h2>
		 <form id="myForm">
  <label for="sessionGoal">Session Goal:</label>
  <input type="text" id="sessionGoal" name="sessionGoal"><br><br>
  <label for="dog">Dog:</label>
  <input type="text" id="dog" name="dog"><br><br>
  <label for="user1">User:</label>
  <input type="text" id="user1" name="user1"><br><br>
  <label for="comment">Comment:</label>
  <input type="text" id="comment" name="comment"><br><br>
  <button type="button" onclick="exportToCSV()">Export</button>
	</form>
	<script>
function exportToCSV() {
  var data = [
    ['Session Goal', 'Dog', 'User 1', 'User 2', 'Comment'],
    [document.getElementById('sessionGoal').value, document.getElementById('dog').value, document.getElementById('user1').value, document.getElementById('comment').value]
  ];
  var csvContent = 'data:text/csv;charset=utf-8,';
  data.forEach(function(rowArray){
    var row = rowArray.join(',');
    csvContent += row + "\r\n";
  });
  var link = document.createElement('a');
  link.setAttribute('href', encodeURI(csvContent));
  link.setAttribute('download', 'myData.csv');
  link.setAttribute('type', 'text/csv');
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
	</script>
		</main>
			
</article>

			
		
			
</body>
<footer>

<h2>Designed By: Ebonie, Carrington, Cameron, Garret</h2>
</footer>
</html>