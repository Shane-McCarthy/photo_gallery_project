<?php require_once("../includes/initialize.php"); ?>
<?php include_layout_template('header.php'); ?>
<?php
if(empty($_GET['id'])) {
    $session->message("No photograph ID was provided.");
    redirect_to('index.php');
}
$id=$_GET['id'];
$gallery =  Photograph::find_by_id($id);
if(!$gallery) {
    $session->message("The photo could not be located.");
    redirect_to('public_gallery.php');
}
if(isset($_POST['submit'])) {
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);

    $new_comment = Comment::make($gallery->id, $author, $body);
    if($new_comment && $new_comment->save()) {
        // comment saved
        // No message needed; seeing the comment is proof enough.

        // Important!  You could just let the page render from here.
        // But then if the page is reloaded, the form will try
        // to resubmit the comment. So redirect instead:

        redirect_to("photo_large.php?id={$gallery->id}");

    } else {
        // Failed
        $message = "There was an error that prevented the comment from being saved.";
    }
} else {
    $author = "";
    $body = "";
}
    $comments = $gallery->comments();
?>
    <h2>Photograph Full Size</h2>
    <div style="margin-left: 20px;">
        <img src="<?php echo $gallery->image_path(); ?>" />
        <p><?php echo $gallery->caption; ?></p>
    </div>

    <div id="comments">
        <?php foreach($comments as $comment): ?>
            <div class="comment" style="margin-bottom: 2em;">
                <div class="author">
                    <?php echo htmlentities($comment->author); ?> wrote:
                </div>
                <div class="body">
                    <?php echo strip_tags($comment->body, '<strong><em><p>'); ?>
                </div>
                <div class="meta-info" style="font-size: 0.8em;">
                    <?php echo datetime_to_text($comment->created); ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if(empty($comments)) { echo "No Comments."; } ?>
    </div>

    <h2>Menu</h2>
    <ul>
        <li><a href="admin/login.php">login</a></li>


    </ul>
    <!-- list comments -->

    <div id="comment-form">
        <h3>New Comment</h3>
        <?php echo output_message($message); ?>
        <form action="photo_large.php?id=<?php echo $gallery->id; ?>" method="post">
            <table>
                <tr>
                    <td>Your name:</td>
                    <td><input type="text" name="author" value="<?php echo $author; ?>" /></td>
                </tr>
                <tr>
                    <td>Your comment:</td>
                    <td><textarea name="body" cols="40" rows="8"><?php echo $body; ?></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit Comment" /></td>
                </tr>
            </table>
        </form>
    </div>

<?php include_layout_template('footer.php'); ?>