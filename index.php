<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intiation</title>
</head>
<body>
    <?php
        require_once __DIR__ ."/book.php";
        require_once __DIR__ ."/customer.php";

        $book = new Book(1, "dfdf", "b", 2);
        echo $book->getTitle();

        $customer = new Customer(43, "Md Rakib", "Hossain", "rakibb165@gmail.com");
        echo "<br>".$customer->getId();
            
    ?>
</body>
</html>

