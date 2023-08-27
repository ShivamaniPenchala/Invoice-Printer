<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
    
       $to_address = $_POST['to_address'];
       $gstin = $_POST['gstin'];
       $order_no = $_POST['order_no'];
       $order_date = $_POST['order_date'];
       $invoice_no = $_POST['invoice_no'];
       $invoice_date = $_POST['invoice_date'];
       $dc_no = $_POST['dc_no'];
       $dc_date = $_POST['dc_date'];
       $particulars = $_POST['particulars'];
       $hsn_code = $_POST['hsn_code'];
       $quantity = $_POST['quantity'];
       $uom = $_POST['uom'];
       $unit_rate=$_POST['unit_rate'];
     
            $insertquery = "insert into invoice_details(to_address,gstin,order_no,order_date,invoice_no,invoice_date,dc_no,dc_date,particulars,hsn_code,quantity,uom,unit_rate) values('$to_address','$gstin','$order_no','$order_date','$invoice_no','$invoice_date','$dc_no','$dc_date','$particulars','$hsn_code','$quantity','$uom','$unit_rate')";
            $query = mysqli_query($conn,$insertquery);
            if($query) echo "uploaded to database";
            else "not uploaded";
    }
?>