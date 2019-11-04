<?php


session_start();
include_once("model/book.php");
// if(!unset($_SESSION["user"])){
//     header("location:login.php");
// }
if (!isset($_SESSION["user"]))
    header("location:login.php");
include_once("header.php")
?>

<?php
include_once("nav.php")

?>
<?php
/**
 * 
 */
// mã php trang chủ

$url = "/xampp/htdocs/PHP/data/data.json";

$data = file_get_contents($url);

$characters = json_decode($data);




?>
<form action="" method="GET">

    <div class="form-group">

        <input type="text" class="form-control" name="search" id="search" style="max-width: 200px; display:inline-block;" placeholder="Search">
        <button style="float: right;" data-toggle="modal" data-target="#addBook" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Them</button>
        <ul class="list-group"></ul>
    </div>

</form>
<table class="table table-bordered">
    <tr style="background: #343a40; color: white">
        <td>STT</td>
        <td>Tiêu đề</td>
        <td>Giá</td>
        <td>Tác giả</td>
        <td>Năm xuất bản</td>
        <td>Thao tác</td>
    </tr>

    </tr>
    <?php foreach ($characters as  $bookItem => $value) { ?>
        <tr>
            <td> <?php echo $bookItem + 1 ?> </td>
            <td><?php echo $value->Title ?></td>
            <td><?php echo $value->Cost ?></td>
            <td><?php echo $value->Author ?></td>
            <td><?php echo $value->Year ?></td>
            <td>
                <button class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Delete</button>
            </td>
        </tr>
    <?php } ?>
</table>




<?php
include_once("footer.php")
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            cache: false
        });
        $('#search').keyup(function() {
            $('#result').html('');
            $('#state').val('');
            var searchField = $('#search').val();
            var expression = new RegExp(searchField, "i");
            
            $.getJSON('/xampp/htdocs/PHP/data/data.json', function(data) {
                $.each(data, function(key, value) {
                    if (value.name.search(expression) != -1 || value.location.search(expression) != -1) {
                        $('#result').append('<li class="list-group-item link-class">'+ + ' </li>');
                        
                    }
                });
            });
        });

        $('#result').on('click', 'li', function() {
            var click_text = $(this).text().split('|');
            $('#search').val($.trim(click_text[0]));
            $("#result").html('');
        });
    });
</script> -->
<script>
    $(document).ready(function() {
        var data
        $.ajax({
            dataType: 'json',
            url: '/xampp/htdocs/PHP/data/data.json',
            data: data,
            success: function(data) {
                // begin accessing JSON data here
                console.log(data[0].Title)
            },
        })
    })
</script>