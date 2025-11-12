<?php
/**
 * Quick Test File for PHP Snippets
 * 
 * This is a simplified test file for quick verification.
 * Test the most commonly used snippets here.
 */

// ============================================
// QUICK TEST: Basic Control Structures
// ============================================

// Type "if" and press Tab
if ($condition) {
    // code
}

// Type "foreach" and press Tab
foreach ($array as $key => $value) {
    // code
}

// Type "switch" and press Tab
switch ($variable) {
    case 'value':
        // code
        break;
    default:
        // code
        break;
}

// ============================================
// QUICK TEST: Functions
// ============================================

// Type "function" and press Tab
function myFunction($param) {
    return $param;
}

// Type "funct" and press Tab (PHP 7+)
function typedFunction($param): string {
    return (string)$param;
}

// Type "fn" and press Tab (PHP 7.4+)
$arrow = fn($x) => $x * 2;

// ============================================
// QUICK TEST: Classes
// ============================================

// Type "class" and press Tab
class MyClass {
    // Type "prop" and press Tab
    public $name;
    
    // Type "construct" and press Tab
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Type "method" and press Tab
    public function getName() {
        return $this->name;
    }
}

// ============================================
// QUICK TEST: Superglobals
// ============================================

// Type "$p" and press Tab
$postValue = $_POST["key"];

// Type "$g" and press Tab
$getValue = $_GET["key"];

// Type "$s" and press Tab
$sessionValue = $_SESSION["key"];

// ============================================
// QUICK TEST: Modern PHP Features
// ============================================

// Type "match" and press Tab (PHP 8+)
$result = match ($status) {
    'active' => 'User is active',
    'inactive' => 'User is inactive',
    default => 'Unknown status',
};

// Type "??" and press Tab (PHP 7+)
$value = $variable ?? 'default';

// Type "??=" and press Tab (PHP 7.4+)
$config ??= [];

// ============================================
// QUICK TEST: Database
// ============================================

// Type "pdo" and press Tab
$pdo = new PDO(
    "mysql:host=localhost;dbname=test",
    "user",
    "pass"
);

// Type "pdop" and press Tab
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([':id' => 1]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ============================================
// QUICK TEST: Arrays
// ============================================

// Type "arr" and press Tab (PHP 5.4+)
$numbers = [1, 2, 3, 4, 5];

// Type "amap" and press Tab
$doubled = array_map(function($n) {
    return $n * 2;
}, $numbers);

// Type "afilter" and press Tab
$evens = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});

// ============================================
// QUICK TEST: Error Handling
// ============================================

// Type "tryf" and press Tab
try {
    // risky code
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    // cleanup
}

// ============================================
// QUICK TEST: File Operations
// ============================================

// Type "fgc" and press Tab
$content = file_get_contents("file.txt");

// Type "fpc" and press Tab
file_put_contents("output.txt", $content);

// Type "fexists" and press Tab
if (file_exists("file.txt")) {
    // file exists
}

// ============================================
// QUICK TEST: JSON
// ============================================

// Type "jsonenc" and press Tab
$json = json_encode(['name' => 'John', 'age' => 30]);

// Type "jsondec" and press Tab
$data = json_decode($json, true);

// ============================================
// QUICK TEST: Session
// ============================================

// Type "sess" and press Tab
session_start();

// Type "sesset" and press Tab
$_SESSION["user_id"] = 123;

// Type "sesget" and press Tab
$userId = $_SESSION["user_id"] ?? 0;

// ============================================
// VERIFICATION CHECKLIST
// ============================================

/*
 * Quick Verification:
 * 
 * [ ] Basic snippets expand correctly
 * [ ] Placeholders work (Tab navigation)
 * [ ] No syntax errors
 * [ ] Descriptions appear in autocomplete
 * [ ] PHP version-specific snippets work (match, fn, etc.)
 */


