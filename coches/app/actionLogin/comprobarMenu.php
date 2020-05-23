

<?php if(isset($_SESSION['$usuario'])){ ?>
                <script>
                $( document ).ready(function() {
                    $("#sesion").hide();
                    $("#registro").hide();
                    });
                </script>
   <?php } ?>

   <?php if(!isset($_SESSION['$usuario'])){ ?>
                <script>
                $( document ).ready(function() {
                    $("#cerrarsesion").hide();
                    $("#micuenta").hide();
                    });
                </script>
   <?php } ?>