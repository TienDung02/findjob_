<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../admin_head.php') ?>
<?php
if (!isAdmin()){
    header("location:index.php.php");
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
                    <h3>Categories</h3>
                </div>
            </section>
            <div class="table-main">
                <?php
                $sql_select_all = "SELECT count(*) as tong_category FROM company";
                $tong = callsql($sql_select_all);
                $tong = $tong[0]['tong_category'];
                $page = 1;
                $limit = 5;
                $tong = ceil($tong / $limit);

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if($page == 'last'){
                        $page = $tong;
                    }
                }
                $start = ($page - 1) * $limit;
                $sql_select_all = "SELECT company.*,employer.* FROM company JOIN employer ON company.id_employer=employer.id_employer limit $start,$limit";
                $show_companies = callsql($sql_select_all);
                ?>
                <table class="table table-hover">
                    <colgroup>
                        <col width="200">
                        <col width="400">
                        <col>
                        <col width="200">
                        <col width="200">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Employer</th>
                        <th>Company Name</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $n = 1;
                    $x = 1;
                    if (count($show_companies) < 2) {
                        $x = 0;
                    }
                    foreach ($show_companies as $show_company) {
                        ?>
                        <tr>
                            <td>
                                <?php echo ($page - 1) * $limit + $n ?>
                            </td>
                            <td>
                                <?php echo $show_company['first_name'] . ' ' . $show_company['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $show_company['company_name'] ?>
                            </td>
                            <td>
                                <input class="toggle_switch" <?php if ($show_company['active'] == 1){echo 'checked';} ?> " type="checkbox">
                            </td>
                            <td>
                                <a
                                        href="<?php echo "admin-view-company.php?id_company={$show_company['id_company']}"; ?>"><i
                                            class="bi bi-pencil-square"></i></a>
                                <a href="<?php ?>"><i class="bi bi-eye"></i></a>
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
print_r($_SESSION);
if (isset($_SESSION['update_company_active']) && $_SESSION['update_company_active'] == 1) {
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
                title: 'Update Success'
            })
        });
    </script>
<?php
} elseif (isset($_SESSION['update_company_active']) && $_SESSION['update_company_active'] == 0){
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
unset($_SESSION['update_company_active']);
?>
</body>
</html>