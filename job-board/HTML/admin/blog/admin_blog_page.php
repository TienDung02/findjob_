<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../admin_head.php') ?>
<?php
if (!isAdmin()) {
    header("location:/index.php");
}
?>
<body>

<div id="admin_wrapper">
    <?php require_once('../admin_header.php') ?>
    <main>
        <?php require_once('../admin_menu_left.php');

        ?>
        <div class="contain">
            <section>
                <div class="title-table">
                    <h3>Blog</h3>
                </div>
                <div class="section-item-right">
                    <form onsubmit="event.preventDefault();" role="search" class="form-search-admin">
                        <label for="search" class="label-search">Search for stuff</label>
                        <input id="search" type="search" class="input-search" placeholder="Search..." autofocus
                               required/>
                        <button class="button-search" type="submit">Go</button>
                    </form>
                    <button
                            onClick="document.location.href='/admin/blog/admin_add_blog.php?id=0'"
                            class="btn-add">ADD NEW
                    </button>
                </div>
            </section>
            <div class="table-main">
                <?php
                $sql_select_all = "SELECT count(*) as tong_blog FROM blog";
                $tong = callsql($sql_select_all);
                $tong = $tong[0]['tong_blog'];
                $page = 1;
                $limit = 5;
                $tong = ceil($tong / $limit);

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 'last') {
                        $page = $tong;
                    }
                }
                $start = ($page - 1) * $limit;
                $sql_select_all = "SELECT * from blog limit $start,$limit";
                // echo $sql_select_all;die;
                $show_blogs = callsql($sql_select_all);
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
                        <th>Author</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $n = 1;
                    $x = 1;
                    if (count($show_blogs) < 2) {
                        $x = 0;
                    }
                    foreach ($show_blogs as $blog) {
                        ?>
                        <tr>
                            <td>
                                <?php echo ($page - 1) * $limit + $n ?>
                            </td>
                            <td>
                                <?php echo $blog['author']; ?>
                            </td>
                            <td>
                                <?php echo $blog['title'] ?>
                            </td>
                            <td>
                                <a
                                        href="<?php echo "admin_add_blog.php?id={$blog['id_blog']}"; ?>"><i
                                            class="bi bi-pencil-square"></i></a>
                                <a href="<?php
                                if ($x != 0) {
                                    echo "delete_blog_process.php?id={$blog['id_blog']}&page=$page";

                                } else {
                                    echo "delete_blog_process.php?id={$blog['id_blog']}&page=1";
                                }
                                ?>"><i class="delete bi bi-x-circle"></i></a>
                            </td>
                        </tr>
                        <?php $n++;
                    } ?>
                    </tbody>
                </table>

            </div>
            <div class="card-bottom">
                <a href="?page=1" class="<?php if ($page == 1) {
                    echo 'page_active';
                } ?>">First</a>
                <?php
                for ($i = 1; $i <= $tong; $i++) {
                    echo '<a href="?page=' . $i . '" class=" ';
                    if ($page == $i) {
                        echo 'page_active';
                    }
                    echo '">' . $i . '</a>';
                }
                ?>
                <a href="<?php echo "?page=$tong" ?>" class="<?php if ($page == $tong) {
                    echo 'page_active';
                } ?>">Last</a>
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
<?php require_once('../admin_script.php') ?>
<?php
if (isset($_SESSION['add_blog_status']) && $_SESSION['add_blog_status'] == 1) {
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
} elseif (isset($_SESSION['edit_blog_status']) && $_SESSION['edit_blog_status'] == 1) {
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
                title: 'Update success'
            })
        });
    </script>
<?php
}elseif (isset($_SESSION['delete_blog_status']) && $_SESSION['delete_blog_status'] == 1) {
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
                title: 'Delete success'
            })
        });
    </script>
<?php
}elseif (isset($_SESSION['add_blog_status']) && $_SESSION['add_blog_status'] == 0 || isset($_SESSION['edit_blog_status']) && $_SESSION['edit_blog_status'] == 0 || isset($_SESSION['delete_blog_status']) && $_SESSION['delete_blog_status'] == 0) {
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
                title: 'System error'
            })
        });
    </script>
    <?php
}
unset($_SESSION['add_blog_status']);
unset($_SESSION['edit_blog_status']);
unset($_SESSION['delete_blog_status']);
?>
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