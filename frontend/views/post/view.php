<?php
    $this->title = $data['title'];
    $this->params['breadcrumbs'][] = ['label'=>'文章', 'url'=>['post/index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9">
        <div class="page-title">
            <h1><?=$data['title']?></h1>
            <span>作者：<?=$data['user_name']?></span>
            <span>发布：<?=$data['created_at']?></span>
            <span>浏览：<?=$data['extend']['browser']?> 次</span>
        </div>
        <div class="page-content">
            <?=$data['content']?>
        </div>
        <div class="page-tag">
            标签：
            <?php
            foreach($data['tags'] as $tag){?>
            <span><a href="#"><?=$tag?></a></span>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="col-lg-3">

    </div>
</div>
