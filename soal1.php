<?php
function getMaxLength($arr, $n)
{
	$count = 0;
	$result = 0;

	for ($i = 0; $i < $n; $i++)
	{
		if ($arr[$i] == 0)
			$count = 0;
		else
		{
			$count++;
			$result = max($result, $count);
		}
	}

	return $result;
}
$arr = array(1, 1, 0, 1, 1, 1);
$n = sizeof($arr) / sizeof($arr[0]);
echo getMaxLength($arr, $n) ;

?>
