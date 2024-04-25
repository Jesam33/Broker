<?php
	require_once 'header.php';
?>
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Withdrawals</h2>
          </div>
        </div>
		<section class="no-padding-top">
          <div class="container-fluid">
         
            <div class="block margin-bottom-sm">
              <div class="title"><strong>Your Withdrawal History and Status</strong></div>
              <div class="table-responsive">
  <table class="table table-stripe text-white">
    <tr>
      <th>Wallet/Bank Account Number</th>
      <th>Amount</th>
      <th>Transaction Status</th>
      
    </tr>
    <?php
        $fetchResponse2 = $fetchData->transaction($_SESSION['email']);
        if(is_array($fetchResponse2)){
          if(isset($fetchResponse2['status'])){
              '<div class="alert alert-danger">'.print_r($fetchResponse2['message']).'</div>';
          }else {
              foreach($fetchResponse2 as $row){
      ?>
    <tr>

      <td>
        <?php echo $row['wallet']?>
      </td>
      <td>
        <?php echo $row['amount']?>
      </td>
      <td>
        <?php echo $row['status']?>
      </td>
      

    </tr>
    <?php }}}?>
  </table>
</div>
 

            </div>
          </div>
      </section>
    

<?php
	require_once 'footer.php';
?>
