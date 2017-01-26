<div id="post-comments">
    <?php
    $this->CommentWidget->options([
        'allowAnonymousComment' => false,
        'displayType' => 'flat'
    ]);
    echo $this->CommentWidget->display();
    ?>
</div>
