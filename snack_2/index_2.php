<?php
if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['età'])) {
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $age = $_GET['età'];

  
}

    // Verifica lunghezza del nome
//     if (strlen($name) > 3) {
//         // Verifica presenza di punto e chiocciola nella mail
//         if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
//             // Verifica che "age" sia un numero
//             if (is_numeric($age)) {
//                 echo "Accesso riuscito";
//             } else {
//                 echo "Accesso negato: L'età deve essere un numero.";
//             }
//         } else {
//             echo "Accesso negato: Indirizzo email non valido.";
//         }
//     } else {
//         echo "Accesso negato: Il nome deve essere lungo almeno 3 caratteri.";
//     }
// } else {
//     echo "Accesso negato: Tutti i campi sono obbligatori.";
// }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css_2/style_2.css">
</head>
    <!-- ## Snack 2
    Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index_2.php" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Età</label>
                            <input type="number" class="form-control" id="età" placeholder="Età" name="età">
                        </div>
                        <div class=" col-12 mt-4 ">
                            <button type="submit" class="btn btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <?php if (strlen($nome) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)  ) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
    ?>
</body>
</html>