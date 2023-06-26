<?php


require('Backend/config/connection.php');
require('Backend/controllers/Order.php');

$order = new Order();


$id = $_GET['shipmentID'];
$result = $order->getSingle($id);

if (isset($_POST['submit'])) {
    $trackingid = $_POST['trackingid'];
    //sender info
    $shippername = $_POST['shippername'];
    $shipperphone = $_POST['shipperphone'];
    $shipperaddress = $_POST['shipperaddress'];
    $shipperemail = $_POST['shipperemail'];


    //reciver info
    $recivername = $_POST['recivername'];
    $reciverphone = $_POST['reciverphone'];
    $reciveraddress = $_POST['reciveraddress'];
    $reciveremail = $_POST['reciveremail'];



    //shipement types
    $shipemnttype = $_POST['typeof'];
    $weight = $_POST['weight'];
    $packages = $_POST['packages'];
    $product = $_POST['product'];
    $paymentmode = $_POST['paymentmode'];
    $courier = $_POST['courier'];
    $carrier = $_POST['carrier'];
    $destination = $_POST['destination'];
    $origin = $_POST['origin'];
    $quantity = $_POST['quantity'];
    $pickup = $_POST['pickup'];
    $mode = $_POST['mode'];
    $status = $_POST['status'];
    // $departure = $_POST['departure'];
    $carrierref = $_POST['carriernumber'];
    $departuretime = $_POST['departuretime'];
    $pickuptime = $_POST['pickuptime'];


    $res =   $order->update([$shippername, $recivername, $reciveraddress, $departuretime, $reciveremail, $shipperaddress, $shipemnttype, $weight, $courier, $packages, $mode, $product, $quantity, $destination, $paymentmode, $shipperphone, $shipperemail, $carrier, $origin, $pickup, $pickuptime,  $carrierref, $reciverphone, $status, $trackingid]);


    if($res['status'] == 200){
        echo "<script> alert('order successfully updated');
        location.replace('/allshipping.php');
        </script>
        ";

    }
   
    
}


?>




<?php include('sidebar.php') ?>
<?php foreach($result as $re):?>
<?php if($re['shipmentID'] == $id):?>

