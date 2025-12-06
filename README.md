# PHP

PHP, which recursively stands for "PHP: Hypertext Preprocessor," is an open-source, server-side scripting language
primarily designed for web development. It is widely used to create dynamic and interactive websites and web
applications.

## Run Server

```bash
php -S localhost:8080
```

### Strict Mode

```bash
declare(strict_types=1);
```

### Variables

```bash
$name = "Eran"; // always use double quotes
$age = 24;
$isDeveloper = true;
$height = 5.9;

class User {
    public string $name;
    public int $age;
    public bool $active;
    public float $rating;
}

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 10);  // 15
```

### Conditions and Booleans

```bash
$isLoggedIn = true;
$hasAccess = false;

// if elseif else

$marks = 75;

if ($marks >= 90) {
    echo "A";
} elseif ($marks >= 75) {
    echo "B";
} elseif ($marks >= 60) {
    echo "C";
} else {
    echo "Fail";
}

// Ternary Operator

$status = ($age >= 18) ? "Adult" : "Child";

// Null Coalescing Operator

$username = $_GET["user"] ?? "Guest";

//Null Coalescing Assignment

$color = null;

$color ??= "blue";

echo $color; // blue
```

### Indexed Arrays

```bash
// indexed Arrays

$fruits = ["Apple", "Banana", "Orange"];
$fruits = array("Apple", "Banana", "Orange");

echo $fruits[0];

// Associative Arrays

$user = [
    "name" => "Eran",
    "age" => 24,
    "role" => "Developer"
];

echo $user["name"];
```

### Data Types

```bash
 $int_var = 12345; // integer
 $var1 = 1.55; // float or double
 $bool1 = true; // boolean
 $string_1 = "This is a string in double quotes"; // string
```

### Type Casting

```bash
 $a = 10; // implicit type casting, automatically detecting type when initialize
 
 $a = 9.99;
 $b = (int)$a; // type casting operator
 
 // type casting functions - intval() floatVal() strVal()
 $value = "1";

 $intCast = intval($value);
 echo $intCast;

 echo gettype($intCast);
```

### Type Juggling

// PHP is a dynamically typed language, which means the type of a variable can be changed based on the value sent to it
at runtime.
This automatic type conversion in PHP is called type juggling.

### Strings

```bash
  $str = 'this is a simple string';
  $str = 'This is a \'simple\' string';
  $str = 'The command C:\\*.* will delete all files.';

  // strlen function - strlen()
  // strpos function - strpos() Function
```

### Output Methods

```bash
  $reqURI = $_SERVER['REQUEST_URI'];
  echo "<br />";
  var_dump($reqURI);

  // use var_dump only for development
```

### Superglobal Variables

// These are predefined variables that are always available in all scopes throughout a script, 
meaning you can access them inside functions or methods without needing to use the global keyword.

```bash
  $_SERVER
  $_GET
  $_POST
  $_FILES
```

### Enabling Strict Types

```bash
  <?php declare(strict_types=1);

  function sum(int $a, int $b): int {
      return $a + $b;
  }

  // This will work
  echo sum(5, 10); // Output: 15

  // This will throw a TypeError in strict mode
  // echo sum(5, "10"); 
  ?>
```

### Functions

// A function is a reusable block of code that performs a specific task.

```bash
  // function with params
  function greet($name) {
     echo "Hello, $name!";
  }

  // function with default params
  function welcome($name = "Guest") {
     echo "Welcome, $name!";
  }

  welcome();              // Welcome, Guest!
  welcome("Eran");        // Welcome, Eran!
```

// We also have built-in functions also, check the docs

### Connect to a Database

// we have 3 ways to connect, using Object Oriented, Procedural or PDO

```bash
  <?php
  $servername = "localhost"; // Or your database host
  $username = "your_username";
  $password = "your_password";
  $dbname = "your_database_name";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully (MySQLi Object-Oriented)";

  // Close connection
  $conn->close();
  ?>
```

### Object-Oriented Programming (OOP) in PHP

// A programming paradigm that organizes code around objects rather than functions and logic. 
It focuses on creating reusable, modular, and maintainable code. 

#### Classes and Objects:

```bash
  <?php
  
    declare(strict_types=1);
  
    class Vehicle
    {
      public string $vehicleName;
      public string $vehicleColor;
    
      public function __construct(string $name, string $color) {
        $this->vehicleName = $name;
        $this->vehicleColor = $color;
      }
    
      public function show(): string {
        return "$this->vehicleName is perfect!, and it's $this->vehicleColor";
      }
    }
  
    $car = new Vehicle("Toyota", "red");
    echo $car->show();
```

// Encapsulation - Encapsulation = hiding data and controlling access using getters/setters.

```bash
  class User {
      private $name; // cannot access directly from outside

      public function setName($name) {
          $this->name = $name; // controlled way to set value
      }

      public function getName() {
          return $this->name; // controlled way to get value
      }
  }

  $user = new User();
  $user->setName("Eran");
  echo $user->getName(); // Output: Eran
```

// Inheritance - one class extends another class and reuses its properties/methods.

```bash
  class Animal {
      public function eat() {
          echo "Eating...";
      }
  }

  class Dog extends Animal {
      public function bark() {
          echo "Woof!";
      }
  }

  $dog = new Dog();
  $dog->eat();  // inherited
  $dog->bark(); // own method
```

// Polymorphism - same method name, but different behavior depending on the object.

```bash
  class Animal {
      public function makeSound() {
          echo "Some sound";
      }
  }

  class Dog extends Animal {
      public function makeSound() {
          echo "Woof!";
      }
  }

  class Cat extends Animal {
      public function makeSound() {
          echo "Meow!";
      }
  }

  function playSound(Animal $animal) {
      $animal->makeSound();
  }

  playSound(new Dog()); // Woof!
  playSound(new Cat()); // Meow!
```

// Abstraction - a class that cannot be instantiated, only used for structure. Used when you want a common template but with different implementation.
```bash
  abstract class Shape {
      abstract public function area();  // no body
  }

  class Circle extends Shape {
      public function area() {
          return 3.14 * 5 * 5; // example
      }
  }
```

// Interface - only method declarations (no body). Classes must implement all methods. Used for multiple inheritance (because PHP does NOT support multiple class inheritance).

```bash
  interface PaymentGateway {
      public function pay($amount);
  }

  class PayPal implements PaymentGateway {
      public function pay($amount) {
          echo "Paying $amount via PayPal";
      }
  }

  class Stripe implements PaymentGateway {
      public function pay($amount) {
          echo "Paying $amount via Stripe";
      }
  }
```
