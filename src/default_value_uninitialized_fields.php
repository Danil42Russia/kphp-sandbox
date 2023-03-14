<?php

class Clazz {
  public string $name1;
}

function main() {
  $a = new Clazz();
  echo "[ " . $a->name1 . " ]";
}

main();
