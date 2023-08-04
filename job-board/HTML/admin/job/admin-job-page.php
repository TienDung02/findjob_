<?php require_once('../admin_head.php') ?>
<body>
    <div id="admin_wrapper">
        <?php require_once('../admin_header.php') ?>
        <main>
            <?php require_once('../admin_menu_left.php') ?>
            <div class="contain">
                <section>
                    <div class="title-table">
                        <h3>Company</h3>
                    </div>
                    <div class="section-item-right">
                        <form onsubmit="event.preventDefault();" role="search" class="form-search-admin">
                            <label for="search" class="label-search">Search for stuff</label>
                            <input id="search" type="search" class="input-search" placeholder="Search..." autofocus required />
                            <button class="button-search" type="submit">Go</button>
                        </form>
                        <button class="btn-add">ADD NEW</button>
                    </div>
                </section>
                <div class="table-main">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alfreds Futterkiste</td>    
                                <td>Maria Anders</td>
                                <td>Germany</td>
                                <td>
                                    <a href="#"><i class="edit bi bi-pencil-square"></i></a>
                                    <a href="#"><i class="delete bi bi-x-circle"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Francisco Chang</td>
                                <td>Mexico</td>
                                <td>
                                    <a href="#"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#"><i class="bi bi-x-circle"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Francisco Chang</td>
                                <td>Mexico</td>
                                <td>
                                    <a href="#"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#"><i class="bi bi-x-circle"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-bottom">
                        <a href="#">First</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">Last</a>
                        <div>
                            <p>Show</p>
                            <select name="#" id="#">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                            </select>
                            <p>item</p>
                        </div>
                </div>
            </div>
        </main>
    </div>
    <?php require_once('../admin_script.php') ?>
</body>

</html>