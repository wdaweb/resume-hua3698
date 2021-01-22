<h4>關於我 > <small>自傳設定 > 修改</small></h4>
<hr>
<?php
$auto=$Auto->find($_GET['id']);
?>
<form action="api/update.php?do=ab_auto" method="POST">
    <div class="row w-75 mb-3">
        <label class="col-4 col-form-label">中文自傳</label>
        <div class="col-8">
            <textarea name="txt" rows="8" class="form-control" placeholder="0/1000"><?=$auto['txt'];?></textarea>
        </div>
    </div>
    <div class="row w-75 mb-3">
        <!-- 英文允許空值 -->
        <label class="col-4 col-form-label">英文自傳</label>
        <div class="col-8">
            <textarea name="txt2" rows="8" class="form-control" placeholder="0/1000"><?=$auto['txt2'];?></textarea>
        </div>
    </div>
    <div class="ct">
        <input type="submit" value="確定修改" class="btn btn-sm btn-success">
        <input type="reset" value="取消" class="btn btn-sm btn-secondary">
        <input type="hidden" name="section" value="auto">
        <input type="hidden" name="id" value="<?=$auto['id'];?>">
    </div>
</form>