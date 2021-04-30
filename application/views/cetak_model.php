<?php

echo "<table border='1'>
<tr>
	<td>Name</td>
	<td>Stock</td>
	<td>Sold</td>
	<td>color</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo
	"<tr>";
	foreach ($row as $col => $cell) {
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";


