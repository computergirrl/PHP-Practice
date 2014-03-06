<?php
$interests = array('tennis','baseball','basketball');
sort($interests);
?>
<html><body>
<form method="get">
Name: <input type="text" name="name" /><br/>
Interests: <select name="interests[]" multiple="true" size="3">
<?php
foreach($interests as $v){
print "<option value=\"$v\">$v</option>";
}
?>
</select>
<br/>
<input type="submit" value="submit" />
</form>
<?php
//var_dump($_GET);
//print_r($_GET);
foreach($_GET as $k=>$v)
{
	if(!is_array($v))
	{
	print "$k = $v <br/>";
	}
	else
	{
	print "$k = ";
		if($v)
		{
		$v = join(" ", $v);
		print "$v";
		}

	}
}
/*
$myinterests = $_GET['interests'];
	if($myinterests){
	$myinterests = join(" ", $myinterests);
	print $myinterests;
	}
	else
	print "you have no interests";
*/

//ARRAY FUNCTIONS

$words = array('bob', 'mary');
array_push($words, 'sue', 'mike'); //add to end
array_unshift($words, 'lucy', 'john'); //add to beginning
$removed=array_pop($words);  //removed last element
array_splice($words,1,2); //removes 2 elements starting with subscript 1
$count = count($words);
print "total in array = ".$count."<br/>";
print_r($words); //prints array info	
?>
</body>
</html>
