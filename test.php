<?php
/**
 * PHP Snippets Test File
 * 
 * Use this file to test the extension snippets.
 * Type the prefixes indicated in the comments and press Tab to expand.
 */

// ============================================
// TEST 1: Basic Control Structures
// ============================================

// Type "if" and press Tab
// Type "ifelse" and press Tab
// Type "ifelseif" and press Tab
// Type "switch" and press Tab

// ============================================
// TEST 2: Loops
// ============================================

// Type "foreach" and press Tab
// Type "for" and press Tab
// Type "while" and press Tab
// Type "dowhile" and press Tab

// ============================================
// TEST 3: Functions
// ============================================

// Type "function" and press Tab
// Type "funct" and press Tab (PHP 7+ with return type)
// Type "fn" and press Tab (PHP 7.4+ arrow function)
// Type "anon" and press Tab (anonymous function)

// ============================================
// TEST 4: Classes and OOP
// ============================================

// Type "class" and press Tab
// Type "classext" and press Tab
// Type "interface" and press Tab
// Type "trait" and press Tab (PHP 5.4+)
// Type "namespace" and press Tab (PHP 5.3+)
// Type "use" and press Tab
// Type "construct" and press Tab
// Type "method" and press Tab
// Type "methodt" and press Tab (PHP 7+)
// Type "prop" and press Tab
// Type "propt" and press Tab (PHP 7.4+)
// Type "get" and press Tab (getter)
// Type "set" and press Tab (setter)

// ============================================
// TEST 5: Superglobals
// ============================================

// Type "$G" and press Tab ($GLOBALS)
// Type "$se" and press Tab ($_SERVER)
// Type "$r" and press Tab ($_REQUEST)
// Type "$p" and press Tab ($_POST)
// Type "$g" and press Tab ($_GET)
// Type "$f" and press Tab ($_FILES)
// Type "$e" and press Tab ($_ENV)
// Type "$c" and press Tab ($_COOKIE)
// Type "$s" and press Tab ($_SESSION)

// ============================================
// TEST 6: Includes
// ============================================

// Type "in" and press Tab (include)
// Type "ino" and press Tab (include_once)
// Type "req" and press Tab (require)
// Type "reqo" and press Tab (require_once)

// ============================================
// TEST 7: Error Handling
// ============================================

// Type "try" and press Tab
// Type "tryf" and press Tab (PHP 5.5+ with finally)
// Type "throw" and press Tab

// ============================================
// TEST 8: Modern PHP 7+ Features
// ============================================

// Type "??" and press Tab (null coalescing - PHP 7+)
// Type "??=" and press Tab (null coalescing assignment - PHP 7.4+)
// Type "<=>" and press Tab (spaceship operator - PHP 7+)
// Type "nullable" and press Tab (?string - PHP 7.1+)

// ============================================
// TEST 9: PHP 8+ Features
// ============================================

// Type "match" and press Tab (PHP 8.0+)
// Type "union" and press Tab (PHP 8.0+)
// Type "intersection" and press Tab (PHP 8.1+)

// ============================================
// TEST 10: Arrays and Others
// ============================================

// Type "array" and press Tab
// Type "arr" and press Tab (short syntax - PHP 5.4+)
// Type "arra" and press Tab (associative)
// Type "arrs" and press Tab (short associative - PHP 5.4+)
// Type "isset" and press Tab
// Type "empty" and press Tab
// Type "echo" and press Tab
// Type "return" and press Tab

// ============================================
// PRACTICAL EXAMPLE: Complete Class
// ============================================

// Try creating a complete class using the snippets:

// 1. Type "namespace" -> namespace App\Models;
// 2. Type "use" -> use App\Traits\Loggable;
// 3. Type "class" -> class User { }
// 4. Inside the class:
//    - Type "propt" -> public string $name;
//    - Type "construct" -> __construct()
//    - Type "methodt" -> public function getName(): string { }
//    - Type "get" -> getter
//    - Type "set" -> setter

// ============================================
// PRACTICAL EXAMPLE: Match Expression (PHP 8+)
// ============================================

// Type "match" and create a match expression:
// $status = match ($code) {
//     200 => 'OK',
//     404 => 'Not Found',
//     default => 'Unknown',
// };

// ============================================
// PRACTICAL EXAMPLE: Arrow Function (PHP 7.4+)
// ============================================

// Type "fn" and use in array_map:
// $doubled = array_map(fn($n) => $n * 2, [1, 2, 3]);

// ============================================
// TIPS
// ============================================

/*
 * 1. All snippets appear in autocomplete when you type the prefix
 * 2. Press Tab or Enter to expand the snippet
 * 3. Use Tab to navigate between placeholders (${1}, ${2}, etc.)
 * 4. Press Esc to exit snippet editing mode
 * 5. Some snippets require specific PHP versions (indicated in description)
 * 
 * To test the extension:
 * 1. Press F5 in VS Code to open Extension Development Host
 * 2. Create a new PHP file
 * 3. Start typing the prefixes and see the snippets appear
 */
