# PHP Snippets for VS Code

A comprehensive PHP snippets extension for Visual Studio Code with support for PHP 5.0 through PHP 8.4.

## Features

- **Full support**: PHP 5.0 to PHP 8.4
- **234+ snippets**: Comprehensive coverage of PHP functionality
- **Modern snippets**: Includes PHP 7 and 8 features (type hints, arrow functions, match expressions, readonly classes, property hooks, etc.)
- **Backward compatibility**: Maintains support for legacy PHP 5 syntax
- **Organized by categories**: Easy to find the snippet you need
- **Clear documentation**: Each snippet indicates the minimum PHP version required
- **Essential functions**: Array, string, file, date/time, error handling, OOP, HTTP, and more

## Installation

1. Open VS Code
2. Go to the Extensions tab (Ctrl+Shift+X / Cmd+Shift+X)
3. Search for "PHP Snippets VS Code"
4. Click Install

## Available Snippets

### Constants & Definitions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `def` | `define("CONSTANT_NAME", value);` | 5.0+ |
| `const` | `const CONSTANT_NAME = value;` | 5.3+ |

### Control Structures (Alternative Syntax)

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `ifend` | `if (): endif;` | 5.0+ |
| `ifelseend` | `if (): else: endif;` | 5.0+ |
| `ifelseifend` | `if (): elseif (): else: endif;` | 5.0+ |

### 🔀 Control Structures (Standard Syntax)

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `if` | `if () {}` | 5.0+ |
| `ifelse` | `if () {} else {}` | 5.0+ |
| `ifelseif` | `if () {} elseif () {} else {}` | 5.0+ |
| `switch` | `switch () { case: break; }` | 5.0+ |
| `match` | `match () { => };` | 8.0+ |

### Loops (Alternative Syntax)

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `foreachend` | `foreach (): endforeach;` | 5.0+ |
| `forend` | `for (): endfor;` | 5.0+ |
| `whileend` | `while (): endwhile;` | 5.0+ |

### 🔁 Loops (Standard Syntax)

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `foreach` | `foreach () {}` | 5.0+ |
| `for` | `for () {}` | 5.0+ |
| `while` | `while () {}` | 5.0+ |
| `dowhile` | `do {} while ();` | 5.0+ |

### Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `function` | `function () {}` | 5.0+ |
| `funct` | `function (): returnType {}` | 7.0+ |
| `fn` | `fn() => expression` | 7.4+ |
| `anon` | `$var = function () {};` | 5.3+ |
| `anont` | `$var = function (): returnType {};` | 7.0+ |

### Classes & OOP

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `class` | `class {}` | 5.0+ |
| `classext` | `class extends {}` | 5.0+ |
| `classimp` | `class implements {}` | 5.0+ |
| `classfull` | `class extends implements {}` | 5.0+ |
| `interface` | `interface {}` | 5.0+ |
| `trait` | `trait {}` | 5.4+ |
| `abstract` | `abstract class {}` | 5.0+ |
| `namespace` | `namespace ;` | 5.3+ |
| `use` | `use ClassName;` | 5.3+ |
| `useas` | `use ClassName as Alias;` | 5.3+ |
| `construct` | `public function __construct() {}` | 5.0+ |
| `destruct` | `public function __destruct() {}` | 5.0+ |
| `method` | `public function () {}` | 5.0+ |
| `methodt` | `public function (): returnType {}` | 7.0+ |
| `prop` | `public $propertyName;` | 5.0+ |
| `propt` | `public type $propertyName;` | 7.4+ |
| `get` | `public function getProperty(): type {}` | 7.0+ |
| `set` | `public function setProperty(type $property): void {}` | 7.0+ |

### Superglobals

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `$G` | `$GLOBALS[""]` | 5.0+ |
| `$se` | `$_SERVER[""]` | 5.0+ |
| `$r` | `$_REQUEST[""]` | 5.0+ |
| `$p` | `$_POST[""]` | 5.0+ |
| `$g` | `$_GET[""]` | 5.0+ |
| `$f` | `$_FILES[""]` | 5.0+ |
| `$e` | `$_ENV[""]` | 5.0+ |
| `$c` | `$_COOKIE[""]` | 5.0+ |
| `$s` | `$_SESSION[""]` | 5.0+ |

