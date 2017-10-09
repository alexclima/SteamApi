<?php
$id = $_REQUEST['id'];
$steamApiKey = "";//coloque dentro das chaves sua apiKey
$json = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $steamApiKey ."&steamids=".$id);
$info=json_decode($json, true);
//var_dump($info);
$avatar = $info['response']['players'][0]['avatar'];
?>

<img src="<?php echo $avatar; ?>" alt="">
<br>


<?php
$realname = $info['response']['players'][0]['realname'];
echo "Nome Real: ".$realname;
?>