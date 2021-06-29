<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php

        function create_table($dataset, $from){
        if(is_array($dataset) && !empty($dataset)){ 
            $key = $from."code";
            ?>

            <table>

            <?php 
            $columns = array_keys($dataset[0]);
            ?>

            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>

                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>

                    <td>
                        <a href="edit-<?php echo $from?>.php?id=<?php echo $row_id; ?>" class="edit_btn" >Edit</a>
                    </td>
                    <td>
                        <a href="delete-<?php echo $from?>.php?id=<?php echo $row_id; ?>" class="delete_btn" >Delete</a>
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>

    </body>

</html> 