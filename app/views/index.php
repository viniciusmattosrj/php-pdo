<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1 class="text-center">Olá <?= $name ?></h1>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($users as $user): ?>

                <tr>
                    <td><?= $user->id   ?></td>
                    <td><?= $user->name ?></td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        
        <!-- Jquery -->
        <script src="//code.jquery.com/jquery.js"></script>

        <!-- Bootstrap Jquery -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <script src="" async defer></script>
    </body>
</html>