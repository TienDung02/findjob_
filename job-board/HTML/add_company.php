<?php session_start(); ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php require_once('head.php') ?>
<?php


?>
<!-- Header
================================================== -->
<?php require_once('header_2.php') ?>
<div class="clearfix"></div>


<!-- Menu left
================================================= -->

<div class="d-flex">
    <?php
    if (isEmployer()){
        require_once ('menu_left_employer.php');
    }else{
        require_once ('menu_left_candidate.php');
    }
    ?>

    <div class="contain" style="margin: auto; width: calc(100% - 260px);background-color: #f7f7f7">

        <div class="form" style="width: 80%; margin: 50px auto 0 auto">
            <h3>Add Company</h3>
            <hr>
        </div>

        <form class="form_add_company" method="post" action="add_company_process.php" enctype="multipart/form-data" style="width: 90%">

            <div class="form w-100" style="background-color: #f5f5f5bf;padding: 0px 54px;">
                <h3>Company Details</h3>
                <hr style="width: 109%;  transform: translateX(-53px);">
            </div>
            <input name="id_employer" value="<?php echo $data_user['id_employer']; ?>" type="hidden">
            <div class="form">
                <h5>Company name</h5>
                <input class="search-field" type="text" name="company_name" placeholder="" value="" required/>
            </div>
            <div class="d-flex form optional flex-wrap ">
                <div class="form">
                    <h5>Company Tagline (optional)</h5>
                    <input class="search-field" type="text" name="company_tagline" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Headquarters (optional)</h5>
                    <input class="search-field" type="text" name="headquarter" placeholder="" value="" />
                    <p>Leave this blank if the headquarters location is not important</p>
                </div>

                <div class="form">
                    <h5>Latitude (optional)</h5>
                    <input class="search-field" type="text" name="latitude" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Longitude (optional)</h5>
                    <input class="search-field" type="text" name="longitude" placeholder="" value="" />
                </div>
                <div class="parentContainer w-100 form">
                    <h5>Company Logo (optional)</h5>
                    <div class="controlContainer aaa">
                        <div class="inputFileHolder">
                            <a  class="btn btn-flat-browse" href="#" title="Browse">
                                <i  class="fa fa-folder-open"></i>
                            </a>
                            <input id="fileInput2" name="company_logo" class="fileInput fileInput2" title="Choose file to upload" type="file" >
                        </div>
                        <div class="inputFileMask">
                            <input class="inputFileMaskText2" readonly="readonly" placeholder="Choose file.." type="text" id="inputFileMaskText2">
                        </div>
                    </div>
                </div>

                <div class="form">
                    <h5>Video (optional)</h5>
                    <input class="search-field" type="text" name="link_video" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Since (optional)</h5>
                    <div class="container input_date">
                        <div class="select">
                            <select id="select_day" name="since_day">
                                <option>Day</option>
                            </select>
                        </div>
                        <div class="select">
                            <select id="select_month" name="since_month">
                                <option>Month</option>
                            </select>
                        </div>
                        <div class="select">
                            <select id="select_year" name="since_year">
                                <option>Year</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <h5>Company Website (optional)</h5>
                    <input class="search-field" type="text" name="company_website" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Email (optional)</h5>
                    <input class="search-field" type="text" name="company_email" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Phone (optional)</h5>
                    <input class="search-field" type="text" name="company_phone" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Twitter (optional)</h5>
                    <input class="search-field" type="text" name="company_twitter" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Facebook (optional)</h5>
                    <input class="search-field" type="text" name="company_facebook" placeholder="" value="" />
                </div>

                <div class="form">
                    <h5>Industry (optional)</h5>
                    <?php
                    $sql_select_industry = "select * from industry";
                    $industries = callsql($sql_select_industry);

                    ?>
                    <select class="form-select form-select-lg mb-3" name="industry" style="height: 57px;color: #909090;" aria-label=".form-select-lg example">
                        <option selected>-</option>
                        <?php
                        foreach ($industries as $industry){
                            ?>
                            <option value="<?php echo $industry['name'] ?>"><?php echo $industry['name'] ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>


                <div class="form">
                    <h5>Company Size (optional)</h5>
                    <select class="form-select form-select-lg mb-3" name="company_size" style="height: 57px;color: #909090;" aria-label=".form-select-lg example">
                        <option selected>-</option>
                        <option value="01 - 05">01 - 05</option>
                        <option value="05 - 15">05 - 15</option>
                        <option value="15 - 30">15 - 30</option>
                        <option value="30 - 50">30 - 50</option>
                        <option value="50+">50+</option>
                    </select>
                </div>

                <div class="form">
                    <h5>Average Salary (optional)</h5>
                    <select class="form-select form-select-lg mb-3" name="average_salary" style="height: 57px;color: #909090;" aria-label=".form-select-lg example">
                        <option selected>-</option>
                        <option value="$15 - $20k">$15 - $20k</option>
                        <option value="$20 - $30k">$20 - $30k</option>
                        <option value="$30 - $40k<">$30 - $40k</option>
                        <option value="$40 - $50k">$40 - $50k</option>
                        <option value="$50+">$50+</option>
                    </select>
                </div>


            </div>

            <div class="form">
                <h5>Short Description (optional)</h5>
                <textarea name="desc"> </textarea>
            </div>
            <div class="parentContainer w-80 form">
                <h5>Header Image (optional)</h5>
                <div class="controlContainer">
                    <div class="inputFileHolder">
                        <a  class="btn btn-flat-browse" href="#" title="Browse">
                            <i  class="fa fa-folder-open"></i>
                        </a>
                        <input id="fileInput2" name="header_img" class="fileInput fileInput2" title="Choose file to upload" type="file" >
                    </div>
                    <div class="inputFileMask">
                        <input class="inputFileMaskText2" readonly="readonly" placeholder="Choose file.." type="text" id="inputFileMaskText2">
                    </div>
                </div>
            </div>

            <div class="form text-end">
                <input type="submit" value="Save">
            </div>
        </form>

    </div>
</div>
<div class="margin-top-60"></div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>
<?php
print_r($_SESSION);
if (isset($_SESSION['insert_company_status']) && $_SESSION['insert_company_status'] == 1) {
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
                title: 'Add Success'
            })
        });
    </script>
<?php
} elseif (isset($_SESSION['insert_company_status']) && $_SESSION['insert_company_status'] == 0){
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
                icon: 'error',
                title: 'System Error'
            })
        });
    </script>
    <?php
}
unset($_SESSION['insert_company_status']);
?>
</body>
</html>
