<?php require_once 'view/header.php';?>
<?php require_once 'view/navbar.php';?>

<!-- TO UPDATE .CSS -->

<form>
    
    <div style='height:80px'></div>
    <div class='card shadow p-3 mb-5 bg-white rounded' style='margin-left:10%; margin-right:10%; margin:auto; max-width:600px; min-width:300px; height:auto;'>
        <div style='padding:30px'>
            <h5>Select Department & Project ID</h5>
            <hr>          
            <br>
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle' >Department</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-bars"></i></div>
                        </div>
                        <select class='form-control' type='text' name='' required>
                            <option disabled selected hidden>Choose...</option>
                        </select>
                    </div>   
                </div>            
            </div>
            <br>       
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle' >Project ID</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-bars"></i></div>
                        </div>
                        <select class='form-control' type='text' name='' required>
                            <option disabled selected hidden>Choose...</option>
                        </select>
                    </div> 
                </div>               
            </div>  
        </div>
    </div>
  
    <div style='height:20px'></div>
    <div class='card shadow p-3 mb-5 bg-white rounded' style='margin-left:10%; margin-right:10%; margin:auto; max-width:600px; min-width:300px; height:auto;'>
        <div style='padding:30px'>
            <h5>Expenditures</h5>
            <hr>
            <br>
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle'>Budget Allocated</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-file-alt"></i></div>
                        </div>
                        <input class='form-control' type='number' required>
                    </div> 
                </div>               
            </div>
            <br>       
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle'>Actual Spent</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-file-alt"></i></div>
                        </div>
                        <input class='form-control' type='number' required>
                    </div> 
                </div>                   
            </div>
        </div>
    </div>
    
    <div style='height:20px'></div>
    <div class='card shadow p-3 mb-5 bg-white rounded' style='margin-left:10%; margin-right:10%; margin:auto; max-width:600px; min-width:300px; height:auto;'>
        <div style='padding:30px'>
            <h5>Beneficiaries</h5>
            <hr>
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle'>Beneficiary</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-file-alt"></i></div>
                        </div>
                        <input class='form-control' type="text" placeholder='Farmers/OFWs/Students etc.'>
                    </div> 
                </div>               
            </div>
            <br>
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle'>Target Unit</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-file-alt"></i></div>
                        </div>
                        <input class='form-control' type='number' required>
                    </div> 
                </div>               
            </div>
            <br>       
            <div class='row'>
                <div class='col-2' style='font-size:.9rem; padding:0px; text-align:center; vertical-align:middle'>Actual Unit</div>
                <div class='col-10'> 
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-file-alt"></i></div>
                        </div>
                        <input class='form-control' type='number' required>
                    </div> 
                </div>                   
            </div>
        </div>
    </div>
    
    <div style='height:20px'></div>
    <div class='card shadow p-3 mb-5 bg-white rounded' style='margin-left:10%; margin-right:10%; margin:auto; max-width:600px; min-width:300px; height:auto; padding:20px;'>
        <div class="form-check" style='align-center; padding:20px'>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value=""> 
                <span style='font-size:.9rem'>I hereby certify that the information contained in each page of this form is true and correct in all respects.</span>
            </label>
        </div>
        <br>
        <center>
            <button class='btn btn-primary' type='submit' style='width:300px'>Submit</button>
        </center>
    </div>
   

</form>
    
<?php require_once 'view/footer.php'; ?>