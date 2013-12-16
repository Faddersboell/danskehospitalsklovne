<?php
$id = "";
include 'includes/header.inc.php';?>

	<h1>Støt med kreditkort</h1>
    
    
  	<form action="tak.php" method="post"> 
        <label for="navn"></label>
        <input type="text" name="navn" id="navn" placeholder="Navn" />
        
        <p>&nbsp;</p>
        
        <label for="email"></label>
        <input type="text" name="email" id="email" placeholder="Email" />
        
        <p>&nbsp;</p>
        
        <label for="adresse"></label>
        <input type="text" name="adresse" id="adresse" placeholder="Adresse" />
        
        <p>&nbsp;</p>
        
        <label for="postnr."></label>
        <input class="kort" name="postnr." id="postnr." placeholder="Post nr." />
        
       <label for="by"></label>
        <input class="kort" name="by" id="by" placeholder="By" />
        
        <p>&nbsp;</p>
        
        <label for="belob"></label>
        <input type="text" name="belob" id="belob" placeholder="Indtast beløb" />
        
        <p>&nbsp;</p>
        
        <label for="kortnummer"></label>
        <input type="text" name="kortnummer" id="kortnummer" placeholder="Kortnummer" />
        
        <p>&nbsp;</p>
        
        <label for="maned"></label>
        <input class="kort" name="maned" id="maned" placeholder="Måned" />
        
        <label for="ar"></label>
        <input class="kort" name="ar" id="ar" placeholder="År" />
        
        <p>&nbsp;</p>
        
        <label for="kontrolcifre"></label>
        <input type="text" name="kontrolcifre" id="kontrolcifre" placeholder="Kontrolcifre" />
        
        <p>&nbsp;</p>

        
        <input type="submit" name="send" value="Godkend Betaling" />
	</form>
      
<?php include 'includes/footer.inc.php';?>