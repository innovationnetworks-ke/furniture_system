<?php require 'login.php'; ?>
<?php
if(!isset($_SESSION['acct_id'])){
 header("Location: index.php");
}
else{
?>
<?php
}
?>
 <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Transaction</li>
          </ol>

<div class="card mb-3">

     <div class="card-header">
        <div class="row">
            <div class="col-lg-3">
              <h2>Transaction</h2>
              
                            
           
          
               <!-- <a href="#" type="button" class="btn btn-lg btn-info fas fa-birthday-cake"> Add New</a> -->
              </div> 
              <div class="col-lg-3">
                <?php 
        $query = "SELECT * FROM client";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
          $a = $row['f_name'];
        }
        $query2 = 'SELECT current_date FROM tblaccounts';
            $result2 = mysqli_query($db, $query2) or die(mysqli_error($db));
              while($row2 = mysqli_fetch_array($result2))
              {   
               $date = $row2['current_date'];
              }
        ?>
         <center><input style="text-align: center;" readonly name="" value="<?php echo $date ?>"></center>
  <center>  <input readonly style="height: 80px;width: 250px;font-size: 30px;text-align: center;" type="text" name="" value="<?php echo $_SESSION['f_name']." ".$_SESSION['l_name'];?>"/></center>
            </div>
                <!-- <div class="ml-auto mr-5">
              
              </div> -->
          </div>
            <div class="card-body">
              <div class="table-responsive">
<?php
$query = "SELECT * FROM products_table GROUP BY ProductCode";
$result = mysqli_query($db,$query);
?>                
               
    <form role="form" method="post" action="transpos.php?action=add" style="margin-bottom: 10px">
        <select id="prdct" onChange="$('.outputs').val($(this).find('option:selected').attr('price'))"  style="height: 40px;width: 150px;margin-right: 10px">
          <option selected disabled>Choose Product</option>
          <?php while($row = mysqli_fetch_array($result)):; ?>
          <option codes="<?php echo $row[10]; ?>" price="<?php echo $row[8]; ?>"><?php echo $row[1]; ?></option>
          <?php endwhile; ?>
        </select>
        <input type="hidden" id="code" class="outputss" placeholder="Code" style="height: 40px;width: 100px;margin-right: 10px" readonly>
        <input type="text" id="pricy" class="outputs" placeholder="Price" style="height: 40px;width: 100px;margin-right: 10px" readonly>
        <input type="number" id="qantty" placeholder="Quantity" style="height: 40px;margin-right: 10px;width: 100px">
        <input type="text" name="ttt" id="ttal" placeholder="Total" style="height: 40px" readonly>
        <input type="button" class="add-row btn-info " value="Add to Cart">
    </form>
    <table class="table table-bordered table-hover table-striped"id="dataTables" width="100%" cellspacing="0">

        <thead>
            <tr>
                <th style="width: 50px">Select</th>
                <th style="width: 140px">Product Code</th>
                <th>Product</th>
                <th >Price</th>
                <th >Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
         <form role="form" method="post" action="transpos.php?action=add">
        <tbody>
            <tr>
                
            </tr>
        </tbody>
        <button type="submit">tae</button>
      
    </table>
    <button type="button" class="delete-row btn btn-danger">Remove</button>
    <center><h5>Subtotal</h5><input name="sums"></center>
      </div>
      </div>
           
      </div>

    </div>    
   


<script src="vendor/jquery/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var prdct = $("#prdct").val();
            var prdctcd = $("#code").val();
            var price = $("#pricy").val();
            var qantty = $("#qantty").val();
            var ttal = $("#ttal").val();
            var markup = '<tr><td><input type="checkbox" name="record"></td><td><input name="prcd" readonly value=' + prdctcd + '></td><td><input readonly value='+ prdct +'></td><td><input name="prc" readonly value='+ price +'></td><td><input name="qnt" readonly value='+ qantty +'></td><td><input readonly name="ttt" value='+ ttal +'></td></tr>';
            
            $("table tbody").append(markup);
            document.cookie='prdct='+prdct+'';
            document.cookie='prdctcd='+prdctcd+'';
            document.cookie='price='+price+'';
            document.cookie='qantty='+qantty+'';
            document.cookie='ttal='+ttal+'';
       
     
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
         $("#pricy,#qantty").keyup(function () {
    $('#ttal').val($('#qantty').val() * $('#pricy').val());
});
     $("#prdct").change(function(){ 
        var element = $(this).find('option:selected'); 
        var myTag = element.attr("codes"); 

        $('#code').val(myTag); 
    }); 
     $('input').change(function(){
      var toplam=0;
      $('input[name=ttt]').each(function(){
        toplam = toplam + parseInt($(this).val());
      })
      $('input[name=sums]').val(toplam);
    });
    });    
</script>
</form>