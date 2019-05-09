<?php
include("config.php");
if(isset($_POST['submit']))
            {
               // Putting data from form into variables to be manipulated
               $title = $_POST['title'];
               $article = $_POST['article'];

               // Getting the form variables and then placing their values into the MySQL table
               mysql_query("INSERT INTO article (title, article) VALUE('$title', '$article')");
            }
?>
<form id="form1" method="post" action="admin.php">
            <p>
                <label for="title">Title:</label>
                <input name="title" type="text" class="widebox" id="title">
            </p>
            <p>
                <label for="article">Article:</label>
                <textarea name="article" cols="60" rows="8" class="widebox" id="article">
                </textarea>
            </p>
            <p>
               <input type="submit" name="submit" value="Insert New Article" id="submit">
            </p>
</form>