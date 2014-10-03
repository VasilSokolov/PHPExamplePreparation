<form action="" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>


Welcome <?php echo htmlspecialchars($_GET["name"]) ?><br>
Your email is: <?php echo htmlspecialshars($_GET["email"]) ?>


