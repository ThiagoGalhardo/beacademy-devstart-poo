<?php

declare(strict_types = 1);

class Produto
{
    //atributos que a classe possui
    private string $nome; // private para não terem acesso direto
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria; // Funciona a partir do PHP 8.1

    // construtor, para exigir que set valores necessários na classe
    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
        $this->categoria = $categoria;
    }

    //métodos:
    // GET Pega o dado e sempre tem retorno
    // SET Seta ou altera o dado, normalmente não possui retorno

    public function getNome(): string // retorno do tipo string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void // sem retorno, void
    {
        if(strlen($novoNome) < 3){
            die ('Erro! O nome não pode ter menos que 3 caracteres');
        }
               $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
           die ('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

    public function getDescricao(): string
    {
       return $this->descricao;
    }

    public function setDescricao(string $novaDescricao) : void
    {
        $this->descricao = $novaDescricao;
    }

}