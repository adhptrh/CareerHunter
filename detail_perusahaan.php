<?php
session_start();
require "conn.php";
$title = "Detail Perusahaan";
$appname = "CareerHunter";

require "checkuser.php";

$data = new UserPerusahaan($conn);
$data = $data->selectDataById($_GET["id"])->fetch_assoc();

require "views/head.php";
?>

<div class="container mt-5 mb-5">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th class="w-50">Nama Perusahaan</th>
                <td><?php echo $data["nama"]; ?></td>
            </tr>
            <tr>
                <th>Nomor Perusahaan</th>
                <td><?php echo $data["nomor"]; ?></td>
            </tr>
            <tr>
                <th>Email Perusahaan</th>
                <td><?php echo $data["email"]; ?></td>
            </tr>
            <tr>
                <th>Nama Penanggung Jawab</th>
                <td><?php echo $data["nama_penanggung_jawab"]; ?></td>
            </tr>
            <tr>
                <th>Nomor Telpon Penanggung Jawab</th>
                <td><?php echo $data["nomor_penanggung_jawab"]; ?></td>
            </tr>
            <tr>
                <th>Akta Pendirian Usaha</th>
                <td><img class="w-100" src="foto/akta_pendirian_usaha/<?php echo $data["akta_pendirian_usaha"]; ?>"></td>
            </tr>
        </tbody>
    </table>
    <a href="actions/tolak_perusahaan?id=<?php echo $data["id"]; ?>" class="btn btn-danger">Tolak</a>
    <a href="actions/terima_perusahaan?id=<?php echo $data["id"]; ?>" class="btn btn-success">Terima</a>
</div>

<?php
require "views/foot.php";
?>