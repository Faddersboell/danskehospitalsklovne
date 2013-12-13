<?php
$id = "";
include 'includes/header.inc.php';?>

	<h1>Støt med kreditkort</h1>
    
    
    <form action="mingle.php" method="post">
        <label for="navn">Navn</label>
        <input type="text" name="navn" id="navn" placeholder="Indtast navn" />
        
        <p>&nbsp;</p>
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Indtast email" />
        
        <p>&nbsp;</p>
        
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" placeholder="Indtast adresse" />
        
        <p>&nbsp;</p>
        
        <label for="postnummer">Postnummer</label>
        <input type="text" name="postnummer" id="postnummer" placeholder="Indtast postnummer" />
        
       <label for="by">By</label>
        <input type="text" name="by" id="by" placeholder="Indtast by" />
        
        <p>&nbsp;</p>
        
        <label for="navn">Navn</label>
        <input type="text" name="navn" id="navn" placeholder="Skriv dit navn" />
        
        <p>&nbsp;</p>
        
        <label for="kortnummer">Kortnummer</label>
        <input type="text" name="kortnummer" id="kortnummer" placeholder="Indtast kortnummer" />
        
        <p>&nbsp;</p>
        
        <label for="maned">Måned</label>
        <input type="text" name="maned" id="maned" placeholder="Måned" />
        
        <label for="ar">År</label>
        <input type="text" name="ar" id="ar" placeholder="År" />
        
        <p>&nbsp;</p>
        
        <label for="kontrolcifre">Kontrolcifre</label>
        <input type="text" name="kontrolcifre" id="" placeholder="Kontrolcifre" />
        
        <p>&nbsp;</p>

        
        <input type="submit" name="send" value="Godkend Betaling" />
	</form>
      
<?php include 'includes/footer.inc.php';?>