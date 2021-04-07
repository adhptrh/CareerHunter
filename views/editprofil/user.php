<?php

$user = new User($conn);
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
    <form method="post" action="actions/edit_user" enctype="multipart/form-data">
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
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input name="nama" value="<?php echo $data["nama"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" value="<?php echo $data["email"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor Telpon</label>
            <input name="notelp" value="<?php echo $data["notelp"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor Telpon</label>
            <input name="notelp" value="<?php echo $data["notelp"]; ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kelamin</label>

            <select name="kelamin" class="form-select" aria-label="Default select example">
                <option value="pria" <?php echo ($data["kelamin"] == "pria") ? "selected":""; ?>>Pria</option>
                <option value="wanita" <?php echo ($data["kelamin"] == "wanita") ? "selected":""; ?>>Wanita</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
            <input class="form-control" type="date" name="lahir" value="<?php echo $data["lahir"]; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ganti Password (Isi kosong jika tidak ingin ganti password)</label>
            <input name="gantipassword" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <h3>Informasi Profil</h3>
        <hr>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Tentang Saya</label>
            <textarea name="tentang" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data["tentang"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Edukasi</label>
            <textarea name="edukasi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data["edukasi"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pengalaman Bekerja</label>
            <textarea name="pengalamankerja" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data["pengalamankerja"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Skills</label>
            <textarea name="skill" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data["skill"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Resume</label>
            <input name="resume" class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pengalaman Organisasi</label>
            <textarea name="pengalamanorganisasi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data["pengalamanorganisasi"]; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Silahkan masukan password untuk melanjutkan menyimpan</label>
            <input name="cpassword" type="password" class="form-control" id="exampleFormControlInput1">
        </div>

        <button class="btn mb-3 btn-primary float-end">Simpan</button>
    </form>
</div>