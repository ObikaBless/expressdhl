<?php

class Order extends ConnectionString
{
    function register($values)
    {
        $sql  = "INSERT INTO orders (shipmentID, shipperName, recieverName, recieveraddress, departuretime, Emailaddress, senderaddress, shipmenttype, weight, courier, pakages, mode, product, quantity, destination, paymentmode, shipperphone, shipperemail, carrier, origin, pickupdate, status, phone, pickuptime, CarrierReferenceNum) VALUES(?, ?, ?, ?, ?,?,?, ?, ?, ?, ?,?,?, ?, ?, ?, ?,?,?,?,?, ?, ?, ?, ?)";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute([...$values]);
        return  array(['message' => "new order made "], ['status' => 200]);
    }

    function track($track){
        $sql  = "SELECT * FROM orders WHERE shipmentID=?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute([trim($track)]);
        $rows =   $stmt->fetchAll();
        if(count($rows)> 0 ){
            return  ['message' => "read all", 'status' => 200, 'data'=> $rows];   

        }else{
            return  ['message' => "read all", 'status' => 404, 'data'=> $rows];     
        }
    }

    function readOrders()
    {
        $sql  = "SELECT * FROM orders";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute();
        $rows =   $stmt->fetchAll();
        return $rows;
    }

    function update($values)
    {
        $sql  = "UPDATE  orders SET  shipperName=?, recieverName=?, recieveraddress=?, departuretime=?, Emailaddress=?, senderaddress=?, shipmenttype=?, weight=?, courier=?, pakages=?, mode=?, product=?, quantity=?, destination=?, paymentmode=?, shipperphone=?, shipperemail=?, carrier=?, origin=?, pickupdate=?, pickuptime=?, CarrierReferenceNum=?, phone=?, status=?  WHERE shipmentID=? ";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute([...$values]);
        return  ['message' => "new order made ", 'status' => 200];
    }

    function getSingle($shipmentid)
    {
        $sql  = "SELECT * FROM orders WHERE shipmentID=?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute([$shipmentid]);
        $rows =   $stmt->fetchAll();

        if(count($rows) > 0){
            return $rows;
        }else{
            return;
        }
    }

    

}
