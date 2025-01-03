In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this example:

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray[1] = 20;
echo $myArray[0]; // Notice the undefined index 0
?>
```

Accessing an undefined array index does not inherently throw an error in PHP. Instead, it simply returns null. This can lead to unexpected behavior, especially in complex applications where the absence of a value may be interpreted as a zero or other default value.

This is particularly problematic when performing calculations or logical operations based on array values.  Failure to check for the existence of the key using `isset()` or `array_key_exists()` can result in insidious bugs that are difficult to track down.