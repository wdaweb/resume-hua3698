<h4>左側頭像區 ><small> 頭像輪播管理</small></h4>
<hr>
<button type="button" class="btn btn-outline-primary" onclick="op('#cover','#cvr','backend/pop_upload.php?section=self')">新增</button>
<div class="container d-flex mt-3">
    <div class="con" style="width: 10%;">序</div>
    <div class="con" style="width: 20%;">排序</div>
    <div class="con" style="width: 40%;">照片</div>
    <div class="con" style="width: 20%;">狀態</div>
    <div class="con" style="width: 10%;">刪除</div>
</div>
<div class="container d-flex">
    <div class="con" style="width: 10%;"></div>
    <div class="con" style="width: 20%;">
        <?php
        if ($key != 0) {
        ?>
            <button onclick="sw(<?= $a['id']; ?>,<?= $about[$key - 1]['id']; ?>)">往上</button>
        <?php
        }
        ?>
        <?php
        if ($key != (count($about) - 1)) { //計算最後一則是第幾個，因為索引值從0開始，所以要減1
        ?>
            <button onclick="sw(<?= $a['id']; ?>,<?= $about[$key + 1]['id']; ?>)">往下</button>
        <?php
        }
        ?>
    </div>
    <div class="con" style="width: 40%;">照片</div>
    <div class="a form-check form-switch">
        <input class="form-check-input" name="sh[]" value="<?= $a['id']; ?>" type="checkbox" id="flexChecked" <?= ($a['sh'] == 1) ? 'checked' : ''; ?>>
        <label class="a form-check-label" for="flexChecked"></label>
    </div>
    <div>
        <input type="checkbox" name="del[]" value="<?= $a['id']; ?>"></td>
        <input type="hidden" name="id[]" value="<?= $a['id']; ?>">
        <input type="hidden" name="section" value="about">
    </div>
</div>

<div id="cover" style="display:none; ">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>

<script>
    function sw(id1, id2) {
        $.post('api/swift.php', {
            section: 'self',
            id1,
            id2
        }, function(re) {
            console.log(re)
            // location.reload()
        })
    }

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