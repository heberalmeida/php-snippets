<?php
/**
 * Test Suite for PHP 8.2, 8.3, and 8.4 Features
 * 
 * This file tests all snippets for PHP 8.2, 8.3, and 8.4.
 * Make sure you're using the correct PHP version to test these features.
 */

// ============================================
// PHP 8.2 FEATURES
// ============================================

// TEST 1: Readonly Class
// Type: readonlyclass
readonly class User {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}

// TEST 2: Readonly Property
// Type: readonly
class Config {
    readonly public string $apiKey;
}

// TEST 3: null, false, true as Types
// Type: nulltype, falsetype, truetype
function returnsNull(): null {
    return null;
}

function returnsFalse(): false {
    return false;
}

function returnsTrue(): true {
    return true;
}

// TEST 4: Constants in Traits
// Type: traitconst
trait Configurable {
    public const string DEFAULT_CONFIG = 'default';
    
    public function getConfig(): string {
        return self::DEFAULT_CONFIG;
    }
}

// TEST 5: Sensitive Parameter Attribute
// Type: sensitive
#[\SensitiveParameter]
function processPassword(string $password): bool {
    // Password is marked as sensitive and won't appear in stack traces
    return strlen($password) > 8;
}

// TEST 6: DNF (Disjunctive Normal Form) Types
// Type: dnf
function processValue((Countable&Iterator)|null $value): void {
    // Accepts either (Countable AND Iterator) OR null
}

// ============================================
// PHP 8.3 FEATURES
// ============================================

// TEST 7: Typed Class Constants
// Type: tconst
class Settings {
    public const string APP_NAME = 'MyApp';
    public const int MAX_USERS = 100;
    public const array ALLOWED_IPS = ['127.0.0.1', '::1'];
}

// TEST 8: Override Attribute
// Type: override
class BaseController {
    public function handle(): void {
        echo "Base handler";
    }
}

class UserController extends BaseController {
    #[\Override]
    public function handle(): void {
        echo "User handler";
    }
}

// TEST 9: Override Method (Alternative)
// Type: overridem
class AdminController extends BaseController {
    #[\Override]
    public function handle(): void {
        echo "Admin handler";
    }
}

// TEST 10: Dynamic Class Constant Fetch
// Type: dynconst
class Status {
    public const string PENDING = 'pending';
    public const string APPROVED = 'approved';
    public const string REJECTED = 'rejected';
}

$statusName = 'PENDING';
$status = Status::$$statusName; // Dynamic constant fetch

// TEST 11: json_validate() Function
// Type: jsonval
$jsonString = '{"name": "John", "age": 30}';
if (json_validate($jsonString)) {
    $data = json_decode($jsonString, true);
    echo "Valid JSON";
}

// TEST 12: mb_str_pad() Function
// Type: mbpad
$text = "Hello";
$padded = mb_str_pad($text, 10, " ", STR_PAD_RIGHT, "UTF-8");
// Result: "Hello     "

// ============================================
// PHP 8.4 FEATURES
// ============================================

// TEST 13: Property Hooks (Full)
// Type: phooks
class Product {
    private string $_name;
    
    public string $name {
        get() {
            return $this->_name;
        }
        set(string $value) {
            if (empty($value)) {
                throw new InvalidArgumentException('Name cannot be empty');
            }
            $this->_name = $value;
        }
    }
}

// TEST 14: Property Hook with Getter Only
// Type: phookget
class ComputedValue {
    private array $data = [];
    
    public int $count {
        get() {
            return count($this->data);
        }
    }
}

// TEST 15: Property Hook with Setter Only
// Type: phookset
class ValidatedInput {
    private string $_email;
    
    public string $email {
        set(string $value) {
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException('Invalid email');
            }
            $this->_email = $value;
        }
    }
}

// TEST 16: New Initializer
// Type: newinit
class Container {
    public function __construct(
        public string $name,
        public array $items = []
    ) {}
}

// Using new initializer
$container = new Container('MyContainer');

// TEST 17: Implicit Nullable Type
// Type: implicitnull
function processValue(?string $value): void {
    // ?string is implicit nullable
}

// ============================================
// INTEGRATION EXAMPLES
// ============================================

/**
 * Complete Example: Readonly Class with Typed Constants (PHP 8.2+)
 */
readonly class ApiConfig {
    public const string VERSION = '1.0.0';
    public const int TIMEOUT = 30;
    
    public function __construct(
        public string $endpoint,
        public string $apiKey
    ) {}
}

/**
 * Complete Example: Class with Override and Property Hooks (PHP 8.3+ & 8.4+)
 */
abstract class BaseModel {
    public function save(): bool {
        return true;
    }
}

class UserModel extends BaseModel {
    public const string TABLE = 'users';
    
    private string $_email;
    
    public string $email {
        get() {
            return $this->_email;
        }
        set(string $value) {
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException('Invalid email');
            }
            $this->_email = $value;
        }
    }
    
    #[\Override]
    public function save(): bool {
        // Override implementation
        return parent::save();
    }
}

/**
 * Complete Example: Sensitive Parameter with Validation (PHP 8.2+)
 */
#[\SensitiveParameter]
function changePassword(string $oldPassword, string $newPassword): bool {
    if (strlen($newPassword) < 8) {
        return false;
    }
    return true;
}

// ============================================
// TEST CHECKLIST
// ============================================

/*
 * PHP 8.2 Tests:
 * [ ] readonlyclass - Readonly class works
 * [ ] readonly - Readonly property works
 * [ ] nulltype - null type works
 * [ ] falsetype - false type works
 * [ ] truetype - true type works
 * [ ] traitconst - Constants in traits work
 * [ ] sensitive - SensitiveParameter attribute works
 * [ ] dnf - DNF types work
 * 
 * PHP 8.3 Tests:
 * [ ] tconst - Typed constants work
 * [ ] override - Override attribute works
 * [ ] overridem - Override method works
 * [ ] dynconst - Dynamic constant fetch works
 * [ ] jsonval - json_validate() works
 * [ ] mbpad - mb_str_pad() works
 * 
 * PHP 8.4 Tests:
 * [ ] phooks - Property hooks (get/set) work
 * [ ] phookget - Property hook (get) works
 * [ ] phookset - Property hook (set) works
 * [ ] newinit - New initializer works
 * [ ] implicitnull - Implicit nullable works
 * 
 * Integration:
 * [ ] All features work together
 * [ ] No syntax errors
 * [ ] Placeholders work correctly
 */

