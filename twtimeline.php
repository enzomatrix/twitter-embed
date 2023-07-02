<?php
error_reporting(0);

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$user = $_GET['user'];
?>
<html data-layout-mode="dark">
<head>
    <style>
        body {
            padding: 25px;
            font-size: 25px;
            background-color: black;
            color: white;
        }
    </style>
	<meta name="twitter:widgets:theme" content="dark" /><meta name="twitter:widgets:link-color" content="#80ffff" /><meta name="twitter:widgets:border-color" content="#000000" />
</head>
<body>
<?php
if ($_GET['user']) {
	echo '<a class="twitter-timeline" data-lang="es" href="https://twitter.com/'.$user.'?ref_src=twsrc%5Etfw">Tweets de @'.$user.'</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
}
else
{
	echo '<form action="twtimeline.php" method="get">';
    echo 'Usuario de Twitter: <input name="user" value="" />';
    echo '<button>Ver timeline</button>';
	echo '</form>';
}
?>

</body>
</html>
