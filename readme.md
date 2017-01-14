# PHP Checker Class

Check something with PHP

You can use for only check something or use with anonymous functions. Check **test.php** file for samples.

## Usage

**See the test.php file for more examples**

```php
require_once 'check.php';

$check = new Check();

$check->_is("3", 'int', function() {
	echo "Yes integer! <br />";
});

// or only check

$check->_is("3", 'int');

//List All Available Methods

echo $check->all(); // return json
```