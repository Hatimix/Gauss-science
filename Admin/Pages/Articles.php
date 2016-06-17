<?php $nav = ""; ?>
<h2 class="page-header">Articles Page</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?= lang('addArticle'); ?>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= lang('addArticle') ?></h4>
            </div>
            <div class="modal-body">
                <!--  START FORM ADD POST -->
                <form action="#" method="GET">
                    <div class="input-group">
                        <label class="input-group-addon" id="basic-addon1"><?= lang('titlePost') ?></label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" id="basic-addon1"><?= lang('categories') ?></label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <!--  START TINYMCE FORM  -->
                            <textarea id="mytextarea">Hello, World!</textarea>
                        <!--  END TINYMCE FORM  -->
                    </div>
                </form>
                <!--  START FORM ADD POST -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang('close') ?></button>
                <button type="button" class="btn btn-primary"><?= lang('send') ?></button>
            </div>
            <!-- END ADD POST -->
            <!-- START FETCH POSTS  -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><?= lang('titlePost') ?></th>
                            <th><?= lang('excerpt') ?></th>
                            <th><?= lang('viewsCount') ?></th>
                            <th><?= lang('status') ?></th>
                            <th><?= lang('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php header('location : App/fetchArticles.php') ?>
                    </tbody>
                </table>
            </div>
            <!-- END FETCH POSTS  -->
        </div>
    </div>
</div>