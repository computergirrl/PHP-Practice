<h2>Reg Ex Test</h2>

<form method="post" action="regextest.php">
Pattern:<input type="text" name="pattern" value="<?php echo $_POST['pattern']; ?>"/><br/>
String: <input type="text" name="string" value="<?php echo $_POST['string']; ?>"/><br/>
<input type="submit" value="test" /><br/>
<br/>

<?php
$count = preg_match_all('/'.$_POST['pattern'].'/', $_POST['string'], $matches);
print "There are $count matches.";

foreach ($matches as $v){
print "<br/>" . $v[0];
}
$date = "08-08-1976";
echo "<br/>" . preg_replace('/^(\d{2})-(\d{2})-(\d{4})$/','$3/$1/$2',$date);
?>

</form>