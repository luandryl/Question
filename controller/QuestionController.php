<?php

require_once '../../model/Pergunta.php';
require_once '../../model/Questionario.php';
require_once '../../model/Professor.php';

class QuestionController {
    /*
     * this class control de actions of a survey;
     */

    public function newQuestionAction() {
        /*
         * creates a new survey
         */
        
        $pergunta = new Pergunta();
        $questionario = new Questionario();
        for ($i = 1; $i <= 16; $i++) {
            $set = "setP{$i}";
            $pergunta->$set($_POST["p{$i}"]);
        }
        
        $pergunta->create();

        $questionario->setCodPergunta($pergunta->getLastId());
        $questionario->setCodProfessor($_GET['codProf']);
        $questionario->create();

    }

    public function loadTeacher() {
        $teacher = new Professor();
        return $teacher->read();
    }

    public function loadIdTheacher() {
        $teacher = new Professor();
        $teacher->setCodProf($_GET['codProf']);
        return $teacher->readId();
    }

}

?>
