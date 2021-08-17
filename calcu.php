<?php

if (isset($_POST['submit'])) {
    $number1 = $_POST["numb1"];
    $number2 = $_POST["numb2"];
    $operator = $_POST["select"];
    switch ($operator) {
        case "add":
            $res = $number1 + $number2;
            echo $res;
            break;

        case "sub":
            $res = $number1 - $number2;
            echo  $res;
            break;
        case "mult":
            $res = $number1 * $number2;
            echo $res;
            break;
        case "div":
            $res = $number1 / $number2;
            echo $res;
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>simple calc</title>
</head>

<body>
    <form class="row g-5 needs-validation col-md-8" novalidate method="POST" action="calcu.php">
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">number one</label>
            <input type="number" class="form-control" id="validationCustom01" name="numb1" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom04" class="form-label">State</label>
            <select class="form-select" id="validationCustom04" required name="select">
                <option selected disabled value="">Choose...</option>
                <option name="add">add</option>
                <option name="sub">sub</option>
                <option name="div">div</option>
                <option name="mult">multiply</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">number two</label>
            <input type="number" class="form-control" id="validationCustom02" name="numb2" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>

        </div>

        <div class="col-8">
            <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

        </div>

    </form>

</body>

</html>