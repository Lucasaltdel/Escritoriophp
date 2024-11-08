<?php
require_once('Item.php');
class Gaveta {
    private array $itens = [];

    public function adicionarItem(Item $item): void {
        $this->itens[] = $item;
    }

    public function removerItem(string $nome): void {
        foreach ($this->itens as $index => $item) {
            if ($item->getNome() === $nome) {
                unset($this->itens[$index]);
                $this->itens = array_values($this->itens); 
                break;
            }
        }
    }

    public function listarItens(): void {
        if (empty($this->itens)) {
            echo "Nenhum item na gaveta.<br>";
            return;
        }
        foreach ($this->itens as $item) {
            echo "Item: " . $item->getNome() . " - " . $item->getDescricao() . "<br>";
        }
    }
}

