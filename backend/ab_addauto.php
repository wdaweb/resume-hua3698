<h4>關於我 > <small>自傳設定 > 新增</small></h4>
<hr>
<form action="api/add.php?do=ab_auto" method="post">
    <div class="row w-75 mb-3">
        <label class="col-4 col-form-label">中文自傳</label>
        <div class="col-8">
            <textarea name="txt" rows="8" class="form-control" placeholder="0/1000"></textarea>
        </div>
    </div>
    <div class="row w-75 mb-3">
        <!-- 英文允許空值 -->
        <label class="col-4 col-form-label">英文自傳</label>
        <div class="col-8">
            <textarea name="txt2" rows="8" class="form-control" placeholder="0/1000"></textarea>
        </div>
    </div>
    <div class="ct">
        <input type="submit" value="新增" class="btn btn-sm btn-success">
        <input type="reset" value="取消" class="btn btn-sm btn-secondary">
    </div>
</form>