<div class="contents_main">
    <form action="<?php 'PHP_SELF' ?>" method="POST">

        <div class="shipment_registration">
            <input type="text" name="trackingid" 
            value="<?php echo $re['shipmentID']?>"
            required>
        </div>
      
        <div class="btn_registration">
            <button type="submit" name="submit">Update</button>
        </div>
        <div class="shipment_details">
            <div class="col_one">
                <div class="shipment_top">
                    shipment Details
                </div>
                <div class="shipment_splite">
                    <div class="shipment_split_one">
                        <h3>SHIPPER DETAILS</h3>

                        <div class="col_split_two">
                            <div class="ship_name">Shipper Name</div>
                            <div class="content_form">
                                <input type="text" value="<?php echo $re['shipperName']?>" name="shippername">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Phone Number</div>
                            <div class="content_form">
                                <input type="number" name="shipperphone"
                                value="<?php echo $re['shipperphone']?>"
                                >
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Address</div>
                            <div class="content_form">
                                <input type="text" name="shipperaddress"
                                value="<?php echo $re['senderaddress']?>"
                                
                                >
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">email</div>
                            <div class="content_form">
                                <input type="text" name="shipperemail"
                                value="<?php echo $re['shipperemail']?>"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="shipment_split_one">
                        <h3>RECEIVER DETAILS</h3>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Receiver Name</div>
                            <div class="content_form">
                                <input type="text" name="recivername"
                                value="<?php echo $re['recieverName']?>"
                                >
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Phone Number</div>
                            <div class="content_form">
                                <input type="text" name="reciverphone"
                                value="<?php echo $re['phone'] ?? ""?>"
                                >
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">
                                address</div>
                            <div class="content_form">
                                <input type="text" name="reciveraddress"
                                value="<?php echo $re['recieveraddress'] ?>"
                                >
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                email</div>
                            <div class="content_form">
                                <input type="email" name="reciveremail"
                                value="<?php echo $re['Emailaddress'] ?>"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_two">
                <div class="shipper_details_more_forms">
                    <h3>SHIPMENT DETAILS</h3>
                </div>
                <div class="col_options_main">
                    <div class="col_main_types">
                    <div class="col_type">
                        <div>type of shipment</div>
                        <select name="typeof">
                            <option value="<?php echo $re['shipmenttype']?>"><?php echo $re['shipmenttype']?></option>
                            <option value="air freight">air freight</option>
                            <option value="international shipping">international shipping</option>
                            <option value="truck load">truck load</option>
                            <option value="Van Move">Van Move</option>
                        </select>
                    </div>
                    <div class="col_type margin-left">
                        <div>shipment status</div>
                        <select name="status" >
                            <option value="<?php echo $re['status']?>"><?php echo $re['status']?></option>
                            <option value="on hold">on hold</option>
                            <option value="pending">pending</option>
                            <option value="moving">moving</option>
                            <option value="Van Move">Van Move</option>
                        </select>
                    </div>
                    </div>

                    <div class="shipment_splite">
                        <div class="shipment_split_one">

                            <div class="col_split_two">
                                <div class="ship_name">Weight</div>
                                <div class="content_form">
                                    <input type="text" name="weight"
                                    value="<?php echo $re['weight']?>"
                                    >
                                </div>
                            </div>
                            <div class="col_split_two">
                                <div class="ship_name">Packages</div>
                                <div class="content_form">
                                    <input type="text" name="packages"
                                    value="<?php echo $re['pakages']?>"

                                    >
                                </div>
                            </div>
                            <div class="col_split_two">
                                <div class="ship_name">Product</div>
                                <div class="content_form">
                                    <input type="text" name="product"
                                    value="<?php echo $re['product']?>"

                                    >
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">payment Mode</div>
                                <div class="content_form">
                                    <input type="text" name="paymentmode" value="<?php echo $re['paymentmode']?>"/>
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">Carrier</div>
                                <div class="content_form">
                                       <input type="text" name="carrier" value="<?php echo $re['carrier']?>">
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">destination</div>
                                <div class="content_form">
                                    <input type="text" name="destination" value="<?php echo $re['destination']?>">
                                </div>
                            </div>
                            <div class="col_split_two">
                                <div class="ship_name">departure time</div>
                                <div class="content_form">
                                    <input type="text" name="departuretime" value="<?php echo $re['departuretime']?>">
                                </div>
                            </div>
                        </div>
                        <div class="shipment_split_one">
                            <div class="col_split_two">
                                <div class="ship_name">
                                    courier </div>
                                <div class="content_form">
                                    <input type="text" name="courier" value="<?php echo $re['courier']?>">
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">
                                    mode </div>
                                <div class="content_form">
                                            <input type="text" name="mode" value="<?php echo $re['mode']?>"/>
                                </div>
                            </div>
                            <div class="col_split_two">
                                <div class="ship_name">
                                    quantity</div>
                                <div class="content_form">
                                    <input type="text" name="quantity" value="<?php echo $re['quantity']?>">
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">
                                    Carrier Reference No. </div>
                                <div class="content_form">
                                    <input type="text" name="carriernumber" value="<?php echo $re['CarrierReferenceNum']?>">
                                </div>
                            </div>



                            <div class="col_split_two">
                                <div class="ship_name">
                                    origin </div>
                                <div class="content_form">
                                    <input type="text" name="origin" value="<?php echo $re['origin'] ?>">
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">
                                    Pickup Date </div>
                                <div class="content_form">
                                    <input type="date" name="pickup" value="<?php echo $re['pickupdate'] ?>">
                                </div>
                            </div>

                            <div class="col_split_two">
                                <div class="ship_name">
                                    Pickup time </div>
                                <div class="content_form">
                                    <input type="text" name="pickuptime" value="<?php echo $re['pickuptime'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>

<?php endif;?>
<?php endforeach;?>

<?php include('admin.footer.php') ?>