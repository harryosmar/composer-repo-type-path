# Composer Repositories Type Path

> Experiment Use of > Composer Repositories Type Path

## Code Structure

```
includes/
  include1/
    src/
    composer.json
  include2/
    src/
    composer.json
packages/
  dummy1/
    src/
    composer.json
  dummy2/
    src/
    composer.json
  includes/
    composer.json
src/
composer.json
```

- [packages/](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages) is a folder contained all the packages such as :
  - package [hs040x/dummy1](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/dummy1)
  - package [hs040x/dummy2](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/dummy2)
  - package [hs040x/includes](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/includes) will include another 2 more packages from [includes/](https://github.com/harryosmar/composer-repo-type-path/tree/master/includes) folder :
      - [hs040x/include1](https://github.com/harryosmar/composer-repo-type-path/tree/master/includes/include1)
      - [hs040x/include2](https://github.com/harryosmar/composer-repo-type-path/tree/master/includes/include2)
- root [composer.json](https://github.com/harryosmar/composer-repo-type-path/blob/master/composer.json) will load this `2 dummies package`, `1 root include composer.json` (* this root include will include 2 more libraries : `include1`, `include2`) :
```json
{
  "minimum-stability": "dev",
  "prefer-stable": true,
  "repositories": [
    {
      "type": "path",
      "url": "./includes/*",
      "options": {
        "symlink": false
      }
    },
    {
      "type": "path",
      "url": "./packages/*",
      "options": {
        "symlink": false
      }
    }
  ],
  "require": {
    "hs040x/dummy1": "dev-master",
    "hs040x/dummy2": "dev-master",
    "hs040x/includes": "dev-master"
  }
}
```

> `"minimum-stability": "dev"`, is needed because the package [hs040x/includes](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/includes) is require 2 more packages using `dev-master`. That's means [hs040x/includes](https://github.com/harryosmar/composer-repo-type-path/tree/master/packages/includes) is not a stable version.

> To avoid use of `"minimum-stability": "dev"` for external packages : `"prefer-stable": true` is needed. If the package has a stable version then prefer to use it.

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
