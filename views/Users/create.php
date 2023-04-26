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
    </style>
</head>

<body>
    <!-- Title -->
    <h1>TrustCorp</h1>
    <hr>
    <!-- USER LIST -->
    <!-- Title -->
    <div style="display: flex;justify-content: space-between;align-items: center;">
        <h2>Crear Usuario</h2>
    </div>
    <!-- Form -->
    <form action="/users/store" method="post">
        RUT: <input type="text" name="rut" required><br>
        Primer Nombre: <input type="text" name="name_one" required><br>
        Segundo Nombre: <input type="text" name="name_two"><br>
        Primer Apellido: <input type="text" name="last_name_one" required><br>
        Segundo Apellido: <input type="text" name="last_name_two"><br>
        <button type="submit" style="background-color: black; color: white;">Guardar</button>
    </form>
    <!-- End - Form -->
</body>

</html>