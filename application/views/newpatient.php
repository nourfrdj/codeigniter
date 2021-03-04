<h2>Ajout d'un patient</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('patient/newpatient'); ?>

<label for="firstname">Nom :</label>
<input type="text" name="firstname" placeholder="Ex: DUPONT" /><br />

<label for="lastname">Prenom :</label>
<input type="text" name="lastname" placeholder="Ex: Jean"><br />

<label for="birthdate">Date de naissance :</label>
<input type="text" name="birthdate"><br />

<label for="phone">Numero de telephone :</label>
<input type="text" name="phone"><br />

<label for="mail">Adresse mail :</label>
<input type="text" name="mail"><br />

<input type="submit" name="submit" value="Ajouter" />

</form>
