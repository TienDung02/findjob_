<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../../head.php') ?>
<?php
if (!isAdmin()) {
    header("location:index.php.php");
}
?>
<body>
<div id="admin_wrapper">
    <?php require_once('../admin_header.php') ?>
    <main>
        <?php require_once('../admin_menu_left.php') ?>
        <?php
        $id = $_GET['id'];
        $sql_select_job = "select * from job where id = $id";
        $jobs = callsql($sql_select_job);
        ?>
        <div class="contain">
            <section>
                <div class="title-table">
                    <h3>Company</h3>
                </div>
            </section>
            <?php
            foreach ($jobs as $job) {

                ?>
                <div class="parent-form-admin  m-auto">
                    <form method="post" class="m-auto mb-5 rounded-4 form_add_company" action="active_job_process.php?id=<?php echo $id ?>"
                          style="width: 90%; background-color: #fff; padding: 50px 0;">

                        <!-- Title -->
                        <div class="form">
                            <h5>Job Title</h5>
                            <input class="search-field" type="text"  placeholder="" value="<?php echo $job['title'] ?>" readonly/>
                        </div>

                        <!-- Location -->
                        <div class="form">
                            <h5>Location <span>(optional)</span></h5>
                            <select data-placeholder="Full-Time" class="chosen-select-no-single ps-3" readonly="" name="location">
                                <?php
                                $sql_select_location = "select * from location";
                                $location = callsql($sql_select_location);
                                foreach ($location as $local) {
                                    ?>
                                    <option  <?php if ($id != '' && $id != '0' && $job['location'] == $local['name']) {
                                        echo 'selected';
                                    } ?> value="<?php echo $local['name'] ?>"><?php echo $local['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Job Type -->
                        <div class="form">
                            <h5>Job Type</h5>
                            <select data-placeholder="Full-Time" class="chosen-select-no-single ps-3" readonly name="job_type">
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
                                <select data-placeholder="Choose Categories" class="chosen-select ps-3" readonly name="category[]" multiple
                                        required>
                                    <?php
                                    $sql_select_category = "select * from categories";
                                    $categories = callsql($sql_select_category);

                                    $job_categories = $job['category'];
                                    $job_categories = explode(',', $job_categories);
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
                                    print_r($tags);
                                    foreach ($tags as $tag) {
                                        ?>
                                        <option value="<?php echo $tag ?>"> <?php echo $tag ?> </option>
                                    <?php }
                                } ?>
                            </select>
                        </div>
                        <!-- Description -->
                        <div class="form">
                            <h5>Description</h5>
                            <textarea class="WYSIWYG " cols="40" rows="3" id="summary" name="description"
                                      spellcheck="true"><?php
                                    echo $job['description'];
                                ?></textarea>
                        </div>
                        <div class="form">
                            <h5>Job requirements</h5>
                            <textarea class="WYSIWYG d-none" cols="40" rows="3" id="summernote" name="job_requirements"
                                      spellcheck="true"><?php
                                    echo $job['job_requirements'];
                                 ?></textarea>
                        </div>

                        <div class="d-flex form optional flex-wrap ">
                            <div class="form">
                                <h5>Minimum rate/h ($) (optional)</h5>
                                <input class="search-field" type="number" placeholder="" value="<?php echo $job['minimum_rate']; ?>" readonly/>
                            </div>

                            <div class="form">
                                <h5>Maximum rate/h ($) (optional)</h5>
                                <input class="search-field" type="number" placeholder="" value="<?php echo $job['maximum_rate']; ?>" readonly/>
                            </div>

                            <div class="form">
                                <h5>Minimum Salary ($) (optional)</h5>
                                <input class="search-field" type="number"  placeholder="" value="<?php echo  $job['minimum_salary']; ?>" readonly/>
                            </div>

                            <div class="form">
                                <h5>Maximum Salary ($) (optional)</h5>
                                <input class="search-field" type="number" placeholder="" value="<?php echo $job['maximum_salary']; ?>" readonly/>
                            </div>
                        </div>


                        <!-- Closing Date -->
                        <div class="form d-flex">
                            <div class=" w-50">
                                <h5>Closing Date <span>(optional)</span></h5>
                                <div class="container input_date">
                                    <?php if ($id) {
                                        $closing_day = $job['closing_day'];
                                        $closing_day = explode('-', $closing_day);
                                        ?>
                                        <div class="select">
                                            <input type="hidden" class="select_day" value="<?php echo $closing_day[0]??'' ?>">
                                            <select class="auto-select" disabled  id="select_day" name="closing_day" data-class="<?php echo $closing_day[0]??'' ?>">
                                                <option>Day</option>
                                            </select>
                                        </div>
                                        <div class="select">
                                            <input type="hidden" class="select_month" readonly value="<?php echo $closing_day[1]??'' ?>">
                                            <select class="auto-select" disabled id="select_month" name="closing_month" data-class="<?php echo $closing_day[1]??'' ?>">
                                                <option>Month</option>
                                            </select>
                                        </div>
                                        <div class="select">
                                            <input type="hidden" class="select_year" readonly value="<?php echo $closing_day[2]??'' ?>">
                                            <select class="auto-select" disabled id="select_year" name="closing_year" data-class="<?php echo $closing_day[1]??'' ?>">
                                                <option>Year</option>
                                            </select>
                                        </div>



                                        <?php

                                    } ?>
                                </div>
                                <p class="note">Deadline for new applicants.</p>
                            </div>
                            <div class="w-25 m-auto d-flex">
                                <h5>Active Company</h5>
                                <input class="toggle_switch ms-3 me-5" name="active" <?php if ($job['active'] == 1) {
                                    echo 'checked';
                                } ?> " type="checkbox">
                            </div>
                        </div>


                        <div class="divider margin-top-0"></div>
                        <div class=" text-end ">
                            <div class="text-end">
                                <div class="form ">
                                    <input type="submit" class="me-3 bg-secondary" value="Cancel">
                                    <input type="submit" class="ms-3 me-3 bg-danger" value="Refuse">
                                    <input type="submit" class="ms-3" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </main>
</div>
<?php require_once('../../script_tag.php') ?>
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
    });
</script>
</body>

</html>