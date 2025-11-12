<?php
/**
 * Comprehensive Test Suite for PHP Snippets Extension
 * 
 * This file contains all test cases for every snippet in the extension.
 * Use this file to verify that all snippets work correctly.
 * 
 * Instructions:
 * 1. Press F5 in VS Code to open Extension Development Host
 * 2. Open this file in the new window
 * 3. For each test case, type the prefix indicated and press Tab
 * 4. Verify the output matches the expected result
 */

// ============================================
// TEST SUITE 1: Constants & Definitions
// ============================================

// TEST 1.1: Type "def" -> define("CONSTANT_NAME", value);
// TEST 1.2: Type "const" -> const CONSTANT_NAME = value;

// ============================================
// TEST SUITE 2: Control Structures (Alternative Syntax)
// ============================================

// TEST 2.1: Type "ifend" -> if (condition): endif;
// TEST 2.2: Type "ifelseend" -> if (condition): else: endif;
// TEST 2.3: Type "ifelseifend" -> if (condition): elseif (condition): else: endif;

// ============================================
// TEST SUITE 3: Control Structures (Standard Syntax)
// ============================================

// TEST 3.1: Type "if" -> if (condition) { }
// TEST 3.2: Type "ifelse" -> if (condition) { } else { }
// TEST 3.3: Type "ifelseif" -> if (condition) { } elseif (condition) { } else { }
// TEST 3.4: Type "switch" -> switch (variable) { case: break; }
// TEST 3.5: Type "match" -> match (expression) { value => result, default => result, }; (PHP 8+)

// ============================================
// TEST SUITE 4: Loops (Alternative Syntax)
// ============================================

// TEST 4.1: Type "foreachend" -> foreach (): endforeach;
// TEST 4.2: Type "forend" -> for (): endfor;
// TEST 4.3: Type "whileend" -> while (): endwhile;

// ============================================
// TEST SUITE 5: Loops (Standard Syntax)
// ============================================

// TEST 5.1: Type "foreach" -> foreach () { }
// TEST 5.2: Type "for" -> for () { }
// TEST 5.3: Type "while" -> while () { }
// TEST 5.4: Type "dowhile" -> do { } while ();

// ============================================
// TEST SUITE 6: Functions
// ============================================

// TEST 6.1: Type "function" -> function () { }
// TEST 6.2: Type "funct" -> function (): returnType { } (PHP 7+)
// TEST 6.3: Type "fn" -> fn() => expression (PHP 7.4+)
// TEST 6.4: Type "anon" -> $var = function () { }; (PHP 5.3+)
// TEST 6.5: Type "anont" -> $var = function (): returnType { }; (PHP 7+)

// ============================================
// TEST SUITE 7: Classes & OOP
// ============================================

// TEST 7.1: Type "class" -> class { }
// TEST 7.2: Type "classext" -> class extends { }
// TEST 7.3: Type "classimp" -> class implements { }
// TEST 7.4: Type "classfull" -> class extends implements { }
// TEST 7.5: Type "interface" -> interface { }
// TEST 7.6: Type "trait" -> trait { } (PHP 5.4+)
// TEST 7.7: Type "abstract" -> abstract class { }
// TEST 7.8: Type "namespace" -> namespace ; (PHP 5.3+)
// TEST 7.9: Type "use" -> use ClassName; (PHP 5.3+)
// TEST 7.10: Type "useas" -> use ClassName as Alias; (PHP 5.3+)
// TEST 7.11: Type "construct" -> public function __construct() { }
// TEST 7.12: Type "destruct" -> public function __destruct() { }
// TEST 7.13: Type "method" -> public function () { }
// TEST 7.14: Type "methodt" -> public function (): returnType { } (PHP 7+)
// TEST 7.15: Type "prop" -> public $propertyName;
// TEST 7.16: Type "propt" -> public type $propertyName; (PHP 7.4+)
// TEST 7.17: Type "get" -> public function getProperty(): type { } (PHP 7+)
// TEST 7.18: Type "set" -> public function setProperty(type $property): void { } (PHP 7+)

// ============================================
// TEST SUITE 8: Magic Methods
// ============================================

// TEST 8.1: Type "__get" -> public function __get($name) { }
// TEST 8.2: Type "__set" -> public function __set($name, $value) { }
// TEST 8.3: Type "__toString" -> public function __toString(): string { }
// TEST 8.4: Type "__call" -> public function __call($name, $arguments) { }
// TEST 8.5: Type "__invoke" -> public function __invoke($arguments) { } (PHP 5.3+)

// ============================================
// TEST SUITE 9: Enums (PHP 8.1+)
// ============================================

