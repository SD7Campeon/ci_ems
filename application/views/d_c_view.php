<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #e2dbf1;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.tab {
    overflow: hidden;
    border: 1px solid #fff;
    background-color: #ffffff;
}
    </style>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">


            <!-- endinject -->





            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card rounded-0">
                      <div class="card-header rounded-0 bg-gradient-primary">
                        <h5 class="card-title text-white mb-0">Customer Profile</h5>
                      </div>
                        <div class="card-body  py-2">
                            <form class="form-inline" method="post" action="<?php echo base_url() ?>Home/report">
                                  <?php     
                                      $name="";
                                      foreach($fetch_debit_p->result() as $row)  
                                        {  
                                                  
                                                  $name=$row->name;
                                                  
                                        } 
                                    ?>
                                      <div class="ibadge bage-info bg-gradient-info text-white px-5 py-2 text-capitalize rounded h5"> 
                                        <?php if($name===""){
                                              echo  $name= "Sorry No data";
                                              }
                                              else
                                              {
                                                  echo $name;
                                              }
                                        ?>
                                     </div>
                                <label class="sr-only" for="inlineFormInputGroupUsername2">To</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">

                                    </div>

                                </div>



                            </form>


                            <br>
                            <div class="table-responsive">
                                <div class="tab">
                                    <button class="tablinkss " onclick="openCityy(event, 'debit')"
                                        id="defaultOpen">Expenses</button>
                                    <button class="tablinkss " onclick="openCityy(event, 'credit')">Amount
                                        Receved</button>
                                    <!--  <button class="tablinkss" onclick="openCityy(event, 'xx')">Tokyo</button>-->
                                </div>

                                <div id="debit" class="tabcontentt">

                                    <table id="example" class="table  table-striped table-bordered">
                                        <thead>
                                            <tr class="bg-gradient-info text-white">
                                                <th class="p-2 text-center">
                                                    #
                                                </th>

                                                <th class="p-2 text-center">
                                                    Exp Category
                                                </th>
                                                <th class="p-2 text-center">
                                                    Status
                                                </th>
                                                <th class="p-2 text-center">
                                                    Amount
                                                </th>
                                                <th class="p-2 text-center">
                                                    Date/Time
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php              
                  if($fetch_debit_p->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_debit_p->result() as $row)  
                {  
           ?>
                                            <tr>
                                                <td class="px-2 py-3 align-middle text-center"><?php echo $i++ ?></td>

                                                <td class="px-2 py-3 align-middle"> <?php echo $row->category_id ?></td>
                                                <td class="px-2 py-3 align-middle">

                                                    <label class="badge badge-gradient-danger">Expenses</label>
                                                </td>
                                                <td class="px-2 py-3 align-middle text-right">&#8369;
                                                    <?php echo number_format($row->amount, 2) ?>
                                                </td>
                                                <td class="px-2 py-3 align-middle">
                                                    <?php       $converted = date('d M Y h.i.s A', strtotime($row->date));
                                                    echo $reversed = date('d-m-Y', strtotime($converted)); ?>
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
                                </div>

                                <div id="credit" class="tabcontentt">

                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="bg-gradient-info text-white">
                                                <th class="p-2 text-center">
                                                    #
                                                </th>


                                                <th class="p-2 text-center">
                                                    Status
                                                </th>
                                                <th class="p-2 text-center">
                                                    Amount
                                                </th>
                                                <th class="p-2 text-center">
                                                    Date/Time
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php              
                                                      if($fetch_credit_p->num_rows() > 0)  
                                            {  
                                                $i=1;
                                                  foreach($fetch_credit_p->result() as $row)  
                                                    {  
                                            ?>
                                            <tr>
                                                <td class="px-3 py-2 align-middle text-center"><?php echo $i++ ?></td>


                                                <td class="px-3 py-2 align-middle">
                                                    <label class="badge badge-gradient-success">Recieved Amount</label>
                                                </td>
                                                <td class="px-3 py-2 align-middle text-right">&#8369;
                                                    <?php echo number_format($row->amount, 2) ?>
                                                </td>
                                                <td class="px-3 py-2 align-middle">
                                                    <?php
                                  $converted = date('d M Y h.i.s A', strtotime($row->date));
                                       echo $reversed = date('d-m-Y', strtotime($converted));

                             ?>
                                                </td>
                                            </tr <?php       
             }  
          }  
          else  
           {  
           ?> <td>No data Found</td>

                                            <?php  
          }  
           ?>

                                        </tbody>
                                    </table>

                                </div>
                                <br>
                                <hr>
                                <?php              
                  if($fetch_sum_p->num_rows() > 0)  
                {  
              $i=1;
              $sum_texte="(0)";
              $sum_text = "(0)";
               foreach($fetch_sum_p->result() as $row)  
                {  
                   $sum= $row->dtotal- $row->ctotal;
                   $credit=$row->ctotal;
                   $debit= $row->dtotal;
                   if($credit>$debit){
                       $sum_texte = number_format($row->ctotal - $row->dtotal, 2) ;
//                       $sum_texte .= " Excess Amount ";
                   }
                       elseif($credit<$debit)
                       {
                        $sum_text = number_format($row->dtotal- $row->ctotal, 2);
                       }
 elseif($sum===0) {
     $sum_text="Hurray!!......No Dues!";
 }
                   
                   
           ?>
           <div class="row mx-0">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h5 class="text-primary">Total Expenses: &#8369; <?php echo number_format($row->dtotal, 2) ?></h5>
              <h5 class="text-primary">Total Amount Recieved: &#8369; <?php echo number_format($row->ctotal, 2) ?></h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h5 class="text-danger">Due's Amount:  &#8369; <?php echo $sum_text?></h5>
              <h5 class="text-info">Excess Amount:  &#8369; <?php echo $sum_texte?></h5>
            </div>
           </div>
              
              
                                <?php       
             }  
          }  
          else  
           {  
           ?>

                                <h5>No data Found</h5>

                                <?php  
          }  
           ?>
                                <!--<div id="xx" class="tabcontentt">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>-->

                                <script>
                                function openCityy(evt, cityName) {
                                    var i, tabcontentt, tablinkss;
                                    tabcontentt = document.getElementsByClassName("tabcontentt");
                                    for (i = 0; i < tabcontentt.length; i++) {
                                        tabcontentt[i].style.display = "none";
                                    }
                                    tablinkss = document.getElementsByClassName("tablinkss");
                                    for (i = 0; i < tablinkss.length; i++) {
                                        tablinkss[i].className = tablinkss[i].className.replace(" bg-gradient-light", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " bg-gradient-light";
                                }

                                // Get the element with id="defaultOpen" and click on it
                                document.getElementById("defaultOpen").click();
                                </script>

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






        </div>
        <!-- content-wrapper ends -->