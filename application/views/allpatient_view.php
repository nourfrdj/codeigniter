<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exercice 2 </title>
</head>

<body>
    <div class="container text-center">
        <p class="h1 text-center"> exo 2 : Tous les patients </p>
        <table class="table table-bordered border-info table-hover .table-responsive ">
            <thead class="table-info text-center">
                <tr>
                    <th>nom du patient</th>
                    <th>prenom</th>
                    <th>date de naissance</th>
                    <th>adresse mail</th>
                    <th>Numero de telephone</th>
                    <th>details</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if($showPatients->num_rows() > 0)  
           {  
                foreach($showPatients->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->firstname; ?></td>  
                     <td><?php echo $row->lastname; ?></td>  
                     <td><?php echo $row->birthdate; ?></td>
                     <td><?php echo $row->mail; ?></td>
                     <td><?php echo $row->phone; ?></td>
                     <input type="hidden" name="id" value="<?php echo $row->id; ?>" />  

                     <td><a href="<?=site_url('patient/showDetailsPatient')?>">Afficher les details du patient</a>

                     </td>
                </tr>  
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
            </tbody>
        </table>
    </div>
    <a href="<?php echo site_url('patient/newpatient') ?>">creer un nouveau patient</a>
   
</body>

</html>