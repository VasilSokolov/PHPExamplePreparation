<html>
<head>
    <title>Profile Page</title>
</head>

<script src="js/jQuery.1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/jquery-ui.css">
<body>

    <?php
        if (isset($_GET['submit'])) {
            $query = 'UPDATE';
        };
    ?>

    <form>
        First name:
        <input type="text" name="firstName">
        Last name:
        <input type="text" name="lastName">
        Profile picture:
        <input type="file" name="profilePicture">
        Birth day:
        <input type="datetime" id="datepicker" name="birthDay">
        <input type="submit" name="submit" value="Edit profile">
    </form>

    <script type="text/javascript" >
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</body>
</html>
