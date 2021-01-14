<?php

// Showing Errors //

$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

if(isset($_POST['submit'])){
    
if(empty($_POST['email'])){
    $errors['email'] ='An email is required <br />';
}   else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email must be a valid email address';
    }
}
    if(empty($_POST['title'])){
        $errors['title'] = 'A title is required <br />';
}   else {
    $title = $_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        $errors['title'] = 'Title must be letters and spaces only';
    }
}
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] =  'At least one ingredients is required <br />';
    }   else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*s[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
        }
    } // Checking for errors & Redirecting //
    if (array_filter($errors)){
        // echo 'errors in the form';
    } else {
        // echo 'the form is valid';
        header('Location: UC4L03 Templates/UC4L03 index.php');
    }

}



?>

<!DOCTYPE html>
<html>

<?php include('UC4L03 Templates/UC4L03 Header.php '); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" class="white" action="UC4L03 Forms  in PHP.php" method="POST">
    <label>Your Email:</label>
    <input type="text" name="email">
    <div class="red-text"><?php echo $errors['email']; ?></div>
    <label>Pizza Title:</label>
    <input type="text" name="title">
    <div class="red-text"><?php echo $errors['title']; ?></div>
    <label>Ingredients (Comma separated):</label>
    <input type="text" name="ingredients">
    <!-- <div class="red-text"><?php echo $errors['Ingredients']; ?></div> -->
    <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
</form>
</section>

<?php include('UC4L03 Templates/UC4L03 Footer.php'); ?>

</html>