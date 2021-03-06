<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$customer_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM customers WHERE customer_id='$_GET[id]'"));
$country=mysqli_query($conn,"SELECT * FROM countries");
$states=mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='101'");
$cities=mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$customer_list[customer_state]'");  

}
?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">EDIT CUSTOMER</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="update.php" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="hidden" name="customer_id" required value="<?=$customer_list['customer_id'];?>">
                                                    <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" required value="<?=$customer_list['customer_name'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">E-mail</label>
                                                    <input type="text" id="email" class="form-control" placeholder="Email" name="email" required value="<?=$customer_list['customer_email'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required value="<?=$customer_list['customer_mobile'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alternate Mobile</label>
                                                    <input type="text" id="alternate mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Alternate Mobile" name="altr_mobile" required value="<?=$customer_list['customer_altr_mobile'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" name="address" required value="<?=$customer_list['customer_address'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select class="form-control custom-select" name="city" id="city" required>
                                                        <option disabled selected value>--Select your City--</option>
                                                      <?php while($city_row=mysqli_fetch_array($cities)){
        if($city_row['id']==$customer_list['customer_city']){
        $sel=" selected";
    }else{
        $sel=" ";
    }
    echo '<option '.$sel.' value='.$city_row['id'].'>'.$city_row['name'].'</option>'; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                     
                                                    <select class="form-control custom-select" name="state" id="stateid" required>
                                                        <option disabled selected value>--Select your State--</option>
                                                      <?php while($state_row=mysqli_fetch_array($states)){
    if($state_row['id']==$customer_list['customer_state']){
        $sel=" selected";
    }else{
        $sel=" ";
    }
    echo '<option '.$sel.' value='.$state_row['id'].'>'.$state_row['name'].'</option>'; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control onlynumber" maxlength="6" minlength="6" name="postcode" required value="<?=$customer_list['customer_pincode'];?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    
                                                    <select class="form-control custom-select" name="country" required>
                                                        <option value="101" selected>India</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_customer"> <i class="fa fa-check"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
 <?php include("footer.php");?>
<script>
    $(document).ready(function(){
    $("#stateid").change(function(){
       var state=$(this).val();
        $.ajax({
        type:'POST',
        data: { load_state: state},
        url:'ajax.php',
        success:function(data){
            $("#city").html(data);
        }
    });
    });
        });
</script>
 