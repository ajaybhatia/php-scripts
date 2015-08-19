<?php
/*
 * hdtriangularnumber.php
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

function countDivisors($n) {
    $count = 0;
    for ($i = 1; $i*$i <= $n; $i++)
        if ($n % $i == 0) {
            if ($i*$i < $n) 
                $count += 2; // $i and $n/$i are different divisors
            else 
                $count += 1; // $i == $n/$i is a divisor
        }
    
    return $count;
}

$n = 1;
while (countDivisors(($n + 1) / 2) * countDivisors($n) <= 500) {
	$n++;
	
	if (countDivisors($n / 2) * countDivisors($n + 1) > 500)
		break;
		
	$n++;
}

$n = $n * ($n + 1) / 2;

echo "The first triangle number with over 500 divisors is ${n}\n";

?>
