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
	if (isset($_POST['uName'])) {
		$name = $_POST['uName'];
		$title = $_POST['uTitle'];
		$comment = $_POST['uComment'];

		$query = "INSERT INTO comments (commentId, name, title, comment, commentDate) 
				  VALUES(default, '$name', '$title', '$comment', default);";

		if ($result = mysqli_query($dbc, $query)) {
			echo "<h1>Thank you for your feedback!</h1>";
		} else {
			echo "<h1>There was an error.</h1>";
		}
		}
	?>

	


	<?php 
	
		$query2 = "SELECT commentId, name, title, comment, commentDate 
				   FROM comments
				   ORDER BY commentId DESC;";
		if ($result2 = mysqli_query($dbc, $query2)) {
			while ($comment = mysqli_fetch_array($result2)) {
				echo "
					<table>
						<tr>
							<td><b>{$comment['name']}</b></td>
							<td><b>{$comment['title']}:</b></td>
						</tr>
						<tr>
							<td>{$comment['commentDate']}</td>
							<td><q>{$comment['comment']}</q></td>
						</tr>
						<tr>
							<td>
								<form method='post' action='deleteComment.php'>
									<input type='hidden' id='cmntId' name='cmntId' value='{$comment['commentId']}'>
									<a href='deleteComment.php'><input type='submit' value='Delete'</a>
								</form>
							</td>
							<td>
								<form method='post' action='editComment.php'>
									<input type='hidden' id='cmntId' name='cmntId' value='{$comment['commentId']}'>
									<textarea name='editComment' rows='3' cols='20'></textarea> 
									<a href='editComment.php'><input type='submit' value='Edit'></a>
								</form>
							</td>

							<td></td>
						</tr>
					</table>
					<br>

				";
			}
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