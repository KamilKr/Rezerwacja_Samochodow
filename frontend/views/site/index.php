<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Wypożyczalnia Samochodów </h1>

        <p class="lead">Wystarczająco szybcy dla Twoich potrzeb</p>

        <p>
		<a class="btn btn-lg btn-success" href="index.php?r=cars">Przejdź do oferty</a>
		</p>
		<?php
		  if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Rejestracja', 'url' => ['/site/signup']];
    }  else $menuItems[] = ['label' => 'Przejdź do oferty', 'url' => ['/site/login']];
	?>
		
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Dodatkowe profity</h2>

                <p>Utwórz konto u nas jeszcze dziś a dostaniesz dodatkowy pakiet promocji .
				Pakietry promocyjne posiadamy zarówno dla klientów indywidualnych jak i dla firm.</p>

                <p><a class="btn btn-default" href="index.php?r=site%2Fsignup">Zarejestruj się &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Najwyższy poziom</h2>

                <p>Auta z naszej oferty wyróżniają się najnowszymi rozwiązaniami oraz atrakcyjnymi cenami. 
				Oferta jest wystarczająco obszerna aby każdy z fanów motoryzacji znalazł coś dla Siebie</p>

                <p><a class="btn btn-default" href="index.php?r=cars">Segment PREMIUM &raquo;</a></p>
            </div>
             <div class="col-lg-4">
                <h2>Historia wypożyczalni samochodowych</h2>

                <p>Pojawienie się linii telegraficznych oraz pierwszych linii lotniczych – to dwa przełomowe momenty w rozwoju wypożyczalni samochodowych.</p>

                <p><a class="btn btn-default" href="https://wypozyczalniaszczecin.pl/krotka-historia-wypozyczalni-samochodow-na-poczatku-byl-ford/">Czytaj więcej &raquo;</a></p>
            </div> 
        </div>

    </div>
</div>
