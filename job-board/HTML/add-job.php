<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php require_once('header.php') ?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
    <div class="container">

        <div class="sixteen columns">
            <h2><i class="fa fa-plus-circle"></i> Add Job</h2>
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<div class="container">

    <!-- Submit Page -->
    <form method="post" action="add_job_process.php">
        <div class="sixteen columns">
            <div class="submit-page">

                <!-- Notice -->
                <div class="notification notice closeable margin-bottom-40">
                    <p><span>Have an account?</span> If you don’t have an account you can create one below by entering
                        your email address. A password will be automatically emailed to you.</p>
                </div>

                <!-- Title -->
                <div class="form">
                    <h5>Job Title</h5>
                    <input class="search-field" type="text" name="job_title" placeholder="" value="" required/>
                </div>

                <!-- Location -->
                <div class="form">
                    <h5>Location <span>(optional)</span></h5>

                    <select data-placeholder="Full-Time" class="chosen-select-no-single" name="location" required>
                        <?php
                        $sql_select_location = "select * from location";
                        $location = callsql($sql_select_location);
                        foreach ($location as $local){
                        ?>
                        <option  value="<?php echo $local['id_location'] ?>"><?php echo $local['name'] ?></option>
                        <?php } ?>
                    </select>
                    <p class="note">Leave this blank if the location is not important</p>
                </div>

                <!-- Job Type -->
                <div class="form">
                    <h5>Job Type</h5>
                    <select data-placeholder="Full-Time" class="chosen-select-no-single" name="job_type" required>
                        <?php
                        $sql_select_job_type = "select * from job_type";
                        $types = callsql($sql_select_job_type);
                        foreach ($types as $type){
                        ?>
                                                <option value="<?php echo $type['id_job_type'] ?>"><?php echo $type['name']; ?></option>

                        <?php } ?>
                    </select>
                </div>


                <!-- Choose Category -->
                <div class="form">
                    <div class="select">
                        <h5>Category</h5>
                        <select data-placeholder="Choose Categories" class="chosen-select" name="category[]" multiple required>
                            <?php
                            $sql_select_category = "select * from categories";
                            $categories = callsql($sql_select_category);
                            foreach ($categories as $category){
                            ?>
                            <option value="<?php echo $category['id_category'] ?>"> <?php echo $category['name'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <!-- Tags -->
                <div class="form">
                    <h5>Job Tags <span>(optional)</span></h5>
                    <select multiple data-role="tagsinput" class="tags_input" name="tags_input[]" required>
                    </select>
                    <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                </div>
                <!-- Description -->
                <div class="form" >
                    <h5>Description</h5>
                    <textarea class="WYSIWYG"  cols="40" rows="3" id="summary" name="description"
                              spellcheck="true" required></textarea>
                </div>

                <!-- TClosing Date -->
                <div class="form">
                    <h5>Closing Date <span>(optional)</span></h5>
                    <input data-role="date" type="date" name="closing_date" placeholder="yyyy-mm-dd" required>
                    <p class="note">Deadline for new applicants.</p>
                </div>



                <div class="divider margin-top-0"></div>
                <input type="submit" value="Save">

            </div>
        </div>

            </div>
</form>

<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<?php require_once('footer.php') ?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>
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
                 title: 'Thêm thành công'
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
                 title: 'Lỗi hệ thống!',
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
 unset($_SESSION['insert_job']);
?>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            // if ($('.tag').length) {
            //     alert("tim` thay");
            //     $(".input_tags_").removeAttr("required");
            // }else {
            //     alert('khong tim thay');
            //     $(".input_tags_").attr("required", "true").attr("placeholder", "Enter tags");
            // }
            console.log('aaaaaaaaaaaaaaaaaaaaaa');
            // alert('heyyy');

        }, 1000);
    });
</script>
<!-- WYSIWYG Editor -->
<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>


</body>
</html>