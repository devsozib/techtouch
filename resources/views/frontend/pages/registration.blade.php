

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{route('customersignUp')}}">
    @csrf
    <label for="">Name</label><br>
    <input type="text" name="name"><br>
    <label for="">Email</label><br>
    <input type="text" name="email"><br>
    <label for="">Phone</label><br>
    <input type="text" name="phone"><br>
    <label for="">Password</label><br>
    <input type="text" name="password"><br><br>
    <button type="submit">Submit</button>
</form>
    
</body>
</html>