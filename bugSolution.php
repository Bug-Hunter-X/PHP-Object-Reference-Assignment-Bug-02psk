To solve the reference issue, use the `clone` keyword to create a deep copy of the object:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a deep copy using clone
$obj2->value = 10;

echo $obj1->value; // Outputs 0, as expected
echo $obj2->value; // Outputs 10
```

The `clone` keyword creates a separate object with independent properties.  Changes made to one cloned object will not affect the other.