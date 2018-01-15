<?php
 $usern = filter_input(INPUT_GET, 'username');
        $amount = filter_input(INPUT_GET, 'amount');
if ($usern != null) {?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
<link rel="stylesheet" href="css/main.css" class="color-switcher-link">

<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<html>
    <head>
        <meta charset="UTF-8">
         <title>DextronCoin</title>
    </head>
    <body>
        <?php
       
        $secret = mt_rand();

        $my_xpub = 'xpub6CkpYo3vMPabSjDHGXJhb252RMHYdFaVHZmmi9NcccMFpBNj4AUc5opjumG3q95oC9EX4WfWh7mUqQoMnqqSERWYuC1ep34CPJAmTvwBrh7';
        $my_api_key = 'b7a9ad83-cd29-44e1-a8fc-a316b93dd4eb';

        $my_callback_url = "https://dextroncoin.info/response.php?invoice_id=" . $usern . "&secret=" . $secret;

        $root_url = 'https://api.blockchain.info/v3/receive';

        $parameters = 'xpub=' . $my_xpub . '&callback=' . urlencode($my_callback_url) . '&key=' . $my_api_key;

        $response = file_get_contents($root_url . '?' . $parameters);

        $object = json_decode($response);
        
        $host = 'localhost';
        $uname = 'root';
        $pwd = 'mysql';
        $db = "dextro5_detxroncoin";
        $con = mysqli_connect($host, $uname, $pwd) or die("connection failed");
        mysqli_select_db($con, $db) or die("db selection failed");
        $querry = "insert into coin VALUES('$secret','$object->address','$my_xpub','$my_api_key','$usern')" or die("could not insert record into  " . mysql_error());
        $querry1 = mysqli_query($con, $querry);
  ?>
        <div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
             data-address="<?= $object->address; ?>"
             data-shared="false">
            <div class="blockchain stage-begin">
                <a href="#0" class="theme_button color1 min_width_button">Generate Wallet Address</a> 
            </div>

            <div class="blockchain stage-loading" style="text-align:center">
                <img src="https://blockchain.info/Resources/loading-large.gif"/>
                <p>AMOUNT IN BTC =<?php echo $amount; ?></p>
            </div>

            <div class="blockchain stage-ready">
                <p align="center">Send exact amount to bitcoin address: <b>[[address]]</b></p>

                <p align="center" class="qr-code"></p>
            </div>
            <div class="blockchain stage-paid">
                <b>[[value]] BTC</b> Received. Thank You.
            </div>
            <div class="blockchain stage-error">
                <font color="red">[[error]]</font>
            </div>
        </div>
    </body>
</html>
<?php } else { ?>
    <h1>ooOPS! sorry this page is restricted</h1>
<?php } ?>
  