<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <div class="page-header">
            <h3 class="page-title text-primary">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span>
                Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 stretch-card grid-margin rounded-0 shadow-md">
                <div class="card bg-gradient-primary card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url() ?>assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Expenses
                            <i class="mdi mdi-cash-multiple mdi-24px float-right"></i>
                        </h4>
                        <?php              
                 
               foreach($expense->result() as $row)  
                {  
           
                 ?>

                        <?php  if($row->E===NULL){ ?>
                        <h1 class="mb-5">No Expense Today!</h1>
                        <?php }    
                  else{ ?>
                        <h1 class="mb-5">&#8369; <?php echo  number_format($row->E,2) ?></h1>
                        <?php }?>

                        <?php  
                 } 
           ?>
                        <!--                  <h6 class="card-text">Increased by 60%</h6>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin rounded-0 shadow-md">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url() ?>assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3"> Income Amount
                            <i class="mdi mdi-keyboard-return mdi-24px float-right"></i>
                        </h4>
                        <?php              
                 
               foreach($income->result() as $row)  
                {  
           
                 ?>

                        <?php  if($row->I===NULL){ ?>
                        <h1 class="mb-5">No Income Today!</h1>
                        <?php }    
                  else{ ?>
                        <h1 class="mb-5">&#8369; <?php echo  number_format($row->I,2) ?></h1>
                        <?php }?>

                        <?php  
                 } 
           ?>
                        <!--                  <h6 class="card-text">Decreased by 10%</h6>-->
                    </div>
                </div>
            </div>

        </div>
        <!--
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                  </div>
                  <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Income Sources</h4>
                  <canvas id="traffic-chart"></canvas>
                  <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
              </div>
            </div>
          </div>
