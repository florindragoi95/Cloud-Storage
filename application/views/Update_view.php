<!DOCTYPE html>

<html>

<head>
    <meta charset = "utf-8">
    <title>Students example</title>

</head>

<body>
<h1>Update Page</h1>

    <?php
        echo validation_errors();
        echo form_open(base_url()."student_controller/update");
        echo form_label('Update name: ');
        echo form_input(array("id" => "update_name", "name" => "update_name"));
        echo form_hidden('id',$id);
        echo form_submit('update','Update');
        echo form_close();



    ?>

</body>

</html>

