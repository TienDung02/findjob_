<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php
    $postday = date('Y-m-d');
    $updateday = date('Y-m-d');
    $tags_input = $_POST['tags_input'];
    $location = $_POST['location'];
    $title = $_POST['job_title'];
    $type = $_POST['job_type'];
    $categories = $_POST['category'];
    $desc = $_POST['description'];
    $closing_date = $_POST['closing_date'];

    $job_categories = '';
    $job_tags = '';

    foreach ($categories as $category){
        $job_categories = $job_categories . $category . ', ';
    }

    foreach ($tags_input as $tag){
        $tag = str_replace(' ', '', $tag);
        $job_tags = $job_tags . $tag . ',' ;
        $sql_select_tag = mysqli_query($connect, "select * from tags where name = '$tag' ") or exit(mysqli_error($connect));
        if(mysqli_num_rows($sql_select_tag)) {
            $sql_update_tag = "update tags set popular = (popular + 1) where  name = '$tag' ";
            $connect->query($sql_update_tag);
        }else{
            $sql_insert_tag = "insert into tags (tag_id, name, popular, create_day, update_day) values ('', '$tag', 1, $postday, $updateday)";
            $connect->query($sql_insert_tag);
        }
    }

    $sql_insert_job = "INSERT INTO job (id , id_company, title, category, job_type, location, job_tag, description, closing_day, required, create_day, update_day) 
                        VALUES ('', '1', '$title', '$job_categories', '$type', '$location', '$job_tags', '$desc', '$closing_date', 1, '$postday', '$updateday')";
//    echo $sql_insert_job;die;
    if ($connect->query($sql_insert_job) === TRUE) {
        $_SESSION['insert_job'] = 1;
        header("location:add-job.php");
    } else {
        $_SESSION['insert_job'] = 0;
        echo "Lỗi: " . $sql_insert_job . "<br>" . $conn->error;
        header("location:add-job.php");
    }

?>
