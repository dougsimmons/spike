<!-- this is used in iframes on https://spike.fyi/thresh.php -->

<meta name="viewport" content="width=device-width, initial-scale=0.95">
<?php
$url = 'http://spike.fyi/ife-busy.php';
$file = '/var/log/scanners/globalbusy.txt';
if (isset($_POST['text']))
{
    file_put_contents($file, (int)$_POST['text']);
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}
$text = file_get_contents($file);
?>
<!-- html -->
<form action="" method="post" name="global">
<textarea name="text" cols="4" rows="1"><?php echo htmlspecialchars($text) ?></textarea>
<input type="Submit" value="tweak" />
</form>
