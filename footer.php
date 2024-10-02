</body>

<!--footer section start-->
<footer class="dashboard">
  <p>&copy 2024 Zedulus Solutions | Developed by <a href="https://zedulus.com/" target="_blank"
      class="text-primary">Zedulus Solutions</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<!--
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
-->
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<!--
<script src="assets/js/bar.js?<?php echo rand(0,90)?>"></script>
<script src="assets/js/linechart.js?<?php echo rand(0,90)?>"></script>
<script src="assets/js/pie-chart.js?<?php echo rand(0,90)?>"></script>
<script src="assets/js/stack-chart.js?<?php echo rand(0,90)?>"></script>
-->
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->

<!-- data tables js -->
<script>
  $(document).ready(function () {

  });
  
</script>
<!-- //data tables js -->

<script src="assets/js/dataTables.min.js?<?php echo rand(11,900)?>"></script>

<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js?<?php echo rand(900,9000)?>"></script>

</body>

</html>
 <?php 
/*if(!empty($alertMsg)){ echo "<script>alert('".$alertMsg."')</script>";} */
//show modal
if(!empty($alertMsg) || !empty($msg)){ 
		echo "<script>";
		echo "$(document).ready(function(){";
		echo "$('.modal-title').text('Status Message');"; 
		echo "$('.modal-body').text('".$alertMsg.$msg."');"; 
		echo "$('#generalModal').modal();"; 
		echo "});";
		echo "</script>";
		}

 ?>