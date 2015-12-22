<!HTML>
<head>
	<title>C-Ryan's Twitch Mult-Stream</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body bgcolor="black">
<?
extract($_REQUEST);
extract($_SERVER);
extract($_SESSION);

if (!$group) {
  //modify this -- put whatever Twitch usernames you want here.
  $channels="cryancaire,huevos74,sobuto,chuckdatruc7";
}
if (!$h) {
  $h = "400";
}
if (!$w) {
  $w = "400";
}
if ($channels) {
  $cArray = explode(",", $channels);
}
if (!$chat) {
	$chat = $cArray[0];
}
$howManyChan = count($cArray);
$cols = round($howManyChan/2);
if ($howManyChan == 4) {
  $cols = "2";
}
$chatW = ($howManyChan*40)+350;
echo "<table><tr><td>";
echo "<table><tr>";
	$tabLink = "<div id=\"tabs\"><ul>";
	$tabCont = "";
for ($i=0;$i<$howManyChan;$i++){
	$tabLink = $tabLink."<li><a href=\"#$cArray[$i]\">$cArray[$i]</a></li>";
	$tabCont = $tabCont."<div id=\"$cArray[$i]\"><p><iframe frameborder=\"0\" scrolling=\"0\" src=\"http://twitch.tv/$cArray[$i]/chat?popout=\" height=\"800\" width=\"$chatW\"></iframe>  </p></div>";
  echo "<td>";
  echo "<iframe src=\"http://player.twitch.tv/?channel=$cArray[$i]\" width=\"$w\" height=\"$h\" frameborder=\"0\" scrolling=\"no\" class=\"livestream_video\"></iframe>";
  echo "</td>";
  		if ((($i+1)%$cols)=="0"){
			echo "</tr><tr>";
		}
}
$tabLink = $tabLink."</ul>";
$tabCont = $tabCont."</div>";
echo "</tr></table>";
echo "<td rowspan=2>$tabLink $tabCont</td>";
echo "</tr></table>";
?>
</body>