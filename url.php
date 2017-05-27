<?php 

require_once 'core/init.php';
$Database = new Database();
$input    = new Input();

if (empty($_GET['palsu'])){
	header('Location: index.php');
}
$urlpalsu = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$result = $input->pilih($urlpalsu)->fetch();



require_once 'themes/header.php'; ?>
<div class="w3-container" style="margin-top: 80px">
<div class="w3-row">
<div class="w3-col">
<center><h2>Silahkan Tunggu anda akan diarahkan dalam beberapa detik</h2></center>
<center><span id="countdown" class="w3-badge w3-jumbo w3-teal w3-padding-32" style="padding-left: 32px;padding-right: 32px">5</span>
<a id="tombol" class="w3-btn w3-teal hilang" href="<?php echo $result['asli']; ?>">Menuju Link</a>
</center>
<p class="w3-center">Anda Akan Diarahkan ke <?php echo $result['asli']; ?></p>
</div>
</div>
</div>


<script type="text/javascript">

var waktu = 5;
setInterval(function() {
waktu--;
if(waktu < 0) {
// window.location = 'http://google.com';
	$('#tombol').removeClass('hilang');
	$('#countdown').addClass('hilang');

}else{
document.getElementById("countdown").innerHTML = waktu;
}
}, 1000);


</script>
<?php require_once 'themes/footer.php'; ?>