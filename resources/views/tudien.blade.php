<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <fieldset>
        <legend>Từ diển</legend>
        <label for="a">Nhập từ cần dịch </label>
   <input type="text" name="English" id="a">
        <button type="submit" >Translate</button>    </fieldset>

</form>
</body>
</html>
