<?php 

if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);

    // check email //
if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    }   else {
        echo htmlspecialchars($_POST['email']) . '<br />';
    }

    // check title //
    if(empty($_POST['title'])){
        echo 'A title is required <br />';
    }   else {
        echo htmlspecialchars($_POST['title']) . '<br />';
    }
        // check email //
        if(empty($_POST['ingredients'])){
            echo 'At least one ingredients is required <br />';
        }   else {
            echo htmlspecialchars($_POST['ingredients']);
        }
    } 
    
}

?>

<!DOCTYPE html>
<html>
	
	<?php include('UC4L03 Templates/UC4L03 Header.php '); ?>

    <section class="container grey-text">
        <h4 class="center">Pizzateria</h4>
        <form action="" class="white" action="UC4L03 Forms  in PHP.php" method="POST">
        <label>Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (Comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

	<?php include('Template/UC4L03Footer.php'); ?>

</html>