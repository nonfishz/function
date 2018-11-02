<?php
//代码块执行时间
function getMicrotime()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
//开始时间
$time_start = getMicrotime();
/**
 * 代码块
 */
$time_end = getMicrotime();
$time = $time_end - $time_start;
echo "执行时间：{$time}秒";