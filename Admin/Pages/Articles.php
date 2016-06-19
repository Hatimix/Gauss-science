<?php $nav = ""; ?>
<h2 class="page-header">Articles Page</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?= lang('addArticle'); ?>
</button>

<!-- START INCLUDE TEMPLATE ADD ARTICLE -->
    <?php include 'Pages/Templates/createPost.php'; ?>
<!-- END TEMPLATE ADD ARTICLE -->

<!-- START FETCH POSTS  -->
<br>
<h3 class="page-header">Articles list</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th><?= lang('titlePost') ?></th>
            <th><?= lang('excerpt') ?></th>
            <th><?= lang('viewsCount') ?></th>
            <th><?= lang('status') ?></th>
            <th><?= lang('Action') ?></th>
        </tr>
        </thead>
        <tbody>
            <?php include('App/fetchArticles.php') ?>
        </tbody>
    </table>
</div>
<!-- END FETCH POSTS  -->