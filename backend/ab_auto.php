<h4>關於我 > <small>自傳設定</small></h4>
<hr>
<a class="btn btn-outline-primary" href="?do=ab_addauto">新增</a>
<?php
$auto = $Auto->all();
foreach ($auto as $id => $a) {
?>
    <div class="row mt-5">
        <div class="col-2 align-self-center">
            <input type="radio" name="sh" value="<?=$a['id'];?>" <?=($a['sh']==1)?'checked':'';?>> 上架
        </div>
        <div class="card shadow-sm px-0 col-8">
            <div class="card-header">
                <span class="b">第 <?= $id + 1; ?>份自傳</span>
                <span class="float-end text-secondary">
                    <a class="del" onclick="javascript:location.href='?do=ab_editauto&id=<?=$a['id'];?>'">編輯</a> |
                    <a class="del" onclick="del('auto',<?= $a['id']; ?>)">刪除</a>
                </span>
            </div>
            <div class="card-body">
                <p><?= $a['txt']; ?></p>
                <?php
                if(!empty($a['txt2'])){
                ?>
                <hr>
                <p><?= $a['txt2']; ?></p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
}
?>

<!-- <td><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','./popup/submenu.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')"></td> -->

<script>
    function del(table, id) {
        let todo='del';
        $.post('api/del.php', {todo,table,id,}, function() {
            location.reload()
        })
    }
    
    $("input").on("click",function(){
        let todo='check';
        let id=$(this).val();
        let table='auto';
        $.post("api/del.php",{todo,table,id},function() {
            location.reload()
        })
    })

</script>
