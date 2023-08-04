<?php session_start() ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php require_once('admin/admin_head.php') ?>
<?php require_once ('head.php')?>

<body>

<div id="admin_wrapper">
    <?php require_once('header.php') ?>
<!-- Titlebar
================================================== -->
    <div id="titlebar" style="padding: 52px 0; transform: translateY(90px);margin-bottom: 0px">
        <div class="container">
            <div class="ten columns">
                <h2><i class="fa fa-plus-circle"></i>&nbsp;Add Company</h2>
            </div>

            <div class="six columns">
            </div>

        </div>
    </div>

<!-- Content
================================================== -->
    <main ">
        <div class="contain" style="margin: auto; width: 100%;background-color: #fff">
            <section style="width: 70%; margin: auto">
                <div class="title-table">
                </div>
            </section>
            <form class="form_add_company" method="post" action="" style="width: 70%">

                <div class="form">
                    <h3>Company detail</h3>
                    <hr>
                </div>

                <div class="form">
                    <h5>Company name</h5>
                    <input class="search-field" type="text" name="company_name" placeholder="" value="" required/>

                </div>
                <div class="d-flex form optional flex-wrap ">
                    <div class="form">
                        <h5>Company Tagline (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Headquarters (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                        <p>Leave this blank if the headquarters location is not important</p>
                    </div>

                    <div class="form">
                        <h5>Latitude (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Longitude (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="parentContainer w-100 form">
                        <h5>Company Logo (optional)</h5>
                        <div class="controlContainer">
                            <div class="inputFileHolder">
                                <a  class="btn btn-flat-browse" href="#" title="Browse">
                                    <i  class="fa fa-folder-open"></i>
                                </a>
                                <input id="fileInput2" name="fileInput2" class="fileInput" title="Choose file to upload" type="file" accept=".txt">
                            </div>
                            <div class="inputFileMask">
                                <input class="inputFileMaskText2" readonly="readonly" placeholder="Choose file.." type="text" id="inputFileMaskText2">
                            </div>
                        </div>
                    </div>

                    <div class="form">
                        <h5>Video (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Since (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Company Website (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Email (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Phone (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Twitter (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Facebook (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Industry (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>


                    <div class="form">
                        <h5>Company Size (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Average Salary (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>

                    <div class="form">
                        <h5>Short Description (optional)</h5>
                        <input class="search-field" type="text" name="company_name" placeholder="" value="" />
                    </div>
                </div>

                <div class="form">
                    <h5>Short Description (optional)</h5>
                    <textarea></textarea>
                </div>
                <div class="parentContainer w-80 form">
                    <h5>Header Image (optional)</h5>
                    <div class="controlContainer">
                        <div class="inputFileHolder">
                            <a  class="btn btn-flat-browse" href="#" title="Browse">
                                <i  class="fa fa-folder-open"></i>
                            </a>
                            <input id="fileInput2" name="fileInput2" class="fileInput" title="Choose file to upload" type="file" accept=".txt">
                        </div>
                        <div class="inputFileMask">
                            <input class="inputFileMaskText2" readonly="readonly" placeholder="Choose file.." type="text" id="inputFileMaskText2">
                        </div>
                    </div>
                </div>

                <div class="form">
                    <input type="submit" value="Save">
                </div>
            </form>

        </div>
    </main>
</div>
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
</body>

</html>