<?php
$id = "";
include 'includes/header.inc.php';?>

<h1>Her kan du kontakte os</h1>

    <form action="sendmail.php" method="post">
    	
        <input type="text" name="navn" id="navn" placeholder="Navn"/> <br/>
        <br/>
        <input type="text" name="email" id="email" placeholder="Email"/> <br/>
        <br/>
        <textarea name="besked"></textarea><br/>
        <input type="submit" name="submit" value="Send mail"/>

	
<?php include 'includes/footer.inc.php';?>