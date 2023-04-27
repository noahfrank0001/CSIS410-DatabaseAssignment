<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Thank you</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<?php include "cms_header.php"; ?>
	<?php include "dbConnect.php" ?>


	<a href="database.php">< Comments</a>
	<?php  
	$commentId = $_POST['cmntId'];

	$query = "DELETE FROM comments
			  WHERE commentId = $commentId;";

	if ($result = mysqli_query($dbc, $query)) {
		echo "<script>alert('Comment Deleted');</script>";
		echo "<script>location.href='postDatabase.php'</script>";
	} else {
		echo "<h1>There was an error.</h1>";
	}
	?>

	<br>
	<br>
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>