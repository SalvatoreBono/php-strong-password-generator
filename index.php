<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "./functions.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container pt-5">
            <form method="GET" class="row g-3 justify-content-center">
                <div class="col-4 text-center">
                    <select name="passwordLen" class="form-select" aria-label="Default select example">
                        <option hidden selected value="0">Scegli la lunghezza della password</option>
                        <option value="8">8 lettere</option>
                        <option value="9">9 lettere</option>
                        <option value="10">10 lettere</option>
                        <option value="11">11 lettere</option>
                        <option value="12">12 lettere</option>
                        <option value="13">13 lettere</option>
                        <option value="14">14 lettere</option>
                        <option value="15">15 lettere</option>
                        <option value="16">16 lettere</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Cerca</button>
                </div>
            </form>
            <?php
            /* se diverso dal value 0 stampa */
            if ($passwordLen != 0) {
                $_SESSION["password"] = $passwordGenerator;
                /* devi essere reinderizzato a ./homePasswordGenerator.php */
                header("Location: ./homePasswordGenerator.php");
                die;
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>