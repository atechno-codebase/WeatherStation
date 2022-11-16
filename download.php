<?php
$con=mysqli_connect('localhost','root','','chartjs');
$query=mysqli_query($con,"select * from barchart");

$data= "

<table border='1'>
<thead>
<tr>
<th>id</th>
<th>Temperature</th>
<th>Rainfall</th>
<th>Humidity</th>
<th>Wind</th>
</tr>
</thead>
<tbody>
";

while($row=mysqli_fetch_assoc($query))
{
$data.="
<tr>
<td>$row[id]</td>
<td>$row[Temperature]</td>
<td>$row[Rainfall]</td>
<td>$row[Humidity]</td>
<td>$row[Wind]</td>
</tr>
";
}
$data.="
</tbody>
</table>
";
$name="TJ -".date("d-m-Y");

header("Content-Type: application/xls");
header("Content-Disposition:attachment;filename=Report.xls");

echo $data;


?>