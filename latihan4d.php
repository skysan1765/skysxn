<?php

$data = array(
  array(
    'negara'=>'indonesia',
    'ibukota'=>'jakarta',
    'kode telpon'=>'+62',
  ),
  array(
    'negara'=>'singapura',
    'ibukota'=>'singapura',
    'kode telpon'=>'+65',
  ),
  array(
    'negara'=>'malaysia',
    'ibukota'=>'kuala lumpur',
    'kode telpon'=>'+60',
  ),
  array(
    'negara'=>'brunei',
    'ibukota'=>'bandar seri begawan',
    'kode telpon'=>'+673',
  ),
  array(
    'negara'=>'thailand',
    'ibukota'=>'bangkok',
    'kode telpon'=>'+66',
  ),array(
    'negara'=>'laos',
    'ibukota'=>'vientiane',
    'kode telpon'=>'+656',
  ),
  array(
    'negara'=>'philifina',
    'ibukota'=>'manila',
    'kode telpon'=>'+63',
  ),array(
    'negara'=>'myanmar',
    'ibukota'=>'naypyidaw',
    'kode telpon'=>'+95',
  ),
 
  );

?>

<table border="1" width="900" align="center">
<tr>
  <td>no</td>
  <td>negara</td>
  <td>ibukota</td>
  <td>kode telpon</td>
</tr>
<?php $no=1;
foreach($data as $d){

  ?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $d['negara'];?></td>
<td><?php echo $d['ibukota'];?></td>
<td><?php echo $d['kode telpon'];?></td>
</tr>
<?php
$no=$no+1;
}
?>

</table>