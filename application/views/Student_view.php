<!DOCTYPE html>

<html>

    <head>
        <meta charset = "utf-8">
        <title>Students example</title>

    </head>

    <body>
    <h1>Students example</h1>
    <table>

        <tr><th>Nr.crt.</th><th>Nume</th> <th>Delete</th></tr>

        <?php
        $i=1;
        foreach ($records as $row)
        {
            echo "<tr>";

            echo "<td>".$i++."</td>";
            echo "<td>".$row->student_name."</td>";

            echo "<td>";
                echo form_open(base_url()."student_controller/delete");
                echo form_hidden('id',$row->student_id);
                echo form_submit('delete','Delete');
                echo form_close();
            echo "</td>";

            echo "</tr> ";

        }

        echo "<br><br>";
        ?>

    </table>

    <?php
        echo form_open(base_url()."student_controller/insert");
        echo form_label("Name: ");
        echo form_input(array("id"=>"name","name"=>"name", "type"=>"text", "required"=>"true"));
        echo form_submit(array("id"=>"submit", "name"=>"submit", "value"=>"Insert"));
        echo form_close();
    ?>

    </body>

</html>

