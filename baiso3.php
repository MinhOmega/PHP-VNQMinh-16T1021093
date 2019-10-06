<?php
include_once("header.php")
?>
<?php
include_once("nav.php")
?>
<?php
$maSinhVien = $ho = $ten = $ngaySinh = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maSinhVien = $_REQUEST["txtMaSinhVien"];
    $ten = $_REQUEST["txtTen"];
    $ho = $_REQUEST["txtHo"];
    $ngaySinh = $_REQUEST["datNgaySinh"];
    $email = $_REQUEST["txtEmail"];

    //xoa ki tu dac biet ra khoi email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //validate de kiem tra xem req gui len co email field hop le ko
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ban da dinh dang email dung";
    } else {
        echo "Ban da nhap email ko dung dinh dang";
    }
    //var_dump($_FILES);
    if ($_FILES["fileAnhDaiDien"]["name"] != "") {
        move_uploaded_file(
            $_FILES["fileAnhDaiDien"]["tmp_name"], "uploads/avatar.jpg");
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <div>
        <div>
            <label>Ma sinh vien</label>
        </div>
        <div>
            <input class="form-control" required type="text" name="txtMaSinhVien" value="<?php echo $maSinhVien ?>">

        </div>
        <div>
            <label>Ho</label>
        </div>
        <div >
            <input class="form-control" required type="text" name="txtHo" value="<?php echo $ho ?>">

        </div>
        <div>
            <label>Ten</label>
        </div>
        <div >
            <input class="form-control" required type="text" name="txtTen" value="<?php echo $ten ?>">

        </div>
        <div>
            <label>Ngay sinh</label>
        </div>
        <div >
            <input class="form-control" type="date" name="datNgaySinh" value="<?php echo $ngaySinh ?>">

        </div>
        <div>
            <label>Email</label>
        </div>
        <div >
            <input class="form-control" type="email" name="txtEmail" value="<?php echo $email ?>">

        </div>
        <div>
            <label>Anh dai dien</label>
        </div>
        <div >
            <input class="form-control-file" type="file" name="fileAnhDaiDien" value="Luu">

        </div>
        <div>
            <br>
        </div>
        <div>
            <input class="btn btn-primary form-control" type="submit" name="btnSubmit" value="Luu">

        </div>

    </div>
</form>
<?php

?>

<?php
include_once("footer.php")
?>