    <footer class="footer container">
        <div class="text-muted pull-right">
            <?php echo $osjsonstats.' v'.$version; ?> by djphil <span class="label label-default">CC-BY-NC-SA 4.0</span>
        </div>
        <div class="text-muted">
            &copy; 2015 - <?php $date = date('Y'); echo $date; ?> Digital Concepts - All rights reserved
        </div>
    </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- TOOLTIPS -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>

    <!-- ALERTS SLIDE UP -->
    <script>
    $(document).ready(function() {
        $(".alert-anim").fadeTo(2000, 500).slideUp(500, function() {
            $(".alert-anim").alert('close');
        });
    });
    </script>

</body>
</html>
