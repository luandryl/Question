<?php
include 'topo.php';
require_once '../../controller/GraphController.php';
?>
<link href = "../../estilo/flot/examples/examples.css" rel = "stylesheet" type = "text/css">
<!--[if lte IE 8]><script language = "javascript" type = "text/javascript" src = "../../excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="../../estilo/flot/jquery.js"></script>
<script language="javascript" type="text/javascript" src="../../estilo/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="../../estilo/flot/jquery.flot.pie.js"></script>

<?php
$graph = new GraphController();

$questions = $graph->makeAllGraphPercent();
$note = $graph->makeAllGraphNote();

$text = $graph->loadTextQuestionNames();
?>
<div class="container-narrow">
    <div class="jumbotron">
        <hr />
        <?php include 'menu.php'; ?>
        <hr />
        <form name="form1" method="post" onSubmit="return validaRadio();">

            <h3>Graficos Gerais da escola</h3>
            <!-- Puxar o professor no block -->

        </form>
    </div>
</div>
<script type="text/javascript">

            function geraGraph(id, ever, maybe, never) {
                $(function() {
                    var data = [
                        {label: "Sempre", data: ever},
                        {label: "Ás vezes", data: maybe},
                        {label: "Raramente", data: never},
                    ]

                    $.plot(id, data, {
                        series: {
                            pie: {
                                show: true,
                                radius: 1,
                                label: {
                                    show: true,
                                    radius: 3 / 4,
                                    background: {
                                        opacity: 0.9,
                                        color: '#000'
                                    }
                                }
                            }
                        },
                        legend: {
                            show: false
                        }
                    });
                });

            }

            function geraNota(id, mb, b, r, i) {
                $(function() {
                    var data = [
                        {label: "MB", data: mb},
                        {label: "B", data: b},
                        {label: "R", data: r},
                        {label: "I", data: i},
                    ]

                    $.plot(id, data, {
                        series: {
                            pie: {
                                show: true,
                                radius: 1,
                                label: {
                                    show: true,
                                    radius: 3 / 4,
                                    background: {
                                        opacity: 0.9,
                                        color: '#000'
                                    }
                                }
                            }
                        },
                        legend: {
                            show: false
                        }
                    });
                });
            }

</script>
<div id="content">
    <?php foreach ($questions as $k => $v) {
        ?>
        <hr />
        <h3><?php echo $text[$k] ?> </h3>
        <div class="demo-container">
            <script>
                geraGraph(<?php echo "'#{$k}'" ?>, <?php echo $v['sempre'] ?>,<?php echo $v['asvezes'] ?>,<?php echo $v['raramente'] ?>)
            </script>
            <div id="<?php echo "{$k}" ?>" class="demo-placeholder" > </div>
        </div>
        <?php
    }
    ?>


    <hr />
    <h3>Nota do Professor </h3>
    <div class="demo-container">
        <script>
            geraNota('#nota', <?php echo $note['MB'] ?>,<?php echo $note['B'] ?>,<?php echo $note['R'] ?>,<?php echo $note['I'] ?>)
        </script>
        <div id="nota" class="demo-placeholder"> </div>
    </div>


</div>
<?php include './footer.php' ?>
