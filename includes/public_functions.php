<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = $conn->query($sql);
	// fetch all posts as an associative array called $posts
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$posts[] = $row;
	}
	$final_posts = array();
	foreach ($posts as $post) {
        $post['author'] = getPostAuthorById($post['user_id']);
		array_push($final_posts, $post);
	}
	return $final_posts;
}

/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getLastestPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true LIMIT 3";
	$result = $conn->query($sql);
	// fetch all posts as an associative array called $posts
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$posts[] = $row;
	}
	// $final_posts = array();
	// foreach ($posts as $post) {
    //     $post['topic'] = getPostTopic($post['id']); 
    //     $post['author'] = getPostAuthorById($post['user_id']);
    //     $post['category'] = getPostCategory($post['topic_id']);
	// 	array_push($final_posts, $post);
	// }
	return $posts;
}

/* * * * * * * * * * * * * * *
* Receives a post id and
* Returns topic of the post
* * * * * * * * * * * * * * */
function getPostTopic($post_id){
	global $conn;
	$sql = "SELECT * FROM topics WHERE id=
			(SELECT topic_id FROM post_topic WHERE post_id=$post_id) LIMIT 1";
	$result = $conn->query($sql);
	$topic = $result->fetch_assoc();
	return $topic;
}
// get the author/username of a post
function getPostAuthorById($user_id)
{
	global $conn;
	$sql = "SELECT username FROM users WHERE id=$user_id";
	$result = $conn->query($sql);
	if ($result) {
		// return username
		return $result->fetch_assoc()['username'];
	} else {
		return null;
	}
}
// get the category of a post
function getPostCategory($category_id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$category_id";
	$result = $conn->query($sql);
	if ($result) {
		// return username
		return $result->fetch_assoc()['name'];
	} else {
		return null;
	}
}

/* * * * * * * * * * * * * * * *
* Returns all posts under a topic
* * * * * * * * * * * * * * * * */
function getPublishedPostsByTopic($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts WHERE topic_id=$topic_id AND published=true";
	$result = $conn->query($sql);
	// fetch all posts as an associative array called $posts
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$posts[] = $row;
	}
	// $final_posts = array();
	// foreach ($posts as $post) {
    //     $post['topic'] = getPostTopic($post['id']); 
    //     $post['author'] = getPostAuthorById($post['user_id']);
	// 	array_push($final_posts, $post);
	// }
	return $posts;
}
/* * * * * * * * * * * * * * * *
* Returns topic name by topic id
* * * * * * * * * * * * * * * * */
function getTopicNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = $conn->query($sql);
	$topic = $result->fetch_assoc();
	return $topic['name'];
}

/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */
function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = $conn->query($sql);
	
	// fetch query results as associative array.
	$post = $result->fetch_assoc();
	// if ($post) {
	// 	// get the topic to which this post belongs
    //     $post['topic'] = getPostTopic($post['id']);
	// 	$post['author'] = getPostAuthorById($post['user_id']);
	// 	$post['category'] = getPostCategory($post['topic_id']);
	// }
	return $post;
}

/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */
function getPostComment($post_id){
	global $conn;
	// Get single post slug
	$sql = "SELECT * FROM comments WHERE post_id = '$post_id' ";
	$result = $conn->query($sql);

	// fetch query results as associative array.
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$postComments[] = $row;
	}
	return $postComments;
}

/* * * * * * * * * * * *
*  Returns all topics
* * * * * * * * * * * * */
function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = $conn->query($sql);
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$topics[] = $row;
	}
	return $topics;
}

/* * * * * * * * * * * *
*  Increase Single Post View
* * * * * * * * * * * * */
function increamentPostView($slug){
	global $conn;
	// Get single post slug
	$post_slug = $slug;

	$sql = "SELECT views FROM posts WHERE slug='$post_slug' AND published=true";
	$result = $conn->query($sql);
	$post_view = $result->fetch_assoc()['views'];
	
	$new_post_view = $post_view + 1;

	$sql = "UPDATE posts SET views='$new_post_view' WHERE slug='$post_slug'";

	$result = $conn->query($sql);
}
?>