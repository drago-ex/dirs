## Dirs
Easier access to individual directories.

## Instructions
Inject the class to base Presenter and use
```php
$this->dirs->getPublicDir();
...
```

## Installation
Add the configuration file:

```neon
extensions:
	dirs: Drago\Application\Directories\DirsExtension
```
