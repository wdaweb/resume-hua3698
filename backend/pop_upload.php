<?php
$str = ['self' => '個人照', 'work_pic' => '公司照', 'port_pic' => '作品集'];
?>
<div class="container p-3">
    <h3>新增<?= $str[$_GET['section']]; ?>照片</h3>
    <hr>
    <form action="api/add.php?do=<?= $_GET['section']; ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>照片上傳：</td>
                <td><input type="file" name="img" id="upload" value="新增圖片"></td>
            </tr>
        </table>
        <div class="ct my-3 w-50 mx-auto">
            <img src="" id="preview" style="max-width: 250px;max-height: 200px;">
        </div>
        <div class="ct my-3">
            <input type="hidden" name="id" value="<?= (isset($_GET['id']))?$_GET['id']:''; ?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </form>
</div>
<script>
    $(function() {

        //預覽上傳圖片
        $('#upload').change(function() {
            var f = document.getElementById('upload').files[0];
            var src = window.URL.createObjectURL(f);
            document.getElementById('preview').src = src;
        });

    });
</script>