### Includes & Requires

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `in` | `include "";` | 5.0+ |
| `ino` | `include_once "";` | 5.0+ |
| `req` | `require "";` | 5.0+ |
| `reqo` | `require_once "";` | 5.0+ |

### Date & Time

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `date` | `date("Y-m-d H:i:s", time())` | 5.0+ |
| `datetime` | `$date = new DateTime('now');` | 5.2+ |
| `datef` | `$date->format("Y-m-d H:i:s")` | 5.2+ |

### Error Handling

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `try` | `try {} catch (Exception $e) {}` | 5.0+ |
| `tryf` | `try {} catch () {} finally {}` | 5.5+ |
| `throw` | `throw new Exception("");` | 5.0+ |

### Type Declarations (PHP 7+)

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `nullable` | `?string` | 7.1+ |
| `union` | `string\|int` | 8.0+ |
| `intersection` | `Interface1&Interface2` | 8.1+ |

### Other Useful Snippets

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `echo` | `echo "";` | 5.0+ |
| `print` | `print "";` | 5.0+ |
| `vd` | `var_dump($variable);` | 5.0+ |
| `pr` | `print_r($variable);` | 5.0+ |
| `die` | `die("");` | 5.0+ |
| `exit` | `exit();` | 5.0+ |
| `return` | `return value;` | 5.0+ |
| `array` | `array(element1, element2)` | 5.0+ |
| `arr` | `[element1, element2]` | 5.4+ |
| `arra` | `array("key" => value)` | 5.0+ |
| `arrs` | `["key" => value]` | 5.4+ |
| `isset` | `isset($variable)` | 5.0+ |
| `empty` | `empty($variable)` | 5.0+ |
| `??` | `$variable ?? default` | 7.0+ |
| `??=` | `$variable ??= default` | 7.4+ |
| `<=>` | `value1 <=> value2` | 7.0+ |
| `static` | `static $variable = value;` | 5.0+ |
| `global` | `global $variable;` | 5.0+ |

### PHP 8.2 Features

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `readonlyclass` | `readonly class {}` | 8.2+ |
| `readonly` | `readonly public type $property;` | 8.1+ |
| `nulltype` | `null` | 8.2+ |
| `falsetype` | `false` | 8.2+ |
| `truetype` | `true` | 8.2+ |
| `traitconst` | `trait { public const NAME = value; }` | 8.2+ |
| `sensitive` | `#[\\SensitiveParameter] function() {}` | 8.2+ |
| `dnf` | `(Type1&Type2)\|Type3` | 8.2+ |

### PHP 8.3 Features

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `tconst` | `public const type CONSTANT = value;` | 8.3+ |
| `override` | `#[\\Override] public function() {}` | 8.3+ |
| `overridem` | `#[\\Override] method with override` | 8.3+ |
| `dynconst` | `$const = Class::$$constantName;` | 8.3+ |
| `jsonval` | `if (json_validate($json)) {}` | 8.3+ |
| `mbpad` | `mb_str_pad($string, length, pad, flag, encoding)` | 8.3+ |

### PHP 8.4 Features

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `phooks` | `public type $prop { get() {} set() {} }` | 8.4+ |
| `phookget` | `public type $prop { get() {} }` | 8.4+ |
| `phookset` | `public type $prop { set() {} }` | 8.4+ |
| `newinit` | `new ClassName(args)` | 8.4+ |
| `implicitnull` | `?Type` | 8.4+ |