// TEST 9.1: Type "enum" -> enum { case VALUE; }
// TEST 9.2: Type "enumb" -> enum: string { case VALUE = 'value'; }

// ============================================
// TEST SUITE 10: Superglobals
// ============================================

// TEST 10.1: Type "$G" -> $GLOBALS[""]
// TEST 10.2: Type "$se" -> $_SERVER[""]
// TEST 10.3: Type "$r" -> $_REQUEST[""]
// TEST 10.4: Type "$p" -> $_POST[""]
// TEST 10.5: Type "$g" -> $_GET[""]
// TEST 10.6: Type "$f" -> $_FILES[""]
// TEST 10.7: Type "$e" -> $_ENV[""]
// TEST 10.8: Type "$c" -> $_COOKIE[""]
// TEST 10.9: Type "$s" -> $_SESSION[""]

// ============================================
// TEST SUITE 11: Includes & Requires
// ============================================

// TEST 11.1: Type "in" -> include "";
// TEST 11.2: Type "ino" -> include_once "";
// TEST 11.3: Type "req" -> require "";
// TEST 11.4: Type "reqo" -> require_once "";

// ============================================
// TEST SUITE 12: Date & Time
// ============================================

// TEST 12.1: Type "date" -> date("Y-m-d H:i:s", time())
// TEST 12.2: Type "datetime" -> $date = new DateTime('now');
// TEST 12.3: Type "datef" -> $date->format("Y-m-d H:i:s")

// ============================================
// TEST SUITE 13: Error Handling
// ============================================

// TEST 13.1: Type "try" -> try { } catch (Exception $e) { }
// TEST 13.2: Type "tryf" -> try { } catch () { } finally { } (PHP 5.5+)
// TEST 13.3: Type "throw" -> throw new Exception("");

// ============================================
// TEST SUITE 14: Type Declarations (PHP 7+)
// ============================================

// TEST 14.1: Type "nullable" -> ?string (PHP 7.1+)
// TEST 14.2: Type "union" -> string|int (PHP 8.0+)
// TEST 14.3: Type "intersection" -> Interface1&Interface2 (PHP 8.1+)

// ============================================
// TEST SUITE 15: Other Useful Snippets
// ============================================

// TEST 15.1: Type "echo" -> echo "";
// TEST 15.2: Type "print" -> print "";
// TEST 15.3: Type "vd" -> var_dump($variable);
// TEST 15.4: Type "pr" -> print_r($variable);
// TEST 15.5: Type "die" -> die("");
// TEST 15.6: Type "exit" -> exit();
// TEST 15.7: Type "return" -> return value;
// TEST 15.8: Type "array" -> array(element1, element2)
// TEST 15.9: Type "arr" -> [element1, element2] (PHP 5.4+)
// TEST 15.10: Type "arra" -> array("key" => value)
// TEST 15.11: Type "arrs" -> ["key" => value] (PHP 5.4+)
// TEST 15.12: Type "isset" -> isset($variable)
// TEST 15.13: Type "empty" -> empty($variable)
// TEST 15.14: Type "??" -> $variable ?? default (PHP 7+)
// TEST 15.15: Type "??=" -> $variable ??= default (PHP 7.4+)
// TEST 15.16: Type "<=>" -> value1 <=> value2 (PHP 7+)
// TEST 15.17: Type "static" -> static $variable = value;
// TEST 15.18: Type "global" -> global $variable;

// ============================================
// TEST SUITE 16: Database (PDO)
// ============================================

// TEST 16.1: Type "pdo" -> PDO connection (PHP 5.1+)
// TEST 16.2: Type "pdop" -> PDO prepared statement (PHP 5.1+)
// TEST 16.3: Type "pdoq" -> PDO query (PHP 5.1+)

// ============================================
// TEST SUITE 17: Database (MySQLi)
// ============================================

// TEST 17.1: Type "mysqli" -> MySQLi connection (PHP 5+)
// TEST 17.2: Type "mysqlip" -> MySQLi prepared statement (PHP 5+)

// ============================================
// TEST SUITE 18: File Operations
// ============================================

// TEST 18.1: Type "fgc" -> file_get_contents("filename")
// TEST 18.2: Type "fpc" -> file_put_contents("filename", $content)
// TEST 18.3: Type "fopen" -> fopen() with fclose()
// TEST 18.4: Type "fexists" -> if (file_exists("filename")) { }
// TEST 18.5: Type "isfile" -> if (is_file("filename")) { }
// TEST 18.6: Type "isdir" -> if (is_dir("directory")) { }

// ============================================
// TEST SUITE 19: Array Functions
// ============================================

