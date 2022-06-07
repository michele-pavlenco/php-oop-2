<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
require_once __DIR__ . '/Classes/products.php';
require_once __DIR__ . '/Classes/primeaccounts.php';

$utente1 = new User('Mike','Pavlenco');
var_dump($utente1);

$utente2 = new PrimeAccounts('Jhon','Doe');
$utente2->setSale('20%');
$utente2->getSale();
var_dump($utente2);


$prodotto1= new Products('Cibo per gatti','Felix','Cibo umido',10);
var_dump($prodotto1);

$prodotto2 = new Products('Trasportino','Pet Magasin','Per portare il tuo animale ovunque con te',40);
var_dump($prodotto2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 2</title>
</head>
<body>
    <nav>

    </nav>
    <main>
        
    </main>
</body>
</html>