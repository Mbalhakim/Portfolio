
function hoogGelezenEenOp(topicid, gelezenteller)
{
    $.ajax(
        {
            url:'forumjs.php',
            data:{
                action:'topicophogen',
                topic_id: topicid,
                counter:gelezenteller
            },
            type:'post',
           success: function (data){
                $('#topicviews').empty().append(data)
            }
           /* error: function (){
                alert("het ophogen is niet gelukt")
            }*/
        })


}


function likeReply(replyid, aantallikes, userid)
{
    $.ajax(
        {
            url:'forumjs.php',
            data:{
                action:'likesophogen',
                reply_id: replyid,
                aantal_likes:aantallikes,
                user_id:userid
            },
            type:'post',
           success: function (data){
                
              //  alert("ja het is gelukt")
               $('#likes' + replyid).empty().append("<a href='' onclick=\"likeReply(" + replyid + "." + data +  ")\"><img src='like.png' style='height: 30px; width:30px;'>" + "<p>  " + data +  " Likes</p>" );
            }
           /* error: function (){
                alert("het ophogen is niet gelukt")
            }*/
        })


}

/*
window.onload = function () {
    document.body.insertAdjacentHTML( 'beforeEnd', '<iframe id="my-like-frame" style="display:none;"></iframe>' );
    document.addEventListener( 'click', function ( event ) {
        var myLikeLink = event.target;
        if( myLikeLink.className.indexOf( 'my-like' ) > -1 ) {
            var myLikeFrame = document.getElementById( 'my-like-frame' ),
                liked = ( myLikeLink.className == 'my-liked' ),
                command = liked ? 'unlike' : 'like',
                reblog = myLikeLink.getAttribute( 'data-reblog' ),
                postId = myLikeLink.getAttribute( 'data-id' ),
                oauth = reblog.slice( -8 ),
                likeUrl = 'http://www.tumblr.com/' + command + '/' + oauth + '?id=' + postId;
            myLikeFrame.src = likeUrl;
            liked ? myLikeLink.className = 'my-like'
                : myLikeLink.className = 'my-liked';
        };
    }, false );
    };*/