
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/foodplus/staff/style.css">
  <title>Foodplus</title>
 
</head>

<body>
   
    
    
    
    <div id="main">
        
         <ul>
        <li><a href="http://localhost/foodplus/index.php/productcontroller/index">Add Product</a></li>
        <li><a href="http://localhost/foodplus/index.php/productcontroller/showdata">Show Data</a></li>
    </ul>
        
        <h2> Add new Product to database</h2>
    <br/>
        
    <div>
        <?php
              // INPUT FORM FOR PRODUCT INSERT

              // Form open
              echo form_open('insert_product',array('id' =>'form')); 

              //all form inputs
              
              // Name
              echo form_label('Name  ','name');
              $name = array(
                  'name'        => 'productName',
                  'id'          => 'productName',
                  'placeholder' => 'Enter product name',

              );
              echo form_input($name,  set_value('name'));
              echo form_error('name');
              
              echo '<br />';
              echo '<br />';


              //Description
              echo form_label('Description  ','description' );
              $description = array(
                  'name'        => 'productDescription',
                  'id'          => 'productDescription',
                  'placeholder' => 'Describe product',
              );
              echo form_input($description);

              echo '<br />';
              echo '<br />';


              //Production date
              echo form_label('Production date  ','production_date');
              $production_date = array(
                  'name'        => 'productProduction_date',
                  'id'          => 'productProduction_date',
                  'placeholder' => 'Enter production date',
              );
              echo form_input($production_date);

              echo '<br />';
              echo '<br />';


              //Expiry date
              echo form_label('Expiry date  ','expiry_date');
              $expiry_date = array(
                  'name'        => 'productExpiry_date',
                  'id'          => 'productExpiry_date',
                  'placeholder' => 'Enter expiry date',
              );
              echo form_input($expiry_date);

              echo '<br />';
              echo '<br />';


              //Price
              echo form_label('Price  ','price');
              $price = array(
                  'name'        => 'productPrice',
                  'id'          => 'productPrice',
                  'placeholder' => 'Price of product',
              );
              echo form_input($price);

              echo '<br />';
              echo '<br />';

              // Currency
              echo form_label('Currency  ', 'currency');
              $currency = array(
                  'name'        => 'productCurrency',
                  'id'          => 'productCurrency',
                  'placeholder' => 'Enter currency',
              );
              echo form_input($currency);

              echo '<br />';
              echo '<br />';

              // EAN CODE
              echo form_label('EAN code  ',' EAN_code');
              $EAN_code = array(
                  'name'        => 'productEAN_code',
                  'id'          => 'productEAN_code',
                  'placeholder' => 'EAN code of product',
              );
              echo form_input($EAN_code);

              echo '<br />';
              echo '<br />';

              //Weight
              echo form_label('Weight  ','weight');
              $weight = array(
                  'name'        => 'productWeight',
                  'id'          => 'productWeight',
                  'placeholder' => 'Weight of product',
              );
              echo form_input($weight);

              echo '<br />';
              echo '<br />';

              // Weight unit
              echo form_label('Weight unit  ','weight_unit');
              $weight_unit = array(
                  'name'        => 'productWeight_unit',
                  'id'          => 'productWeight_unit',
                  'placeholder' => 'Weight of product'
              );
              echo form_input($weight_unit);
              
             
             
              echo '<br />';
              echo '<br />';
              
              $submitButton = array(
                'id'    => 'submitButton',
                'type'  => 'submit',
                'value' => 'Add New Product',
              );
              echo form_submit($submitButton);
            
              $resetButton = array(
                'id'    => 'resetButton',
                'type'  => 'reset',
                'value' => 'Reset Values',
              );
              echo form_submit($resetButton);
        ?>
         <?php 
            // Close Form
             echo form_close();
                //display errors
            // echo validation_errors();
            
        ?>
       
    </div>
       
    
    <!-- ERROR MESSAGE DIV FOR FORM  -->
    <div>
      <p id="message"> </p>
    </div>
    

      <script>
          $(document).ready(function() {
              $('#submitButton').click(function() {
                    var form_data = $('#form').serialize();
                    console.log(form_data);
                    $.ajax({
                        url: "<?php echo base_url('/insert_product');?>",
                        type: 'POST',
                        async: true,
                        data: form_data,
                        
                            success: function(msg) {
                              $('#message').html(msg); 
                            },
                            error: function (msg) {
                                console.log(msg);
                                $('#message').text(msg);
                            }
                           
                    });
                    return false;
                  
              });
          });
    </script>
   
</body>
</html>