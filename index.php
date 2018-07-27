<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

get_header("Accueil");
?>

<div class="t-center">
    <h2>QUI SOMMES NOUS ?</h2>
</div>
<section class="main-1">

    <div class="container">

        <article class="block">
            <img class="picto" src="images/picto-exp-desk.png" alt="expèrience">
            <h3>Expérience</h3>

            <p class="main-1-text">Vivre d’une passion. Parcourir le monde à pied, du Méxique au Salvador en passant le Guatemala, le Honduras ou
                le Costa-rica. Fort de cette volonté AZTREK vous fait partager sa passion du voyage, toujours proche et respectueux
                des hommes et de la nature.</p>
        </article>

        <article class="block">
            <img class="picto" src="images/picot-pers-desk.png" alt="personnel">
            <h3>Personnel</h3>

            <p class="main-1-text">AZTREK est constitué d’une équipe de passionnés par le voyage et le trekking. Chacun a parcouru son bout de chemin
                sur les sentiers du monde avant de revenir partager son expertise pour votre prochaine aventure. L’esprit trek,
                c’est l’identité commune à l’équipe Atalante !</p>
        </article>

        <article class="block">
            <img class="picto" src="images/picto-enga-desk.png" alt="engagements">
            <h3>Engagements</h3>

            <p class="main-1-text">AZTREK est attachée aux valeurs de respect de l’environnement et des populations en soutenant des initiatives
                en faveur du tourisme responsable et porte un regard attentif notamment sur les sujets de la gestion des déchets,
                de l'eau et de la déforestation.</p>
        </article>

    </div>

</section>
<!-- =================================================
main 2
================================================ -->

<h2>NOS SÉJOURS</h2>
<section class="owl-carousel container">

    <article class="item-container">
        <div class="item-infos">
            <a href="#"></a>
            <h3>MÉXIQUE</h3>
            <img src="images/mexique.jpg" alt="mexique">
            <p>À l’image de sa capitale, le Mexique est un pays cosmopolite, bouillonnant, multiple et fascinant. Une terre
                mythique, qui évoque tout à la fois le monde préhispanique, l’aventure, la révolution, les fêtes joyeuses et
                colorées. Venez faire la fête au Mexique avec les mariachis, plongez sur les traces du commandant Cousteau
                dans les récifs de Cozumel, découvrez le tombeau de Pacal, le roi maya de Palenque, flânez sur les marchés
                villageois et explorer les les cenotes (puits naturels) du Yucatán. </p>
            <p class="details">3 séjours vous sont proposé</p>
            <p class="prix">A partir de 1390€</p>
        </div>
    </article>

    <article class="item-container">
        <div class="item-infos">
            <a href="#"></a>
            <h3>GUATEMALA</h3>
            <img src="images/guatemala.jpg" alt="guatemala">
            <p>Entre Pacifique et Caraïbes, traversé par la jungle du Péten où pointent les temples de Tikal, ce confetti d’Amérique
                centrale cumule les atouts ! Magie du lac Atitlan cerclé de volcans, cachet colonial d'Antigua, marchés colorés,
                mangroves du Rio Dulce et les forêts de Coban, habitat du mythique quetzal, en font une destination passionnante.</p>
            <p class="details">5 séjours vous sont proposé</p>
            <p class="prix">A partir de 1695€</p>
        </div>
    </article>

    <article class="item-container">
        <div class="item-infos">
            <a href="#"></a>
            <h3>COSTA-RICA</h3>
            <img src="images/costarica.jpg" alt="costarica">
            <p>Rien de tel qu’un voyage au Costa Rica pour aiguiser la curiosité de vos enfants et assouvir leur soif d’aventure.
                La nature tropicale offre des expériences uniques pour petits et grands casse-cou. Prêts à se lancer en tyrolienne
                dans la canopée, à s’approcher des volcans ou à descendre des rapides en rafting ? Quant aux plages des côtes
                pacifique et caraïbe, elles sont idéales pour des moments de détente en famille.</p>
            <p class="details">1 séjour vous est proposé</p>
            <p class="prix">A partir de 1990€</p>
        </div>
    </article>

    <article class="item-container">
        <div class="item-infos">
            <a href="#"></a>
            <h3>SALVADOR</h3>
            <img src="images/salvador.jpg" alt="salvador">
            <p>Le Salvador… Borné par le Guatemala à l’ouest et le Honduras au nord, le Salvador épouse largement les rivages
                du Pacifique. Une bénédiction pour les surfeurs, qui y viennent de plus en plus nombreux, attirés par les excellents
                beach breakset la relative absence de concurrence. Cap sur la Playa El Tunco, QG des noceurs, ou sur les spots
                méconnus ourlant le ruban quasi ininterrompu de plages de sable gris-brun et de cocotiers. Les espaces naturels
                du Salvador sont certes réduits à portion </p>
            <p class="details">3 séjours vous sont proposé</p>
            <p class="prix">A partir de 2100€</p>
        </div>
    </article>

    <article class="item-container">
        <div class="item-infos">
            <a href="#"></a>
            <h3>HONDURAS</h3>
            <img src="images/Honduras.jpg" alt="honduras">
            <p>Au cœur de l’isthme centraméricain, le Honduras est une magnifique destination, peu fréquentée, dont nous aimons
                partager la confidentialité. Doté de majestueuses forêts tropicales humides, l’intérieur des terres honduriennes
                est un refuge de la vie sauvage abritant des richesses, aussi bien naturelles que culturelles, encore intactes.
                Explorant quelques-unes de ses plus belles réserves vous rallierez ensuite la côte caribéenne et profiterez
                d’un repos mérité sur les plages de sable blanc de l’île d’Utila.</p>
            <p class="details">2 séjours vous sont proposé</p>
            <p class="prix">A partir de 1790€</p>
        </div>
    </article>
</section>
<a href="#" class="cta">EN SAVOIR PLUS</a>
<!-- =================================================
main 3
================================================ -->

<section class="bon-plan">

    <h2>Bons Plans</h2>
    <div class="bon-plan-contenu container">

        <article class="bon-plan-contenu_bloc">
            <h3>Évènements</h3>
            <img src="images/evenements.jpg" alt="">
            <p>Participez et vivez les plus grands évènements du pays. </p>
        </article>

        <article class="bon-plan-contenu_bloc">
            <h3>Restaurants</h3>
            <img src="images/restaurants.jpg" alt="">
            <p>Goutez aux meilleurs plats dans les plus beaux endroits.</p>
        </article>

        <article class="bon-plan-contenu_bloc">
            <h3>Boutiques</h3>
            <img src="images/boutiques.jpg" alt="">
            <p>Rapportez chez vous un bout de votre magnifique voyage.</p>
        </article>

        <article class="bon-plan-contenu_bloc">
            <h3>Communauté</h3>
            <img src="images/communaute.jpg" alt="">
            <p>Partagez vos plus belles expériences, vos souvenirs…</p>
        </article>

        <a href="#">En savoir plus</a>

    </div>

</section>

<?php get_footer(); ?>