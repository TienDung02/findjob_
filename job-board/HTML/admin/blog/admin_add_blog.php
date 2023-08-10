<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../admin_head.php') ?>

<body>
    <div id="admin_wrapper">
        <?php require_once('../admin_header.php') ?>
        <main>
            <?php require_once('../admin_menu_left.php') ?>
            <div class="contain">
                <section>
                    <div class="title-table">
                        <h3>Add Blog</h3>
                    </div>
                </section>

                <div class="parent-form-admin">

                    <form class="form_add_company  w-100 m-0 " method="post" action="<?php
                    $id = $_GET['id'];
                    if ($id == 0) {
                        echo "add_blog_process.php";
                    } else {
                        echo "edit_blog_process.php?id=$id";
                        $sql_select_blog = "select * from blog where `id_blog` = $id";
                        $blogs = callsql($sql_select_blog);
                        $blog = $blogs[0];
                    }
                    ?>"
                          enctype="multipart/form-data">

                        <div class="form w-100 rounded-top rounded-4"
                             style="background-color: #f5f5f5bf;padding: 0px 54px;">
                            <h3>Blog Details</h3>
                            <hr style="width: 109%;  transform: translateX(-53px);">
                        </div>

                        <div class="d-flex form optional flex-wrap m-auto">

                            <div class="form">
                                <h5>Author</h5>
                                <input class="search-field" type="text" required name="author" placeholder=""
                                       value="<?php
                                       if ($id != 0){
                                           echo $blog['author'];
                                       }


                                       ?>"/>
                            </div>

                            <div class="form">
                                <h5>Category</h5>
                                <?php
                                $sql_select_categories = "select * from categories_blog";
                                $categories = callsql($sql_select_categories);

                                ?>
                                <select class="form-select form-select-lg mb-3" name="category" style="height: 57px;color: #909090;" aria-label=".form-select-lg example">
                                    <option value="" <?php
                                    if ($id == 0){
                                        echo 'selected';
                                    }

                                    ?>>-</option>
                                    <?php
                                    foreach ($categories as $category){
                                        ?>
                                        <option <?php if ($id != 0 && $blog['category_blog'] == $category['name']){
                                            echo 'selected';
                                        } ?> value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>
                            </div>

                        </div>

                        <div class="form">
                            <h5>Title</h5>
                            <input class="search-field" type="text" required name="title" placeholder="" value="<?php if ($id != 0){
                                echo $blog['title'];
                            } ?>"/>
                        </div>
                        <div class="form">
                            <h5>Description </h5>
                            <textarea name="desc"><?php if ($id != 0){
                                    echo $blog['desc'];
                                } ?> </textarea>
                        </div>
                        <div class="parentContainer w-80 form">
                            <h5>Header Image (optional)</h5>
                            <div class="controlContainer">
                                <div class="inputFileHolder">
                                    <a  class="btn btn-flat-browse" style="height: 42px; font-size: 1.5rem" href="#" title="Browse">
                                        <i style="font-size: 1.5rem" class="fa fa-folder-open"></i>
                                    </a>
                                    <input id="fileInput2" name="img" class="fileInput w-100 h-100 fileInput2" title="Choose file to upload" value=""   type="file">
                                </div>
                                <div class="inputFileMask">
                                    <input class="inputFileMaskText2" readonly="readonly" name="img_old" placeholder="Choose file.." type="text" id="inputFileMaskText2" value="<?php

                                    if ($id != 0){
                                        echo $blog['img'];
                                    }

                                    ?>">
                                </div>
                            </div>
                            <img class="image-preview m-auto mt-3" style=" max-height: 400px;" src="<?php

                            if ($id != 0){
                                echo $blog['img'];
                            }

                            ?>" alt="">
                        </div>

                        <div class="form text-end">
                            <input type="submit" value="Save">
                        </div>

                    </form>
                </div>

            </div>
        </main>
    </div>
    <?php require_once('../../script_tag.php') ?>
</body>

</html>