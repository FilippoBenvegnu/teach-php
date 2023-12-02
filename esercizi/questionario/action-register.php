<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposte Chill Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: <?php echo isset($_GET['bgColor']) ? $_GET['bgColor'] : '#f8f9fa'; ?>;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            margin: 50px auto;
            max-width: 600px; /* Modifica la larghezza massima del container */
            padding: 20px;
            border: 1px solid #ccc; /* Aggiunto un bordo per separare il container dallo sfondo */
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        th, td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <h1>😴 Risposte Chill Form 😴</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Chiave</th>
                    <th>Valore</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_GET as $k => $v) {
                    //$v = $v ?: "NULL";
                    echo "<tr> <td> $k </td> <td> $v </td> </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
