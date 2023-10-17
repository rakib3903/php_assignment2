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

        $book = new Book(1234, "a story of ghost", "unknown", 1);
        echo $book->getIsbn().'<br>';
        echo $book->getTitle().'<br>';
        echo $book->getAuthor().'<br>';
        echo $book->getAvailable().'<br>';
        echo $book;
        $customer = new Customer(2010576143, "Md Rakib", "Hossain", "rakibb165@gmail.com");
        echo $customer->getId() .'<br>';
        echo $customer->getFirstName() .'<br>';
        echo $customer->getLastName() .'<br>';
        echo $customer->getEmail() .'<br>';

        echo $customer->unknown.'<br>';
        $customer->payment = 150;
        echo $customer->payment.'<br>';
        $customer->rakib('unkonwn', 'function', 'is called');
            
    ?>
</body>
</html>

