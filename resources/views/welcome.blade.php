
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>CC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
    <style type="text/css">
        .table td {border-top-style: none;}
        .table th {border: none;}
        .table thead th {border: none;}
        .table img {height: 50px; width: 50px;}
        
         
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Currency Converter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div> -->
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container jumbotron" >
        
            <br><br>
          <ul class="list-inline">
            <li>Live Exchange Rates</li>
          <li>
            <select class="form-control">
            <option style="background-image: url(images/India.png);"> Ghana</option>
            </select>
            </li>
         </ul>

         <div class="surround">
            <div class="surround-container">
          <table class="table borderless">
          <thead>
          <tr>
            <th colspan="1"></th>
            <td><img src="images/united-states.png"><center>USD</center></td>
            <td><img src="images/european-union.png"><center>EUR</center></td>
            <td><img src="images/united-kingdom.png"><center>GBP</center></td>
            <td><img src="images/nigeria.png"><center>NGN</center></td>
            <td><img src="images/canada.png"><center>CAD</center></td>
            <td><img src="images/china.png"><center>CNY</center></td>
            <td><img src="images/south-africa.png"><center>ZAR</center></td>
            <td><img src="images/australia.png"><center>AUD</center></td>
            <td><img src="images/kenya.png"><center>KES</center></td>
            <td><img src="images/russia (1).png"><center>RUB</center></td>
            <td><img src="images/egypt.png"><center>EGP</center></td>
            <td><img src="images/japan.png"><center>JPY</center></td>
          </tr>
        </thead>

          <tbody>

            <tr>
            <th>1 GHS</th>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
            <td>2.4525</td>
            <td>3.3244</td>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
            <td>2.4525</td>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
          </tr>
          
         
          <tr>
            <td>inverse:</td>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
            <td>2.4525</td>
            <td>2.4525</td>
            <td>3.0934</td>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
            <td>0.4509</td>
            <td>2.3452</td>
            <td>3.2423</td>
          </tr>

         </tbody>
        </table>

        </div>
          </div>
          <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
          <span class="float-right" style="color: #777;font-size: 15px;">2018-06-26 22:18 UTC</span>
        
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Currency converter</h2>
            <div class="input-group">

            
             <div class="input-group-append">
                <input type="text" id="amount" class="form-control" style="width: 60%;padding: 1%;border-radius: 0;" name="amount">
                <select class="form-control" id="from_currency" style="padding: 1%;border-radius: 0;">
                    <option value="USD">USD - US Dollar</option>
                </select>
                <span class="input-group-text">&laquo; &raquo;</span>
                <select class="form-control" id="to_currency" style="padding: 1%;border-radius: 0;">
                    <option value="GHS">GHANA - Cedi </option>
                </select>
                <a href="convert.html" class="btn btn-primary" style="width: 50%;">&raquo;</a> 
             </div>
             <br>
             
            
           <!--  <p><a class="btn btn-secondary" href="#" id="submit" role="button">View details &raquo;</a></p> -->
          </div>

          
        </div>
        
       
    </div>
        <div class="result" id="result">
             
            </div>
      </div> <!-- /container -->

    </main>
    <hr>
    <footer class="container">
        <div style="font-size: 11px;">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="United States">United States</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
      <p>&copy; ALC June/July 2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!-- <script src="assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.0.0.min.js"></script>
    <script src="js/require.js"></script>

    <script type="text/javascript">
        $('body').on('focus', '#amount', function(){
            $('html, body').animate({scrollTop:$(document).height()}, 'slow');
        });

        $('body').on('keyup', '#amount', function(){
              // alert('Hi');
              
               $amount = $('#amount').val(); // arrival station
            
               $to_currency = $('#to_currency').val();
               $from_currency = $('#from_currency').val();
              
               // $passenger_num = $('input[name="ow_passenger_num"]').val();
               
                $.ajax({
                    type : 'GET',
                    url  : '{{ route('currency.convert') }}',
                    data : {'amount': $amount, 'to_currency': $to_currency, 'from_currency': $from_currency},
                    success:function(data){
                        /*console.log(data);*/
                        
                              $('.result').html(data);
                          
                        
                    }
                }); 

                });
        
    </script>
  </body>
</html>
