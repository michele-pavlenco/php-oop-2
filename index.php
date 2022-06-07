<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20%
di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
require_once __DIR__ . '/Classes/products.php';
require_once __DIR__ . '/Classes/primeaccounts.php';

$utente1 = new User('Mike','Pavlenco');
//var_dump($utente1);

$utente2 = new PrimeAccounts('Jhon','Doe');
$utente2->setSale('20');
$utente2->getSale();
//var_dump($utente2);

$array_prod = [];

$prodotto1= new Products('Cibo per gatti','Felix','Cibo umido',10);
array_push($array_prod, $prodotto1);
//var_dump($prodotto1);

$prodotto2 = new Products('Trasportino','Pet Magasin','Per portare il tuo animale ovunque con te',40);
array_push($array_prod, $prodotto2);
//var_dump($prodotto2);

$prodotto3 = new Products('Palla','Pet Magasin','Non lasciar annoiare il tuo animale domestico ',3);
array_push($array_prod, $prodotto3);
//var_dump($prodotto3);

$prodotto4 = new Products('Ossicini ','Felix','ottimi stuzzichini facili da portare i giro',5);
array_push($array_prod, $prodotto4);
//var_dump($prodotto4);

$prodotto5 = new Products('Letto','Pet Magasin','Per un soffice riposo',40);
array_push($array_prod, $prodotto5);
//var_dump($prodotto5);

$prodotto6 = new Products('Trasportino','Pet Magasin','Per portare il tuo animale ovunque con te',40);
array_push($array_prod, $prodotto6);
//var_dump($prodotto6);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <title>php oop 2</title>
</head>
<body>
    <nav>

    </nav>
    <main>
        <div class="container">
            <div class="cards">
                <?php foreach ($array_prod as $prod)  {?>
                <div class="card debug">
                    <h2><?php echo $prod->getName() ?></h2>
                    <p> <?php echo $prod->getBrand() ?> </p>
                    <p> <?php echo $prod->getType() ?> </p>
                    <p> <?php echo $prod->getPrice() ?>  </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>