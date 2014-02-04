<?php

require_once 'Conn.php';

class Professor {

    private $codProf;
    private $nomeProf;

    public function getCodProf() {
        return $this->codProf;
    }

    public function setCodProf($codProf) {
        $this->codProf = $codProf;
    }

    public function getNomeProf() {
        return $this->nomeProf;
    }

    public function setNomeProf($nomeProf) {
        $this->nomeProf = $nomeProf;
    }

    public function read() {

        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * FROM professores");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

    public function readId() {
        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * FROM professores WHERE codProf=:codProf");
        $stmt->bindValue("codProf", $this->getCodProf());
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

}

?>
