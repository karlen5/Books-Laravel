<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ievadi grāmatas informāciju. </h1>

    <form action="/books" method="post">
        @csrf
        <label for="title">Title:</label>

        <div>
            <input type="text" id="title" name="title">
        </div>

        <label for="author">Author:</label>

        <div>
            <input type="text" id="author" name="author">
        </div>

        <label for="date">Released date:</label>

        <div>
            <input type="date" id="date" name="date">
        </div>

        <label for="comment">Description:</label>

        <div>
            <textarea type="text" id="comment" name="comment"></textarea>
        </div>
        <br>
        <div>
            <input type="submit">
        </div>
    </form> 
</body>
</html>