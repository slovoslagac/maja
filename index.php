<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 30.3.2018
 * Time: 14:09
 */



if(isset($_POST["save_training"])) {
    if(isset($_POST["value_status"])) {
        $all = $_POST["value_status"];
    } else {
        $all = array();
    }

    print_r($all);


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
<div id="accordion" class="container">
    <div class="card">
        <div class="card-header btn btn-link " id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0 training_name">
                4.4.2018 10:30
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <input type="checkbox" value="1" name="value_status[]">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>
                                <input type="checkbox" value="2" name="value_status[]">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>
                                <input type="checkbox" value="3"  name="value_status[]">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success float-right save_button" name="save_training">Success</button>
                </form>
            </div>
        </div>
    </div>

</div>
<footer>

</footer>
</body>
</html>