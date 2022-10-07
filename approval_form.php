<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'approvelog_sqlsrv.php';
//include 'email.php';

$user_select=isset($_GET["id"]) ? $_GET['id']:'';

$fetch="SELECT login.*,approval_level.* from login JOIN approval_level ON(login.level_id=approval_level.id) 
    where login.id=$user_select;";

$query1 = sqlsrv_query($conn, $fetch);    
$query1 = sqlsrv_fetch_array($query1 , SQLSRV_FETCH_ASSOC);


$fetch_groups="SELECT * from user_groups";
$query2 = sqlsrv_query($conn, $fetch_groups);
?>


<!-- Content -->
        <div class="page-wrapper bg-wrapper">
           <div class="content">
                <div class="buy-form">
                 <h4 class="page-title">Approval Form</h4>

                
            <p>

                <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">

                                <form  method="POST" action='<?php echo "approval_form.php?id=$user_select" ?>' class="form-signin">
                        
                         <div id="username" class="form-group"> 
                            <span class="<?php echo $class; ?>"><?php echo $error ;?></span>
                         </div>
                        <div id="username" class="form-group">
                            <label>First Name</label>
                            <input type="text" autofocus="" value="<?php echo $query1['fname']; ?>" class="form-control" name="fname" id="username2" readonly required="required">
                        </div>

                         <div id="username" class="form-group">
                            <label>Last Name</label>
                            <input type="text" autofocus=""  value="<?php echo $query1['lname']; ?>" class="form-control" name="lname" id="username2" readonly  required="required">
                        </div>

                         <div id="password" class="form-group">
                            <label>Current Level</label>
                            <input type="text" class="form-control" value="<?php echo $query1['stage_name']; ?>" name="level" id="password2" readonly  required="required">
                             <input type="hidden" class="form-control" value="<?php echo $query1['level_id']; ?>" name="clevel">
                        </div>

                        <div id="password" class="form-group">
                            <label>Select Group</label> <br/>

                             <select class="select" name="levelg" required="required">
                             <option  value="">Select user group </option>  

                           <?php
                                           while($r=sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC))
                                                {

                                                    
                                                ?>


                            <option value="<?php echo $r['id']; ?>"  <?php if($r['id']==$query1['group_id']) echo "selected"; ?>>
                                <?php echo $r['group_name']; ?></option>
                                                    
                                                   <?php
                                                    }

                                                    ?>
        
                                </select>
                        </div>

                         <div id="password" class="form-group">
                            <label>Select Approval</label> <br/>
                             <select class="select" name="approve" required="required">
                                    <option  value="">Select Approval</option>
                                    <option  value="1">Yes</option>
                                    <option  value="0">No</option>
                                    
                                </select>
                        </div>


                         <div id="pw" class="form-group">
                            <label>Grant</label> <br/>
                             <select class="select" name="approve1" required="required1">
                                    <option  value="">Grant Access</option>
                                    <option  value="1">Yes</option>
                                    <option  value="0">No</option>
                                    
                                </select>
                        </div>



                        <div id= "login_btn" class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="approve_btn" Value="Login">Submit</button>
                        </div>

                     
                       
                    </form>
                                
                            </div>
                        </div>
                    </div>
                    
        </p>
    <div class="sidebar-overlay" data-reff=""></div>
 
      
