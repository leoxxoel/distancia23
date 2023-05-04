<?php
/**
 * Este script contiene funciones para realizar operaciones aritméticas básicas.
 *
 * @package Calculadora
 * @version 1.1
 * @author Profesorado
 */

/**
 * Suma dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la suma.
 * @since 1.0
 */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
 * Resta dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la resta.
 * @since 1.0
 */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
 * Multiplica dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la multiplicación.
 * @since 1.0
 */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
 * Divide dos números.
 *
 * @param float $num1 El dividendo.
 * @param float $num2 El divisor.
 * @return float|string El resultado de la división o un mensaje de error si el divisor es cero.
 * @since 1.0
 */
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}
?>

