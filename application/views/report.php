
   
      <div class="main-panel">
        <div class="content-wrapper">
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Recieved Amount</h4>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                      <thead>
                        <tr class="bg-gradient-primary text-white">
                            <th class="p-2 text-center">#</th>
                          <th class="p-2 text-center">
                            Name
                          </th>
                          <th class="p-2 text-center">
                            Date
                          </th>
                          <th class="p-2 text-center">
                            Status
                          </th>
                          <th class="p-2 text-center">
                            Amount
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                           <?php   
                            $total="0";
                  if($fetch_report_credit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_report_credit->result() as $row)  
                {  
                   $total= $row->Total;
           ?> 
                        <tr>
                            <td class='px-3 py-2 align-middle text-center'><?php echo $i++ ?></td>
                          <td class='px-3 py-2 align-middle'>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td class='px-3 py-2 align-middle'>
                            <?php  echo $reversed = date('M d, Y', strtotime($row->date)); ?>
                          </td>
                          <td class='px-3 py-2 align-middle text-center'>
                            <label class="badge badge-gradient-success">Amount Recieved</label>
                          </td>
                          <td class='px-3 py-2 align-middle text-right'>&#8369; 
                           <?php echo number_format($row->amount, 2) ?>
                          </td>
                        </tr>
                        
                        <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td class='px-3 py-2 align-middle'>No data Found</td> 
              
           <?php  
          }  
           ?> 
                        
                        
                        
                      </tbody>
                    </table>
                      <h4 align="right" class="text-success font-weight-bold">Total: &#8369; <?php echo $total ?></h4>   
                  </div>
                </div>
              </div>
            </div>
             
          </div>    
            
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Expenses</h4>
                  <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                      <thead>
                        <tr class="bg-gradient-primary text-white">
                            <th class="p-2 text-center">#</th>
                          <th class="p-2 text-center">
                            Name
                          </th>
                          <th class="p-2 text-center">
                            Exp Category
                          </th>
                           <th class="p-2 text-center">
                            Date
                          </th>
                          <th class="p-2 text-center">
                            Status
                          </th>
                          <th class="p-2 text-center">
                            Amount
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                      $total2="0";
                  if($fetch_report_debit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_report_debit->result() as $row)  
                {
                   $total2=$row->Total;
           ?> 
                        <tr>
                            <td class='px-3 py-2 align-middle text-center'><?php echo $i++ ?></td>
                          <td class='px-3 py-2 align-middle'>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td class='px-3 py-2 align-middle'>
                            <?php echo $row->category_id ?>
                          </td>
                                  
                          <td class='px-3 py-2 align-middle'>
                          <?php  echo $reversed = date('M d, Y', strtotime($row->date)); ?>
                            </td>
                          <td class='px-3 py-2 align-middle text-center'>
                            <label class="badge badge-gradient-danger">Expenses</label>
                          </td>
                          <td class='px-3 py-2 align-middle text-right'>
                          &#8369; <?php echo number_format($row->amount, 2) ?>
                          </td>
                        </tr>
                        
                                            <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td>No data Found</td> 
              
           <?php  
          }  
           ?> 
                
                        
                        
                        
                      </tbody>
                    </table>
                      <h4 align="right" class="text-danger font-weight-bold">Total: &#8369; <?php echo $total2
                               ?></h4> 
                  </div>
                </div>
              </div>
            </div>
          </div>        
            <script>
    $(function() {
      $("#example").simplePagination({
        previousButtonClass: "btn btn-gradient-primary btn-sm",
        nextButtonClass: "btn btn-gradient-primary btn-sm"
      });


    });
  </script>
  <script>
    $(function() {
      $("#example2").simplePagination({
        previousButtonClass: "btn btn-gradient-primary btn-sm",
        nextButtonClass: "btn btn-gradient-primary btn-sm"
      });


    });
  </script>
        </div>
        <!-- content-wrapper ends -->
       
