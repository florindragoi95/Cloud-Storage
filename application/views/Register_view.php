<!DOCTYPE html>

<html>

<head>
    <meta charset = "utf-8">
    <title>Register view</title>

</head>

<body>
<h1>Registers</h1>


    <?php
    echo form_open(base_url()."auth_controller/register");

    echo form_label("Firstname: ");
    echo form_input(array("id"=>"firstname","name"=>"f_name", "type"=>"text"));
    echo "<br>";
    echo form_label("Lastname: ");
    echo form_input(array("id"=>"lastname","name"=>"l_name", "type"=>"text"));
    echo "<br>";
    echo form_label("username: ");
    echo form_input(array("id"=>"name","name"=>"u_name", "type"=>"text"));
    echo "<br>";
    echo form_label("password: ");
    echo form_password(array("id"=>"password","name"=>"pass"));
    echo "<br>";
    echo form_submit(array("id"=>"submit", "name"=>"Register", "value"=>"Register"));
    echo form_close();
    ?>

</body>

</html>
