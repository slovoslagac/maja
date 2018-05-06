<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 30.3.2018
 * Time: 14:09
 */

require_once('includes/init.php');
$rbr;
$timeinterval;
$alldata = getTrainingData();
$curentdate = new DateTime();


if (isset($_POST["save_training"])) {
    if (isset($_POST["value_status"])) {
        $all = $_POST["value_status"];
    } else {
        $all = array();
    }
    $training_id = $_POST['save_training'];

    print_r($all);
    echo "<br>$training_id<br>";


}


?>

<!DOCTYPE html>

<html>
<head>
    <title>Evidencija</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>
<header>

</header>
<h3 class="text-center title">Evidencija treninga</h3>
<div id="accordion" class="container col-md-6 offset-md-3">
    <?php $current_time = '';
    $training_id = '';
    foreach ($alldata as $item)  {
    if ($item->start_time != $current_time)
    {
    $current_time = $item->start_time; $current_time_object = new DateTime($current_time);
    $timeinterval = date_diff($curentdate, $current_time_object); $timed = $timeinterval->format('%a'); $timeh = $timeinterval->format('%h');
    $rbr = 0;
    if ($training_id != '') {

    ?>

    </tbody>
    </table>
    <button type="submit" class="btn btn-success float-right save_button" name="save_training" value="<?php echo $training_id ?>">Success</button>
    </form>
</div>
</div>
</div>

<?php } $training_id = $item->id ?>
<div class="card">
    <div class="card-header btn btn-link " id="heading<?php echo $training_id ?>" data-toggle="collapse" data-target="#collapse<?php echo $training_id ?>" aria-expanded="<?php echo ($timed == 0 and abs($timeh) < 3 ) ?"true" : "false"?>"
         aria-controls="collapse<?php echo $training_id ?>">
        <h4 class="mb-0 training_name">
            <?php echo $current_time_object->format('d.m.Y H:i'); ?>
        </h4>
    </div>
    <div id="collapse<?php echo $training_id ?>" class="collapse <?php echo ($timed == 0 and abs($timeh) < 3 ) ?"show" : ""?>" aria-labelledby="heading<?php echo $training_id ?>" data-parent="#accordion">
        <div class="card-body">
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">R.B.</th>
                        <th scope="col">Ime i prezime</th>
                        <th scope="col">status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    }
                    $rbr = +1;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $rbr ?></th>
                        <td><?php echo "$item->first_name $item->last_name ($item->birth_year)" ?></td>
                        <td>
                            <input class="text-center" type="checkbox" value="<?php echo $item->player_id ?>" name="value_status[]">
                        </td>
                    </tr>

                    <?php } ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success float-right save_button" name="save_training" value="<?php echo $training_id ?>">Success</button>
            </form>
        </div>
    </div>
</div>

</div>
<footer>

</footer>
</body>
</html>