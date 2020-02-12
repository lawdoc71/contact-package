<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>
    <form action="{{route('contact')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name">
        <input type="email" name="email" placeholder="Your email">
        <textarea name="message" col="30" rows="10" placeholder="Your question"></textarea>
        <input type="submit" value="submit">
    </form>

</body>
</html>