### Additional Array Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `apush` | `array_push($array, value);` | 5.0+ |
| `apop` | `$value = array_pop($array);` | 5.0+ |
| `aunique` | `$result = array_unique($array);` | 5.0+ |
| `areverse` | `$result = array_reverse($array);` | 5.0+ |
| `acolumn` | `$result = array_column($array, "column_key");` | 5.5+ |
| `achunk` | `$result = array_chunk($array, size);` | 5.0+ |
| `acombine` | `$result = array_combine($keys, $values);` | 5.0+ |
| `adiff` | `$result = array_diff($array1, $array2);` | 5.0+ |
| `aintersect` | `$result = array_intersect($array1, $array2);` | 5.0+ |
| `asum` | `$sum = array_sum($array);` | 5.0+ |

### Additional String Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `strcontains` | `if (str_contains($haystack, "needle")) {}` | 8.0+ |
| `strstarts` | `if (str_starts_with($haystack, "needle")) {}` | 8.0+ |
| `strends` | `if (str_ends_with($haystack, "needle")) {}` | 8.0+ |
| `strpad` | `str_pad($string, length, pad_string, STR_PAD_RIGHT);` | 5.0+ |
| `strrepeat` | `str_repeat("string", times);` | 5.0+ |
| `strsplit` | `$array = str_split($string, length);` | 5.0+ |
| `striptags` | `strip_tags($string, "allowed_tags");` | 5.0+ |
| `htmlspecial` | `htmlspecialchars($string, ENT_QUOTES, "UTF-8");` | 5.0+ |
| `htmlent` | `htmlentities($string, ENT_QUOTES, "UTF-8");` | 5.0+ |
| `md5` | `md5($string);` | 5.0+ |
| `sha1` | `sha1($string);` | 5.0+ |
| `hash` | `hash("sha256", $string);` | 5.1.2+ |
| `b64enc` | `base64_encode($string);` | 5.0+ |
| `b64dec` | `base64_decode($string);` | 5.0+ |
| `urlenc` | `urlencode($string);` | 5.0+ |
| `urldec` | `urldecode($string);` | 5.0+ |

### Additional File Operations

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `mkdir` | `mkdir("directory", 0755, true);` | 5.0+ |
| `unlink` | `unlink("filename");` | 5.0+ |
| `copy` | `copy("source", "destination");` | 5.0+ |
| `rename` | `rename("oldname", "newname");` | 5.0+ |
| `moveupload` | `move_uploaded_file($tmp_name, "destination");` | 5.0+ |
| `pathinfo` | `pathinfo("path");` | 5.0+ |
| `basename` | `basename("path");` | 5.0+ |
| `dirname` | `dirname("path");` | 5.0+ |
| `filesize` | `filesize("filename");` | 5.0+ |

### Additional DateTime Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `datetimei` | `new DateTimeImmutable('now');` | 5.5+ |
| `strtotime` | `strtotime("time_string");` | 5.0+ |
| `mktime` | `mktime(hour, minute, second, month, day, year);` | 5.0+ |

### Additional Error Handling

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `errorrep` | `error_reporting(E_ALL);` | 5.0+ |
| `seterror` | `set_error_handler(function() {});` | 5.0+ |
| `trigger` | `trigger_error("message", E_USER_ERROR);` | 5.0+ |
| `errorlog` | `error_log("message", 0);` | 5.0+ |
| `customex` | `class CustomException extends Exception {}` | 5.0+ |

### Additional OOP Features

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `__clone` | `public function __clone() {}` | 5.0+ |
| `__sleep` | `public function __sleep(): array {}` | 5.0+ |
| `__wakeup` | `public function __wakeup() {}` | 5.0+ |
| `__serialize` | `public function __serialize(): array {}` | 7.4+ |
| `__unserialize` | `public function __unserialize(array $data): void {}` | 7.4+ |
| `staticm` | `public static function method(): returnType {}` | 5.0+ |
| `finalclass` | `final class ClassName {}` | 5.0+ |
| `finalm` | `final public function method(): returnType {}` | 5.0+ |
| `instanceof` | `if ($object instanceof ClassName) {}` | 5.0+ |
| `classexists` | `if (class_exists("ClassName")) {}` | 5.0+ |
| `methodexists` | `if (method_exists($object, "methodName")) {}` | 5.0+ |

