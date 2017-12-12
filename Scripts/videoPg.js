
$(document).ready(function() {
	var commentCount = 4;
	$("#show-more").click(function () {
		commentCount += 2;
		$(".comment-box").load("Api/comment-section/load-comment.php", {
			newCommentCount: commentCount,
			selectedShow : "Alien Covenant"
		});
	});
});