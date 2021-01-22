<h4>作品集 > <small>作品集列表 > 新增</small></h4>
<hr>
<div class="card shadow-sm" style="width: 80%">
    <div class="card-header alert-secondary">新增 作品集</div>
    <div class="card-body">
        <form action="./api/add.php?do=port" method="post">
            <div class="row mb-4">
                <div class="col-4">作品標題：</div>
                <div class="col-8"><input type="text" name="title" class="form-control" placeholder="php/js/design/others choose one"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">次標題：</div>
                <div class="col-8"><input type="text" name="subtitle" class="form-control"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">作品簡介：</div>
                <div class="col-8"><input type="text" name="info" class="form-control"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">作品連結：</div>
                <div class="col-8"><input type="text" name="href" class="form-control"></div>
            </div>
            <div class="ct">
                <input type="submit" value="新增" class="btn btn-sm btn-success">
                <input type="reset" name="取消" class="btn btn-sm btn-secondary">
            </div>
        </form>
    </div>
</div>