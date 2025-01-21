In PHP, a common yet subtle error arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assign by reference, not by value
$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpectedly
```

Many developers, especially those transitioning from languages with value-based semantics, assume that the assignment `$obj2 = $obj1` creates a copy of `$obj1`. Instead, it creates a new reference to the same object in memory. Therefore, modifying `$obj2` also affects `$obj1`, leading to unexpected behavior and hard-to-debug problems.