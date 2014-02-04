<?php
include 'topo.php';

require_once '../../controller/GraphController.php';
require_once '../../controller/LoginController.php';

$graph = new GraphController();

$arr = $graph->readTextInfo();

$text = $graph->loadTextQuestionNames();
?>
<div class="container-narrow">
    <div class="jumbotron">
        <hr />
        <?php include 'menu.php'; ?>
        <hr />
        <h2>Questionário escrito: </h2>
        <br />
            <strong>As respostas a seguir estão agrupadas conforme os questionários respondidos.</strong>
        <br />
        <br />
        <?php foreach ($arr as $k => $v) { ?>
            <table class="table table-bordered">
                <tr>
                    <td><?php echo $text['p12']?></td>
                    <td><?php echo $v['p12'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $text['p13']?></td>
                    <td><?php echo $v['p12'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $text['p14']?></td>
                    <td><?php echo $v['p14'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $text['p15']?></td>
                    <td><?php echo $v['p15'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $text['p16']?></td>
                    <td><?php echo $v['p16'] ?></td>
                </tr>
            </table>
        <?php } ?>

    </div>
</div>

<?php include 'footer.php'; ?>