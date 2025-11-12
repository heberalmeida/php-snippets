# 🧪 Quick Testing Guide

## Quick Test (5 minutes)

### Step 1: Open the Project
```bash
cd /Users/heber/Projects/php-snippets
code .
```

### Step 2: Start Development Mode
1. Press **F5** in VS Code
2. A new VS Code window will open (Extension Development Host)
3. This is the window where you will test the snippets

### Step 3: Create Test File
In the new window, create a `test.php` file and test the following snippets:

#### ✅ Basic Test (PHP 5+)
```
Type: if
Expected result: if (condition) { }
```

#### ✅ Class Test
```
Type: class
Expected result: class ClassName { }
```

#### ✅ Loop Test
```
Type: foreach
Expected result: foreach ($array as $key => $value) { }
```

#### ✅ Superglobal Test
```
Type: $p
Expected result: $_POST["name"]
```

#### ✅ Modern Test (PHP 7+)
```
Type: funct
Expected result: function name($parameters): returnType { }
```

#### ✅ PHP 8 Test
```
Type: match
Expected result: match (expression) { value => result, default => result, };
```

## Testing Checklist

Check each item as you test:

- [ ] Basic snippets appear in autocomplete
- [ ] Snippets expand when pressing Tab
- [ ] Placeholders work (navigation with Tab)
- [ ] PHP 5 snippets work
- [ ] PHP 7 snippets work
- [ ] PHP 8 snippets work
- [ ] Superglobals are correct (no double $$)
- [ ] Descriptions appear in autocomplete

## Common Problems

### ❌ Snippets don't appear
**Solution:** Make sure:
- The file has `.php` or `.html` extension
- You are in the Extension Development Host window (not the main window)
- The extension is activated

### ❌ Snippet doesn't expand
**Solution:**
- Try pressing Enter instead of Tab
- Select the snippet with arrows and press Enter
- Check if there's a conflict with other installed snippets

### ❌ Placeholders don't work
**Solution:**
- Use Tab to navigate between placeholders
- Press Esc to exit editing mode

## Complete Test

For a complete test, open the `test.php` file included in the project and follow the instructions in the comments.