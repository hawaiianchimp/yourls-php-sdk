<?php
require_once 'yourls.class.php';

$yourls = new Yourls('http://mysite.com', 'XXXXXXXXXX');

if($_GET)
{
	$output = $yourls->shorten($_GET['url'], $_GET['keyword']);
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<header>
<title>MemeBro URL Shortener</title>
</header>
<h1>Yourls</h1>
<h2>MemeBro URL Shortener</h2>
<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
<input type="text" name="url" value="<?php echo $_GET['url']; ?>" placeholder="URL"/><br>
<input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>" placeholder="keyword"/><br>
<input type="submit" value="Submit"/><br>
<?php echo $output; ?>
</form>
</html>