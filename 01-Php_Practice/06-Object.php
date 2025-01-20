<!DOCTYPE html>
<html>
    <body>
        <?php
        class Cars {
            public $color;
            public $model;
            public $brand;

            public function __construct($color, $model, $brand) {
                $this->color = $color;
                $this->model = $model;
                $this->brand = $brand;
            }

            public function message() {
                return "My car is a " . $this->color . ", the model is " . $this->model . ", and the brand is " . $this->brand . "!";
            }
        }
        $myCar = new Cars("red", "GLC", "Mercedes-Benz");
        echo $myCar->message();
        ?>
    </body>
</html>

