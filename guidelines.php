<?php
	$t_url = 'http://mantisbt.org/wiki/doku.php/mantisbt:coding_guidelines';
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $t_url);
	header('Content-Type: text/html');
?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		 <meta charset="UTF-8">
		 <meta http-equiv="refresh" content="1;url=<?php echo $t_url; ?>">
		 <script type="text/javascript">
		     window.location.href = "<?php echo $t_url; ?>"
		 </script>
		 <title>Page Redirection</title>
	</head>
	<body>
		This page has moved.
		If you are not redirected automatically, follow the <a href='<?php echo $t_url; ?>'>link</a>.
	</body>
</html>
