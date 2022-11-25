<?php
/**
 * The Arrays.
 * The Whole Arrays.
 * And Nothing But Arrays.
 */
$vargu = ['Elvira', 'Arian', 'Aurora',
		  'Fisnik', 'Filan', 'Fisteku'];
// echo count($vargitu;
// echo 'Ne klase jane: ' . implode(', ', $vargu);
// var_dump(in_array('Filan', $vargu));

// Overwrite Arr Element
$vargu[2] = 'Filan';

// Remove Last Element - LIFO
array_pop($vargu);
// var_dump($vargu);

// Add Element to the end of array
array_push($vargu, 'Bossi');
// var_dump($vargu);

// remove array el at index
unset($vargu[3]);
// var_dump($vargu);

sort($vargu);
// var_dump($vargu);

$num = [5, 3, 7, 8, 1];
sort($num);
// var_dump($num);

// Array Merge
$emrat = ['Arian', 'Elvira', 'Filan'];
$mbiemrat = ['Hazrolli', 'Bytyqi', 'Fisteku'];
$rezulti = array_merge($emrat, $mbiemrat);
// var_dump($rezulti);

// 2d - Dimensional Arrays
$array2d = [
		'Arian' => 'Hazrolli',
		'Fatlind' => 'Elshani',
		'Valon' => 'Luqi',
		6 => 'Filan',
	];
// echo $_POST['name'];
// echo $array2d['Arian'];


