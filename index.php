<?php require_once 'themes/header.php'; ?>
<div class="w3-container">
<div class="w3-col">
	<div class="w3-card-4" style="padding-left: 15px;padding-right: 15px;">

	
	<center><h1 class="w3-teal">Pemanjang URL</h1></center>
	<div class="w3-padding-16">
	<div class="w3-row">

	<input type="text" name="url" id="url" class="w3-input w3-twothird" placeholder="Paste URL Disini Misal http://google.com">
	<button id="panjang" class="w3-btn w3-teal w3-third">Panjangkan</button>
	<button id="copy" class="w3-btn w3-teal w3-third hilang">Silahkan Copy</button>

	</div>
	</div>
	</div>
	</div>
</div>





<div class="w3-row" style="margin-top: 50px">

<div class="w3-third">
<div class="w3-container">
<div class="w3-card-4" style="padding: 5px 5px 5px 5px">
 <h1 class="w3-teal"><center>WHAT IS THIS ?</center></h1>
<p style="font-size: 20px">Ini Merupkan URl Longer atau pemanjang URL<br><br>
<b>Apa itu pemanjang URL ?</b><br> Pemanjang URL merupakan sebuah tool
yang bermanfaat bagi anda untuk menyembunyikan URL asli, jika anda memakai ini, url yang anda bagikan tidak akan terlihat dalam bentuk
URL aslinya tapi akan berbentuk sebuah url yang sudah di Hash</p>
</div>
</div>
</div>

<div class="w3-twothird">
<div class="w3-panel w3-pale-green w3-leftbar w3-border-green">
<h2>Bagaimana Cara memakai nya ?</h2>
  <p>Sangat Mudah, silahkan paste url yang anda ingin panjangkan lalu klik tombol panjangkan dan silahkan di copy urlnya</p>
</div>

<div class="w3-card-4">
<div class="w3-container w3-teal">
<h4>Who Made This?</h4>
</div>

<div class="w3-third">
  <img src="https://image.ibb.co/ewK51Q/dion_vector.jpg" width="225" height="225" alt="Dion Arya Pamungkas">
</div>

<div class="w3-twothird">
  <div class="w3-container">
  	<div class="w3-panel w3-pale-teal w3-leftbar w3-border-green">
  	<h2><a href="http://dionarya6661.github.io">Dion Arya Pamungkas</a></h2>
    <p>Terisnpirasi dari banyak nya URL Shortener, disini saya membuat yang sedikit yang berbeda yaitu URL Longer, jika biasa nya suatu url di pendekan misalnya http://facebook.com/blablabla.1234 akan di pendekan menjadi http://domain.com/jakh2 tapi disni akan dipanjangkan http://google.com nanti akan menjadi http://domain.com/jndajndjadjbdhahsbdhabdbahd2t6gyd</p>
    </div>
  </div>
  </div>
 
</div>

</div>

</div>
<script>
$(document).ready(function(){
	$('#panjang').on('click', function(){

		var urlnya    = $('#url').val().trim();
        var httpnya   = new RegExp("http://");
        var httpsnya  = new RegExp("https://");
    
      if(httpnya.test(urlnya) || httpsnya.test(urlnya)){
		if (urlnya === ''){
			alert('Maaf Isikan Tempat URL nya');
		}else{
			$.ajax({
				method: "POST",
				url : "ajax/input.php",
				data: {url_asli : urlnya}
			}).done(function(data){
			$('#url').val(data);
			$('#panjang').addClass('hilang');
			$('#copy').removeClass('hilang');
			});
		}
	}else{
		alert("Harap Memasukan URL yang VALID dengan http:// atau https:// terimakasih");
	}
	});

	$('#copy').on('click', function(){
		var url_hash = $('#url').val().trim().select();
		  document.execCommand("copy"); 
          alert("berhasil di copy");
	});

});

</script>
<?php require_once 'themes/footer.php'; ?>