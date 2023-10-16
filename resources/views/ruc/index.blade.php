<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mi ruc</title>
  </head>
  <body>
<style>
    body {

    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    padding-top: 100px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 100;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h1 {
    margin: 0;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.navbar li {
    display: inline;
    margin-right: 20px;
}

.navbar a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

main {
    padding: 80px 0;
}

h2 {
    text-align: center;
}

.data-form {

    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.data-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.data-form input[type="text"],
.data-form input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.data-form button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>

    <header>
        <nav class="navbar">
            <div class="container">

                <h1>Consulta de Datos</h1>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container pt-5">
            <h2>Consulte sus datos</h2>
            <form action="#" method="get" class="data-form">
                @method("get")
                @csrf
                <label for="nombre">Consulta por ID:</label>
                <input type="text" id="" name="id" required>
                {{-- <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required> --}}
                <button type="submit">Consultar</button>

            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Consulta de Datos</p>
        </div>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
