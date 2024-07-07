<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Strawberry  extends Fruit
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
    ?>
</body>

</html>