### Autoloading

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `autoload` | `spl_autoload_register(function($class) {});` | 5.1.2+ |

### Callables

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `callfunc` | `call_user_func($callback, args);` | 5.0+ |
| `callfuncarr` | `call_user_func_array($callback, $args);` | 5.0+ |

### HTTP and Filters

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `filterin` | `filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);` | 5.2+ |
| `filtervar` | `filter_var($variable, FILTER_VALIDATE_EMAIL);` | 5.2+ |
| `parseurl` | `parse_url("url");` | 5.0+ |
| `httpquery` | `http_build_query($data);` | 5.0+ |

### Serialization

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `serialize` | `serialize($data);` | 5.0+ |
| `unserialize` | `unserialize($serialized);` | 5.0+ |

### Variable Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `extract` | `extract($array);` | 5.0+ |
| `compact` | `compact("var1", "var2");` | 5.0+ |
| `funcargs` | `func_get_args();` | 5.0+ |
| `unset` | `unset($variable);` | 5.0+ |

### Math Functions

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `abs` | `abs($number);` | 5.0+ |
| `min` | `min($value1, $value2);` | 5.0+ |
| `max` | `max($value1, $value2);` | 5.0+ |
| `round` | `round($number, precision);` | 5.0+ |
| `numformat` | `number_format($number, 2, ".", ",");` | 5.0+ |

### Additional Features

| Snippet | Output | PHP Version |
|---------|--------|-------------|
| `strict` | `declare(strict_types=1);` | 7.0+ |
| `yieldfrom` | `yield from generator;` | 7.0+ |
| `list` | `list($var1, $var2) = $array;` | 5.0+ |
| `arrdest` | `[$var1, $var2] = $array;` | 7.1+ |
| `classconst` | `ClassName::CONSTANT_NAME` | 5.0+ |

## How to Use

1. Open a PHP file in VS Code
2. Type the snippet prefix (e.g., `if`, `class`, `foreach`)
3. Press `Tab` or `Enter` to expand the snippet
4. Use `Tab` to navigate between placeholders (${1}, ${2}, etc.)

## Usage Examples

### Example 1: Creating a Class with Typed Methods (PHP 7+)

```php
<?php
// Type: class
class User {
    // Type: propt
    public string $name;
    public int $age;
    
    // Type: construct
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Type: methodt
    public function getName(): string {
        return $this->name;
    }
    
    // Type: set
    public function setAge(int $age): void {
        $this->age = $age;
    }
}
```

### Example 2: Using Match Expression (PHP 8+)

```php
<?php
// Type: match
$status = match ($httpCode) {
    200 => 'OK',
    404 => 'Not Found',
    500 => 'Server Error',
    default => 'Unknown',
};
```

### Example 3: Arrow Functions (PHP 7.4+)

```php
<?php
// Type: fn
$numbers = [1, 2, 3, 4, 5];
$doubled = array_map(fn($n) => $n * 2, $numbers);
```

### Example 4: Try-Catch with Finally (PHP 5.5+)

```php
<?php
// Type: tryf
try {
    $file = fopen('data.txt', 'r');
    // process file
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if (isset($file)) {
        fclose($file);
    }
}
```

### Example 5: Null Coalescing Operator (PHP 7+)

```php
<?php
// Type: ??
$username = $_GET['user'] ?? $_POST['user'] ?? 'guest';

// Type: ??=
$config['timeout'] ??= 30;
```

### Example 6: Trait (PHP 5.4+)

```php
<?php
// Type: trait
trait Loggable {
    public function log(string $message): void {
        echo date('Y-m-d H:i:s') . ": $message\n";
    }
}

// Type: classimp
class User implements Authenticatable {
    use Loggable;
    // ...
}
```

### Example 7: Namespace and Use (PHP 5.3+)

```php
<?php
// Type: namespace
namespace App\Controllers;

// Type: use
use App\Models\User;
use App\Services\EmailService as Mailer;
```

