<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php require_once('../../function.php') ?>
<?php require_once('../admin_head.php') ?>
<?php
if (!isAdmin()){
    header("location:/index.php");
}
?>
<body>

<div id="admin_wrapper">
    <?php require_once('../admin_header.php') ?>
    <main>
<!--        --><?php //require_once('../admin_menu_left.php');?>
        <?php require_once('../admin_menu_left.php');?>
        <div class="contain">
            <section>
                <div class="title-table">
                    <h3>Candidate</h3>
                </div>
                <div class="section-item-right">
                    <form onsubmit="event.preventDefault();" role="search" class="form-search-admin">
                        <label for="search" class="label-search">Search for stuff</label>
                        <input id="search" type="search" class="input-search" placeholder="Search..." autofocus
                               required />
                        <button class="button-search" type="submit">Go</button>
                    </form>
                </div>
            </section>
            <div class="table-main">
                <?php
                $sql_select_all = "SELECT count(*) as tong_candidate FROM candidate";
                $tong = callsql($sql_select_all);
                $tong = $tong[0]['tong_candidate'];
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
                $sql_select_all = "SELECT * from candidate  limit $start,$limit";
                // echo $sql_select_all;die;
                $show_candidate = callsql($sql_select_all);
                ?>
                <table class="table table-hover">
                    <colgroup>
                        <col width="200">
                        <col width="400">
                        <col>
                        <col>
                        <col width="200">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $n = 1;
                    $x = 1;
                    if (count($show_candidate) < 2) {
                        $x = 0;
                    }
                    foreach ($show_candidate as $candidate) {
                        ?>
                        <tr>
                            <td>
                                <?php echo ($page - 1) * $limit + $n ?>
                            </td>
                            <td>
                                <?php echo $candidate['first_name'] . ' ' . $candidate['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $candidate['email'] ?>
                            </td>
                            <td>
                                <input class="toggle_switch" <?php if ($candidate['active'] == 1){echo 'checked';} ?> " type="checkbox">
                            </td>
                            <td>
                                <a
                                        href="<?php  ?>"><i
                                            class="bi bi-pencil-square"></i></a>
                                <a href="<?php  ?>"><i class="delete bi bi-x-circle"></i></a>
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
if (isset($_SESSION['category-status']) && $_SESSION['category-status'] == 1) {
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
} elseif (isset($_SESSION['category-status']) && $_SESSION['category-status'] == 2) {
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
                title: 'Cập nhật thành công'
            })
        });
    </script>
    <?php
}
unset($_SESSION['category-status']);

?>
<script>
    // $(".btn_hidden_menu").click(function(){
    //     console.log('aadasd');
    //     $('.menu_01').addClass('d-none').removeClass('d-block');
    //     $('.menu_02').addClass('d-block').removeClass('d-none');
    // });
    // $(".btn_Show_menu").click(function(){
    //     console.log('aadasd');
    //     $('.menu_02').addClass('d-none').removeClass('d-block');
    //     $('.menu_01').addClass('d-block').removeClass('d-none');
    // });
</script>
</body>

</html>