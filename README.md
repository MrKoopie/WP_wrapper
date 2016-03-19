# WP_wrapper

By default WordPress has many non-mockable functions such as register_taxonomy(). By implementing this wrapper you can create tests that use mocks instead of a real WordPress installation.

## How to install
1. Go to the root directory of your theme/plugin.
2. Run the following command:
```php
composer require mrkoopie/wp_wrapper
```
3. Include the composer autoloader in your script (for a theme the functions.php).
```php
require_once('vendor/autoload.php');
```

## How to use the wrapper
Simply include this in the top of your file:
```php
use MrKoopie/WP_wrapper/WP_wrapper;
```

Now you can run any command (including any PHP command) via the wrapper:
```php
echo WP_wrapper::print_r('Y',1);
```

## Do I always have to use the use feature?
Simply use this code to make the class available without the namespace. Do note that this may cause conflicts when an other class exists with the name WP_wrapper.
```php
require_once('vendor/autoload.php');

class WP_wrapper extends MrKoopie/WP_wrapper/WP_Wrapper {};
```