<?php

require_once '../../model/Pergunta.php';
require_once '../../model/Questionario.php';
require_once '../../model/Professor.php';
require_once '../../model/BusinessGraph.php';

class GraphController {

    public function readTextInfo() {
        $arr = array();

        $info = new BusinessGraph();
        $oi = $info->readAllInformationOfAllTeacher();
        

        $arr = $info->countInfoText($oi);

        return $oi;
    }

    public function makeAllGraphPercent() {
        $arr = array();

        $info = new BusinessGraph();
        $oi = $info->readAllInformationOfAllTeacher();

        for ($i = 1; $i <= 10; $i++) {

            $arr = array_merge($info->countInfoOfTeacher($oi, 'p' . $i), $arr);
        }

        $arr = array_reverse($arr);

        return $arr;
    }

    public function makeAllGraphNote() {
        $arr = array();

        $info = new BusinessGraph();
        $oi = $info->readAllInformationOfAllTeacher();

        $arr = $info->countNotaOfTeacher($oi);

        return $arr;
    }

    public function makePercent() {
        $arr = array();
        $info = new BusinessGraph();
        $oi = $info->readAllInformationOfTeacher($_GET['codProf']);
        for ($i = 1; $i <= 10; $i++) {

            $arr = array_merge($info->countInfoOfTeacher($oi, 'p' . $i), $arr);
        }
        $arr = array_reverse($arr);
        return $arr;
    }

    public function makeNotaTeacher() {
        $arr = array();
        $info = new BusinessGraph();
        $oi = $info->readAllInformationOfTeacher($_GET['codProf']);

        $arr = $info->countNotaOfTeacher($oi);

        return $arr;
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

    public function loadTextQuestionNames() {
        $text = array(
            'p1' => '1) O professor(a) é pontual na entrada e saída das aulas?',
            'p2' => '2) O professor(a) é compreensivo em relação as dificuldades pessoais dos alunos?',
            'p3' => '3) A explicação é clara e objetiva?',
            'p4' => '4) Utiliza o tempo de forma responsável e profissional, não perde tempo com assuntos alheios à aula?',
            'p5' => '5) Demonstra conhecimento das teorias e/ou práticas?',
            'p6' => '6) Resume no início da aula, o assunto a ser tratado no dia com exemplos práticos?',
            'p7' => '7) Analise as avaliações e comentam com os alunos os resultados?',
            'p8' => '8) Aproveita as experiências dos alunos nas aulas?',
            'p9' => '9) Demonstra nas práticas domínio dos equipamentos, materiais e/ou softwares?',
            'p10' => '10) Age com ética e respeito para com os alunos e demais professores?',
            'p12' => 'Deixe seu comentário para o coordenador de curso.',
            'p13' => 'Deixe seu comentário para coordenação pedagógica',
            'p14' => 'Deixe sua opinião para melhoria do curso',
            'p15' => 'Comentario para a secretaria acadêmica',
            'p16' => 'Comentario para o curso'
        );

        return $text;
    }

    public function loadTeacherInfo() {

        $teacher = new Professor();
        $teacher->setCodProf($_GET['codProf']);
        return $teacher->readId();
    }

}

?>