### Example 8: Foreach with Alternative Syntax

```php
<?php
// Type: foreachend
foreach ($users as $id => $user):
    echo $user->name;
endforeach;
```

### Example 9: Readonly Class (PHP 8.2+)

```php
<?php
// Type: readonlyclass
readonly class User {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}
```

### Example 10: Typed Constants and Override (PHP 8.3+)

```php
<?php
class Base {
    public function process(): void {}
}

class Derived extends Base {
    // Type: tconst
    public const string VERSION = '1.0.0';
    
    // Type: override
    #[\Override]
    public function process(): void {
        // Override implementation
    }
}
```

### Example 11: Property Hooks (PHP 8.4+)

```php
<?php
// Type: phooks
class Product {
    public string $name {
        get() {
            return $this->name;
        }
        set(string $value) {
            if (empty($value)) {
                throw new InvalidArgumentException('Name cannot be empty');
            }
            $this->name = $value;
        }
    }
}
```

### Example 12: Sensitive Parameter (PHP 8.2+)

```php
<?php
// Type: sensitive
#[\SensitiveParameter]
function authenticate(string $password): bool {
    // Password is marked as sensitive
    return verifyPassword($password);
}
```

### Example 13: Additional Array Functions

```php
<?php
// Type: apush
array_push($items, 'new item');

// Type: acolumn
$names = array_column($users, 'name');

// Type: aunique
$unique = array_unique($duplicates);
```

### Example 14: String Functions (PHP 8.0+)

```php
<?php
// Type: strcontains
if (str_contains($text, 'PHP')) {
    echo 'Found PHP';
}

// Type: strstarts
if (str_starts_with($url, 'https://')) {
    // secure URL
}

// Type: htmlspecial
$safe = htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
```

### Example 15: File Operations

```php
<?php
// Type: mkdir
if (!is_dir('uploads')) {
    mkdir('uploads', 0755, true);
}

// Type: moveupload
move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/file.jpg');

// Type: pathinfo
$info = pathinfo('/path/to/file.php');
// Returns: ['dirname', 'basename', 'extension', 'filename']
```

### Example 16: Error Handling

```php
<?php
// Type: seterror
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    error_log("Error: $errstr in $errfile on line $errline");
    return true;
});

// Type: customex
class ValidationException extends Exception {
    public function __construct($message = "", $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
```

### Example 17: OOP Features

```php
<?php
// Type: staticm
class Math {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }
}

// Type: finalclass
final class Config {
    // Cannot be extended
}

// Type: instanceof
if ($obj instanceof User) {
    // $obj is a User instance
}
```

### Example 18: Autoloading

```php
<?php
// Type: autoload
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});
```

## How to Test the Extension

### Method 1: Test Locally in VS Code

1. **Open the project in VS Code:**
   ```bash
   cd /Users/heber/Projects/php-snippets
   code .
   ```

2. **Press F5** or go to `Run > Start Debugging`
   - This will open a new VS Code window (Extension Development Host)
   - In this new window, the snippets will be available

3. **Create a test file:**
   - In the new window, create a `test.php` file
   - Start typing the snippet prefixes
   - You will see the snippets appear in autocomplete

### Method 2: Install Extension Locally

1. **Package the extension:**
   ```bash
   npm install -g vsce
   vsce package
   ```
   This will create a `.vsix` file

2. **Install the extension:**
   - In VS Code, go to `Extensions` (Ctrl+Shift+X / Cmd+Shift+X)
   - Click the three dots `...` at the top
   - Select `Install from VSIX...`
   - Choose the generated `.vsix` file

### Method 3: Test Specific Snippets

Create a `test.php` file and test the following snippets:

