<link href="<?php echo $bootstrap?>docs/examples/grid/grid.css" rel="stylesheet">
<link href="<?php echo $bootstrap?>dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1>文章列表</h1>
    <div class="row">
        <div class="col-4">序号</div>
        <div class="col-4">标题</div>
        <div class="col-4">内容</div>
    </div>

    <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
    </div>

    <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>

    <div class="row">
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
    </div>

    <div class="row">
        <div class="col-xl-4">.col-xl-4</div>
        <div class="col-xl-4">.col-xl-4</div>
        <div class="col-xl-4">.col-xl-4</div>
    </div>
    <?php foreach ($articles as $key => $val) {?>
    <tr>
        <td><?php echo $val['id']?></td>
        <td><?php echo $val['title']?></td>
        <td><?php echo $val['content']?></td>
        <td>查看</td>
    </tr>
    <?php }?>
</div>