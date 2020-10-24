<?php
  //VARIABLES:
  $arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo',
  ];
  $countries = [
    [ 
      'name' => 'Colombia',
      'Bogotá',
      'Medellín',
      'Cartagena'
    ],
    [
      'name' => 'México',
      'Guadalajara',
      'Monterrey',
      'Tijuana'
    ],
    [
      'name' => 'Ecuador',
      'Quito',
      'Guayaquil',
      'Loja'
    ],
    [
      'name' => 'Cuba',
      'Havana',
      'Santiago de Cuba',
      'Cienfuegos'
    ],
    [
      'name' => 'Nicaragua',
      'Managua',
      'León',
      'Granada'
    ],
  ];
  $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
  $a = 32;
  $b = 3;
  $c = 2;
  // PRIMER RETO:
  echo "<p>RETO #1</p>";
  $count = 0;
  echo "$arreglo[keyStr1] $arreglo[0] $arreglo[keyStr2] ";
  for ($index = 1; $index < 3; $index++) {
    $count = $index;
    print " $arreglo[$index]";
  }
  echo "<p>Decirlo al reves lo dudo</p>";
  if ($count < 3) {
    echo "$arreglo[2] $arreglo[1] $arreglo[keyStr2] $arreglo[0] $arreglo[keyStr1]";
    echo "<p>¡Qué trabajo me ha costado!</p>";
  };
  // SEGUNDO RETO:
  echo "<p>RETO #2</p>";
  foreach($countries as $countrie) {
    echo "<p>$countrie[name]:</p>";
    for ($index = 0; $index < sizeof($countrie) - 1; $index++) {
      print "<ul> <li>$countrie[$index]</li> </ul>";
    };
  };
  // TERCER RETO:
  echo "<p>RETO #3</p>";
  $max_value = max($valores);
  $min_value = min($valores);
  echo "<p>Valor mínimo: $min_value</p>";
  echo "<p>Valor máximo: $max_value</p>";
  // CUARTO RETO:
  $d = $a + $b;
  $e = ($c + $b);
  print "Totales = $d y $e";
  // QUINTO RETO:
  $valor = "10";
  if ($valor > 5 && $valor < 10) {
    print $valor;
  } else if ($valor >= 0 && $valor <= 20) {
    print "segunda condición $valor";
  } else if ($valor === "10") {
    print "tercera condición $valor";
  } else if ($valor > 0 && $valor < 5 || $valor > 10 && $valor < 15) {
    print "cuarta condición $valor";
  }
?>