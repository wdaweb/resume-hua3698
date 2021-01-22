<h4>作品集 ><small> 作品集列表</small></h4>
<hr>
<a class="btn btn-outline-primary" href="?do=port_add">新增</a>
<form action="api/edit.php?do=port" method="POST">
    <div class="container d-flex mt-3">
        <div class="con" style="width: 5%;">序</div>
        <div class="con" style="width: 10%;">標題</div>
        <div class="con" style="width: 20%;">次標題</div>
        <div class="con" style="width: 20%;">簡介</div>
        <div class="con" style="width: 30%;">連結</div>
        <div class="con" style="width: 10%;">狀態</div>
        <div class="con" style="width: 5%;">刪除</div>
    </div>
    <?php
    $port = $Port->all();
    foreach ($port as $key => $p) {
    ?>
        <div class="container d-flex">
            <div class="con" style="width: 5%;"><?= $key + 1; ?></div>
            <div class="con" style="width: 10%;"><input type="text" name="title[]" value="<?= $p['title']; ?>"></div>
            <div class="con" style="width: 20%;"><input type="text" name="subtitle[]" value="<?= $p['subtitle']; ?>"></div>
            <div class="con" style="width: 20%;"><input type="text" name="info[]" value="<?= $p['info']; ?>"></div>
            <div class="con" style="width: 30%;"><input type="text" name="href[]" value="<?= $p['href']; ?>"></div>
            <div class="con" style="width: 10%;">
                <div class="a form-check form-switch">
                    <input class="form-check-input" name="sh[]" value="<?= $p['id']; ?>" type="checkbox" id="flexS" <?= ($p['sh'] == 1) ? 'checked' : ''; ?>>
                    <label class="a form-check-label" for="flexS">上架</label>
                </div>
            </div>
            <div class="con" style="width: 5%;">
                <input type="checkbox" name="del[]" value="<?= $p['id']; ?>">
                <input type="hidden" name="id[]" value="<?= $p['id']; ?>">
                <input type="hidden" name="section" value="port">
            </div>
        </div>
    <?php
    }
    ?>

    <div class="ct mt-3">
        <input type="submit" value="確定修改" class="btn btn-sm btn-success">
        <input type="reset" value="取消" class="btn btn-sm btn-secondary">
    </div>
</form>

<script>
    $("input[type=text]").addClass("form-control");
    $(".form-check-input").next().html("下架");
    $(".form-check-input:checked").next().html("上架");

    $(".form-check-input").on("click", function() {
        switch ($(this).prop("checked")) {
            case true:
                $(this).next().html("上架")
                break;
            case false:
                $(this).next().html("下架")
                break;
        }
    })
</script>