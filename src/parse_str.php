<?php

class UrlParser {
  /** @var mixed[] */
  private array $data;

  public function __construct(string $value) {
    #ifndef KPHP
    // Вот так работать в KPKP не будет:
    parse_str($value, $this->data);
    #endif

    // А вот так будет:
    parse_str($value, $result); // Проблема в том, что $result в KPHP возвращает mixed, а не mixed[]
    $this->data = (array)$result; // Что-бы записать значение в массив, а не в mixed переменную, нужно самому сделать каст к (array)

    // На данную проблему поставлена бага: https://github.com/VKCOM/kphp/issues/766
  }

  /** @return mixed[] */
  public function getValue(): array {
    return $this->data;
  }
}

function main() {
  $t = new UrlParser("first=value&arr[]=foo+bar&arr[]=baz&arr[]=foo");

  var_dump($t->getValue());
}

main();
