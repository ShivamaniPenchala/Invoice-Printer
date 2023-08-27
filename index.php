<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE PRINTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            margin: 10px;
        }
        .table{
            border:solid 2px black;
        }
        .alignleft {
            float: left;
            width: 33.33333%;
            text-align: left;
           
        }
        .aligncenter {
             float: left;
            width: 33.33333%;
            text-align: center;
           
        }
        .alignright {
            float: left;
            width: 33.33333%;
            text-align: right;  
            
        }     
    </style>
</head>

<body>
    <div style="border:solid 2px black; padding-bottom:20px;">
            <div>
                <div id="textbox">
                    <p class="alignleft">GSTIN:<b>36AAKFD7413J1ZA</b></p>
                    <p class="aligncenter">TAX INVOICE</p>
                    <p class="alignright"><b>Cell</b> :9959191266</p><br>
                </div>    

                <div style="text-align:center;">   
                    <h1 style="margin-bottom:0;">DURGA ENTERPRISES</h1>
                    <p style="font-size:medium;margin:0">LIG B 357, 1st Floor,Dr.A.S.Rao Nagar,Ecil Post,Hyderabad - 500 062</p>
                </div>

                <span>to,<br>M/s.</span>
                <span></span><br>
                <span>GSTIN</span>
                <span></span>

            <table class="table table-bordered">
                <tr>
                    <th>Order no.</th>
                    <th></th>
                    <th>Order Date :</th>
                    <th></th>
                    <th>Invoice no</th>
                    <th></th>      
                </tr>

                <tr>
                    <th>Dc no.</th>
                    <th></th>
                    <th>Dc Date :</th>
                    <th></th>
                    <th>Invoice Date :</th>
                    <th></th>
                </tr>

                <tr>
                    <td></td>
                </tr>

                <tr>
                    <th>Sl no.</th>
                    <th style="text-align:center">particulars</th>
                    <th>HSN Codes</th>
                    <th>Quantity</th>
                    <th>UOM</th>
                    <th>Unit Rate</th>
                </tr>

                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr> 

                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <td>CGST 9%</td>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <td>SGST 9%</td>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Grand Total</th>
                    <th></th>
                </tr>
            </table>
    </div>
        <p style="text-align:right;padding-top:30px"><b>For Durga Enterprises</b></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>