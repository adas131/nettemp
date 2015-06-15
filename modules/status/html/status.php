<script src="media/masonry.pkgd.min.js"></script>
<script type="text/JavaScript">
var container = document.querySelector('#container');
var msnry = new Masonry( container, {
  //options
  columnWidth: 50,
  itemSelector: '.item'
});
</script>

<style type="text/css">
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.masonry {
  margin: auto;
  float: left;
}
.masonry .item {
  width:  341px;
  float: left;
  padding: 0px 10px 0px 0px;
}
</style>

<div class="masonry js-masonry"  data-masonry-options='{ "isFitWidth": true }'>
  <div id="res" class="item"><?php include_once('modules/sensors/html/sensor_status.php'); 
?></div>
  <div class="item "><?php include('modules/status/html/cam1.php'); ?></div>
  <div class="item "><?php include('modules/status/html/cam2.php'); ?></div>
  <div class="item "><?php include('modules/status/html/cam3.php'); ?></div>
  <div class="item"><?php include('modules/hosts/html/hosts_status.php'); ?></div>
  <div class="item"><?php include('modules/gpio/html/gpio_status.php'); ?></div>
  <div class="item"><?php include('modules/kwh/html/kwh_status.php'); ?></div>
  <div class="item"><?php include('modules/tools/html/tools_file_check.php'); ?></div>
</div>

<script src="media/jquery.js"></script>
<script>
var auto_refresh = setInterval(
(function () {
    $("#res").load("modules/sensors/html/sensor_status.php");
}), 60000);
</script>
















