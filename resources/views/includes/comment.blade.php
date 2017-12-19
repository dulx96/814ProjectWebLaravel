<div class="comment_container">
    <div id="prev_comment">
        <h3 id='prev_comment_header'>Nhận xét (có {{$countComment}} nhận xét)</h3>
        @foreach($comments as $comment)
            <div class="comment_container">
                <div class="comment_header">
                    <div class="user_name">Từ
                        <?php if ($comment->CommentUserID==null)echo "Vô danh";
                        else echo "$comment->UserFirstName $comment->UserLastName";?>
                    </div>
                    <div class="comment_date">
                        {{ $comment->CommentDate }}
                    </div>
                </div>
                <div class="comment_content">
                    {{ $comment->Comment }}
                </div>
            </div>

            @endforeach
    </div>
    <div>
        <h3>Đánh giá của bạn</h3>
        <textarea id="now_comment" name='comment'></textarea>
        <button class="submit_btn">GỬI</button>
    </div>
</div>
<script>
    $(".submit_btn").on("click", function(){
        var productId = '{{$productId}}';
        if($("now_comment").val() != ""){
            $.ajax({
                dataType: 'json',
                type: 'post',
                url: '/comment/post',
                data:{
                    productId: productId,
                    comment: $("#now_comment").val()
                },
                success:function(response) {
                    show_comments(productId);
                    $("now_comment").text("");
                }
            });

        }

    });
</script>