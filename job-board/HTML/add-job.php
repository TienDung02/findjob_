<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php
if (checkLogged() == 1) {
    require_once('header_2.php');
} else {
    require_once('header.php');
}
?>
<div class="clearfix"></div>


<!-- Content
================================================== -->
<div class="d-flex">
    <?php
    require_once('menu_left_employer.php');
    ?>
    <!-- Submit Page -->
    <div class="contain" style="margin: auto; width: calc(100% - 260px);background-color: #f7f7f7">
        <div class="form" style="width: 90%; margin: 50px auto 0 auto">
            <h3>Add Job</h3>
            <hr>
        </div>
        <?php
        $id = '';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if ($id != '' && $id != '0') {
            $sql_select_job = "select * from job where `id` = $id";
            $job = callsql($sql_select_job);
            $job = $job[0];
        }
        ?>
        <form method="post" class="m-auto mb-5 rounded-4 form_add_company" action="<?php
        if ($id != '' && $id != '0') {
            echo 'edit_job_process.php?id='.$id;
        } else {
            echo 'add_job_process.php';
        }
        ?>"
              style="width: 90%; background-color: #fff; padding: 50px 0;">
            <?php
            $sql_select_id_employer = "select employer.id_employer from employer where `id_user` =   '" . $_SESSION['login']['id_user'] . "'  ";
            $id_employer = callsql($sql_select_id_employer);
            $id_employer = $id_employer[0];

            ?>
            <input type="hidden" name="id_employer" value="<?php echo $id_employer['id_employer']; ?>">
            <!-- Title -->
            <div class="form">
                <h5>Job Title</h5>
                <input class="search-field" type="text" name="job_title" placeholder=""
                       value="<?php if ($id != '' && $id != '0') {
                           echo $job['title'];
                       } ?>" required/>
            </div>
            <div class="form">
                <h5>Location <span>(optional)</span></h5>

                <select data-placeholder="Full-Time" class="chosen-select-no-single" name="location">
                    <?php
                    $sql_select_location = "select * from location";
                    $location = callsql($sql_select_location);
                    foreach ($location as $local) {
                        ?>
                        <option <?php if ($id != '' && $id != '0' && $job['location'] == $local['name']) {
                            echo 'selected';
                        } ?> value="<?php echo $local['name'] ?>"><?php echo $local['name'] ?></option>
                    <?php } ?>
                </select>
                <p class="note">Leave this blank if the location is not important</p>
            </div>

            <!-- Job Type -->
            <div class="form">
                <h5>Job Type</h5>
                <select data-placeholder="Full-Time" class="chosen-select-no-single" name="job_type">
                    <?php
                    $sql_select_job_type = "select * from job_type";
                    $types = callsql($sql_select_job_type);
                    foreach ($types as $type) {
                        ?>
                        <option <?php if ($id != '' && $id != '0' && $job['job_type'] == $type['name']) {
                            echo 'selected';
                        } ?> value="<?php echo $type['name'] ?>"><?php echo $type['name']; ?></option>

                    <?php } ?>
                </select>
            </div>


            <!-- Choose Category -->
            <div class="form">
                <div class="select">
                    <h5>Category</h5>
                    <select data-placeholder="Choose Categories" class="chosen-select" name="category[]" multiple
                            required>
                        <?php
                        $sql_select_category = "select * from categories";
                        $categories = callsql($sql_select_category);
//                        print_r($categories);
                        $job_categories = $job['category'];
                        $job_categories = explode(',', $job_categories);
