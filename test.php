<?php

require_once 'check.php';

$check = new Check();

// Check Only Control

echo $check->_is("3", 'int')."<br />";

echo $check->_is("3", 'str')."<br />";

echo $check->_is(3.14, 'float')."<br />";

echo $check->_is(true, 'bool')."<br />";

echo $check->_is(null, 'null')."<br />";

echo $check->_is("1.2", 'numeric')."<br />";

echo $check->_is($check, 'object')."<br />";

echo $check->_is('goren.ali@yandex.com', 'mail')."<br />";

echo $check->_is('http://1', 'url')."<br />";

echo $check->_is('192.168.1.3', 'ip')."<br />";

echo $check->_is('', 'empty')."<br />";

echo $check->_is('s', 'not_empty')."<br />";

$_POST['txt'] = 'Test';

echo $check->_is($_POST['txt'], 'post')."<br />";

$_GET['txt'] = 'Test';

echo $check->_is($_GET['txt'], 'get')."<br />";

echo $check->_is(array(1), 'array')."<br />";

echo $check->_is('7', 'version')."<br />";

echo $check->_is('7.0.13', 'version_gt')."<br />";

echo $check->_is('7.0.13', 'version_lt')."<br />";

echo $check->_is('7.0.13', 'version_egt')."<br />";

echo $check->_is('7.0.13', 'version_elt')."<br />";

echo $check->_is('PDO', 'installed')."<br />";

 // Check and use anonymous function

$check->_is("3", 'int', function() {
	echo "Yes integer! <br />";
});

$check->_is("3", 'str', function() {
	echo "Yes string  <br />";
});

$check->_is(3.14, 'float', function() {
	echo "Yes float  <br />";
});

$check->_is(true, 'bool', function() {
	echo "Yes bool  <br />";
});

$check->_is(null, 'null', function() {
	echo "Yes null  <br />";
});

$check->_is("1.2", 'numeric', function() {
	echo "Yes numeric  <br />";
});

$check->_is($check, 'object', function() {
	echo "Yes object  <br />";
});

$check->_is('goren.ali@yandex.com', 'mail', function() {
	echo "Yes mail  <br />";
});

$check->_is('http://1', 'url', function() {
	echo "Yes url  <br />";
});

$check->_is('192.168.1.3', 'ip', function() {
	echo "Yes IP Address  <br />";
});

$check->_is('', 'empty', function() {
	echo "Yes empty  <br />";
});

$check->_is('s', 'not_empty', function() {
	echo "Yes value is not empty  <br />";
});

$_POST['txt'] = 'Test';

$check->_is($_POST['txt'], 'post', function() {
	echo "Yes post  <br />";
});

$_GET['txt'] = 'Test';

$check->_is($_GET['txt'], 'get', function() {
	echo "Yes get  <br />";
});

$check->_is(array(1), 'array', function() {
	echo "Yes array  <br />";
});

$check->_is('7.0.13', 'version', function() {
	echo "Yes version 7.0.13 is true  <br />";
});

$check->_is('7.0.13', 'version_gt', function() {
	echo "Yes version greater than is 7.0.13  <br />";
});

$check->_is('7.0.13', 'version_lt', function() {
	echo "Yes version less than is 7.0.13  <br />";
});

$check->_is('7.0.13', 'version_egt', function() {
	echo "Yes version equal or greater than is 7.0.13  <br />";
});

$check->_is('7.0.13', 'version_elt', function() {
	echo "Yes version equal or less than is 7.0.13  <br />";
});

$check->_is('PDO', 'installed', function() {
	echo "Yes PDO is installed  <br />";
});

echo $check->all();

?>