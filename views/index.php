<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustCorp</title>
    <style>
        * {
            font-family: arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <!-- Title -->
    <h1>TrustCorp</h1>
    <hr>
    <!-- USER LIST -->
    <!-- Title -->
    <div style="display: flex;justify-content: space-between;align-items: center;">
        <h2>Usuarios</h2>
        <a href="/users/create">Crear usuario</a>
    </div>
    <!-- Table -->
    <table>
        <!-- Head -->
        <tr>
            <th style="text-align: left;">ID</th>
            <th>RUT</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th></th>
        </tr>
        <!-- Content -->
        <?php foreach ($users as $user) { ?>
            <tr>
                <!-- ID -->
                <td><?php echo $user->id;  ?></td>
                <!-- RUT -->
                <td><?php echo $user->rut;  ?></td>
                <!-- Name -->
                <td><?php echo "$user->name_one $user->name_two";  ?></td>
                <!-- Lastname -->
                <td><?php echo "$user->last_name_one $user->last_name_two";  ?></td>
                <!-- Actions -->
                <td>
                    <form action="/users/delete" method="post">
                        <input type="text" name="id" value="<?php echo $user->id;  ?>" style="display: none;" required><br>
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        <!-- End - Content -->
    </table>
    <!-- End - Table -->
</body>

</html>