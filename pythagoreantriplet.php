<?php
/*
 * pythagoreantriplet.php
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

for ($i = 1; $i <= 500; $i++) 
	for ($j = $i + 1; $j <= 500; $j++) 
		for ($k = $j + 1; $k <= 500; $k++) 
			if (((pow($i, 2) + pow($j, 2)) == pow($k, 2)) && (($i + $j + $k) == 1000)) {
				echo "${i} X ${j} X ${k} = " . $i*$j*$k . "\n";
				return;
			}
				
?>