//                        print_r($job_categories);
//                        echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa----------' . $job_categories;
                        foreach ($categories as $category) { ?>
                            <option <?php if ($id) {
//                                foreach ($job_categories as $job_category) {
                                    if (in_array($category['id_category'], $job_categories)) {
                                        echo 'selected';
                                    }
//                                }
                            } ?> value="<?php echo $category['id_category'] ?>"> <?php echo $category['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="form">
                <h5>Job Tags <span>(optional)</span></h5>
                <select multiple data-role="tagsinput" class="tags_input" name="tags_input[]">
                    <?php if ($id != '' && $id != '0') {

                        $tags = $job['job_tag'];
                        $tags = explode(',', $tags);
                        foreach ($tags as $tag) {
                            ?>
                            <option value="<?php echo $tag ?>"> <?php echo $tag ?> </option>
                        <?php }
                    } ?>
                </select>
                <p class="note">Comma separate tags, such as required skills or technologies, for this
                    job.</p>
            </div>
            <!-- Description -->
            <div class="form">
                <h5>Description</h5>
                <textarea class="WYSIWYG " cols="40" rows="3" id="summary" name="description"
                          spellcheck="true"><?php if ($id != '' && $id != '0') {
                        echo $job['description'];
                    } ?></textarea>
            </div>
            <div class="form">
                <h5>Job requirements</h5>
                <textarea class="WYSIWYG" cols="40" rows="3" id="summernote" name="job_requirements"
                          spellcheck="true"><?php if ($id != '' && $id != '0') {
                        echo $job['job_requirements'];
                    } ?></textarea>
            </div>

            <div class="d-flex form optional flex-wrap ">
                <div class="form">
                    <h5>Minimum rate/h ($) (optional)</h5>
                    <input class="search-field" type="number" name="minimum_rate" placeholder=""
                           value="<?php if ($id != '' && $id != '0') {
                               echo $job['minimum_rate'];
                           } ?>"/>
                </div>

                <div class="form">
                    <h5>Maximum rate/h ($) (optional)</h5>
                    <input class="search-field" type="number" name="maximum_rate" placeholder=""
                           value="<?php if ($id != '' && $id != '0') {
                               echo $job['maximum_rate'];
                           } ?>"/>
                </div>

                <div class="form">
                    <h5>Minimum Salary ($) (optional)</h5>
                    <input class="search-field" type="number" name="minimum_salary" placeholder=""
                           value="<?php if ($id != '' && $id != '0') {
                               echo $job['minimum_salary'];
                           } ?>"/>
                </div>

                <div class="form">
                    <h5>Maximum Salary ($) (optional)</h5>
                    <input class="search-field" type="number" name="maximum_salary" placeholder=""
                           value="<?php if ($id != '' && $id != '0') {
                               echo $job['maximum_salary'];
                           } ?>"/>
                </div>
            </div>
            <input type="hidden" id="alert_123">
            <!-- Closing Date -->
            <div class="form">
                <h5>Closing Date <span>(optional)</span></h5>
                <div class="container input_date">
                    <?php if ($id) {
                        $closing_day = $job['closing_day'];
                        $closing_day = explode('-', $closing_day);
                    }
                        ?>
                        <div class="select">
                            <input type="hidden" class="select_day" value="<?php if ($id) { echo $closing_day[0]??''; } ?>">
                            <select class="auto-select" id="select_day" name="closing_day" data-class="<?php if ($id) { echo $closing_day[0]??'';} ?>">
                                <option>Day</option>
                            </select>
                        </div>
                        <div class="select">
                            <input type="hidden" class="select_month" value="<?php if ($id) {echo $closing_day[1]??'';} ?>">
                            <select class="auto-select" id="select_month" name="closing_month" data-class="<?php if ($id) {echo $closing_day[1]??'';} ?>">
                                <option>Month</option>
                            </select>
                        </div>
                        <div class="select">
                            <input type="hidden" class="select_year" value="<?php if ($id) {echo $closing_day[2]??'';} ?>">
                            <select class="auto-select" id="select_year" name="closing_year" data-class="<?php if ($id) {echo $closing_day[1]??'';} ?>">
                                <option>Year</option>
                            </select>
                        </div>
                        <?php

                    ?>
                </div>
                <p class="note">Deadline for new applicants.</p>
            </div>


            <div class="divider margin-top-0"></div>
            <div class="form text-end">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>
<script>
    $(document).ready(function () {
        $(".auto-select").each(function(){
            var select = $(this);
            var class_value = $(select).attr('data-class');
            $(select).find('option').each(function (){
                if ($(this).val() == class_value){
                    $(this).prop('selected',true);
                }
            });
        });

        /*
        $("#select_day option").each(function()
        {
            console.log($(this).val());
            console.log($('.select_day').val());
            if ($(this).val() == $('.select_day').val()){
                $(this).prop('selected',true);
            }
        });

        $("#select_month option").each(function()
        {
            // console.log($(this).val());
            // console.log($('.select_day').val());
            if ($(this).val() == $('.select_month').val()){
                $(this).prop('selected',true);
            }
        });
        $("#select_year option").each(function()
        {
            if ($(this).val() == $('.select_year').val()){
                $(this).prop('selected',true);
            }
        });*/

    });

</script>
<?php
if (isset($_SESSION['insert_job']) && $_SESSION['insert_job'] == 1) {
     ?>
     <script>
         $(document).ready(function executeExample() {
             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: true,
                 didOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
             })
             Toast.fire({
                 icon: 'success',
                 title: 'Add success'
             })
         });
     </script>
    <?php
 } elseif (isset($_SESSION['insert_job']) && $_SESSION['insert_job'] == 0) {
     ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'error',
                title: 'System error',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <?php
}


//if (isset($_SESSION['insert_job']) && $_SESSION['insert_job'] == 1) {
    ?>
    <script>
        // document.getElementById("#alert_123").innerHTML = alert_after_load('success', 'Add success');

    </script>
<?php
//}

 unset($_SESSION['insert_job']);
?>
<script>
    // $(document).ready(function() {
    //     ClassicEditor
    //         .create( document.querySelector( '#editor' ) )
    //         .catch( error => {
    //             console.error( error );
    //         } );
    // });
</script>
<!-- WYSIWYG Editor -->
<!--<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>-->


</body>
</html>