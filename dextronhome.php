<!DOCTYPE html>
<html lang="en">

    <?php
    set_time_limit(0);
    $outValue = array();
    $customerid = filter_input(INPUT_GET, 'username');
 
    $datac ='https://api.coinbase.com/v2/prices/ETH-' . $currency . '/spot';
   // $ethcurrentpeice = $datac['data']['amount'];
 $chs = curl_init();
curl_setopt($chs, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chs, CURLOPT_URL, $datac);
$CC=curl_exec($chs);
$json = json_decode($CC,true);
 $ethcurrentpeice=$json['data']['amount'];
 
 

    <!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2017 10:51:50 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>DextronCoin</title>
         <link rel="icon" type="image/gif" href="images/logo.jpg"/>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link rel="stylesheet" href="http://path/to/font-awesome/css/font-awesome.min.css">

        <link href="css/sb-admin.css" rel="stylesheet">
        <style type="text/css">

            .paging-nav {
                text-align: right;
                padding-top: 2px;
            }

            .paging-nav a {
                margin: auto 1px;
                text-decoration: none;
                display: inline-block;
                padding: 1px 7px;
                background: #91b9e6;
                color: white;
                border-radius: 3px;
            }

            .paging-nav .selected-page {
                background: #187ed5;
                font-weight: bold;
            }

            .paging-nav,
            #tableData {
                width: 400px;
                margin: 0 auto;
                font-family: Arial, sans-serif;
            }
        </style>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index">DextronCoin</a>
            <font color="white">
            1DTC=BTC <?php echo number_format($dct,6); ?>&nbsp;&nbsp;&nbsp;&nbsp;  1DTC=USD <?php echo 0.65; ?> &nbsp;&nbsp;&nbsp;&nbsp; 1BTC=USD <?php echo number_format($dt,4); ?> &nbsp;&nbsp;&nbsp;&nbsp; 1ETH=USD <?php echo number_format($ethcurrentpeice,5); ?> </font>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <img src="images/logo.jpg" class="user-image img-responsive" width="100" height="100"/>
                        <br>
                        <font color="white"> Welcome  <?php echo $names; ?></font>
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="change?username=<?php echo $customerid; ?>">
                            <i class="fa fa-fw fa fa-cogs"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-map-marker"></i>
                            <span class="nav-link-text">Affiliate</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="">Referral</a>
                            </li>
                            <li>
                                <a href="">Network Tree</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Wallet">
                        <a class="nav-link" href="verify?username=<?php echo $customerid; ?>" onClick="centeredPopup(this.href, 'myWindow', '500', '300', 'yes');">
                            <i class="fa fa-fw fa-list-alt"></i>
                            <span class="nav-link-text">Wallet</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Visa card">
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-vine"></i>
                            <span class="nav-link-text">Visa card</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Support">
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-support"></i>
                            <span class="nav-link-text">Support</span>
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script language="javascript">
                            var popupWindow = null;
                            function centeredPopup(url, winName, w, h, scroll) {
                                LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
                                TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
                                settings =
                                        'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',resizable'
                                popupWindow = window.open(url, winName, settings)
                            }
                        </script>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="dextroncoin.info/logins?username=<?php echo $customerid; ?>" id="myInput">
                        <button onclick="myFunction()">Copy text</button>
                    </li>

                </ol>
                <script>
                    function myFunction() {
                        var copyText = document.getElementById("myInput");
                        copyText.select();
                        document.execCommand("Copy");
                        alert("Copied the text: " + copyText.value);
                    }
                </script>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <img src="img/dtc.png" width="70" height="70"/>
                                </div>
                                <div class="mr-5"> <?php echo number_format(20+$dtcamount + $u, 6); ?></div>
                                <div class="mr-5">DTC|USD <?php echo number_format($dtcamounts, 6);?></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-btc"></i>
                                </div>
                                <div class="mr-5"> <?php echo $sums; ?></div>
                                <div class="mr-5">BTC|USD <?php echo number_format($btcusd, 6); ?></div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <img src="img/eth.png"/>
                                </div>
                                <div class="mr-5"><?php echo number_format($urls, 6); ?></div>
                                <div class="mr-5">ETH|USD<?php echo number_format($urls * $ethcurrentpeice, 6); ?></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-usd"></i>
                                </div>
                                <div class="mr-5">USD 0.000000</div>
                                <div class="mr-5">DOLLAR</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-database"></i>
                                </div>
                                <div class="mr-5">USD 0.000000</div>
                                <div class="mr-5">TOTAL EARN</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa  fa-handshake-o"></i>
                                </div>
                                <div class="mr-5">&nbsp;&nbsp;USD 0.000000</div>
                                <div class="mr-5">TOTAL LENDING</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bar-chart"></i>
                                </div>
                                <div class="mr-5">&nbsp;&nbsp;USD 0.000000</div>
                                <div class="mr-5">&nbsp;SALES</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-user-circle"></i>
                                </div>
                                <div class="mr-5">&nbsp; 0</div>
                                <div class="mr-5">REFERRAL</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <a class="card-footer text-white clearfix small z-1" href="exchange.php?username=<?php echo $customerid; ?>">
                                <span class="float-left"> <i class="fa fa-fw fa-exchange"></i>&nbsp;&nbsp;&nbsp;&nbsp;EXCHANGE</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left"> <i class="fa fa-fw fa-stack-exchange"></i>&nbsp;&nbsp;&nbsp;&nbsp;STAKING</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left"> <i class="fa fa-fw fa-handshake-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;LENDING</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left"> <i class="fa fa-fw fa-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;REINVEST</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">


                        &nbsp;&nbsp;&nbsp;&nbsp; ALL TRANSACTIONS

                        <table id="tableData" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < 50; $i++) {
                                    $n_outputs = count($json["txs"][$i]["out"]);
                                    for ($io = 0; $io < $n_outputs; $io++) {
                                        $outValue = $json["txs"][$i]["out"][$io]["value"];
                                        $outValueCalc = $outValue / 100000000;
                                        $sql = mysqli_fetch_array(mysqli_query($con, "SELECT coinid FROM coin2 where usern='$Username'"));
                                        ?>
                                        <tr>
                                            <td><?php echo $sql['coinid']; ?></td>
                                            <td><?php echo "bitcoin"; ?></td>

                                            <td><?php echo "<button style='background-color:green;'>" . rtrim(number_format($outValueCalc, 8), '0') . "</button><a href='#'>" . "</a>";
                                        ?></td>

                                            <td><?php echo 'Recived'; ?></td>
                                            <td></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

                </div>

                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="vendor/chart.js/Chart.min.js"></script>
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="js/sb-admin-datatables.min.js"></script>
                <script src="js/sb-admin-charts.min.js"></script>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                <script type="text/javascript" src="paging.js"></script> 
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#tableData').paging({limit: 5});
                    });
                </script>
                <script type="text/javascript">

                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-36251023-1']);
                    _gaq.push(['_setDomainName', 'jqueryscript.net']);
                    _gaq.push(['_trackPageview']);

                    (function () {
                        var ga = document.createElement('script');
                        ga.type = 'text/javascript';
                        ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(ga, s);
                    })();

                </script>
            </div>
    </body>


    <!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2017 10:52:04 GMT -->
</html>
