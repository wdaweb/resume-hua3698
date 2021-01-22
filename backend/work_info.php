<h4>工作經歷 ><small> 工作經歷設定</small></h4>
<hr>
<a class="btn btn-outline-primary" href="?do=work_add">新增</a>
<div class="table-responsive mt-3">
    <form action="api/edit.php?do=work_info" method="post">
        <table>
            <thead>
                <th>序</th>
                <th>任職期間</th>
                <th>公司名稱</th>
                <th>職務名稱</th>
                <th>工作說明</th>
                <th>刪除</th>
            </thead>
            <?php
            $work = $Work->all();
            foreach ($work as $key => $w) {
                if($w['stay']==1){
                    $input="<input type='text' name='end[]' value='仍在職'>";
                }else{
                    $input="<input type='text' name='end[]' value='".$w['end']."'>";
                }
            ?>
                <tr>
                    <td><?=$key+1;?></td>
                    <td>
                        <input type="text" name="start[]" value="<?= $w['start']; ?>">-<?=$input;?>
                    </td>
                    <td><input type="text" name="company[]" value="<?= $w['company']; ?>"></td>
                    <td><input type="text" name="position[]" value="<?= $w['position']; ?>"></td>
                    <td><textarea name="description[]" class="form-control"><?= $w['description']; ?></textarea></td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $w['id']; ?>">
                        <input type="hidden" name="id[]" value="<?= $w['id']; ?>">
                        <input type="hidden" name="section" value="work">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="ct mt-3">
            <input type="submit" value="確定修改" class="btn btn-sm btn-success">
            <input type="reset" value="取消" class="btn btn-sm btn-secondary">
        </div>
    </form>
</div>
<script>
    $("input[type=text]").addClass("form-control");
</script>