-->

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card shadow rounded-0 card-primary">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Recent Expenses</h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-gradient-info text-white">
                                        <th class="p- text-center">
                                            #
                                        </th>
                                        <th class="p- text-center">
                                            Name
                                        </th>
                                        <th class="p- text-center">
                                            Exp Category
                                        </th>

                                        <th class="p- text-center">
                                            Amount
                                        </th>
                                        <th class="p- text-center">
                                            Status
                                        </th>
                                        <th class="p- text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php              
                  if($fetch_debit->num_rows() > 0)  
         {  
                      $j=1;
              $i=1;
               foreach($fetch_debit->result() as $row)  
                {  
           ?>
                                    <tr>
                                        <td class="px-3 py-2 align-middle text-center"><?php echo $i++ ?></td>
                                        <td class="px-3 py-2 align-middle">
                                            <img src="<?php echo base_url() ?>assets/images/faces/avatar.jpg"
                                                class="mr-2" alt="image">
                                            <?php echo $row->name ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle"> <?php echo $row->category_id ?></td>

                                        <td class="px-3 py-2 align-middle text-right">
                                          &#8369; <?php echo number_format($row->amount, 2) ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <label class="badge badge-gradient-warning text-dark">Expenses</label>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <a class="btn btn-info bg-gradient-info btn-xs rounded-0 p-2"
                                                onclick="document.getElementById('id06<?php echo $j; ?>').style.display='block'"
                                                aria-label="Skip to main navigation">
                                                <i class="fa fa-pencil-square-o fa-xs" style="color:white;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger bg-gradient-danger btn-xs rounded-0 p-2"
                                                href="<?php echo base_url() ?>/Home/add_debit?del=<?php echo $row->deb_id ?>"
                                                aria-label="Delete"
                                                onclick="return confirm('Are you sure you want to delete this?');">
                                                <i class="fa fa-trash-o fa-xs" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                    </tr>
                                    <div id="id06<?php echo $j; ?>" class="w3-modal">
                                        <div class="w3-modal-content">
                                            <header class="w3-container w3-sand">
                                                <span
                                                    onclick="document.getElementById('id06<?php echo $j; ?>').style.display='none'"
                                                    class="w3-button w3-display-topright">&times;</span>
                                                <br>
                                                <h4>Edit Expense</h4>
                                            </header>
                                            <div class="w3-container">
                                                <form class="forms-sample" method="post"
                                                    action="<?php echo base_url() ?>/Home/add_debit?id=<?php echo $row->deb_id ?>&del_id=<?php echo $row->id ?> ">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect3">Name</label>
                                                        <input name="" readonly="" type="text"
                                                            class="form-control form-control-sm"
                                                            value="<?php echo $row->name  ?>" placeholder=""
                                                            aria-label="Name">
                                                        <input type="hidden" name="name"
                                                            value="<?php echo $row->cus_id ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date Of Payment</label>
                                                        <input name="date" type="date" required=""
                                                            class="form-control form-control-sm" placeholder="Username"
                                                            aria-label="Date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Description</label>
                                                        <input name="discription"
                                                            value="<?php echo $row->discription ?>" type="text"
                                                            class="form-control form-control-sm"
                                                            id="exampleInputPassword1" placeholder="Description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Amount Debited</label>
                                                        <input name="amount" onkeypress="return isNumber(event)"
                                                            value="<?php echo $row->amount ?>" type="text"
                                                            class="form-control form-control-sm"
                                                            placeholder="Debit Amount" aria-label="Debit Amount">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect3">Exp Category</label>
                                                        <select required="" name="item"
                                                            class="form-control form-control-sm"
                                                            id="exampleFormControlSelect3">
                                                            <option disabled selected>Select..</option>
                                                            <option value="Rent">Rent</option>
                                                            <option value="Household">Household</option>
                                                            <option value="Utilities">Utilities</option>
                                                            <option value="Equipments">Equipments</option>
                                                            <option value="Payroll">Payroll</option>
                                                            <option value="Lend">Lend</option>
                                                            <option value="Office-Supplies">Office Supplies</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Travel-Expenses">Travel Expenses</option>
                                                            <option value="Others">Others</option>

                                                        </select>
                                                    </div>
                                                    <button type="submit" name="update_debit"
                                                        class="btn btn-gradient-primary mr-2 btn-sm ">Update</button>
                                                    <button type="reset" class="btn btn-sm btn-light">Clear</button>
                                                </form>
                                            </div>
                                            <footer class="w3-container w3-sand">
                                                <br>
                                            </footer>
                                        </div>
                                    </div>
                                    <?php 
                                  $j++;
                      }  
                    }
                    
                    else  
                    {  
                    ?>
                                    <tr>

                                        <td class="px-3 py-2 align-middle" colspan="12">
                                            <div class="alert alert-danger" role="alert">
                                                No Expenses Found Yet!</div>
                                        </td>
                                    </tr>
                                    <?php  
                    }  
                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Recent Amount Received </h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-gradient-info text-white">
                                        <th class="p- text-center">
                                            #
                                        </th>
                                        <th class="p- text-center">
                                            Name
                                        </th>
                                        <th class="p- text-center">
                                            Description
                                        </th>

                                        <th class="p- text-center">
                                            Amount
                                        </th>
                                        <th class="p- text-center">
                                            Status
                                        </th>
                                        <th class="p- text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php    
                              $i=1;
                              $j=1;
                          if($fetch_credit->num_rows() > 0)  
                {  
                    
                      foreach($fetch_credit->result() as $row)  
                        {  
                  ?>
                                    <tr>
                                        <td class="px-3 py-2 align-middle text-center"><?php echo $i++ ?></td>
                                        <td class="px-3 py-2 align-middle">
                                            <img src="<?php echo base_url() ?>assets/images/faces/avatar.jpg"
                                                class="mr-2" alt="image">
                                            <?php echo $row->name ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle"><?php echo $row->discription ?></td>

                                        <td class="px-3 py-2 align-middle text-right">
                                          &#8369; <?php echo number_format($row->amount,2 ) ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">
                                            <label class="badge badge-gradient-primary">Income</label>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <a class="btn btn-info bg-gradient-info btn-xs p-2 rounded-0"
                                                onclick="document.getElementById('id07<?php echo $j; ?>').style.display='block'"
                                                aria-label="Skip to main navigation">
                                                <i class="fa fa-pencil-square-o fa-xs" style="color:white;"
                                                    aria-hidden="true"></i>
                                            </a>

                                            <a class="btn btn-danger bg-gradient-danger btn-xs p-2 rounded-0"
                                                href="<?php echo base_url() ?>Home/add_credit?del=<?php echo $row->cre_id ?>"
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                aria-label="Delete">
                                                <i class="fa fa-trash-o fa-xs" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                        <div id="id07<?php echo $j; ?>" class="w3-modal">
                                            <div class="w3-modal-content">
                                                <header class="w3-container w3-sand">
                                                    <span
                                                        onclick="document.getElementById('id07<?php echo $j; ?>').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>
                                                    <br>
                                                    <h4>Edit Income</h4>
                                                </header>
                                                <div class="w3-container">
                                                    <form class="forms-sample" method="post"
                                                        action="<?php echo base_url() ?>/Home/add_credit?id=<?php echo $row->cre_id ?>&del_id=<?php echo $row->id ?> ">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect3">Name</label>
                                                            <input name="" readonly="" type="text"
                                                                class="form-control form-control-sm"
                                                                value="<?php echo $row->name  ?>" placeholder=""
                                                                aria-label="Name">
                                                            <input type="hidden" name="name"
                                                                value="<?php echo $row->cus_id ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date Of Payment</label>
                                                            <input name="date" readonly="" type="text"
                                                                value="<?php echo $row->date ?>" required=""
                                                                class="form-control form-control-sm"
                                                                placeholder="Username" aria-label="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Description</label>
                                                            <input name="discription"
                                                                value="<?php echo $row->discription ?>" type="text"
                                                                class="form-control form-control-sm"
                                                                id="exampleInputPassword1" placeholder="Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Debited</label>
                                                            <input name="amount" onkeypress="return isNumber(event)"
                                                                value="<?php echo $row->amount ?>" type="text"
                                                                class="form-control form-control-sm"
                                                                placeholder="Debit Amount" aria-label="Debit Amount">
                                                        </div>

                                                        <button type="submit" name="update_credit"
                                                            class="btn btn-gradient-primary mr-2 btn-sm ">Update</button>
                                                        <button type="reset" class="btn btn-sm btn-light">Clear</button>
                                                    </form>
                                                </div>
                                                <footer class="w3-container w3-sand">
                                                    <br>
                                                </footer>
                                            </div>
                                        </div>
                                    </tr>
                                    <?php   
                         $j++;
                        }  
                      }  
                      else  
                      {  
                      ?>
                                    <tr>

                                        <td class="px-3 py-2 align-middle" colspan="12">
                                            <div class="alert alert-danger" role="alert">
                                                No Amounts Yet!</div>
                                        </td>
                                    </tr>


                                    <?php  
                    }  
                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todays Expense</h4>
                  <div class="table-responsive">
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Item
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php              
                  if($fetch_credit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_credit->result() as $row)  
                {  
           ?> 
                        <tr>
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->cus_id ?>
                          </td>
                          <td>
                            <?php echo $row->category_id ?>
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                          <?php echo $row->amount ?>
                          </td>
                          <td>
                             
                          </td>
                        </tr
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
                        </div>
                      </div>
                    </div>-->

        <style>
        .w3-modal {
            z-index: 1101;
        }
        </style>




        <!-- content-wrapper ends -->


        <!--          
          <div id="id07" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-purple"> 
        <span onclick="document.getElementById('id07').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-purple">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>-->