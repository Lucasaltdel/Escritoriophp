<?php
require_once('Gaveta.php');
class Armario {
    private array $gavetas = [];

    public function adicionarGaveta(Gaveta $gaveta): void {
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta(int $indice): void {
        if (isset($this->gavetas[$indice])) {
            unset($this->gavetas[$indice]);
            $this->gavetas = array_values($this->gavetas); 
        }
    }

    public function listarGavetas(): void {
        if (empty($this->gavetas)) {
            echo "Nenhuma gaveta no armário.<br>";
            return;
        }
        foreach ($this->gavetas as $index => $gaveta) {
            echo "Gaveta " . ($index + 1) . ":<br>";
            $gaveta->listarItens();
            echo "<br>";
        }
    }
}

