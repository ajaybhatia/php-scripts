<?php
/*
 * namescores.php
 * 
 * Copyright 2015 Unknown <ajay@localhost>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */


function char_code($c) {
	return (ord($c) - 65) + 1;
}
	
$i = 0;
$total = 0;
$sum = [];
$file = fopen("p022_names.txt", "r");
$names = explode(",", fgets($file));
foreach($names as $name) {
	$name = str_split($names[$i], 1);
	$temp = 0;
	for ($idx = 1; $idx < count($name) - 1; $idx++)
		$temp += char_code($name[$idx]);
		
	$sum[$i] = $temp;
	$total += ($i+1) * $sum[$i];
	$i++;
}

echo $total . "\n";

fclose($file)

?>
