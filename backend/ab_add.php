<h4>關於我 > <small>個人資料設定 > 新增</small></h4>
<hr>
<div class="card shadow-sm" style="width: 80%">
    <div class="card-header alert-secondary">新增 個人資料</div>
    <div class="card-body">
        <form action="./api/add.php?do=ab_info" method="post">
            <div class="row mb-4">
                <div class="col-4">要顯示的區域：</div>
                <div class="col-8">
                    <select name="area" id="" class="form-select">
                        <option value="1">Personal Infromation</option>
                        <option value="2">Languages</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">項目名稱：</div>
                <div class="col-8"><input type="text" name="subject" class="form-control"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">內容：</div>
                <div class="col-8"><input type="text" name="txt" class="form-control"></div>
            </div>
            <div class="ct">
                <input type="submit" value="新增" class="btn btn-sm btn-success">
                <input type="reset" value="取消" class="btn btn-sm btn-secondary">
            </div>
        </form>
    </div>
</div>