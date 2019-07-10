
    <?php include 'include/header.php'; ?>
     
     <!--==========================
       upload Section
     ============================-->
     <section id="upload">
      <div class="container">

        <header class="section-header">
          <h3>Recently Generated PoE</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </header>
        <div class="table-responsive">
                <table class="table table-striped table-hover" id="recently_published"></table>
                </div>

      </div>


    </section><!-- #upload  -->
<?php include 'samedata.php'; ?>

<?php include 'include/footer.php'; ?>


<script>
          
            
            //console.log("Signature is:", signature);

            $.ajax({
   type: "GET",
   url: 'api/v1/latest.php',
 
   success:function(Response) {   
           
            var x = Response;
            x = JSON.parse(x);
            //console.log("publish response here", x);

            var result = x.result;
            var data = result.reverse();

            $('#recently_published').append('<table class="table table-striped table-hover"><tr><th>&nbsp;</th><th style="min-width: 204px;"> Document Digest</th><th> Timestamp </th></tr></table>');            
            console.log("result:", data);

            var table_data = data;
            // console.log(table_data);
            for(var i=0; i<10; i++)
              {     


                    var badge = '';
                    
                    if (table_data[i].confirmations > 0) {
                    badge = '<span class="label label-success" style="color:green;">✔</span>';
                    
                    }
                    

                    
                    var signature = table_data[i].keys;
                    //console.log("signature is: ", signature);
                    var confirmations = table_data[i].confirmations;

                    var timestamp = table_data[i].blocktime;

                    var date = new Date(timestamp*1000);

                    var year = date.getUTCFullYear();
                    var month = date.getUTCMonth() + 1;
                    var day = date.getUTCDate();
                    var hours = date.getUTCHours();
                    var minutes = date.getUTCMinutes();
                    var seconds = date.getUTCSeconds();

                      $('#recently_published').append('<table class="table table-striped table-hover"><tr><td>' + badge + '</td><td><a href="./details.php?signature=' + signature + '" target="_blank">' + signature +
                        '</a></td><td> ' +year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds+ "  " + 
                        "(UTC Time)" +  '</td></tr></table>');
                                                              
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
    


