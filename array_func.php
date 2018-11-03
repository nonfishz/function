<?php
$arr = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
  )
);

// $new_arr = array_column($arr, 'last_name', 'id');
$new_arr = array_column($arr, null, 'id'); //如果选中的输出列为null,那么将返回整个数组，配合最后一个参数，可以修改数组键名

echo "<pre>";
var_dump($new_arr);