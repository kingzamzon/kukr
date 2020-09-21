<?php 


	/* * * * * * * * * * * * * * *
	* Returns a post total
	* * * * * * * * * * * * * * */
	function getPostTotal(){
		global $conn;
		$sql = "SELECT count(id) as countpost FROM posts";
		$result = $conn->query($sql);
		$post = $result->fetch_assoc()['countpost'];
		return $post;
	}

	/* * * * * * * * * * * * * * *
	* Returns a comment total
	* * * * * * * * * * * * * * */
	function getCommentTotal(){
		global $conn;
		$sql = "SELECT count(id) as countcomment FROM comments";
		$result = $conn->query($sql);
		$totalcomment = $result->fetch_assoc()['countcomment'];
		return $totalcomment;
	}

	/* * * * * * * * * * * * * * *
	* Returns a admin total
	* * * * * * * * * * * * * * */
	function getAdminTotal(){
		global $conn;
		$sql = "SELECT count(id) as countadmin FROM users WHERE users.role = 'admin' ";
		$result = $conn->query($sql);
		$totaladmin = $result->fetch_assoc()['countadmin'];
		return $totaladmin;
	}

	/* * * * * * * * * * * * * * *
	* Returns a visit total
	* * * * * * * * * * * * * * */
	function getVisitTotal(){
		global $conn;
		$sql = "SELECT sum(views) as countviews FROM posts ";
		$result = $conn->query($sql);
		$totalvisit = $result->fetch_assoc()['countviews'];
		return $totalvisit;
	}
?>