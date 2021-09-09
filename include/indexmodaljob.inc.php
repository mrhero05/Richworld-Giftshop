
 <?php  
 $name = $_POST["name"];
 $min = $_POST["min"];
 $max = $_POST["max"];
 $desc = $_POST["desc"]; 

 echo '<div class="modal fade" id="viewjobIndex" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">'.$name.'</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <div class="modal-body">
         <div class="container-fluid p-0">
         <div class="row">
         <!-- <div class="col-12">
         <input type="text" class="form-control" placeholder="ID"></div> -->
         <div class="col-sm-12 col-lg-12">
           <h1>Job Description: </h1>
           <p></p>
         </div>                                             
         </div>
         </div>
     </div>
     <div class="modal-footer">
         <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <button type="button" class="btn btn-primary" onclick="addEmp()">Apply Now</button>
         
         <p>* You must sign in to upload your pdf resume *</p>
         <div id="add"></div>
     </div>
     </div>
 </div>
</div>';

