<!DOCTYPE html>
<html>

<head>
    <title>Car Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Car Details</h1>

        <?php
        class Car
        {
            private $make;
            private $model;
            private $year;

            public function __construct($make, $model, $year)
            {
                $this->setMake($make);
                $this->setModel($model);
                $this->setYear($year);
            }

            public function getMake()
            {
                return $this->make;
            }

            public function setMake($make)
            {
                $this->make = $make;
            }

            public function getModel()
            {
                return $this->model;
            }

            public function setModel($model)
            {
                $this->model = $model;
            }

            public function getYear()
            {
                return $this->year;
            }

            public function setYear($year)
            {
                $this->year = $year;
            }

            public function displayCarInfo()
            {
                echo "<div class='card mb-3'>
                    <div class='card-header'>Car Information</div>
                    <div class='card-body'>
                        <h5 class='card-title'>Make: " . $this->getMake() . "</h5>
                        <p class='card-text'>Model: " . $this->getModel() . "</p>
                        <p class='card-text'>Year: " . $this->getYear() . "</p>
                    </div>
                </div>";
            }
        }

        // Demonstration
        $myCar = new Car("Toyota", "Corolla", 2020);

        // Trying to access properties directly (this will cause an error)
        // echo $myCar->make;

        // Accessing properties through getter methods
        $myCar->displayCarInfo();

        // Modifying properties through setter methods
        $myCar->setMake("Honda");
        $myCar->setModel("Civic");
        $myCar->setYear(2022);
        $myCar->displayCarInfo();
        ?>

    </div>
</body>

</html>