<h4>關於我 ><small> 個人資料設定</small></h4>
<hr>
<a class="btn btn-outline-primary" href="?do=ab_add">新增</a>
<div class="table-responsive mt-3">
    <form action="api/edit.php?do=ab_info" method="post">
        <table>
            <thead>
                <th width="">序</th>
                <th width="20%">排序</th>
                <th width="20%">顯示區域</th>
                <th width="20%">項目名稱</th>
                <th width="20%">內容</th>
                <th width="10%">狀態</th>
                <th width="10%">刪除</th>
            </thead>
            <?php
            $about = $About->all(" order by rank");
            foreach ($about as $key => $a) {
            ?>
                <tr>
                    <td><?=$key+1;?></td>
                    <td>
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
                    </td>
                    <td>
                        <select name="area[]" id="">
                            <option value="1" <?= ($a['area'] == 1) ? 'selected' : ''; ?>>Personal Infor</option>
                            <option value="2" <?= ($a['area'] == 2) ? 'selected' : ''; ?>>Languages</option>
                        </select>
                    </td>
                    <td><input type="text" name="subject[]" value="<?= $a['subject']; ?>"></td>
                    <td><textarea name="txt[]" class="form-control" style="width:80%;"><?= $a['txt']; ?></textarea></td>
                    <td>
                        <div class="a form-check form-switch">
                            <input class="form-check-input" name="sh[]" value="<?= $a['id']; ?>" type="checkbox" id="flexChecked" <?= ($a['sh'] == 1) ? 'checked' : ''; ?>>
                            <label class="a form-check-label" for="flexChecked"></label>
                        </div>
                    </td>
                    <td><input type="checkbox" name="del[]" value="<?= $a['id']; ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $a['id']; ?>">
                    <input type="hidden" name="section" value="about">
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

    function sw(id1,id2){
        $.post('api/swift.php',{section:'about',id1,id2},function(re){
            console.log(re)
            // location.reload()
        })
    }
</script>