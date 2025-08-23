@extends('layouts.layout')
@section('titre', 'A propos')
@section('content')
    <div class="breadcumnd__bannerattach ralt">
        @include('parties.banniere', [
            'title' => 'A propos',
            'items' => [
                ['label' => 'Accueil', 'url' => route('home')],
                ['label' => 'Qui sommes nous', 'active' => true],
            ],
        ])
        <div class="container pb-120">
            <div class="aditional__wrap">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="aditional__content">
                            <div class="aditional__item pb-30 wow fadeInUp" data-wow-duration="1.1s">
                                <h2 class="white fw-700 mb-30">
                                   Pour la petite histoire
                                </h2>
                                <p class="fz-18 fw-400 white bodyfont">
                                    In 2013, Stoky launched as a Tumblr blog with 10 high-resolution photos that could be
                                    used for anything. Today, Stoky powers more people and products than any other visual
                                    search engine in the world, with more than 100 million images downloaded every
                                    month—more than the rest of the industry combined.
                                </p>
                            </div>
                            <div class="aditional__item pb-30 pt-30 wow fadeInDown" data-wow-duration="1.3s">
                                <h4 class="white fw-700 mb-20">
                                    Unlimited royalty-free downloads
                                </h4>
                                <p class="fz-18 fw-400 white bodyfont">
                                    Create with images only stoky subscribers have access to. New images added every month.
                                </p>
                            </div>
                            <a href="#0" class="white__btn text-white btnround5">
                                Browse Photos
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aditional__thumb">
                            <img src="assets/img/about/aditional1.jpg" class="w-100" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- grow section Here -->
   <section class="grw__section overhid ralt pt-130 pb-130">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="grow__thumb wow fadeInUp" data-wow-duration="1.2s">
          <img src="assets/img/collaction/gro-thumb.jpg" alt="image" class="w-100">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="grw__content">
          <h2 class="white mb-30 wow flipInX" data-wow-duration="1.3s">
            Développez votre audience sur les réseaux sociaux
            grâce aux ressources Stoky
          </h2>
          <p class="mb-30 fz-18 white wow flipInY" data-wow-duration="1.5s">
            Découvrez des photographies, des vidéos et de superbes illustrations vectorielles.
            Des ressources garanties pour un usage personnel ou commercial.
          </p>
          <ul class="grow__list mb-40 wow fadeInUp" data-wow-duration="1.7s">
            <li>Accédez à l’intégralité de notre bibliothèque d’images</li>
            <li>Téléchargements illimités</li>
            <li>Droits de licence Pro sur tous les téléchargements</li>
            <li>Accès à l’éditeur en ligne</li>
            <li>Aucune attribution requise</li>
          </ul>
          <a href="pricing.html" class="new__btn base wow fadeInDown" data-wow-duration="1.5s">
            <span class="base">Voir les collections</span>
            <i class="material-symbols-outlined base">arrow_right_alt</i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="grow__shape wow fadeInUp" data-wow-duration="1.9s">
    <img src="assets/img/collaction/grow-shape.png" alt="image">
  </div>
</section>
<!-- grow section End -->

<!-- text section here -->
<section class="text__slider pt-120">
  <div class="text__wrap1 mb-30 owl-theme owl-carousel">
    <img src="assets/img/testimonial/tslide1.png" alt="image">
    <img src="assets/img/testimonial/tslide1.png" alt="image">
  </div>
  <div class="text__wrap2 owl-theme owl-carousel">
    <img src="assets/img/testimonial/tslide2.png" alt="image">
    <img src="assets/img/testimonial/tslide2.png" alt="image">
  </div>
</section>
<!-- text section End -->

