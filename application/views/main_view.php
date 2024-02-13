<a href="task/create" id="createBTN" class="btn btn-success">Create new task</a>

<?php
foreach ($data as $row) {
    $page = file_get_contents('application/views/templates/main_content.html');
    $page = str_replace("###TITLE###", $row['title'], $page);
    $page = str_replace("###DESCRIPTION###", $row['description'], $page);
    $page = str_replace("###DATE###", $row['due_date'], $page);
    $page = str_replace("###ID###", $row['id'], $page);
    $background_color = ($row['is_done'] == true || $row['is_done'] == 1) ? "gray" : '';
    $color = ($row['is_done'] == true || $row['is_done'] == 1) ? "white" : '';
    $isChecked = ($row['is_done'] == 1) ? "checked" : '';
    $page = str_replace("###BACKGROUNDCOLOR###", $background_color, $page);
    $page = str_replace("###COLOR###", $color, $page);
    $page = str_replace("###ISDONE###", $isChecked, $page);
    echo $page;
}
