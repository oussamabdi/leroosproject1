<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #000000;
            color: #fff;
        }

        #container {
            text-align: center;
            background-color: #000000;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #ff8c00;
            margin-bottom: 30px;
        }

        form {
            background-color: #000000;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 400px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ff8c00;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #777;
            border-radius: 4px;
            background-color: #555;
            color: #fff;
        }

        button {
            background-color: #ff8c00;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc7000;
        }

        p {
            margin-top: 0;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Connexion</h1>

        <form action="{{route('admin.connexionad')}}"  method="POST">
            @csrf
            <label for="id">Id Admin :</label>
            <input type="text" id="id" name="id_admin" placeholder="Entrez votre nom d'utilisateur" required>
            @error('id_admin')
              {{ $message}}
              @enderror
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>

            <button type="submit">Se connecter</button>
        </form>

    </div>
</body>
</html>
