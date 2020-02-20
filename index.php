

<!DOCTYPE html>
<html lang="ru" >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <!-- My style CSS -->
  <link href="css/style.css?<?php echo time();?>" rel="stylesheet">

</head>

<section id="page-top">


  <!-- Services Section -->
  <section class="page-section" id="services">


  </section>


  <!-- Footer -->
  <footer class=" py-5">
    <div class="container">

      <div class="small text-center text-muted">Alex design 2020</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></section>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>
<script src="js/moment.js"></script>

<script type="text/javascript">

    function show()
    {
        $.ajax({
            url: "data.php?<?php echo time()?>",
            cache: false,
            success: function(html){
                $(".page-section").html(html);
            }
        });


    }

    $(document).ready(function(){
        show();
        setInterval('show()',10000);
    });



    window.onload = function(){



        (function time(){
            var date = moment().format('YYYY-MM-DD H:mm:ss');

            $('.time').text(date);

            var innerTimephp = $('.timephp').text();



            if(innerTimephp === '0' || !innerTimephp)
            {
                $('.timejs').text('00:00:00');
            }
            else{
                var datephp = moment(innerTimephp);


                var a = moment();
                var b = datephp;
                var d = a.diff(b, 'days')%31;

                var m = a.diff(b, 'months')%12;
                var y = a.diff(b, 'years');
                var h = a.diff(b, 'hours')%24;
                var mm = a.diff(b, 'minutes')%60;
                var s = a.diff(b, 'seconds')%60;

                if (d < 10)
                {
                    d = '0'+ d;
                }
                if (m < 10)
                {
                    m = '0'+ m;
                }
                if (s < 10)
                {
                    s = '0'+ s;
                }
                if (h < 10)
                {
                    h = '0'+ h;
                }


                if (y < 10)
                {
                    y = '000'+ y;
                }
                else if (y < 100)
                {
                    y = '00'+ y;
                }
                else if (y < 1000)
                {
                    y = '0'+ y;
                }

                if (mm < 10)
                {
                    mm = '0'+ mm;
                }




                var res = y+'-'+ m+ '-'+ d + ' '+ h+ ':'+ mm+ ':'+ s;
                $('.timejs').text(res);










            }




            window.setTimeout(time, 1);
        })();

    };
</script>




</body>

</html>
