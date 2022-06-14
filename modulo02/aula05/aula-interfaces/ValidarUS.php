<?php 

declare(strict_types=1);

// Aqui não extends como uma classe, implementa a interface
class ValidarUS implements Validar
{
  //devemos definir os métodos de Validar(interface)
  public function validarDocumento(string $documento): void
  {
    if (strlen($documento) !== 14){
      die ('Documento USA inválido');
    }
  }
}