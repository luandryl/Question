<?php
include 'topo.php';
require_once '../../controller/QuestionController.php';

$quest = new QuestionController();
$teacher = $quest->loadIdTheacher();
?>
<div id="question">
    <form name="form1" method="post" onSubmit="return validaRadio();">
        <div class="row-fluid span12 offset2">
            <div class="input-append">
                <div class="control-group">
                    <h3>Nome do Professor</h3>
                    <!-- Puxar o professor no block -->
                    <input class="input-xlarge" name="nomeProfessor" value="<?php echo $teacher[0]['nomeProfessor']; ?>" type="text" disabled="disabled">
                    <button name="btnVoltar" onclick="window.location = 'index.php'" class="btn btn-warning btn"><i class="icon-circle-arrow-left"></i></button>
                </div>
            </div>
            <div class="control-group">
                <h3>Nome do Componente Curricular</h3>
                <input class="input-xlarge" name="componente" type="text" placeholder ="ex: Matemática" required data-required data-pattern="^[a-zA-Z]">
            </div>

            <h4>1) O professor(a) é pontual na entrada e saída das aulas?</h4>
            <div class="radio">    
                <label>
                    <input type="radio" name="p1" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p1" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p1" value="0">
                    Raramente
                </label>
            </div>

            <h4>2) O professor(a) é compreensivo em relação as dificuldades pessoais dos alunos?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p2" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p2" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p2" value="0">
                    Raramente
                </label>
            </div>

            <h4>3) A explicação é clara e objetiva?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p3" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p3" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p3" value="0">
                    Raramente
                </label>
            </div>

            <h4>4) Utiliza o tempo de forma responsável e profissional, não perde tempo com assuntos alheios à aula?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p4" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p4" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p4" value="0">
                    Raramente
                </label>
            </div>

            <h4>5) Demonstra conhecimento das teorias e/ou práticas?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p5" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p5" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p5" value="0">
                    Raramente
                </label>
            </div>

            <h4>6) Resume no início da aula, o assunto a ser tratado no dia com exemplos práticos?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p6" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p6" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p6" value="0">
                    Raramente
                </label>
            </div>

            <h4>7) Analise as avaliações e comentam com os alunos os resultados?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p7" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p7" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p7" value="0">
                    Raramente
                </label>
            </div>
            <h4>8) Aproveita as experiências dos alunos nas aulas?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p8" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p8" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p8" value="0">
                    Raramente
                </label>
            </div>
            <h4>9) Demonstra nas práticas domínio dos equipamentos, materiais e/ou softwares?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p9" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p9" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p9" value="0">
                    Raramente
                </label>
            </div>
            <h4>10) Age com ética e respeito para com os alunos e demais professores?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p10" value="2">
                    Sempre
                </label>
                <label>
                    <input type="radio" name="p10" value="1">
                    Ás Vezes
                </label>
                <label>
                    <input type="radio" name="p10" value="0">
                    Raramente
                </label>
            </div>
            <h4>11) Avalie o professor(a) com as menções:</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="p11" value="MB">
                    MB
                </label>
                <label>
                    <input type="radio" name="p11" value="B">
                    B
                </label>
                <label>
                    <input type="radio" name="p11" value="R">
                    R
                </label>
                <label>
                    <input type="radio" name="p11" value="I">
                    I
                </label>
            </div>

            <div class="control-group">
                <h4>12) Deixe seu comentário para o coordenador de curso.</h4>
                <textarea class="form-control" name="p12" rows="5" required/></textarea>
            </div>

            <div class="control-group">
                <h4>13) Deixe seu comentário para coordenação pedagógica</h4>
                <textarea class="form-control" name="p13" rows="5" required/></textarea>
            </div>

            <div class="control-group">
                <h4>14) Deixe sua opinião para melhoria do curso:</h4>
                <textarea class="form-control" name="p14" rows="5" required/></textarea>
            </div>
            <div class="control-group">
                <h4>15) Comentario para a secretaria acadêmica:</h4>
                <textarea class="form-control" name="p15" rows="5" required/></textarea>
            </div>
            <div class="control-group">
                <h4>16) Comentario para o curso :</h4>
                <textarea class="form-control" name="p16" rows="5" required/></textarea>
            </div>
            <br>
            <br>
        </div>
        <div class="offset5">
            <button name="btnSalvar" type="submit" class="btn btn-primary btn-large">Confirmar</button>
            <?php
            if (isset($_REQUEST['btnSalvar'])) {

                $q = new QuestionController();
                $q->newQuestionAction();
                Helper::_redirect("Location: fim.php");
            }
            ?>
            <br>
        </div>
    </form>
</div>
<?php include './footer.php' ?>