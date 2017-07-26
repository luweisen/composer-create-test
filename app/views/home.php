<link href="<?php echo $bootstrap?>docs/examples/grid/grid.css" rel="stylesheet">
<link href="<?php echo $bootstrap?>dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <p>文章列表</p>
    <div class="row">
        <div class="col-4">序号</div>
        <div class="col-4">标题</div>
        <div class="col-4">内容</div>
    </div>
    <?php foreach ($articles as $key => $val) {?>
    <div class="row">
        <div class="col-xl-4"><?php echo $val['id']?></div>
        <div class="col-lg-4"><?php echo $val['title']?></div>
        <div class="col-md-4"><?php echo $val['content']?></div>
    </div>
    <?php }?>
</div>