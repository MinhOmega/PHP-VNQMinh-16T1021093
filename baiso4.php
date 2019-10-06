<?php
include_once("header.php")
?>
<?php
include_once("nav.php")
?>

<?php
#Code bai so 4
include_once("model/book.php");
//$book = new Book(50, "OOP", "nguyendung", 2019);
//$book->display();
// $ls = Book::getList();
//ls = Book::getList2($_REQUEST['search']);
$lsFromFile1 = Book::getListFromFile();

$lsFromFile = Book::getList2($_REQUEST['search']);
// echo "<pre>"; print_r($ls); echo "</pre>"; 
// echo '<pre>';
//var_dump($lsFromFile);
// echo '</pre>';
// echo '<pre>' . print_r($lsFromFile1) . '</pre>';
?>
<div class="float-right pb-3">
    <button data-toggle="modal" data-target="#addBook" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Them</button>
    <!-- Modal -->
    <div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Them sach moi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" class="form-control" placeholder="Nhap ID">
                        <label for="exampleInputEmail1">Ten Sach</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhap ten sach">
                        <label for="exampleInputEmail1">Tac gia</label>
                        <input type="text" name="author" class="form-control" placeholder="Enter ten tac gia">
                        <label for="exampleInputEmail1">Nam xuat ban</label>
                        <input type="text" name="year" class="form-control" placeholder="Nhap nam xuat ban">
                        <label for="exampleInputEmail1">Gia</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhap gia">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huy</button>
                        <button type="submit" name="addBook" class="btn btn-primary">Luu</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php
if (isset($_REQUEST["addBook"])) {

    $id = $_REQUEST["id"];

    $Title = $_REQUEST["title"];

    $Price = $_REQUEST["price"];

    $Author = $_REQUEST["author"];

    $Year = $_REQUEST["year"];

    $content = $id . "#" . $Title . "#" . $Price . "#" . $Author . "#" . $Year;

    Book::AddToFile($content, $id);

    //echo "<meta http-equiv='refresh' content='0'>";

}
?>


<form action="" method="GET">

    <div class="form-group">

        <input class="form-control" name="search" style="max-width: 200px; display:inline-block;" placeholder="Search">

    </div>

</form>
<!-- <form class="form-inline" method="get" >
    <input class="form-control mr-sm-2" name="giatrivao" type="text" placeholder="Search" aria-label="Search">
    <div class="form-check mr-2">
        <input class="form-check-input" type="radio" name="title" id="exampleRadios1" value="title" checked>
        <label class="form-check-label">
            Title
        </label>
    </div>
    <div class="form-check mr-2">
        <input class="form-check-input" type="radio" name="author" id="exampleRadios2" value="author">
        <label class="form-check-label">
            Author
        </label>
    </div>
    <div class="form-check mr-2">
        <input class="form-check-input" type="radio" name="year" id="exampleRadios3" value="year">
        <label class="form-check-label">
            Year
        </label>
    </div>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form> -->

<!-- #region -->


<?php
// //hien ten
// if (isset($_GET["title"])) {
//     $arrTemp = array();
//     foreach ($lsFromFile as $value) {
//         # code...
//         if ($value->price == $_GET["giatrivao"]) {
//             array_push($arrTemp, $value);
//         }
//     }
//     var_dump($arrTemp);
// }
?>
<?php
if (isset($_POST["action"])) {
    if ($_POST["action"] == 'delete') {
        Book::deleteBook($_POST["bookId"]);
    }
    if ($_POST["action"] == 'edit') {
        Book::editBook($_POST["bookId"], $_POST["title"], $_POST["price"], $_POST["author"], $_POST["year"]);
    }
}
?>

<table class="table table-bordered">
    <tr style="background: #343a40; color: white">
        <td>STT</td>       
        <td>Tieu de</td>
        <td>Gia</td>
        <td>Tac gia</td>
        <td>Nam hoc</td>
    </tr>
    <?php foreach ($lsFromFile as  $bookItem) { ?>
        <tr>
            <td><?php echo $bookItem->id ?></td>
            <td><?php echo $bookItem->title ?></td>
            <td><?php echo $bookItem->price ?></td>
            <td><?php echo $bookItem->author ?></td>
            <td><?php echo $bookItem->year ?></td>
            <td>

                <div>
                    <button data-toggle="modal" data-target="<?php echo "#editBook".$bookItem->id; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Sửa</button>
                    <div class="modal fade" id="<?php echo "editBook".$bookItem->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <?php echo $bookItem->title;?>
                                        <h5 class="modal-title" id="exampleModalLabel">Sua thong tin sach</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="exampleInputEmail1">Ten Sach</label>
                                        <input type="text" name="title" class="form-control" placeholder="Nhap ten sach">
                                        <label for="exampleInputEmail1">Tac gia</label>
                                        <input type="text" name="author" class="form-control" placeholder="Enter ten tac gia">
                                        <label for="exampleInputEmail1">Nam xuat ban</label>
                                        <input type="text" name="year" class="form-control" placeholder="Nhap nam xuat ban">
                                        <label for="exampleInputEmail1">Gia</label>
                                        <input type="text" name="price" class="form-control" placeholder="Nhap gia">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="bookId" value="<?php echo "$bookItem->id"; ?>" />
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huy</button>
                                        <button type="submit" name="action" value="edit" class="btn btn-primary">Luu</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <form style="display: inline;" action="" method="post">
                    <input type="hidden" name="bookId" value="<?php echo "$bookItem->id"; ?>" />
                    <button type="submit" name="action" value="delete" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;Xóa</button>
                </form>

            </td>

        <?php } ?>
</table>
<?php
include_once("footer.php")
?>