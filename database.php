<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Feedback</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<?php include "cms_header.php"; ?>
	
	<br>
	<h1>Comments</h1>
	<form method="post" action="postDatabase.php">
		<label for="uName">Name:</label>
		<input type="text" name="uName"><br><br> 		
		<label for="uTitle">Title:</label>
		<input type="text" name="uTitle"><br><br>
		<label for="uComment">Comment:</label>
		<textarea name="uComment" rows="5" cols="30"></textarea>

		<input type="submit" name="uSubmit" value="Post">
 
	</form>

	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>