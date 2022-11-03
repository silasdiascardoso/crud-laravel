<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/register-person" method=POST>
        @csrf
      <label for="">Name: </label>
        <input type="text" placeholder="Type your name..." name="name_person">
        </br></br>
        <button> Enviar </button>
    </form>

</body>
</html>