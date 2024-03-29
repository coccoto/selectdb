# selectdb

A little support for database operations.

## Prerequisites

- PHP 7.4

## Installation

```sh
$ composer require coccoto/selectdb
```

## Usage

Connect to the database.

- index.php

```php
require_once 'vendor/autoload.php';

$connInfo = [
    'host' => '',
    'dbname' => '',
    'user' => '',
    'pass' => '',
];

coccoto\selectdb\CRUD::push($connInfo);
```

## Example

- ### [SELECT.md](https://github.com/coccoto/selectdb/blob/master/docs/Select.md)

- ### [INSERT.md](https://github.com/coccoto/selectdb/blob/master/docs/Insert.md)

- ### [UPDATE.md](https://github.com/coccoto/selectdb/blob/master/docs/Update.md)

- ### [DELETE.md](https://github.com/coccoto/selectdb/blob/master/docs/Delete.md)

- ### [QUERY.md](https://github.com/coccoto/selectdb/blob/master/docs/Query.md)

## License

MIT License