<?php 
// Post variables
$post_id = 0;
$name = "";
$email = "";
$message = "";

// general variables
$errors = [];



/* - - - - - - - - - - 
-  Post actions
- - - - - - - - - - -*/
// if user clicks the create post button
if (isset($_POST['submit_comment'])) { createComment($_POST); }


/* - - - - - - - - - - 
-  Post functions
- - - - - - - - - - -*/
function createComment($request_values)
	{
        global $conn, $errors, $post_id, $name, $email, $message;
        $post_id = esc($request_values['post_id']);
        $name = esc($request_values['name']);
        $email = esc($request_values['email']);
        $message = htmlentities(esc($request_values['message']));

        
        // validate form
		if (empty($name)) { array_push($errors, "Post name is required"); }
        if (empty($email)) { array_push($errors, "Post email is required"); }
        if (empty($message)) { array_push($errors, "Post message is required"); }
        
        // echo count($errors);
        // create post if there are no errors in the form
		if (count($errors) == 0) {
        $query = "INSERT INTO comments (post_id, name, email, message, created_at, updated_at) VALUES('$post_id', '$name', '$email', '$message', now(), now())";
            if ($conn->query($query)) {
                $_SESSION['message'] = "Admin user created successfully";
                $self = $_SERVER['HTTP_REFERER'];
                ?>
                <script>
                    window.location.href = "<?php echo $self ?>";
                </script>
                <?php
                }
		}
    }
    
    /* * * * * * * * * * * * * * * * * * * * *
* - Escapes form submitted value, hence, preventing SQL injection
* * * * * * * * * * * * * * * * * * * * * */
function esc(String $value){
	// bring the global db connect object into function
	global $conn;
	// remove empty space sorrounding string
	$val = trim($value); 
	$val = mysqli_real_escape_string($conn, $value);
	return $val;
}
?>