// TEST 19.1: Type "amap" -> array_map(function($item) { }, $array)
// TEST 19.2: Type "afilter" -> array_filter($array, function($item) { })
// TEST 19.3: Type "areduce" -> array_reduce($array, function($carry, $item) { }, initial)
// TEST 19.4: Type "akeys" -> array_keys($array)
// TEST 19.5: Type "avalues" -> array_values($array)
// TEST 19.6: Type "inarray" -> if (in_array($needle, $haystack)) { }
// TEST 19.7: Type "asearch" -> array_search($needle, $haystack)
// TEST 19.8: Type "amerge" -> array_merge($array1, $array2)
// TEST 19.9: Type "aslice" -> array_slice($array, offset, length)
// TEST 19.10: Type "acount" -> count($array)

// ============================================
// TEST SUITE 20: String Functions
// ============================================

// TEST 20.1: Type "strlen" -> strlen($string)
// TEST 20.2: Type "substr" -> substr($string, start, length)
// TEST 20.3: Type "strpos" -> strpos($haystack, "needle")
// TEST 20.4: Type "strrep" -> str_replace("search", "replace", $subject)
// TEST 20.5: Type "trim" -> trim($string)
// TEST 20.6: Type "explode" -> explode("separator", $string)
// TEST 20.7: Type "implode" -> implode("separator", $array)
// TEST 20.8: Type "strlower" -> strtolower($string)
// TEST 20.9: Type "strupper" -> strtoupper($string)
// TEST 20.10: Type "ucfirst" -> ucfirst($string)
// TEST 20.11: Type "preg" -> if (preg_match("/pattern/", $string, $matches)) { }
// TEST 20.12: Type "pregrep" -> preg_replace("/pattern/", "replacement", $string)

// ============================================
// TEST SUITE 21: JSON Operations
// ============================================

// TEST 21.1: Type "jsonenc" -> json_encode($data) (PHP 5.2+)
// TEST 21.2: Type "jsondec" -> json_decode($json, true) (PHP 5.2+)

// ============================================
// TEST SUITE 22: Session Operations
// ============================================

// TEST 22.1: Type "sess" -> session_start()
// TEST 22.2: Type "sesset" -> $_SESSION["key"] = value;
// TEST 22.3: Type "sesget" -> $value = $_SESSION["key"] ?? default;
// TEST 22.4: Type "sesdestroy" -> session_destroy()

// ============================================
// TEST SUITE 23: Cookie Operations
// ============================================

// TEST 23.1: Type "setcookie" -> setcookie("name", "value", time() + 3600)

// ============================================
// TEST SUITE 24: HTTP Headers
// ============================================

// TEST 24.1: Type "header" -> header("Content-Type: application/json")
// TEST 24.2: Type "headerloc" -> header("Location: url"); exit;
// TEST 24.3: Type "httpcode" -> http_response_code(200) (PHP 5.4+)

// ============================================
// TEST SUITE 25: Type Checking
// ============================================

// TEST 25.1: Type "isarray" -> if (is_array($variable)) { }
// TEST 25.2: Type "isstring" -> if (is_string($variable)) { }
// TEST 25.3: Type "isint" -> if (is_int($variable)) { }
// TEST 25.4: Type "isbool" -> if (is_bool($variable)) { }
// TEST 25.5: Type "isnull" -> if (is_null($variable)) { }
// TEST 25.6: Type "gettype" -> gettype($variable)

// ============================================
// TEST SUITE 26: Generators (PHP 5.5+)
// ============================================

// TEST 26.1: Type "generator" -> Generator function with yield (PHP 5.5+)

// ============================================
// TEST SUITE 27: Anonymous Class (PHP 7.0+)
// ============================================

// TEST 27.1: Type "anonclass" -> new class(args) { } (PHP 7.0+)

// ============================================
// INTEGRATION TESTS
// ============================================

/**
 * Test Case: Complete Class with All Features
 * 
 * Steps:
 * 1. Type "namespace" -> namespace App\Models;
 * 2. Type "use" -> use App\Traits\Loggable;
 * 3. Type "classfull" -> class User extends Model implements Authenticatable { }
 * 4. Inside class:
 *    - Type "propt" -> public string $name; (PHP 7.4+)
 *    - Type "propt" -> public int $age; (PHP 7.4+)
 *    - Type "construct" -> __construct()
 *    - Type "methodt" -> public function getName(): string { } (PHP 7+)
 *    - Type "get" -> getter method
 *    - Type "set" -> setter method
 *    - Type "__toString" -> __toString() magic method
 */
namespace App\Models;

use App\Traits\Loggable;

