<?php

declare(strict_types=1);


class Validar
{
  // método estático
  public static function validarCpf(string $cpf): void
  {
    if (strlen($cpf) !==11 ){
      die('Ops, cpf inválido');
    }
  }
}