<!-- team section here -->
<section class="team__section pt-120">
  <div class="container">
    <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow flipInX" data-wow-duration="1.2s">
      <h2 class="title wow flipInX">
        Faites connaissance avec notre <span class="gratext">Équipe</span>
      </h2>
      <div class="faq__switcher d-flex align-items-center">
        <p class="fz-18 fw-400 title">
          Créez avec des images accessibles uniquement aux abonnés Stoky.
          <span class="d-block">De nouvelles images sont ajoutées chaque mois.</span>
        </p>
      </div>
    </div>
  </div>
  <div class="team__wrap owl-theme owl-carousel">
    <div class="team__item ralt wow flipInX">
      <img src="assets/img/team/t4.jpg" alt="image">
      <div class="team__content">
        <h4 class="white fw-700 mb-16">Thiemer Mann</h4>
        <span class="white fz-16 fw-500 d-block">Marketing des réseaux sociaux</span>
      </div>
    </div>
    <div class="team__item ralt wow flipInX">
      <img src="assets/img/team/t5.jpg" alt="image">
      <div class="team__content">
        <h4 class="white fw-700 mb-16">Anjon Man</h4>
        <span class="white fz-16 fw-500 d-block">Marketing des réseaux sociaux</span>
      </div>
    </div>
    <div class="team__item ralt wow flipInX">
      <img src="assets/img/team/t1.jpg" alt="image">
      <div class="team__content">
        <h4 class="white fw-700 mb-16">Milan Jr</h4>
        <span class="white fz-16 fw-500 d-block">Marketing des réseaux sociaux</span>
      </div>
    </div>
    <div class="team__item ralt wow flipInX">
      <img src="assets/img/team/t3.jpg" alt="image">
      <div class="team__content">
        <h4 class="white fw-700 mb-16">Milan Jr</h4>
        <span class="white fz-16 fw-500 d-block">Marketing des réseaux sociaux</span>
      </div>
    </div>
  </div>
</section>
<!-- team section End -->

<!-- company sponsor Here -->
<section class="conpayny__sponsor pt-130 pb-130">
  <div class="container">
    <div class="company__wrapper">
      <span class="fz-24 fw-700 sponsor__head white bodyfont mb-60">
        Au service des plus grandes marques mondiales
      </span>
      <div class="company__innter owl-theme owl-carousel">
        <div class="company__item"><img src="assets/img/spnosor/amazon.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/bose.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/microsoft.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/netflix.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/samsung.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/toyota.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/amazon.png" alt="image"></div>
        <div class="company__item"><img src="assets/img/spnosor/bose.png" alt="image"></div>
      </div>
    </div>
  </div>
</section>
<!-- company sponsor End -->

<!-- testimonial section here -->
<section class="testimonia__section ralt overhid bgsection pt-120 pb-130">
  <div class="testimonial__thmewrap owl-theme owl-carousel">
    <div class="testomomoal__slide">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <div class="d-flex img__ending align-items-center">
              <div class="thumbs">
                <img src="assets/img/testimonial/texwman.jpg" class="roundtop" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="testi__content">
              <h2 class="title mb-60">Ce que disent certains de nos clients satisfaits</h2>
              <i class="material-symbols-outlined">format_quote</i>
              <p class="title fz-24 mb-24">
                « Bienvenue dans notre agence digitale. Nous aidons des entreprises comme la vôtre
                à réussir en ligne : de la conception et du développement de sites web au marketing digital. »
              </p>
              <div class="client d-flex align-items-center">
                <img src="assets/img/testimonial/client.png" class="round50" alt="image">
                <div class="content">
                  <h6 class="title mb-1">Delores Olivo</h6>
                  <span class="ftext fz-18 d-block">Royaume-Uni</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testomomoal__slide">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <div class="d-flex img__ending align-items-center">
              <div class="thumbs">
                <img src="assets/img/testimonial/testbig1.jpg" class="roundtop" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="testi__content">
              <h2 class="title mb-60">Ce que disent certains de nos clients satisfaits</h2>
              <i class="material-symbols-outlined">format_quote</i>
              <p class="title fz-24 mb-24">
                « Notre équipe a trouvé en Stoky un véritable accélérateur : des contenus de qualité
                et un accompagnement efficace pour booster notre présence en ligne. »
              </p>
              <div class="client d-flex align-items-center">
                <img src="assets/img/blog/recent1.jpg" class="round50" alt="image">
                <div class="content">
                  <h6 class="title mb-1">Lukas Mehtaj</h6>
                  <span class="ftext fz-18 d-block">Royaume-Uni</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testomomoal__slide">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <div class="d-flex img__ending align-items-center">
              <div class="thumbs">
                <img src="assets/img/testimonial/test1.jpg" class="roundtop" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="testi__content">
              <h2 class="title mb-60">Ce que disent certains de nos clients satisfaits</h2>
              <i class="material-symbols-outlined">format_quote</i>
              <p class="title fz-24 mb-24">
                « Des visuels superbes, des licences claires, et une équipe réactive : parfait pour nos campagnes. »
              </p>
              <div class="client d-flex align-items-center">
                <img src="assets/img/blog/recent4.jpg" class="round50" alt="image">
                <div class="content">
                  <h6 class="title mb-1">Devid Moj</h6>
                  <span class="ftext fz-18 d-block">Royaume-Uni</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mask">
    <img src="assets/img/testimonial/testi-mask.png" alt="image">
  </div>
  <div class="start__element">
    <img src="assets/img/testimonial/testi-element.png" alt="image">
  </div>
