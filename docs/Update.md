# Update

## Example

```php
$data = [
    'set' => [
        'subject' => 'math',
        'score' => 80,
    ],
    'where' => [
        'class' => 5,
        'name' => 'michael',
    ],
];

$selectdb = new coccoto\selectdb\CRUD();
$selectdb->update('list', $data);
```

### Instructions executed by this operation

```sql
UPDATE list SET subject='math', score=80 WHERE class=5 AND name='michael'
```