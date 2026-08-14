<?php 
$day = date('Y-m-d');
$this_month = date('Y-m');
$this_month_first_day = date('Y-m-01');
$this_month_last_day = date('Y-m-t');
$days = [];

for($i=1;$i<=$this_month_last_day;$i++){
   $days = $i;
}
print_r($days);