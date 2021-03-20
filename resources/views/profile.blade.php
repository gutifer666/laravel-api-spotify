<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h2>Perfil del Usuario</h2>
    
    <p>Pais: {{$profile['country']}} </p>
    <p>Nombre: {{$profile['display_name']}} </p>
    <p>email: {{$profile['email']}} </p>
    <p>Dirección de Usuario: {{$profile['external_urls']['spotify']}} </p>
    <img src="{{$profile['images'][0]['url']}}" alt="profile">
    
</body>
</html>