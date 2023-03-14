## Описание

Тут я буду хранить мини-сниппеты KPHP кода, которые помогут понять неочевидности или хитрое поведение.

## Cниппеты

### Недоработки

- Проблема с типом у `parse_str` - [parse_str.php](src/parse_str.php)

### WTF?!

##### Дефолтное значение у непроинициализированных полей классов

Ссылка: [default_value_uninitialized_fields.php](src/default_value_uninitialized_fields.php)

PHP: `Clazz::$name1 must not be accessed before initialization in accessed_before_initialization.php:9`

KPHP: `[  ]`

Комментарий: Он как будто делает:

```php
class Clazz {
  public string $name1 = '';
}
```
