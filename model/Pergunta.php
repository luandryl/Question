<?php

require_once 'Conn.php';

class Pergunta {

    private $lastId;
    private $codPergunta;
    private $p1, $p2, $p3, $p4, $p5;
    private $p6, $p7, $p8, $p9, $p10;
    private $p11, $p12, $p13, $p14, $p15, $p16;

    public function getLastId() {
        return $this->lastId;
    }

    public function setLastId($lastId) {
        $this->lastId = $lastId;
    }

    public function getCodPergunta() {
        return $this->codPergunta;
    }

    public function setCodPergunta($codPergunta) {
        $this->codPergunta = $codPergunta;
    }

    public function getP1() {
        return $this->p1;
    }

    public function setP1($p1) {
        $this->p1 = $p1;
    }

    public function getP2() {
        return $this->p2;
    }

    public function setP2($p2) {
        $this->p2 = $p2;
    }

    public function getP3() {
        return $this->p3;
    }

    public function setP3($p3) {
        $this->p3 = $p3;
    }

    public function getP4() {
        return $this->p4;
    }

    public function setP4($p4) {
        $this->p4 = $p4;
    }

    public function getP5() {
        return $this->p5;
    }

    public function setP5($p5) {
        $this->p5 = $p5;
    }

    public function getP6() {
        return $this->p6;
    }

    public function setP6($p6) {
        $this->p6 = $p6;
    }

    public function getP7() {
        return $this->p7;
    }

    public function setP7($p7) {
        $this->p7 = $p7;
    }

    public function getP8() {
        return $this->p8;
    }

    public function setP8($p8) {
        $this->p8 = $p8;
    }

    public function getP9() {
        return $this->p9;
    }

    public function setP9($p9) {
        $this->p9 = $p9;
    }

    public function getP10() {
        return $this->p10;
    }

    public function setP10($p10) {
        $this->p10 = $p10;
    }

    public function getP11() {
        return $this->p11;
    }

    public function setP11($p11) {
        $this->p11 = $p11;
    }

    public function getP12() {
        return $this->p12;
    }

    public function setP12($p12) {
        $this->p12 = $p12;
    }

    public function getP13() {
        return $this->p13;
    }

    public function setP13($p13) {
        $this->p13 = $p13;
    }

    public function getP14() {
        return $this->p14;
    }

    public function setP14($p14) {
        $this->p14 = $p14;
    }

    public function getP15() {
        return $this->p15;
    }

    public function setP15($p15) {
        $this->p15 = $p15;
    }

    public function getP16() {
        return $this->p16;
    }

    public function setP16($p16) {
        $this->p16 = $p16;
    }

    public function create() {
        $conn = Conn::conectaBD();

        $sql = "INSERT INTO perguntas (p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16)";
        $sql .= "VALUES (:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":p1", $this->getP1());
        $stmt->bindValue(":p2", $this->getP2());
        $stmt->bindValue(":p3", $this->getP3());
        $stmt->bindValue(":p4", $this->getP4());
        $stmt->bindValue(":p5", $this->getP5());
        $stmt->bindValue(":p6", $this->getP6());
        $stmt->bindValue(":p7", $this->getP7());
        $stmt->bindValue(":p8", $this->getP8());
        $stmt->bindValue(":p9", $this->getP9());
        $stmt->bindValue(":p10", $this->getP10());
        $stmt->bindValue(":p11", $this->getP11());
        $stmt->bindValue(":p12", $this->getP12());
        $stmt->bindValue(":p13", $this->getP13());
        $stmt->bindValue(":p14", $this->getP14());
        $stmt->bindValue(":p15", $this->getP15());
        $stmt->bindValue(":p16", $this->getP16());

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        $this->setLastId($conn->lastInsertId());

        Conn::disconectaBD($conn);
    }

    public function read() {
        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * from perguntas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

    public function readId() {

        $conn = Conn::conectaBD();
        $stmt = $conn->prepare("SELECT * from perguntas WHERE codPergunta=:codPergunta ");
        $stmt->bindValue(':codPergunta', $this->getCodPergunta());
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

}

?>
