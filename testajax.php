<?php

/**
 * Hàm hiển thị user khi request
 */
$userName = $_REQUEST["username"];
// // sleep(5);
// echo "Xin chao $userName!"
include_once("model/user.php");

$user = new User($userName, "123", "Minh Vo");
$jsonUser = json_encode($user);
echo $jsonUser;
?>
<?php
$userName = $_REQUEST["username"];
// // sleep(5);
// echo "Xin chao $userName!"
include_once("model/book.php");
$lsBookFromFile = Book::getListFromFile();
?>
<table class="table table-bordered">
    <tr style="background: #343a40; color: white">
        <td>STT</td>
        <td>Tiêu đề</td>
        <td>Giá</td>
        <td>Tác giả</td>
        <td>Năm xuất bản</td>
        <td>Thao tác</td>
    </tr>
    <?php foreach ($lsBookFromFile as  $bookItem) { ?>
        <tr>
            <td><?php echo $bookItem->id ?></td>
            <td><?php echo $bookItem->title ?></td>
            <td><?php echo $bookItem->price ?></td>
            <td><?php echo $bookItem->author ?></td>
            <td><?php echo $bookItem->year ?></td>
            <td>
                <button class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Delete</button>
            </td>
        </tr>
    <?php } ?>
</table>