<?php

require_once 'Conn.php';

class Questionario {
    
    
    private $codQuestionario;
    private $codProfessor;
    private $codPergunta;

    public function getCodQuestionario() {
        return $this->codQuestionario;
    }

    public function setCodQuestionario($codQuestionario) {
        $this->codQuestionario = $codQuestionario;
    }

    public function getCodProfessor() {
        return $this->codProfessor;
    }

    public function setCodProfessor($codProfessor) {
        $this->codProfessor = $codProfessor;
    }

    public function getCodPergunta() {
        return $this->codPergunta;
    }

    public function setCodPergunta($codPergunta) {
        $this->codPergunta = $codPergunta;
    }

    public function create() {

        $conn = Conn::conectaBD();
        $sql = "INSERT INTO questionario (codProfessor, codPergunta) 
                VALUES (:codProfessor , :codPergunta);";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":codProfessor", $this->getCodProfessor());
        $stmt->bindValue(":codPergunta", $this->getCodPergunta());
        $stmt->execute();
        Conn::disconectaBD($conn);
    }

    public function read() {
        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * from questionario");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        Conn::disconectaBD($conn);
    }

    public function readId() {

        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * from questionario WHERE codQuestionario=:id ");
        $stmt->bindValue(':id', $this->getCodQuestionario());
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

}

?>