class User extends Model implements Authenticatable {
    // Properties with types (PHP 7.4+)
    public string $name;
    public int $age;
    
    // Constructor
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Typed method (PHP 7+)
    public function getName(): string {
        return $this->name;
    }
    
    // Getter
    public function getAge(): int {
        return $this->age;
    }
    
    // Setter
    public function setAge(int $age): void {
        $this->age = $age;
    }
    
    // Magic method
    public function __toString(): string {
        return "User: {$this->name}";
    }
}

/**
 * Test Case: Match Expression (PHP 8+)
 * 
 * Type "match" and create:
 */
$status = match ($httpCode) {
    200 => 'OK',
    404 => 'Not Found',
    500 => 'Server Error',
    default => 'Unknown',
};

/**
 * Test Case: Arrow Function (PHP 7.4+)
 * 
 * Type "fn" and use:
 */
$numbers = [1, 2, 3, 4, 5];
$doubled = array_map(fn($n) => $n * 2, $numbers);

/**
 * Test Case: PDO Database Operations
 * 
 * Steps:
 * 1. Type "pdo" -> PDO connection
 * 2. Type "pdop" -> Prepared statement
 */
$pdo = new PDO(
    "mysql:host=localhost;dbname=database",
    "username",
    "password"
);

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([':id' => $id]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

/**
 * Test Case: File Operations
 * 
 * Steps:
 * 1. Type "fexists" -> Check if file exists
 * 2. Type "fgc" -> Read file contents
 * 3. Type "fpc" -> Write file contents
 */
if (file_exists("config.json")) {
    $content = file_get_contents("config.json");
    $config = json_decode($content, true);
    file_put_contents("config.backup.json", $content);
}

/**
 * Test Case: Array Operations
 * 
 * Steps:
 * 1. Type "arr" -> Short array syntax
 * 2. Type "amap" -> array_map
 * 3. Type "afilter" -> array_filter
 */
$numbers = [1, 2, 3, 4, 5];
$doubled = array_map(function($n) {
    return $n * 2;
}, $numbers);
$evens = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});

/**
 * Test Case: String Operations
 * 
 * Steps:
 * 1. Type "strlen" -> Get string length
 * 2. Type "strrep" -> Replace string
 * 3. Type "explode" -> Split string
 * 4. Type "implode" -> Join array
 */
$text = "Hello World";
$length = strlen($text);
$replaced = str_replace("World", "PHP", $text);
$words = explode(" ", $text);
$joined = implode("-", $words);

/**
 * Test Case: Session Management
 * 
 * Steps:
 * 1. Type "sess" -> Start session
 * 2. Type "sesset" -> Set session variable
 * 3. Type "sesget" -> Get session variable
 */
session_start();
$_SESSION["user_id"] = 123;
$userId = $_SESSION["user_id"] ?? 0;

/**
 * Test Case: Error Handling
 * 
 * Steps:
 * 1. Type "tryf" -> try-catch-finally
 * 2. Type "throw" -> Throw exception
 */
try {
    if ($error) {
        throw new Exception("Something went wrong");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cleanup
}

/**
 * Test Case: Enum (PHP 8.1+)
 * 
 * Steps:
 * 1. Type "enum" -> Create enum
 * 2. Type "enumb" -> Create backed enum
 */
enum Status {
    case PENDING;
    case APPROVED;
    case REJECTED;
}

enum StatusBacked: string {
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}

// ============================================
// TEST CHECKLIST
// ============================================

/*
 * Use this checklist to verify all snippets:
 * 
 * [ ] All constants snippets work
 * [ ] All control structure snippets work
 * [ ] All loop snippets work
 * [ ] All function snippets work
 * [ ] All class/OOP snippets work
 * [ ] All magic method snippets work
 * [ ] All enum snippets work (PHP 8.1+)
 * [ ] All superglobal snippets work
 * [ ] All include/require snippets work
 * [ ] All date/time snippets work
 * [ ] All error handling snippets work
 * [ ] All type declaration snippets work
 * [ ] All basic snippets work
 * [ ] All database snippets work
 * [ ] All file operation snippets work
 * [ ] All array function snippets work
 * [ ] All string function snippets work
 * [ ] All JSON snippets work
 * [ ] All session snippets work
 * [ ] All cookie snippets work
 * [ ] All HTTP header snippets work
 * [ ] All type checking snippets work
 * [ ] Generator snippet works (PHP 5.5+)
 * [ ] Anonymous class snippet works (PHP 7.0+)
 * [ ] Placeholders navigate correctly with Tab
 * [ ] Descriptions appear in autocomplete
 * [ ] No syntax errors in generated code
 */


