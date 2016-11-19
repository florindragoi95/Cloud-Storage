<!DOCTYPE html>

<html>

<head>
    <meta charset = "utf-8">
    <title>Auth interface</title>

</head>

<body>
<h1>Login Page</h1>

<?php
    echo form_open(base_url()."auth_controller/check_login");

    echo form_label("username: ");
    echo form_input(array("id"=>"name","name"=>"username", "type"=>"text"));
    echo "<br>";
    echo form_label("password: ");
    echo form_password(array("id"=>"password","name"=>"password"));
    echo "<br>";
    echo form_submit(array("id"=>"submit", "name"=>"submit", "value"=>"Login"));
    echo form_close();
?>

    <p> If you don't have an account please </p>
        <?php echo "<a href=".base_url()."auth_controller/registerPage>Register</a>" ?>


</body>

</html>