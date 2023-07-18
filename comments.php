
<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <?php
                if(! have_comments()){
                    echo "Leave A Comments";
                }
                else{
                    echo get_comments_number(). " Comments In This Post";
                }
            ?>
        </div>
        <div class="comments-inner comments_css">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div',
                )
            );
            ?>
            <?php
                if(comments_open()){
                    comment_form(
                        array(
                            'class_form' => '',
                            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                            'title_reply-after'=>'</h2>'
                        )
                    );
                }
                ?>
        </div>
    </div>

</div>

