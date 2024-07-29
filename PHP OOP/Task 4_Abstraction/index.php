<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Abstraction Example</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Shape Area Calculation</h1>
        <div class="card p-4">
            <div class="mb-3">
                <?php
                require_once 'classes/Shape.php';
                require_once 'classes/Circle.php';
                require_once 'classes/Rectangle.php';

                $circle = new Circle(5);
                $rectangle = new Rectangle(4, 6);

                echo "Area of Circle: " . $circle->calculateArea() . "<br>";
                echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
                ?>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>