</section>
<!-- testimonial section End -->

<!-- Faq Here -->
<section class="faq__section pb-130 pt-130">
  <div class="container">
    <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow flipInY" data-wow-duration="1.2s">
      <h2 class="title">
        Foire aux <span class="gratext">Questions</span>
      </h2>
      <div class="faq__switcher d-flex align-items-center">
        <span class="ques">Questions générales</span>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="checkss">
          <label class="form-check-label fz-16 bodyfont base" for="checkss">Membres & Contributeurs</label>
        </div>
      </div>
    </div>

    <div class="row g-4 align-items-center justify-content-between">
      <div class="col-xl-6 col-lg-6">
        <div class="app__content">
          <div class="accordion__wrap">
            <div class="accordion" id="accordionExample">
              <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-duration="1s">
                <div class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Comment puis-je demander une carte de crédit sur la marketplace ?
                  </button>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Oui, les images peuvent être gratuites, mais l’usage dépend de la licence associée.
                        Les photographes peuvent choisir 3 types de licence pour partager leurs photos.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Comment fonctionne la marketplace de cartes de crédit ?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Il s’agit d’une liste des questions les plus courantes et de leurs réponses concernant un sujet
                      ou un produit. Dans le cas d’une marketplace de cartes de crédit, cela explique le fonctionnement général.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Comment puis-je améliorer mon score de crédit ?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Il s’agit d’une liste de questions/réponses courantes liées à un sujet précis. Ici, nous
                      détaillons les bonnes pratiques pour améliorer votre score de crédit.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                <h2 class="accordion-header" id="headingThree4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                    Quelles compétences sont nécessaires pour travailler en IA et en ML ?
                  </button>
                </h2>
                <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Cela couvre les questions fréquentes : mathématiques, programmation (Python), traitement des données,
                      et bases des réseaux de neurones pour démarrer.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6">
        <div class="app__content">
          <div class="accordion__wrap">
            <div class="accordion" id="accordionExample2">
              <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-duration="1.1s">
                <div class="accordion-header" id="headingTwo5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                    Puis-je vendre mes photos sur Stoky ?
                  </button>
                  <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                      <p>
                        Oui, mais l’usage de chaque image dépend de la licence sélectionnée.
                        Les contributeurs peuvent choisir parmi 3 types de licence pour partager leurs photos.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                <h2 class="accordion-header" id="headingOne6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                    Comment puis-je soutenir ce site ?
                  </button>
                </h2>
                <div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne6" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>
                      Vous pouvez vous abonner, partager la plateforme autour de vous et contribuer en publiant vos contenus
                      sous la licence adaptée.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                <h2 class="accordion-header" id="headingThree7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                    Comment ajouter/modifier ma photo de profil ?
                  </button>
                </h2>
                <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>
                      Accédez à vos paramètres de compte, ouvrez la section « Profil », puis importez une nouvelle image
                      ou remplacez l’existante.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
              <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                <h2 class="accordion-header" id="headingThree47">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree48" aria-expanded="false" aria-controls="collapseThree48">
                    Retouches photo en ligne faciles sur tout appareil
                  </button>
                </h2>
                <div id="collapseThree48" class="accordion-collapse collapse" aria-labelledby="headingThree47" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>
                      Modifiez vos images directement depuis le navigateur : outils simples, résultats rapides,
                      aucune installation nécessaire.
                    </p>
                  </div>
                </div>
              </div>
              <!--Accordion items-->
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Faq End -->
@endsection
