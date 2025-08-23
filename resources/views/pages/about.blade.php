@extends('layouts.layout')
@section('titre', "A propos")
@section('content')
    <div class="breadcumnd__bannerattach ralt">
        @include('parties.banniere', [
            'title' => 'A propos',
            'items' => [['label' => 'Accueil', 'url' => route('home')], ['label' => 'Qui sommes nous', 'active' => true]],
        ])
        <div class="container pb-120">
            <div class="aditional__wrap">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="aditional__content">
                            <div class="aditional__item pb-30 wow fadeInUp" data-wow-duration="1.1s">
                                <h2 class="white fw-700 mb-30">
                                    Our Story
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
                        <img src="assets/img/collaction/gro-thumb.jpg" alt="img" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grw__content">
                        <h2 class="white mb-30 wow flipInX" data-wow-duration="1.3s">
                            Grow your audience on social
                            network with stoky assets
                        </h2>
                        <p class="mb-30 fz-18 white wow flipInY" data-wow-duration="1.5s">
                            Find amazing photography, videos & stunning vector illustrations. Fully guaranteed resources for
                            personal or commercial use.
                        </p>
                        <ul class="grow__list mb-40 wow fadeInUp" data-wow-duration="1.7s">
                            <li>
                                Access our entire library of images
                            </li>
                            <li>Unlimited downloads</li>
                            <li>Pro license rights on all downloads</li>
                            <li>Online editor access</li>
                            <li>No attribution required</li>
                        </ul>
                        <a href="pricing.html" class="new__btn base wow fadeInDown" data-wow-duration="1.5s">
                            <span class="base">
                                View collections
                            </span>
                            <i class="material-symbols-outlined base">
                                arrow_right_alt
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grow__shape wow fadeInUp" data-wow-duration="1.9s">
            <img src="assets/img/collaction/grow-shape.png" alt="img">
        </div>
    </section>
    <!-- grow section End -->

    <!-- text section here -->
    <section class="text__slider pt-120">
        <div class="text__wrap1 mb-30 owl-theme owl-carousel">
            <img src="assets/img/testimonial/tslide1.png" alt="img">
            <img src="assets/img/testimonial/tslide1.png" alt="img">
        </div>
        <div class="text__wrap2 owl-theme owl-carousel">
            <img src="assets/img/testimonial/tslide2.png" alt="img">
            <img src="assets/img/testimonial/tslide2.png" alt="img">
        </div>
    </section>
    <!-- text section End -->

    <!-- team section here -->
    <section class="team__section pt-120">
        <div class="container">
            <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow flipInX"
                data-wow-duration="1.2s">
                <h2 class="title wow flipInX">
                    Meet the awesome <span class="gratext">Team</span>
                </h2>
                <div class="faq__switcher d-flex align-items-center">
                    <p class="fz-18 fw-400 title">
                        Create with images only stoky subscribers have access to. New
                        <span class="d-block">
                            images added every month.
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="team__wrap owl-theme owl-carousel">
            <div class="team__item ralt wow flipInX">
                <img src="assets/img/team/t4.jpg" alt="img">
                <div class="team__content">
                    <h4 class="white fw-700 mb-16">
                        Thiemer mann
                    </h4>
                    <span class="white fz-16 fw-500 d-block">
                        Social Media Marketing
                    </span>
                </div>
            </div>
            <div class="team__item ralt wow flipInX">
                <img src="assets/img/team/t5.jpg" alt="img">
                <div class="team__content">
                    <h4 class="white fw-700 mb-16">
                        Anjon Man
                    </h4>
                    <span class="white fz-16 fw-500 d-block">
                        Social Media Marketing
                    </span>
                </div>
            </div>
            <div class="team__item ralt wow flipInX">
                <img src="assets/img/team/t1.jpg" alt="img">
                <div class="team__content">
                    <h4 class="white fw-700 mb-16">
                        Milan Jr
                    </h4>
                    <span class="white fz-16 fw-500 d-block">
                        Social Media Marketing
                    </span>
                </div>
            </div>
            <div class="team__item ralt wow flipInX">
                <img src="assets/img/team/t3.jpg" alt="img">
                <div class="team__content">
                    <h4 class="white fw-700 mb-16">
                        Milan Jr
                    </h4>
                    <span class="white fz-16 fw-500 d-block">
                        Social Media Marketing
                    </span>
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
                    Serving the world’s top brands
                </span>
                <div class="company__innter owl-theme owl-carousel">
                    <div class="company__item">
                        <img src="assets/img/spnosor/amazon.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/bose.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/microsoft.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/netflix.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/samsung.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/toyota.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/amazon.png" alt="img">
                    </div>
                    <div class="company__item">
                        <img src="assets/img/spnosor/bose.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company sponsor End -->

    <!-- testimonail section hre -->
    <section class="testimonia__section ralt overhid bgsection pt-120 pb-130">
        <div class="testimonial__thmewrap owl-theme owl-carousel">
            <div class="testomomoal__slide">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5">
                            <div class="d-flex img__ending align-items-center">
                                <div class="thumbs">
                                    <img src="assets/img/testimonial/texwman.jpg" class="roundtop" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testi__content">
                                <h2 class="title mb-60">
                                    Some Of Our Respected Happy
                                    Clients Says
                                </h2>
                                <i class="material-symbols-outlined">
                                    format_quote
                                </i>
                                <p class="title fz-24 mb-24">
                                    “Welcome to our digital agency We specialize in helping business most like yours succeed
                                    online. From website design and development to digital marketing agency”
                                </p>
                                <div class="client d-flex align-items-center">
                                    <img src="assets/img/testimonial/client.png" class="round50" alt="img">
                                    <div class="content">
                                        <h6 class="title mb-1">
                                            Delores Olivo
                                        </h6>
                                        <span class="ftext fz-18 d-block">
                                            From UK
                                        </span>
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
                                    <img src="assets/img/testimonial/testbig1.jpg" class="roundtop" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testi__content">
                                <h2 class="title mb-60">
                                    Some Of Our Respected Happy
                                    Clients Says
                                </h2>
                                <i class="material-symbols-outlined">
                                    format_quote
                                </i>
                                <p class="title fz-24 mb-24">
                                    “Welcome to our digital agency We specialize in helping business most like yours succeed
                                    online. From website design and development to digital marketing agency”
                                </p>
                                <div class="client d-flex align-items-center">
                                    <img src="assets/img/blog/recent1.jpg" class="round50" alt="img">
                                    <div class="content">
                                        <h6 class="title mb-1">
                                            Lukas Mehtaj
                                        </h6>
                                        <span class="ftext fz-18 d-block">
                                            From UK
                                        </span>
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
                                    <img src="assets/img/testimonial/test1.jpg" class="roundtop" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testi__content">
                                <h2 class="title mb-60">
                                    Some Of Our Respected Happy
                                    Clients Says
                                </h2>
                                <i class="material-symbols-outlined">
                                    format_quote
                                </i>
                                <p class="title fz-24 mb-24">
                                    “Welcome to our digital agency We specialize in helping business most like yours succeed
                                    online. From website design and development to digital marketing agency”
                                </p>
                                <div class="client d-flex align-items-center">
                                    <img src="assets/img/blog/recent4.jpg" class="round50" alt="img">
                                    <div class="content">
                                        <h6 class="title mb-1">
                                            Devid Moj
                                        </h6>
                                        <span class="ftext fz-18 d-block">
                                            From UK
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mask">
            <img src="assets/img/testimonial/testi-mask.png" alt="img">
        </div>
        <div class="start__element">
            <img src="assets/img/testimonial/testi-element.png" alt="img">
        </div>
    </section>
    <!-- testimonail section End -->

    <!-- Faq Here -->
    <section class="faq__section pb-130 pt-130">
        <div class="container">
            <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow flipInY"
                data-wow-duration="1.2s">
                <h2 class="title">
                    Frequently Ask <span class="gratext">Questions</span>
                </h2>
                <div class="faq__switcher d-flex align-items-center">
                    <span class="ques">
                        General Questions
                    </span>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="checkss">
                        <label class="form-check-label fz-16 bodyfont base" for="checkss">Members & Contributors</label>
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How do I apply for a credit card on the marketplace?
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Yes, the images are free, but the usage depends on the image license.
                                                    Photographers can select 3 types of license to share their photos
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How does the credit card marketplace work?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It refers to a list of common questions and answers related to a particular
                                                topic or product. In the case of a credit card marketplace website
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How can I improve my credit score?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It refers to a list of common questions and answers related to a particular
                                                topic or product. In the case of a credit card marketplace website
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                                    <h2 class="accordion-header" id="headingThree4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree4"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What skills do I need to work in AI and ML?
                                        </button>
                                    </h2>
                                    <div id="collapseThree4" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It refers to a list of common questions and answers related to a particular
                                                topic or product. In the case of a credit card marketplace website
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo5"
                                            aria-expanded="false" aria-controls="collapseTwo5">
                                            Can I sell my photos on stoky?
                                        </button>
                                        <div id="collapseTwo5" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo5" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p>
                                                    Yes, the images are free, but the usage depends on the image license.
                                                    Photographers can select 3 types of license to share their photos
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                                    <h2 class="accordion-header" id="headingOne6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true"
                                            aria-controls="collapseOne6">
                                            How can I support this site?
                                        </button>
                                    </h2>
                                    <div id="collapseOne6" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne6" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, the images are free, but the usage depends on the image license.
                                                Photographers can select 3 types of license to share their photos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                                    <h2 class="accordion-header" id="headingThree7">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree7"
                                            aria-expanded="false" aria-controls="collapseThree7">
                                            How do I add/change my profile picture?
                                        </button>
                                    </h2>
                                    <div id="collapseThree7" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree7" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, the images are free, but the usage depends on the image license.
                                                Photographers can select 3 types of license to share their photos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Accordion items-->
                                <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                                    <h2 class="accordion-header" id="headingThree47">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree48"
                                            aria-expanded="false" aria-controls="collapseThree48">
                                            Easy Online Photo Edits any devie
                                        </button>
                                    </h2>
                                    <div id="collapseThree48" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree47" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, the images are free, but the usage depends on the image license.
                                                Photographers can select 3 types of license to share their photos
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
