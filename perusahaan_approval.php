<?php
require "conn.php";
session_start();
$title = "Admin Panel";
$appname = "CareerHunter";

require "checkuser.php";

require "views/head.php";
?>

<div class="mx-5 mt-5">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    User Perusahaan Approval
                </button>
                <button type="button" class="list-group-item list-group-item-action">A second item</button>
                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
            </div>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $conn->query("SELECT * FROM user_perusahaan WHERE approved = 'false'");
                    $i = 0;
                    while ($d = $data->fetch_assoc())
                    {
                        $i++;
                        echo '
                        <tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$d["nama"].'</td>
                            <td>'.$d["email"].'</td>
                            <td><a href="detail_perusahaan?id='.$d["id"].'" class="btn btn-primary">Lebih Lanjut</a></td>
                        </tr>';

                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require "views/foot.php";
?>