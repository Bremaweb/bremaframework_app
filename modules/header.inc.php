<html>
<head>
	<title><?=$meta['title']; ?></title>
</head>
<body>

<? if ( $_SESSION['error'] != "" ) {
echo $_SESSION['error'];
} ?>