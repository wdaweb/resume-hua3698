<h4>工作經歷 > <small>工作經歷設定 > 新增</small></h4>
<hr>
<div class="card shadow-sm" style="width: 80%">
    <div class="card-header alert-secondary">新增 工作經歷</div>
    <div class="card-body">
        <form action="./api/add.php?do=work_info" method="post">
            <div class="row mb-4">
                <div class="col-4">公司名稱：</div>
                <div class="col-8"><input type="text" name="company" class="form-control"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">職務名稱：</div>
                <div class="col-8"><input type="text" name="position" class="form-control"></div>
            </div>
            <div class="row mb-4">
                <div class="col-4">就職日期：</div>
                <div class="col-8">
                    <input type="date" name="start" class="form-control">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">仍在職</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4 leave">
                <div class="col-4">離職日期：</div>
                <div class="col-8">
                    <input type="date" name="end" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">工作內容：</div>
                <div class="col-8"><input type="text" name="description" class="form-control"></div>
            </div>
            <div class="ct">
                <input type="submit" value="新增" class="btn btn-sm btn-success">
                <input type="reset" name="取消" class="btn btn-sm btn-secondary">
            </div>
        </form>
    </div>
</div>

<script>
    $(".form-check-input").on("click", function() {
        if ($(".form-check-input").prop("checked")) {
            $(".leave").fadeOut()
        }
    })
</script>