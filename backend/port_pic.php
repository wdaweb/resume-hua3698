<div class="d-flex justify-content-between">
<h4>作品集 ><small> 作品集圖片管理</small></h4>
<span>* 上下架要去列表設定</span>
</div>
<hr>
<div class="container d-flex mt-3">
    <div class="con" style="width: 10%;">序</div>
    <div class="con" style="width: 30%;">作品名稱</div>
    <div class="con" style="width: 40%;">照片</div>
    <div class="con" style="width: 20%;">動作</div>
</div>
<?php
$port = $Port->all();
foreach ($port as $id => $p) {
?>
    <div class="container d-flex">
        <div class="con" style="width: 10%;"><?= $id + 1; ?></div>
        <div class="con" style="width: 30%;"><?= $p['title']; ?></div>
        <div class="con" style="width: 40%;">
            <?php
            $pic = $Pic->find(['section' => 'port', 'lo' => $p['id']]);
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
            <button type="button" class="btn btn-sm btn-success" onclick="op('#cover','#cvr','backend/pop_upload.php?section=port_pic&id=<?= $p['id']; ?>')">上傳
            </button>
            <button type="button" class="btn btn-sm btn-danger" onclick="del('port',<?= $p['id']; ?>)">刪除</button>
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