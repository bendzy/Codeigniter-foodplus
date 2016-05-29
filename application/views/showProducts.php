<!doctype html>
<html>
<head>
<title> </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/foodplus/staff/style.css">
</head>
<body>
 <div id="main">
        
         <ul>
        <li><a href="http://localhost/foodplus/index.php/productcontroller/index">Add Product</a></li>
        <li><a href="http://localhost/foodplus/index.php/productcontroller/showdata">Show Data</a></li>
    </ul>
        
        <h2> Food supply</h2>
        <div class="row" id="pagination">
          <?php
         $this->table->set_heading(array('ID', 'Name', 'Description','Production date','Expiry date','Price','Currency','EAN code','Weight','Weight unit'));
         echo $this->table->generate($results);
         echo $this->pagination->create_links();
          ?>
            
        </div>
        
        
 </div>
    

<script>
$(document).ready(function() {
    $("#pagination a").click(function(e){
        e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("href"),

                success: function(res){
                   $("#main").html(res);
                }
                });
              return false;
            });
          });
</script>
</body>
</html>