<?php

echo "decimal : ";
var_dump(12345);

echo "Octal : ";
var_dump(012345);

echo "Hexadecimal : ";
var_dump(0x12AF);

echo "Binary : ";
var_dump(0b1111);

echo "underscore in number : ";
var_dump(1_2345_6789_0);

echo "floating point : ";
var_dump(1.777);

echo "floating point dengan E notation plus : ";
var_dump(1.7e3);

echo "floating point dengan E notation minus : ";
var_dump(1.7e-3);

echo "underscore in floating point : ";
var_dump(1_234.567_89);

echo "integer overflow 64 bit: ";
var_dump(9223372036854775807 );
?>