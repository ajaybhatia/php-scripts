<?php
/*
 * summationofprimes.php
 * 
 * Copyright 2015 Ajay Bhatia <prof.ajaybhatia@gmail.com>
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

function isPrime($n) {
	for ($i = 2; $i <= sqrt($n); $i++) 
		if ($n % $i == 0)
			return false;
			
	return true;
}

$sum = 0;
for ($i = 2; $i <= 2000000; $i++) 
	if (isPrime($i))
		$sum += $i; 

echo "Sum of prime numbers till 2 million is " . $sum . "\n";

?>
