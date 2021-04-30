<?php

echo "<table border='1'>
<tr>
	<td>NO</td>
	<td>NIM</td>
	<td>NAMA DEPAN</td>
	<td>NAMA BELAKANG</td>
	<td>JENIS KELAMIN</td>
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


