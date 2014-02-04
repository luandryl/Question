<?php
include 'topo.php';

require_once '../../controller/GraphController.php';
require_once '../../controller/LoginController.php';

$login = new LoginController();

$graph = new GraphController();
$teacher = $graph->loadTeacher();
?>
<div class="container-narrow">
    <div class="jumbotron">
        <hr />
        <?php include 'menu.php'; ?>
        <hr />
        <form method="post">

            <h2>Professores</h2>
            <h4>Digite o nome do professor desejado</h4>
            <select name="codProf" class="input-xxlarge">
                <?php foreach ($teacher as $k => $v) { ?>
                    <option value="<?php echo $v['codProf'] ?>"><?php echo $v['nomeProfessor'] ?></option>
                <?php } ?>
            </select>
            <br/>
            <button name="btnSalvar" type="submit" class="btn btn-primary">Próximo</button>
            <?php
            if (isset($_REQUEST['btnSalvar'])) {
                Helper::_redirect("Location: graph.php?codProf={$_POST['codProf']}");
            }
            ?>
    </div>
<hr />
</form>
</div>
<?php include 'footer.php' ?>