# Pyramid SOAP API Client (PHP)

## Prerequisites

- PHP 5
- [Composer](https://getcomposer.org/)

## Getting Started

```sh
composer install
```

### Run as Standalone

Examples are located under `docs/examples/**`

### Run Test Cases

1. Ensure that the correct values are set in `config/env.php`.
2. Run `./vendor/bin/phpunit` from the root directory.

### Re-generate Types

Run following to recreate the classes located under `src/Api/Type`:

```sh
./vendor/bin/soap-client generate:types --config=config/code_generator.php
```

### Re-generate ClassMap

Run following to generate  `src/Api/ClassMap`:

```sh
./vendor/bin/soap-client generate:classmap --config=config/code_generator.php
```

Next, replace the collection result with previous in `src/Api/ClassMap/ClassMapCollection.php`.