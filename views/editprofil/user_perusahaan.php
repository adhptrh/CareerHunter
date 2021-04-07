<?php

$user = new UserPerusahaan($conn);
$data = $user->selectDataById($_SESSION["id"])->fetch_assoc();

?>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#fotoprofil')
                    .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<div class="container mt-5 rounded px-5">
    <form method="post" action="actions/edit_user_perusahaan" enctype="multipart/form-data">
        <h1 class="mb-3">Edit Profil</h1>

        <div class="text-center">
            <label for="formFile">
                <img src="foto/foto_profil/<?php echo $data["foto"] ?>" id="fotoprofil" class="shadow rounded-circle mb-3" width="150px" height="150px">
            </label>
            <p>Klik foto untuk mengganti foto profil</p>
            <div class="mb-3 d-flex justify-content-md-center">
                <input name="foto" class="form-control d-none" onchange="readURL(this);" type="file" id="formFile" style="width:300px;">
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input name="username" value="<?php echo $data["username"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
            <input name="nama" value="<?php echo $data["nama"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email Perusahaan</label>
            <input name="email" value="<?php echo $data["email"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor Telpon Penanggung Jawab</label>
            <input name="nomor_penanggung_jawab" value="<?php echo $data["nomor_penanggung_jawab"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Penanggung Jawab</label>
            <input name="nama_penanggung_jawab" value="<?php echo $data["nama_penanggung_jawab"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ganti Password (Isi kosong jika tidak ingin ganti password)</label>
            <input name="gantipassword" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Silahkan masukan password untuk melanjutkan menyimpan</label>
            <input name="cpassword" type="password" class="form-control" id="exampleFormControlInput1">
        </div>

        <button class="btn mb-3 btn-primary float-end">Simpan</button>
    </form>
</div>