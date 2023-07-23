<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../top.php') ?>

<body>
    <div id="admin_wrapper">
        <?php require_once('../header.php') ?>
        <main>
            <?php require_once('../menu-left.php') ?>
            <div class="contain">
                <section>
                    <div class="title-table">
                        <h3>Company</h3>
                    </div>
                    <div class="section-item-right">
                        <form onsubmit="event.preventDefault();" role="search" class="form-search-admin">
                            <label for="search" class="label-search">Search for stuff</label>
                            <input id="search" type="search" class="input-search" placeholder="Search..." autofocus
                                required />
                            <button class="button-search" type="submit">Go</button>
                        </form>
                        <button
                            onClick="document.location.href='<?php echo FULL_URL; ?>/admin/category/admin-add-category.php?id_category=0'"
                            class="btn-add">ADD NEW</button>
                    </div>
                </section>
                <div class="table-main">
                    <?php
                    $sql_select_all = "SELECT count(*) as tong_category FROM categories";
                    $tong = callsql($sql_select_all);
                    $tong = $tong[0]['tong_category'];
                    $page = 1;
                    $limit = 2;
                    $avc = $_POST['limit-category'];
                    echo $avc;
                    if (isset($_POST['limit-category'])) {
                        $limit = $_POST['limit-category'];
                    }

                    $tong = ceil($tong / $limit);

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    }
                    $start = ($page - 1) * $limit;
                    $sql_select_all = "SELECT t1.*,t2.name AS parent_name FROM categories t1 LEFT JOIN categories t2 ON t2.parent_id=t2.id_category  limit $start,$limit";
                    // echo $sql_select_all;die;
                    $show_categories = callsql($sql_select_all);
                    ?>
                    <table class="table table-hover">
                        <colgroup>
                            <col width="200">
                            <col width="400">
                            <col>
                            <col width="200">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Parent</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = 1;
                            foreach ($show_categories as $show_category) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo ($page - 1) * $limit + $n ?>
                                    </td>
                                    <td>
                                        <?php echo $show_category['parent_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $show_category['name'] ?>
                                    </td>
                                    <td>
                                        <a href="#"><i class="bi bi-eye"></i></a>
                                        <a href="#"><i class="delete bi bi-x-circle"></i></a>
                                    </td>
                                </tr>
                                <?php $n++;
                            } ?>
                        </tbody>
                    </table>

                </div>
                <div class="card-bottom">
                    <a href="#">First</a>
                    <?php
                    $page_active = $_GET['page'];
                    for ($i = 1; $i <= $tong; $i++) {
                        echo '<a href="?page=' . $i . '" class=" ';
                        if ($page_active == $i) {
                            echo 'page_active';
                        }
                        echo ' btn boder1px text-white me-2">' . $i . '</a>';
                    }
                    ?>
                    <a href="#">1</a>
                    <a id="asdvdv" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Last</a>
                    <form action="#" method="post">
                        <div>
                            <p>Show</p>
                            <select name="limit-category" id="show-limit">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                            </select>
                            <p>item</p>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <?php require_once('../script.php') ?>
    <script>
        $("#show-limit").on("change", function () {
            var selectData = $(this).val();
            console.log(selectData);
            $.ajax({
                url: "admin-category-page.php",
                method: 'POST',
                data: {val: $(this).val()},
                success: function (data) {
                    $(".asdvdv").val(data);

                }
            });
        });
    </script>
</body>

</html>