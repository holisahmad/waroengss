@extends('layouts.fronted')
@section('title', 'Daftar Kontak dan Alamat Waroeng SS')
@section('content')

<style>
.animated {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

@-webkit-keyframes bounce {
  0%, 20%, 40%, 60%, 80%, 100% {-webkit-transform: translateY(0);}
  50% {-webkit-transform: translateY(-10px);}
}

@keyframes bounce {
  0%, 20%, 40%, 60%, 80%, 100% {transform: translateY(0);}
  50% {transform: translateY(-10px);}
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
}
</style>

  <!--===| About Us Banner Start|===-->
  <section class="banner-wrapper about-banner" style=" background: url('{{ url('assets/img/header_kontak.jpg')}}'); padding: 140px 0; background-size: cover; background-position: center center;-moz-box-shadow: inset 0 0 1vh 1vh white; -webkit-box-shadow: inset 0 0 1vh 1vh white; box-shadow: inset 0 0 1vh 1vh white;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Kontak</h1>
          <p>Waroeng Spesial Sambal SS</p>
        </div>
      </div>
    </div>
  </section>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-12" style="padding: 2vh;margin-bottom: 0px;height: auto;background-color: burlywood;background-repeat: repeat-x repeat-y;border-radius: 1vh 1vh 1vh 1vh;-moz-box-shadow: inset 0 0 1vh 1vh white; -webkit-box-shadow: inset 0 0 1vh 1vh white; box-shadow: inset 0 0 1vh 1vh curentcolor;">
			<h3 style="margin-bottom: 1vh"><font style="font-family: 'Titan One', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">Alamat-alamat kantor kami : </font></h3>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Manajemen Pusat :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 4,5 Gang Kinanthi no. 19, Sinduadi, Mlati, Sleman, Yogyakarta</font><a href="https://www.google.com/maps/place/Kantor+Pusat+Waroeng+Spesial+Sambal+SS/@-7.7618181,110.3771153,17.54z/data=!4m5!3m4!1s0x2e7a59ad4a8d4dc9:0x3aab9943317fe5ff!8m2!3d-7.7628266!4d110.3757763" target="_blank" title="Buka di Google Maps"><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Training Center :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 5,5 Gang Jeruk no. 3, Caturtunggal, Depok, Sleman, Yogyakarta</font><a href="https://www.google.com/maps/place/Training+Center+Waroeng+Spesial+Sambal+'SS'/@-7.7600959,110.3781775,17z/data=!4m12!1m6!3m5!1s0x2e7a59ad4a8d4dc9:0x3aab9943317fe5ff!2sKantor+Pusat+Waroeng+Spesial+Sambal+SS!8m2!3d-7.7628266!4d110.3757763!3m4!1s0x2e7a59ab0cba412d:0x3c7bbe7e17c4393!8m2!3d-7.7579511!4d110.3810871" target="_blank" title="Buka di Google Maps"><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Training Center 2 (Padiksar) :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 12, Candi Karang, Sardonoharjo, Ngaglik, Sleman, Yogyakarta </font><a href="https://www.google.com/maps/place/Warung+SS+Kaliurang+Km+12/@-7.7068109,110.4114124,21z/data=!4m5!3m4!1s0x0:0x4551764f02d840a!8m2!3d-7.706784!4d110.411412" target="_blank" title="Buka di Google Maps"><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Kantor Distribusi :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 5, Gang Grompol no. 1, Caturtunggal, Depok, Sleman, Yogyakarta </font><a href="https://www.google.com/maps/@-7.7615427,110.380766,119m/data=!3m1!1e3" target="_blank" title="Buka di Google Maps"><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>
			</div>

			<div class="col-md-12" style="padding: 2vh;margin-bottom: 15vh;height: auto;background-color: burlywood;background-repeat: repeat-x repeat-y;border-radius: 1vh 1vh 1vh 1vh;-moz-box-shadow: inset 0 0 1vh 1vh white; -webkit-box-shadow: inset 0 0 1vh 1vh white; box-shadow: inset 0 0 1vh 1vh white;">
			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Manajemen Area Tangerang :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Parasel, Ruko Madrid No. 30, Palemsemi, Karawaci, Tangerang</font><a href="https://www.google.com/maps/place/Waroeng+SS+-+Spesial+Sambal+Delivery/@-6.2206142,106.6149787,21z/data=!4m13!1m7!3m6!1s0x2e69fea659c5423b:0x4a640f014039db69!2sRuko+Madrid,+Jl.+Palem+Raja+Raya,+Panunggangan+Bar.,+Cibodas,+Kota+Tangerang,+Banten+15138!3b1!8m2!3d-6.2206254!4d106.6148549!3m4!1s0x2e69fea65cfd38db:0x5126452c6521298e!8m2!3d-6.220586!4d106.6152046" target="_blank" ><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Training Center :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 5,5 Gang Jeruk no. 3, Caturtunggal, Depok, Sleman, Yogyakarta</font><a href="https://www.google.com/maps/place/Training+Center+Waroeng+Spesial+Sambal+'SS'/@-7.7600959,110.3781775,17z/data=!4m12!1m6!3m5!1s0x2e7a59ad4a8d4dc9:0x3aab9943317fe5ff!2sKantor+Pusat+Waroeng+Spesial+Sambal+SS!8m2!3d-7.7628266!4d110.3757763!3m4!1s0x2e7a59ab0cba412d:0x3c7bbe7e17c4393!8m2!3d-7.7579511!4d110.3810871" target="_blank" ><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Training Center 2 (Padiksar) :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 12, Candi Karang, Sardonoharjo, Ngaglik, Sleman, Yogyakarta </font><a href="https://www.google.com/maps/place/Warung+SS+Kaliurang+Km+12/@-7.7068109,110.4114124,21z/data=!4m5!3m4!1s0x0:0x4551764f02d840a!8m2!3d-7.706784!4d110.411412" target="_blank" ><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+2" color="cornsilk">&#9679; Kantor Distribusi :</font></p>
				<p><font style="font-family: 'Boogaloo', cursive;text-shadow:-1.5px -1.5px 0 darkred,1.5px -1.5px 0 darkred, -1.5px 1.5px 0 darkred,1.5px 1.5px 0 darkred;" size="+1" color="cornsilk">&nbsp;&nbsp;Jl. Kaliurang km. 5, Gang Grompol no. 1, Caturtunggal, Depok, Sleman, Yogyakarta </font><a href="https://www.google.com/maps/@-7.7615427,110.380766,119m/data=!3m1!1e3" target="_blank" ><font color="deepskyblue" size="+2" style="text-shadow:-1.5px -1.5px 0 dodgerblue,1.5px -1.5px 0 dodgerblue, -1.5px 1.5px 0 dodgerblue,1.5px 1.5px 0 dodgerblue">&nbsp;&nbsp;<i class="fa fa-map-marker animated bounce"></i></font></a></p>

			</div>
		</div>
	</div>
</div>


@endsection
