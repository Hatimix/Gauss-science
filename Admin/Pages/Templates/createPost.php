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
                <form action="App/addPost.php" method="GET">
                    <div class="input-group">
                        <label class="input-group-addon" id="basic-addon1"><?= lang('titlePost') ?></label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="title">
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" id="basic-addon1"><?= lang('categories') ?></label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="category">
                    </div>
                    <div class="input-group">
                        <label for="langPost" class="input-group-sm"><?= lang('langPost') ?></label><br>
                        <select name="langPost" id="langPost">
                            <option value="Français">Français</option>
                            <option value="English">English</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <!--  START TINYMCE FORM  -->
                        <textarea name="content" id="mytextarea">Hello, World!</textarea>
                        <!--  END TINYMCE FORM  -->
                    </div>
            </div><!-- END BODY MODAL -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang('close') ?></button>
                <button type="submit" class="btn btn-primary"><?= lang('send') ?></button>
            </div>
            </form>
            <!--  END FORM ADD POST -->
        </div>
    </div>
</div>
<!-- END ADD POST -->
