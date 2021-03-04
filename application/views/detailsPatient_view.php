<?php
if($showDetailsPatient->num_rows() > 0)  
           {  
                $row=$showDetailsPatient->result();
                var_dump($row);
           
                ?>
<p>nom du patient : <?php echo $row->firsname; ?></p>
<p>prenom : </p>
<p>date de naissance: </p>
<p>adresse mail : </p>
<p>Numero de telephone: </p>
<?php
           }
           ?>