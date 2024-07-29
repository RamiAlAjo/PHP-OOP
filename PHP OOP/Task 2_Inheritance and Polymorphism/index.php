<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Vehicle Demo</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Vehicle Movement Demo</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Car</h5>
                        <p class="card-text">
                            <?php
                            require_once 'Car.php';
                            $car = new Car();
                            $car->move();
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bike</h5>
                        <p class="card-text">
                            <?php
                            require_once 'Bike.php';
                            $bike = new Bike();
                            $bike->move();
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>