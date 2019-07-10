
    <?php include 'include/header.php'; ?>
     
     <!--==========================
       upload Section
     ============================-->
     <section id="upload">
       <div class="container">
 
         <header class="section-header">
           <h3>Details of PoE</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
             dolore magna aliqua.</p>             
         </header>
         <div class="row">
        
        <div class="col-md-12">
        <div id="received_data"></div>
         

            </div>

    </div>
         <div>
</section>
<?php include 'samedata.php'; ?>

<?php include 'include/footer.php'; ?>

      
<script>
            var signature = "<?php echo $_GET['signature']; ?>";
            
            //console.log("Signature is:", signature);

  $.ajax({
   type: "POST",
   url: 'api/v1/verify.php',
   data:{ signature : signature },
   success:function(Response) {   
           
            var x = Response;
            x = JSON.parse(x);
            //console.log("publish response here", x);

            var result = x.result;
            var data = result.reverse();

            sign = signature;
            table_data = data;
            //console.log("result2:", table_data);

            if(Object.keys(table_data).length == 0){
              $('#received_data').append(
                    '<h5 style="text-align: center;">Record Not Found</h5>');

            }else
            {
              $('#received_data').append(
                    '<h5 style="text-align: center;">Record Found</h5>');
            Object.keys(table_data).forEach(function (k){

                    var signature = sign;



                    var confirmations = table_data[k].confirmations;
                    var tx_id = table_data[k].txid;
                    
                    
                    var dataHex = table_data[k].data;
                    var converted_data = hex2a(dataHex);
                    var final_output = JSON.parse(converted_data);

                    var name = final_output.name;
                    var message = final_output.message;
                    var email = final_output.email;

                    if (confirmations == 0) {


                        var blocktime = "pending";
                        var timestamp = "pending";
                      

                        var time = "pending";
  
                  
                    }

                    else {

                        var blocktime = table_data[k].blocktime;
                        var timestamp = table_data[k].blocktime;
                        var date = new Date(timestamp*1000);

                        var year = date.getUTCFullYear();
                        var month = date.getUTCMonth() + 1;
                        var day = date.getUTCDate();
                        var hours = date.getUTCHours();
                        var minutes = date.getUTCMinutes();
                        var seconds = date.getUTCSeconds();

                        var time = year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds+ " " + "(UTC TIME)";

                    }



                   $('#received_data').append(
                    '<table class="table table-striped table-hover"><thead><tr><th> Data </th><th> Value</th></tr></thead></table>');

                    
                    tx_url;
                    
                    $('#received_data').append("<table class='table table-striped table-hover'><tr><td> Signature  </td> <td  >"+   signature   +"</td></tr><tr><td> Transaction_id  </td> <td>"+ tx_id + "</td></tr><tr><td> Blocktime(Unix) </td><td>"+   blocktime   +"</td></tr><tr><td>  Confirmations   </td  ><td>"+   confirmations   +"</td></tr><tr><td>  Name   </td  ><td>"+   name   +"</td></tr><tr><td>  Email   </td  ><td>"+   email   +"</td></tr><tr><td>  Message   </td  ><td>"+   message   +"</td></tr><tr><td> Time </td><td>" + time + "</td></tr></table>");

      
            
                });

                

              }


                }    
  
            });
            

            // recordData() function here that converts any string toHex
            // Params : null 
            // return : none
              function hex2a(hexx) {
                    var hex = hexx.toString();//force conversion
                    var str = '';
                    for (var i = 0; i < hex.length; i += 2)
                        str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
                    return str;
                  } 

            
            //Global variables
            var table_data;
            var sign;
            var tx_url;

             </script>   
    

