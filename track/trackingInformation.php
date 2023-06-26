<?php
include('../Backend/config/connection.php');
include('../Backend/controllers/Order.php');

$order = new Order();


$trackingID = $_GET['trackingID'] ?? "not set";

$reader = $order->readOrders($trackingID);


clearstatcache();


$trime = time();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking page</title>
    <link rel="stylesheet" href="style.css?v1=<?php echo time(); ?>">
    <link rel="stylesheet" href="all.css">

</head>

<body>

    <?php foreach ($reader as $rd) : ?>
        <?php if ($rd['shipmentID'] == $trackingID) : ?>
            <div class="receipts_wrapper_container">
                <div class="product_id">
                    <span class="av_prod">product id:</span>
                    <span> <?php echo $rd['shipmentID'] ?></span>
                </div>
                <div class="wrapper_ordered_items">
                    <div class="acccepted"> accepted</div>
                    <div class="outline_lined_container">
                        <div class="split_contents">
                            <div class="split_contents_main">
                                <div>not set</div>
                                <div>time not set</div>
                            </div>
                            <div class="circle_main one_location">
                                <i class=" fa fa-receipt" style="font-size: 20px;"></i>
                            </div>
                            <div class="split_contents_more">
                                <div>info Recieved</div>
                                <div class=""> <?php echo $rd['recieveraddress'] ?> </div>
                                <a href="https://www.google.com/maps/place/<?php echo $rd['recieveraddress'] ?>">view on map</a>
                            </div>
                        </div>
                        <div class="split_contents">
                            <div class="split_contents_main">
                                <div>not set</div>
                                <div>time not set</div>
                            </div>
                            <div class="circle_main">
                                <i class=" fa fa-box" style="font-size: 20px;"></i>

                            </div>
                            <div class="split_contents_more">
                                <div>info Recieved</div>
                                <div class=""><?php echo $rd['recieveraddress'] ?></div>
                                <a href="https://www.google.com/maps/place/<?php echo $rd['recieveraddress'] ?>">view on map</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="wrapper_ordered_items">
                    <div class="infos">
                        <div class="info_out">Shipper Information</div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Shipper name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $rd['shipperName'] ?></td>
                                    <td><?php echo $rd['shipperphone'] ?></td>
                                    <td><?php echo $rd['senderaddress'] ?></td>
                                    <td class="max-width-email"><?php echo $rd['shipperemail'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="infos">
                        <div class="info_out">Receiver Information</div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Receiver
                                        name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $rd['recieverName'] ?? "not found" ?></td>
                                    <td><?php echo $rd['phone'] ?></td>
                                    <td><?php echo $rd['recieveraddress'] ?></td>
                                    <td><?php echo $rd['Emailaddress'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>




                </div>
                <div class="" id="wrapper_ordered_items">
                    <div class="infos">
                        <div class="info_out">Shipment Information <i class="fas fa-sim-card"></i> </div>
                        <table>

                            <tbody class="rows_new">
                                <tr>
                                    <td style="padding: 7px">weight</td>
                                    <td style="padding: 7px"><?php echo $rd['weight'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px">courier</td>
                                    <td style="padding: 7px"><?php echo $rd['courier'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px">mode</td>
                                    <td style="padding: 7px"><?php echo $rd['mode'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px">product</td>
                                    <td style="padding: 7px"><?php echo $rd['product'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px">quantity</td>
                                    <td style="padding: 7px"><?php echo $rd['quantity'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px">Payment Mode</td>
                                    <td style="padding: 7px"><?php echo $rd['paymentmode'] ?></td>
                                </tr>
                                <!-- ======================== -->
                                <tr>
                                    <td style="padding: 7px"> Freight</td>
                                    <td style="padding: 7px"><?php echo $rd['shipmenttype'] ?></td>
                                </tr>
                                <!-- ======================== -->

                                <tr>
                                    <td style="padding: 7px"> Carrier Reference Number</td>
                                    <td style="padding: 7px"><?php echo $rd['CarrierReferenceNum'] ?></td>
                                </tr>
                                <!-- ======================== -->

                                <tr>
                                    <td style="padding: 7px"> origin</td>
                                    <td style="padding: 7px"><?php echo $rd['origin'] ?? "not set" ?></td>
                                </tr>
                                <!-- ======================== -->

                                <tr>
                                    <td style="padding: 7px"> Destination</td>
                                    <td style="padding: 7px"><?php echo $rd['destination'] ?? "not set" ?></td>
                                </tr>

                                <tr>
                                    <td style="padding: 7px"> pickupdate</td>
                                    <td style="padding: 7px"><?php echo $rd['pickupdate'] ?? "not set" ?></td>
                                </tr>

                                <tr>
                                    <td style="padding: 7px"> departure time</td>
                                    <td style="padding: 7px"><?php echo $rd['departuretime'] ?? "not set" ?></td>
                                </tr>

                                <tr>
                                    <td style="padding: 7px"> pickup time</td>
                                    <td style="padding: 7px"><?php echo $rd['pickuptime'] ?? "not set" ?></td>
                                </tr>

                                <tr>
                                    <td style="padding: 7px"> status</td>
                                    <td style="padding: 7px"><?php echo $rd['status'] ?? "not set" ?></td>
                                </tr>


                            </tbody>
                        </table>

                        <div class="trackingForm">
                            <a href="../track.php">back to tracking form</a>
                        </div>
                    </div>

                </div>
            </div>


        <?php endif; ?>

    <?php endforeach; ?>


    <script src="all.js"></script>

</body>

</html>