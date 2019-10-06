<?php
include_once("header.php")
?>

<?php
include_once("nav.php")
?>
<div class="float-right pb-3">
    <button class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Them</button>
</div>
<br/>
<table class="table table-bordered">
    <tr style="background: #343a40; color: white">
        <td>STT</td>
        <td>Từ năm</td>
        <td>Đến năm</td>
        <td>Cấp</td>
        <td>Nơi học</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2004</td>
        <td>2009</td>
        <td>Tiểu học</td>
        <td>Trường Tiểu học Thuận Hòa</td>
        <td>
            <button class="btn btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Sửa</button>
            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;Xóa</button>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2009</td>
        <td>2013</td>
        <td>Trung học cơ sở</td>
        <td>Trường THCS Nguyễn Tri Phương</td>
        <td>
            <button class="btn btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Sửa</button>
            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;Xóa</button>
        </td>
    </tr>
    <tr>
        <td>1</td>
        <td>2013</td>
        <td>2016</td>
        <td>Trung học phổ thông</td>
        <td>Trường THPT Thuận Hòa</td>
        <td>
            <button class="btn btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Sửa</button>
            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;Xóa</button>
        </td>
    </tr>
    <tr>
        <td>1</td>
        <td>2016</td>
        <td>2020</td>
        <td>Đai học</td>
        <td>Đại học Khoa học Huế</td>
        <td>
            <button class="btn btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Sửa</button>
            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;Xóa</button>
        </td>
    </tr>
</table>
<?php
include_once("footer.php")
?>