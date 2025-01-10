<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming Assignment 2</title>

    @include("custom.bootstrap")

</head>
<body>

    @include("layout.header")

    @yield("content")

    @include("layout.footer")
    
</body>
</html>