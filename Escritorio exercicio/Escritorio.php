<?php
require_once('Armario.php');
class Escritorio {
    private array $armarios = [];

    public function adicionarArmario(Armario $armario): void {
        $this->armarios[] = $armario;
    }

    public function removerArmario(int $indice): void {
        if (isset($this->armarios[$indice])) {
            unset($this->armarios[$indice]);
            $this->armarios = array_values($this->armarios); 
        }
    }

    public function listarArmarios(): void {
        if (empty($this->armarios)) {
            echo "Nenhum armário no escritório.<br>";
            return;
        }
        foreach ($this->armarios as $index => $armario) {
            echo "Armário " . ($index + 1) . ":<br>";
            $armario->listarGavetas();
            echo "<br>";
        }
    }

    public function auditoria(): void {
        if (empty($this->armarios)) {
            echo "Nenhum armário para auditoria.<br>";
            return;
        }
        foreach ($this->armarios as $index => $armario) {
            echo "Armário " . ($index + 1) . ":<br>";
            $armario->listarGavetas();
            echo "<br>";
        }
    }
}

