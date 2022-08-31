<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning

    </title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div class="art"> 
    

<h1><a href="">{{$post->title}}</a></h1>
 <p>From {{$post->category->name}}</p>
 <article>{{$post->body}}</article>

 <a href="/">Back</a>

    
</body>
</html>