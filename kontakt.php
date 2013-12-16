<?php
$id = "";
include 'includes/header.inc.php';?>

<h1>Her kan du kontakte os</h1>

    <form  action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="navn" id="navn" placeholder="Navn"/> <br />
        <input name="email" type="text" id="email" placeholder="Email"/> <br />
        <textarea name="besked" rows="15" cols="30"> </textarea> <br />
        <input type="submit" class="button" value="Send email"/>
    </form> 

	
<?php include 'includes/footer.inc.php';?>