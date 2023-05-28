<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signs">
        <div class="seccess"></div>
        <div class="faild"></div>
        <div class="warning"></div>
    </div>
    <form action="#" method="POST">
        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Author</label>
            <input type="text" name="author">
        </div>
        <div>
            <label>Topic</label>
            <textarea name="topic" id=""></textarea>
        </div>
        <div>
            <label>Type</label>
            <input type="text" name="type">
        </div>
        <div class="datetime">
            <label>Date publication</label>
            <div>
                <input type="date" name="date">
                <input type="time" name="time">
            </div>
            
        </div>
        <div>
            <br>
            <input type="submit" value="Add" name="add" class="add">
        </div>
    </form>
    <?php
        echo "<script src='script.js'>failed();</script>";

        if(!empty($_POST["add"]))
        {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $topic = $_POST['topic'];
            $type = $_POST['type'];
            if($title =='' || $author == '' || $topic == '' || $type == '')
            {
                echo "<script src='script.js'>failed();</script>";
                echo 'hello';
            }
        }
    ?>
<!-- <script src="script.js">failed();</script> -->
</body>

</html>