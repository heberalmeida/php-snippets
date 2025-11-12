# Test Suite for PHP Snippets Extension

This directory contains comprehensive test files for the PHP Snippets extension.

## Test Files

### 1. `comprehensive-test.php`
**Complete test suite with all snippets**

- Contains test cases for all 138+ snippets
- Organized by categories
- Includes integration tests
- Use this for thorough testing

**How to use:**
1. Open in Extension Development Host (F5)
2. Go through each test case
3. Type the prefix and verify the output

### 2. `quick-test.php`
**Quick verification test**

- Tests most commonly used snippets
- Faster to run
- Good for quick verification after changes

**How to use:**
1. Open in Extension Development Host (F5)
2. Test snippets marked with comments
3. Verify they work correctly

## Running Tests

### Method 1: Extension Development Host (Recommended)

1. Open the project in VS Code
2. Press **F5** to start debugging
3. A new VS Code window opens (Extension Development Host)
4. Open the test file in the new window
5. Test each snippet by typing the prefix and pressing Tab

### Method 2: Install Extension Locally

1. Package the extension:
   ```bash
   npm install -g vsce
   vsce package
   ```

2. Install the `.vsix` file in VS Code

3. Open test files and verify snippets work

## Test Categories

The comprehensive test covers:

1. Constants & Definitions (2 snippets)
2. Control Structures - Alternative Syntax (3 snippets)
3. Control Structures - Standard Syntax (5 snippets)
4. Loops - Alternative Syntax (3 snippets)
5. Loops - Standard Syntax (4 snippets)
6. Functions (5 snippets)
7. Classes & OOP (18 snippets)
8. Magic Methods (5 snippets)
9. Enums (2 snippets) - PHP 8.1+
10. Superglobals (9 snippets)
11. Includes & Requires (4 snippets)
12. Date & Time (3 snippets)
13. Error Handling (3 snippets)
14. Type Declarations (3 snippets) - PHP 7+
15. Other Useful Snippets (18 snippets)
16. Database - PDO (3 snippets)
17. Database - MySQLi (2 snippets)
18. File Operations (6 snippets)
19. Array Functions (10 snippets)
20. String Functions (12 snippets)
21. JSON Operations (2 snippets)
22. Session Operations (4 snippets)
23. Cookie Operations (1 snippet)
24. HTTP Headers (3 snippets)
25. Type Checking (6 snippets)
26. Generators (1 snippet) - PHP 5.5+
27. Anonymous Class (1 snippet) - PHP 7.0+

**Total: 138+ snippets**

## What to Test

For each snippet, verify:

1. **Autocomplete appears** - Snippet shows in suggestions
2. **Description is correct** - Shows PHP version requirement
3. **Expansion works** - Tab/Enter expands the snippet
4. **Placeholders work** - Tab navigates between ${1}, ${2}, etc.
5. **Syntax is valid** - Generated code has no syntax errors
6. **Version compatibility** - PHP version-specific snippets work correctly

## Common Issues

### Snippets don't appear
- Check file extension is `.php` or `.html`
- Verify you're in Extension Development Host window
- Check extension is activated

### Placeholders don't work
- Use Tab to navigate (not arrow keys)
- Press Esc to exit snippet mode

### Syntax errors
- Verify PHP version compatibility
- Check for missing semicolons or brackets

## Test Results Template

```
Date: ___________
Tester: ___________
VS Code Version: ___________
Extension Version: ___________

Basic Snippets: [ ] Pass [ ] Fail
OOP Snippets: [ ] Pass [ ] Fail
Database Snippets: [ ] Pass [ ] Fail
Modern PHP Features: [ ] Pass [ ] Fail
All Placeholders: [ ] Pass [ ] Fail
Descriptions: [ ] Pass [ ] Fail

Notes:
_______________________________________
_______________________________________
```

## Contributing

If you find issues during testing:

1. Note the snippet prefix
2. Describe the expected vs actual behavior
3. Include PHP version if relevant
4. Open an issue on GitHub


