<?php
require_once('Item.php');
class Pasta extends Item {
    private string $categoria;

    public function __construct(string $nome, string $descricao, string $categoria) {
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void {
        if ($categoria !== "") {
            $this->categoria = $categoria;
        } else {
            $this->categoria = "Categoria Não Identificada";
        }
    }
}


