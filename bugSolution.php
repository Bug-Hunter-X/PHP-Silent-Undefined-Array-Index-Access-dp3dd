The solution involves explicitly checking for the existence of an array key before accessing its value. Using `isset()` is a robust way to accomplish this.  Here is a corrected version of the code:

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray[1] = 20;

if (isset($myArray[0])) {
  echo $myArray[0];
} else {
  echo "Index 0 is not set";
}
?>
```

Alternatively, `array_key_exists()` can be used to check if the specified key exists in the array.  This function is also a good practice to add to your code for robustness. 