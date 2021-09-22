                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatePayment()">

<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">Payments</h1>
    </div> 
 </div> 
 <div class="col-md-8">
                    

                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "DECRIPTION">Expenses:</label>

                      <div class="col-md-8"> 
                        <select name="DESCRIPTION" id="DESCRIPTION" class="form-control input-sm">
                        <option>Select</option>
                          <?php 
                            $sql = "SELECT * FROM tblexpenses";
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();
                            foreach ($cur as $row) {
                              echo '<option value='.$row->EXPENSEID.'>'.$row->DESCRIPTION.'</option>';
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "AMOUNT">Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm " id="AMOUNT" name="AMOUNT" placeholder=
                            "Amount" type="text" value="" readonly="true">
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Student ID:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="singlename" name="IDNO" placeholder=
                            "Student ID" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "FEES">Tender Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="FEES" name="FEES" placeholder=
                            "Tender Amount" type="text" value="">
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "REMARKS">Remarks:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="REMARKS" name="REMARKS" placeholder=
                            "Remarks" type="text" value=""></textarea>  
                      </div>
                    </div>
                  </div>
 
            
             <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>
 </div>
 <div class="col-md-4">
    <div id="loadDetails"></div>
 </div>


    
          
        </form>
       