@extends('layouts.base')
@section('content')

        <!-- Caroussel -->
        <div class="caroussel_bootstrap" style="max-width: 90%;left: 16%;position: relative;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/Diapo-8.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/Diapo-9.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/Diapo-3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>

        <!-- Explication -->
        <div class="msg" style="position: relative;text-align: center;left: 10%;">
            <img src="{{asset('images/bureau des eleves.jpg')}}" class="msg-expli">
            <h3 class="texte-expli"><u>Le Bureau Des Elèves :</u><br>
			<br>
            Le bureau des élèves (BDE) est une association d'élèves. Ces élèves<br>
            donnent de leur temps afin d'améliorer la vie du lycée en proposant d'organiser<br>
            des activitées Sportives, ou encore, des ateliers (Théâtre et musique).<br>
            Le bureau des élèves se compose de trois entités :<br>
      
		
			<ul>
				<li><p><big><strong>Le Bureau Des Actions  [BDA]</strong></big></p></li>
				<li><p><big><strong>Le Bureau Des Sports [BDS]</strong></big></p></li>
				<li><p><big><strong>Le Bureau Des Cultures   [BDC]</strong></big></p></li>
			</ul>
            </h3>
			<br/>
        </div>

		<div class="content" style="position: relative;text-align: center;left: 10%;">
            <!-- Espace -->
            <div class="images">
                <img src="{{asset('svg/espace-famille.svg')}}" class="images-espace">
                <h3 class="texte-espace">  Un espace pour tous</h3>
            </div>

            <!-- Multi -->
            <div class="images">
                <img src="{{asset('svg/index.svg')}}" class="images-multi">
                <h3 class="texte-multi">Compatible sur tous <br> les types de périphériques  </h3>
            </div>

            <!-- Achat -->
            <div class="images">
                <img src="{{asset('svg/caddies.svg')}}" class="images-caddies">
                <h3 class="texte-caddies">Acheter en toute sécurité</h3>
            </div>
        </div>

        <!-- Citation -->
        <div class="citation" style="position: relative;text-align: center;left: 10%;">
            <h1 class="citation-guill1">"</h1>
            <h3 class="citation-texte">Il n'y a pas de résultats sans travail,
			pas de récompenses sans mérite <br>
			et pas satisfaction sans avoir donné un peu de soi.</h3>
            <h2 class="citation-auteur">– Par le pôle communication</h2> 
        </div>

        @endsection       

        


<!-- end document-->
