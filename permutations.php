<?php
/*
 * permutations.php
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
  
function swap(&$a, &$b) {
	$temp = $a;
	$a = $b;
	$b = $temp;
}

function permute_swap($str, $i, $n) {
	if ($i == $n - 1) {
		foreach($str as $c)
			echo $c;
			
		echo "\n";
	} else {
		for ($j = $i; $j < $n; $j++)
		{
			// Backtracking
			swap($str[$i], $str[$j]);
			permute_swap($str, $i + 1, $n);
			swap($str[$i], $str[$j]);
		}
	}
}

function permute($str) {
	permute_swap($str, 0, count($str));
}

permute(str_split($argv[1]));

?>
