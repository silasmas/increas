@extends('layouts.layout')

@section('content')
    <div class="breadcumnd__bannerattach ralt">
        @include('parties.banniere', [
            'title' => 'Nous contacter',
            'items' => [
                ['label' => 'Accueil', 'url' => route('home')],
                ['label' => 'Contactez-nous', 'active' => true],
            ],
        ])
    </div>
    <!-- contact Section here -->
    <section class="contact__section pb-130">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact__lefttext">
                        <h2 class="white mb-40">
                            Vous avez un projet en tête ?<br>
                            Parlons-en.
                        </h2>

                        <p class="white fz-14 mb-40">
                            Dites-nous ce dont vous avez besoin : objectifs, délais, budget. Notre équipe vous répond
                            rapidement
                            pour vous proposer la meilleure solution.
                        </p>

                        <img src="assets/img/contact/arrow.png" alt="Flèche décorative">

                        <ul class="social__phone mt-40">
                            <li>
                                <a href="#0" class="d-flex align-items-center">
                                    <span class="icon">
                                        <!-- icône localisation -->
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" fill="white" fill-opacity="0.08" />
                                            <path
                                                d="M28.5881 18.7941C28.5881 21.2877 27.3311 23.5456 25.7676 25.3896C24.0861 27.3726 22.0503 28.8769 20.842 29.681C20.2027 30.1063 19.3855 30.1063 18.7461 29.681C17.5379 28.8769 15.502 27.3726 13.8206 25.3896C12.257 23.5456 11 21.2877 11 18.7941C11 13.9372 14.9372 10 19.7941 10C24.6509 10 28.5881 13.9372 28.5881 18.7941Z"
                                                stroke="white" />
                                            <path
                                                d="M23.0916 18.7944C23.0916 20.6157 21.6152 22.0921 19.7939 22.0921C17.9725 22.0921 16.4961 20.6157 16.4961 18.7944C16.4961 16.9731 17.9725 15.4966 19.7939 15.4966C21.6152 15.4966 23.0916 16.9731 23.0916 18.7944Z"
                                                stroke="white" />
                                        </svg>
                                    </span>
                                    <span class="fz-16 phonetext white fw-500 bodyfont">
                                        785 15th Street, Bureau 478, Berlin
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="tel:+18005554565" class="d-flex align-items-center">
                                    <span class="icon">
                                        <!-- icône téléphone -->
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" fill="white" fill-opacity="0.08" />
                                            <path
                                                d="M28.59 25.3838C28.59 25.7009 28.5195 26.0268 28.3698 26.3439C28.2201 26.661 28.0263 26.9605 27.7708 27.2423C27.3392 27.718 26.8636 28.0615 26.3263 28.2817C25.7978 28.5019 25.2253 28.6164 24.6087 28.6164C23.7103 28.6164 22.7502 28.405 21.7372 27.9734C20.7243 27.5418 19.7113 26.9605 18.7072 26.2294C17.6942 25.4895 16.7341 24.6703 15.8181 23.7631C14.9108 22.847 14.0917 21.8869 13.3606 20.8828C12.6383 19.8787 12.057 18.8745 11.6342 17.8792C11.2114 16.8751 11 15.915 11 14.9989C11 14.4 11.1057 13.8274 11.3171 13.2989C11.5285 12.7616 11.8632 12.2684 12.33 11.828C12.8938 11.2731 13.5103 11 14.1621 11C14.4088 11 14.6554 11.0528 14.8756 11.1585C15.1046 11.2642 15.3072 11.4228 15.4658 11.6518L17.5093 14.5321C17.6678 14.7523 17.7823 14.9549 17.8616 15.1487C17.9409 15.3336 17.9849 15.5186 17.9849 15.686C17.9849 15.8974 17.9233 16.1088 17.7999 16.3114C17.6854 16.5139 17.5181 16.7253 17.3067 16.9367L16.6373 17.6326C16.5404 17.7295 16.4963 17.844 16.4963 17.9849C16.4963 18.0554 16.5051 18.117 16.5227 18.1875C16.5492 18.258 16.5756 18.3108 16.5932 18.3637C16.7518 18.6543 17.0248 19.0331 17.4124 19.4911C17.8087 19.9491 18.2315 20.416 18.6896 20.8828C19.1652 21.3496 19.6232 21.7813 20.0901 22.1776C20.5481 22.5652 20.9269 22.8294 21.2263 22.988C21.2704 23.0056 21.3232 23.032 21.3849 23.0584C21.4553 23.0849 21.5258 23.0937 21.6051 23.0937C21.7548 23.0937 21.8693 23.0408 21.9662 22.9439L22.6356 22.2833C22.8559 22.0631 23.0673 21.8958 23.2698 21.7901C23.4724 21.6667 23.675 21.6051 23.8952 21.6051C24.0626 21.6051 24.2387 21.6403 24.4325 21.7196C24.6263 21.7989 24.8289 21.9134 25.0491 22.0631L27.9646 24.133C28.1936 24.2916 28.3522 24.4766 28.4491 24.6968C28.5372 24.917 28.59 25.1372 28.59 25.3838Z"
                                                stroke="white" stroke-miterlimit="10" />
                                            <path d="M27.7348 16.1088H23.5068V11.8809" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="fz-16 phonetext white fw-500 bodyfont">+1 800 555 45 65</span>
                                </a>
                            </li>

                            <li>
                                <a href="mailto:info.aseet@company.com" class="d-flex align-items-center">
                                    <span class="icon">
                                        <!-- icône e-mail -->
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" fill="white" fill-opacity="0.08" />
                                            <path
                                                d="M11.2862 13.2862C11.4631 13.1094 11.7074 13 11.9772 13H27.6128C27.8826 13 28.1269 13.1094 28.3038 13.2862M11.2862 13.2862C11.1094 13.4631 11 13.7074 11 13.9772V25.7039C11 26.2436 11.4375 26.6811 11.9772 26.6811H27.6128C28.1525 26.6811 28.59 26.2436 28.59 25.7039V13.9772C28.59 13.7074 28.4806 13.4631 28.3038 13.2862M11.2862 13.2862L18.413 20.4129C19.1762 21.1762 20.4138 21.1762 21.177 20.4129L28.3038 13.2862"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="fz-16 phonetext white fw-500 bodyfont">info.aseet@company.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact__form">
                        <!-- Formulaire -->
                        <form action="#0" method="post">
                            <input type="text" name="name" placeholder="Votre nom complet" required>
                            <input type="email" name="email" placeholder="Votre adresse e-mail" required>

                            <select name="subject" required>
                                <option value="" selected disabled>Choisissez un sujet</option>
                                <option value="support">Support</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre</option>
                            </select>

                            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>

                            <div class="form-check d-flex align-items-center gap-2 mt-40 mb-40">
                                <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    J’accepte les conditions générales
                                </label>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="cmn--btn border-0 gap-2 mt-16 d-flex align-items-center">
                                    <span class="fz-16 tcapi title">Envoyer le message</span>
                                    <span>
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.9361 1.24537L12.3983 15.4155C12.1607 16.0235 11.3752 16.1968 10.8996 15.7462L7.77809 12.7886L5.86468 14.6839C5.57397 14.9718 5.07689 14.7679 5.07689 14.3607V10.2294L0.285574 5.68991C-0.237486 5.19434 -0.00732758 4.32242 0.693688 4.14387L16.8455 0.0299575C17.5728 -0.155315 18.2072 0.551629 17.9361 1.24537ZM15.691 2.28668L5.56759 8.82628L7.16934 10.3439L15.691 2.28668Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!-- /Formulaire -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact Section End -->

    <!-- map Section here -->
    <div class="map__section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13026993.027933573!2d-106.2559713014177!3d37.14275395502446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1690683311530!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- map Section End -->
@endsection
