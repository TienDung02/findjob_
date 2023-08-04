<?php require_once ('connection.php')?>
<?php require_once ('function.php') ?>
<?php require_once ('head.php')?>


<!-- Header
================================================== -->
<?php require_once ('header.php')?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background-image: url(images/all-categories-photo.jpg);">
	<div class="container">
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>

		<div class="six columns">
			<a href="add-job.php" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div id="categories">
	<!-- Categories Group -->
    <?php
        $sql_select_child_categories = "select * from categories";
        $children_categories = callsql($sql_select_child_categories);
        $categories_format = [];
        foreach ($children_categories as $key => $category){
            if($category['parent_id'] == 0){
                $id = $category['id_category'];
                $categories_format[$id] = $category;
            }else{
                $id = $category['parent_id'];
                if (!isset($categories_format[$id]['children'])){
                    $categories_format[$id]['children'] = [];
                }
                $categories_format[$id]['children'][] = $category;

            }
        }
//        print_r($categories_format);
    ?>
    <?php
    foreach ($categories_format as $category_){
        if (isset($category_['children'])){
    ?>
	<div class="categories-group">
		<div class="container d-flex">
			<div class="four columns">
                <h4><?php
                    $id = $category_['id_category'];
                    echo $category_['name']
                    ?></h4>
            </div>
			<div class="four columns" style="width: 920px">
				<div class="grid-container grid grid-3 d-grid" style="grid-template-columns: repeat(3, minmax(0, 1fr));">
                    <?php
//                    print_r($category_);
                            foreach ($category_['children'] as $category_child){
//                            print_r($category_child);
                                ?>
                                     <div class="grid-item item_browse_category"><a href="#"><?php echo $category_child['name']?></a></div>
                                <?php
                            }
                    ?>
				</div>
			</div>
		</div>
	</div>
    <?php
        }
    }

    ?>

</div>

<!-- Footer
================================================== -->
<div class="margin-top-0"></div>

    <?php require_once ('footer.php')?>

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once ('script_tag.php')?>

</body>
</html>