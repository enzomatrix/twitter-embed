<?php
error_reporting(0);

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$tweet = $_GET['tweet'];
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
if ($_GET['tweet']) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://publish.twitter.com/oembed?url='.$tweet.'&lang=es&theme=dark&dnt=true');
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $input = curl_exec($ch);

    $info = curl_getinfo($ch);
    //print_r($info);
    //print_r($input);
    curl_close($ch);

	$json = json_decode($input, true);
	echo $json['html'];
}
else
{
	echo '<form action="twitter.php" method="get">';
    echo 'Tweet: <input name="tweet" value="" />';
    echo '<button>Ver tweet</button>';
	echo '</form>';
}
?>

</body>
</html>
