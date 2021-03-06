<?php require './connect.php'; ?> 
<?php  require_once './header.php'; ?>
   
    <main>
        <h1>Liste de courses</h1>
        <p><!-- trait horizontal noir --></p>
        
    </main>

     <div class="container">
          
              <!-- Button trigger modal -->
              <button type="button" class="badge btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ajouter<span class="badge bg-secondary"></span>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ajouter une Liste</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                      <form  method="POST">
                      <div class="mb-3">
                        <label  class="form-label" >Nom</label>
                        <input type="text" class="form-control" name="nom"  required>
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Poids</label>
                        <input type="text" class="form-control"  name="poids" required>
                      </div>
                      <div class="mb-3">
                        <label  class="form-label" >Quantité</label>
                        <input type="text" class="form-control"  name="qte" required>
                      </div> 
                      
                      <button  class="btn btn-primary" name="send" >Ajouter</button>
                    </form>


                    </div>
  
                  </div>
                </div>
              </div>


            <hr class="my-4">

              </div>


<div class="container">
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
     
      <th scope="col">Nom</th>
      <th scope="col">Poids</th>
      <th scope="col">Quantité  </th>
      <th scope="col">Détails</th>
      <th scope="col">Supprimer</th>
      
    </tr>
  </thead>
  <tbody >
        <tr>
<?php foreach($selectData as $listcourses){?>
<td ><?php echo $listcourses['nom'];?></td>
<td ><?php echo $listcourses['poids'];?></td>
<td ><?php echo $listcourses['quantité'];?></td>
<td><button type="button" class="detail badge btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Détail</button></td> 

<td><?php echo "<form method='POST'> <button class='badge  btn-danger' name ='supprimer' value='" . $listcourses['id']. "' type='submit'>Supprimer</button>" ;?></td>
        </tr>
       <?php }?>

     </tbody>
</table>


</div>


<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

           <?php echo $listcourses['nom']; ?> 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<?php require_once './footer.php'; ?>










