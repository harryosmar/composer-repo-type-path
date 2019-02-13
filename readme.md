# Use of Composer Repositories Type Path

## Code Structure

```
packages/
  dummy1/
    src/
    composer.json
  dummy2/
      src/
      composer.json
src/
composer.json
```

- [packages/](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages) is a folder contained all the packages such as :
  - package [dummy1/](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/dummy1)
  - package [dummy2/](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/dummy2)
- root [composer.json](https://github.com/harryosmar/composer-repo-type-path/blob/master/composer.json) will load this 2 dummies package :
```json
{
  "repositories": [
    {
      "type": "path",
      "url": "./packages/dummy1",
      "options": {
        "symlink": false
      }
    },
    {
      "type": "path",
      "url": "./packages/dummy2",
      "options": {
        "symlink": false
      }
    }
  ],
  "require": {
    "hs040x/dummy1": "dev-master",
    "hs040x/dummy2": "dev-master"
  }
}
```

## Setup

```
composer install
```

## How to run the test

```
composer test
```

# Links

- [composer repositories type path](https://getcomposer.org/doc/05-repositories.md#path)