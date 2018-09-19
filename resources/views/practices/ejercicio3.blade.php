<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/practices/style3.css')}}" />
</head>
<body>
    <h1>Lista de imágenes</h1>
    <table class="image-list">
        <tr>
            <th>Nombre (Título de la imagen)</th>
            <th>Imagen</th>
        </tr>
        <tr>
            <td>Imagen 1</td>
            <td class="center-image">
                <img src="{{asset('img/image1.jpg')}}" alt="name1" onclick="window.open('/practica/public/img/image1.jpg');">
            </td>
        </tr>
        <tr>
            <td>Imagen 2</td>
            <td class="center-image">
                <img src="{{asset('img/image2.jpg')}}" alt="name2" onclick="window.open('/practica/public/img/image2.jpg');">
            </td>
        </tr>
        <tr>
            <td>Imagen 3</td>
            <td class="center-image">
                <img src="{{asset('img/image3.jpg')}}" alt="name3" onclick="window.open('/practica/public/img/image3.jpg');">
            </td>
        </tr>
        <tr>
            <td>Imagen 4</td>
            <td class="center-image">
                <img src="{{asset('img/image4.jpg')}}" alt="name4" onclick="window.open('/practica/public/img/image4.jpg');">
            </td>
        </tr>
    </table>
</body>
</html>