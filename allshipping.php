<?php include('sidebar.php') ?>

<?php 

require('Backend/config/connection.php');
require('Backend/controllers/Order.php');

$order = new Order();



?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="contents_main">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#Tracking Number</th>
                <th scope="col">Shipment Owner</th>
                <th scope="col">Shipping </th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order->readOrders() as $ord):?>
                <tr>
                    <th scope="row"><?php echo $ord['shipmentID']?></th>
                    <td><?php echo $ord['shipperName']?></td>
                    <td><?php echo $ord['shipmenttype']?></td>
                    <td><?php echo $ord['recieverName']?></td>
                    <td><?php echo $ord['pickupdate']?></td>
                    <td><?php echo $ord['status'] ?? "not set"?></td>
                    <td class="flex_data"> 
                   
                        <a href="update_shipment.php?shipmentID=<?php echo $ord['shipmentID']?>" class="update_btn" type="submit" name="update">update</a>
                    <button class="btntrach"><i class="fa fa-trash"></i></button>
                  </td>
                    
                    
                </tr>
            <?php endforeach;?>

        </tbody>
    </table>

</div>
<?php include('admin.footer.php') ?>