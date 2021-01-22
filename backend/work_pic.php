<h4>工作經歷 ><small> 照片管理</small></h4>
<hr>
<div class="container d-flex mt-3">
    <div class="con" style="width: 10%;">序</div>
    <div class="con" style="width: 30%;">公司名稱</div>
    <div class="con" style="width: 40%;">照片</div>
    <div class="con" style="width: 20%;">動作</div>

</div>
<?php
$work = $Work->all();
foreach ($work as $id => $w) {
?>
    <div class="container d-flex">
        <div class="con" style="width: 10%;"><?= $id + 1; ?></div>
        <div class="con" style="width: 30%;"><?= $w['company']; ?></div>
        <div class="con" style="width: 40%;">
            <?php
            $pic = $Pic->find(['section' => 'work', 'lo' => $w['id']]);
            if (!empty($pic)) {
            ?>
                <img src="images/<?= $pic['img']; ?>" style="width:80%;">
            <?php
            } else {
                echo "<p class='text-primary'>請上傳圖片</p>";
            }
            ?>
        </div>
        <div class="con" style="width: 20%;">
            <button type="button" class="btn btn-sm btn-success" onclick="op('#cover','#cvr','backend/pop_upload.php?section=work_pic&id=<?= $w['id']; ?>')">上傳
            </button>
            <button type="button" class="btn btn-sm btn-danger" onclick="del('work',<?= $w['id']; ?>)">刪除</button>
        </div>
    </div>
<?php
}
?>
<div id="cover" style="display:none; ">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>

<script>
    function del(table, id) {
        let todo = 'del';
        $.post('api/del.php', {
            table,
            id,
            todo
        }, function() {
            location.reload()
        })
    }

    function op(x, y, url) {
        //把x淡入顯示，並把url的內容載入到y
        $(x).fadeIn();
        if (y) $(y).fadeIn();
        if (y && url) $(y).load(url);
    }

    function cl(x) {
        $(x).fadeOut();
    }
</script>