<?php


require('Backend/config/connection.php');
require('Backend/controllers/Order.php');

$order = new Order();


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
    $phone = $_POST['reciverphone'];
    $pickuptime = $_POST['pickuptime'];
    $departure = $_POST['departure'];
    $carrierref = $_POST['carriernumber'];


    $res =   $order->register([$trackingid, $shippername, $recivername, $reciveraddress, $departure, $reciveremail, $shipperaddress, $shipemnttype, $weight, $courier, $packages, $mode, $product, $quantity, $destination, $paymentmode, $shipperphone, $shipperemail, $carrier, $origin, $pickup, $status, $phone,$pickuptime, $carrierref]);

    echo "<script> 
    alert('new shipping created')
    location.replace('/allshipping.php')
    
    </script>";
}


?>

































<?php include('sidebar.php') ?>
<div class="contents_main">
    <form action="<?php 'PHP_SELF' ?>" method="POST">

        <div class="shipment_registration">
            <input type="text" name="trackingid" required>
        </div>
        <div class="btn_registration">
            <button type="submit" name="submit">Add shipement</button>
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
                                <input type="text" name="shippername">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Phone Number</div>
                            <div class="content_form">
                                <input type="number" name="shipperphone">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Address</div>
                            <div class="content_form">
                                <input type="text" name="shipperaddress">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">email</div>
                            <div class="content_form">
                                <input type="text" name="shipperemail">
                            </div>
                        </div>
                    </div>
                    <div class="shipment_split_one">
                        <h3>RECEIVER DETAILS</h3>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Receiver Name</div>
                            <div class="content_form">
                                <input type="text" name="recivername">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Phone Number</div>
                            <div class="content_form">
                                <input type="text" name="reciverphone">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">
                                address</div>
                            <div class="content_form">
                                <input type="text" name="reciveraddress">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                email</div>
                            <div class="content_form">
                                <input type="email" name="reciveremail">
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
                                <option class="">--select --type </option>
                                <option class="air frieght">air frieght</option>
                                <option class="international shipping">international shipping</option>
                                <option class="truck load">truck load</option>
                                <option class="Van Move">Van Move</option>
                            </select>
                        </div>

                        <div class="col_type margin-left">
                            <div>shipment status</div>
                            <select name="status">
                                <option value="">select status</option>
                                <option value="on hold">on hold</option>
                                <option value="pending">pending</option>
                                <option value="in propgress">in propgress</option>
                                <option value="moving">moving</option>
                                <option value="Van Move">Van Move</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="shipment_splite">
                    <div class="shipment_split_one">

                        <div class="col_split_two">
                            <div class="ship_name">Weight</div>
                            <div class="content_form">
                                <input type="text" name="weight">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Packages</div>
                            <div class="content_form">
                                <input type="text" name="packages">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">Product</div>
                            <div class="content_form">
                                <input type="text" name="product">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">payment Mode</div>
                            <div class="content_form">
                              <input type="text" name="paymentmode">
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
                                <input type="text"  name="destination">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">departure time</div>
                            <div class="content_form">
                                <input type="text"  name="departure">
                            </div>
                        </div>
                    </div>
                    <div class="shipment_split_one">
                        <div class="col_split_two">
                            <div class="ship_name">
                                courier </div>
                            <div class="content_form">
                                <input type="text" name="courier">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                mode </div>
                            <div class="content_form">
                                <input type="text" name="mode">
                            </div>
                        </div>
                        <div class="col_split_two">
                            <div class="ship_name">
                                quantity</div>
                            <div class="content_form">
                                <input type="text" name="quantity">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Carrier Reference No. </div>
                            <div class="content_form">
                                <input type="text" name="carriernumber">
                            </div>
                        </div>



                        <div class="col_split_two">
                            <div class="ship_name">
                                origin </div>
                            <div class="content_form">
                                <input type="text" name="origin">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Pickup Date </div>
                            <div class="content_form">
                                <input type="date" name="pickup">
                            </div>
                        </div>

                        <div class="col_split_two">
                            <div class="ship_name">
                                Pickup time </div>
                            <div class="content_form">
                                <input type="text" name="pickuptime">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</form>

</div>
<?php include('admin.footer.php') ?>