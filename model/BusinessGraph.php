<?php

require_once 'Conn.php';

class BusinessGraph {

    public function readAllInformationOfTeacher($codTeacher) {
        $conn = Conn::conectaBD();

        $sql = "SELECT * 
                FROM professores, questionario, perguntas
                WHERE professores.codProf = questionario.codProfessor
                AND perguntas.codPergunta = questionario.codPergunta
                AND professores.codProf ={$codTeacher}";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

    public function readAllInformationOfAllTeacher() {
        $conn = Conn::conectaBD();

        $sql = "SELECT * 
                FROM professores, questionario, perguntas
                WHERE professores.codProf = questionario.codProfessor
                AND perguntas.codPergunta = questionario.codPergunta";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        Conn::disconectaBD($conn);
    }

    public function countInfoText($arr) {
        $arrR = array();
        for ($i = 0; $i < count($arr); $i++) {
            
            $arrR = array_merge($this->runArrayForText($arr[$i]['p12'], $arr[$i]['p13'], $arr[$i]['p14'], $arr[$i]['p15'], $arr[$i]['p16']),$arrR);
        }
        
        return $arrR;
    }


    public function runArrayForText($p12, $p13, $p14, $p15, $p16) {

        $arr = array(
            'p12' => $p12,
            'p13' => $p13,
            'p14' => $p14,
            'p15' => $p15,
            'p16' => $p16,
        );

        return $arr;
    }

    public function runArrayForNota($mb, $b, $r, $i) {
        $arr = array(
            'MB' => $mb,
            'B' => $b,
            'R' => $r,
            'I' => $i,
        );
        
        return $arr;
    }

    public function runArrayForTeacher($quest, $ever, $maybe, $never) {

        $arr = array("{$quest}" => array(
                "sempre" => "{$ever}",
                "asvezes" => "{$maybe}",
                "raramente" => "{$never}"
        ));

        return $arr;
    }

    public function countNotaOfTeacher($arrTeacher) {

        $mb = 0;
        $b = 0;
        $r = 0;
        $i = 0;

        for ($j = 0; $j < count($arrTeacher); $j++) {
            if ($arrTeacher[$j]['p11'] == 'MB')
                $mb = $mb + 1;
            if ($arrTeacher[$j]['p11'] == 'B')
                $b = $b + 1;
            if ($arrTeacher[$j]['p11'] == 'R')
                $r = $r + 1;
            if ($arrTeacher[$j]['p11'] == 'I')
                $i = $i + 1;
        }


        return $this->runArrayForNota($mb, $b, $r, $i);
    }

    public function countInfoOfTeacher($arrTeacher, $question) {
        $ever = 0;
        $maybe = 0;
        $never = 0;

        foreach ($arrTeacher as $key => $value) {

            if ($value[$question] == 0)
                $never = $never + 1;
            if ($value[$question] == 1)
                $maybe = $maybe + 1;
            if ($value[$question] == 2)
                $ever = $ever + 1;
        }

        return $this->runArrayForTeacher($question, $ever, $maybe, $never);
    }

}

?>