```php
<?php
// Test 1: Type "if" and press Tab
if ($condition) {
    // code here
}

// Test 2: Type "class" and press Tab
class MyClass {
    // code here
}

// Test 3: Type "foreach" and press Tab
foreach ($array as $key => $value) {
    // code here
}

// Test 4: Type "$p" and press Tab
$_POST["name"]

// Test 5: Type "funct" and press Tab
function myFunction($parameters): returnType {
    return value;
}

// Test 6: Type "match" and press Tab (PHP 8+)
match ($expression) {
    value => result,
    default => result,
};

// Test 7: Type "fn" and press Tab (PHP 7.4+)
fn($parameters) => expression

// Test 8: Type "tryf" and press Tab
try {
    // code
} catch (Exception $e) {
    // handle
} finally {
    // cleanup
}
```

### Verifying Snippets Are Working

1. **Open a `.php` file in VS Code**
2. **Type a prefix** (e.g., `if`, `class`, `foreach`)
3. **You should see:**
   - The snippet appear in autocomplete with description
   - When pressing Tab, the snippet expands
   - Placeholders (${1}, ${2}) can be navigated with Tab

### Testing Tips

- Test basic snippets first (if, foreach, class)
- Test modern snippets (match, fn, type hints)
- Verify placeholders work correctly
- Test in `.php` and `.html` files (both are supported)
- Verify descriptions appear correctly

### Troubleshooting

**Problem:** Snippets don't appear in autocomplete
- **Solution:** Make sure the file has `.php` or `.html` extension
- Verify the extension is installed and activated

**Problem:** Snippet doesn't expand when pressing Tab
- **Solution:** Press Enter or select the snippet with arrows and Enter
- Check if there's a conflict with other snippets

**Problem:** Placeholders don't work
- **Solution:** Use Tab to navigate between placeholders
- Press Esc to exit snippet editing mode

## Features by PHP Version

### PHP 5.0 - 5.2
- Basic control structures
- Standard and alternative loops
- Basic classes and interfaces
- Functions and methods
- Superglobals
- Basic exception handling

### PHP 5.3
- Namespaces
- Closures (anonymous functions)
- Class constants

### PHP 5.4
- Traits
- Short array syntax `[]`
- Array member access

### PHP 5.5
- `finally` block in try-catch
- Generators

### PHP 7.0
- Scalar type hints
- Return types
- Null coalescing operator (`??`)
- Spaceship operator (`<=>`)
- Anonymous classes

### PHP 7.1
- Nullable types (`?type`)
- Void return type
- Iterable type

### PHP 7.4
- Typed properties
- Arrow functions (`fn()`)
- Null coalescing assignment (`??=`)
- Spread operator in arrays

### PHP 8.0
- Match expressions
- Union types
- Named arguments
- Attributes

### PHP 8.1
- Intersection types
- Readonly properties
- Enums

### PHP 8.2
- Readonly classes
- `null`, `false`, and `true` as standalone types
- Constants in traits
- `#[SensitiveParameter]` attribute
- DNF (Disjunctive Normal Form) types

### PHP 8.3
- Typed class constants
- `#[Override]` attribute
- Dynamic class constant fetch
- `json_validate()` function
- `mb_str_pad()` function

### PHP 8.4
- Property hooks (getters/setters inline)
- New initializer expressions
- Implicit nullable types
- Enhanced JIT compiler

## Statistics

- **Total Snippets:** 234+
- **Categories:** 40+
- **PHP Version Support:** 5.0 to 8.4
- **Coverage:**
  - Control structures: Complete
  - Loops: Complete
  - Functions: Complete
  - Classes & OOP: Complete
  - Magic methods: Complete
  - Array functions: 20+ snippets
  - String functions: 25+ snippets
  - File operations: 15+ snippets
  - Database: PDO & MySQLi
  - Error handling: Complete
  - HTTP & Filters: Complete
  - Modern PHP features: PHP 7-8.4

## Contributing

Contributions are welcome! Feel free to open issues or pull requests.

## License

This project is licensed under the MIT License.

## Links

- [GitHub Repository](https://github.com/heberalmeida/php-snippets)
- [VS Code Marketplace](https://marketplace.visualstudio.com/vscode)

---

**Made with love for the PHP community**
