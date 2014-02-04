<?php
include 'topo.php';
require_once '../../controller/QuestionController.php';

$quest = new QuestionController();
$teacher = $quest->loadTeacher();
?>
<div class="container-narrow">
    <hr>
    <div class="jumbotron">
        <form method="post">
            <h2>Professores</h2>
            <h4>Digite o nome do professor desejado</h4>
            <select name="codProf" class="input-xxlarge">
                <?php foreach ($teacher as $k => $v) { ?>
                    <option value="<?php echo $v['codProf'] ?>"><?php echo $v['nomeProfessor'] ?></option>
                <?php } ?>
            </select>
            <br />
            <button name="btnMenu" type="submit" class="btn btn-primary">Menu</button>
            <button name="btnSalvar" type="submit" class="btn btn-primary">Próximo</button>
            <?php
            if (isset($_REQUEST['btnSalvar'])) {
                Helper::_redirect("Location: questionarioView.php?codProf={$_POST['codProf']}");
            }
            else if (isset($_REQUEST['btnMenu'])) {
                Helper::_redirect("Location: ../../index.php");
            }
            ?>
        </form>
    </div>
    <hr>
</div>
<?php include 'footer.php' ?>