@extends("layouts.layout")
@section('titre', "Explorer son")
@section("content")
 <div class="breadcumnd__bannerattach ralt">
        @include('parties.banniere', [
            'title' => 'Explorer nos sons',
            'items' => [['label' => 'Accueil', 'url' => route('home')],['label' => 'Explorer', 'url' =>"#"], ['label' => 'Son', 'active' => true]],
        ])

 </div>
 <!-- collaction version one here -->
<section class="collaction__v1 pt-130 pb-130 bgsection">
   <div class="container">
      <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow fadeInDown" data-wow-duration="1.2s">
         <h2 class="title">
           Musique premium des <span class="gratext">créateurs</span>
         </h2>
         <div class="music__tabs">
            <ul class="nav max-405 nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                     <i class="material-symbols-outlined">
                      view_headline
                     </i>
                  </button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                     <i class="material-symbols-outlined">
                        apps
                     </i>
                  </button>
               </li>
             </ul>
         </div>
      </div>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade title show active " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="audio__wrapper">
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms1.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              Something about you
                           </span>
                           <span class="roy fz-16">
                              Ray studio
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms2.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              Frintem life style
                           </span>
                           <span class="roy fz-16">
                              Educal wav
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms3.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              buildpress musicly
                           </span>
                           <span class="roy fz-16">
                              Awesome song
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms4.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              life of pie
                           </span>
                           <span class="roy fz-16">
                              Holly studio
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms5.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              love is blind
                           </span>
                           <span class="roy fz-16">
                              Play boy
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms6.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              napa fashion
                           </span>
                           <span class="roy fz-16">
                              Music go
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms7.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              napkin face music
                           </span>
                           <span class="roy fz-16">
                              believe musics 
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms8.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              All about songs
                           </span>
                           <span class="roy fz-16">
                              Ray studio
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners mb-10">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms9.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              Something about you
                           </span>
                           <span class="roy fz-16">
                              Ray studio
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
               <div class="audio__inners">
                  <div class="audio__item d-flex align-items-center w-100">
                     <div class="d-flex audio__singer align-items-center">
                        <div class="singer">
                           <img src="assets/img/videos/ms10.png" class="round50" alt="img">
                        </div>
                        <div class="contetn">
                           <span class="fz-16 fw-500 title bodyfont">
                              Programming songs
                           </span>
                           <span class="roy fz-16">
                              bad boyz
                           </span>
                        </div>
                     </div>
                     <div class="audio__right d-flex align-items-center">
                        <audio preload="auto" controls>
                           <source src="http://physical-authority.surge.sh/music/2.mp3">
                        </audio>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
                  <div class="audio__lit">
                     <div class="d-flex gap-3 align-items-center">
                        <span>
                           happy
                        </span>
                        <span>
                           mellow
                        </span>
                        <span>
                           cool
                        </span>
                        <span>
                           New
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade title" id="contact"  role="tabpanel" aria-labelledby="contact-tab">
            <div class="row g-4">
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              Something about you
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              love is blind
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              Napa fashion
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              Napkin face
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              Live horse racing
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="audio__boxes">
                     <div class="sound__thumb">
                        <img src="assets/img/videos/audio-sound.png" class="w-100" alt="img">
                     </div>
                     <audio preload="auto" controls>
                        <source src="http://physical-authority.surge.sh/music/2.mp3">
                     </audio>
                     <div class="audio__bexcontent">
                        <div class="contetn mb-4">
                           <span class="fz-20 d-block fw-500 title bodyfont">
                              Digital market news
                           </span>
                           <span class="roy text99 fz-16">
                              Ray studio
                           </span>
                        </div>
                        <div class="audio__lit mb-30">
                           <div class="d-flex gap-3 align-items-center">
                              <span>
                                 Happy
                              </span>
                              <span>
                                 Mellow
                              </span>
                              <span>
                                 Cool
                              </span>
                              <span>
                                 Mellow
                              </span>
                           </div>
                        </div>
                        <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                           <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                              Téléchargement : 2.4K
                              <i class="material-symbols-outlined ftext fz-18">
                                 favorite
                              </i>
                           </span>
                           <span class="download__icon">
                              <i class="material-symbols-outlined base">
                                 download
                              </i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pagination justify-content-end mt-50">
               <a href="javascript:void(0)">
                  1
               </a>
               <a href="javascript:void(0)">
                  2
               </a>
               <a href="javascript:void(0)">
                  3
               </a>
               <a href="javascript:void(0)" class="border-added">
                  <i class="fa-solid fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- collaction version one End -->
<!-- creation section here -->
<section class="socialfb__section pt-130">
   <div class="container">
      <div class="common__head d-flex align-items-center wow fadeInDown" data-wow-duration="1.2s">
         <h2 class="title max730 m-auto text-center">
            Téléchargez des titres sans revendications de 
            copyright pour vos besoins professionnels et créatifs.
         </h2>
      </div>
   </div>
   <div class="tagslider__wrap1 owl-theme owl-carousel">
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/gameremote.png" alt="img">
         </span>        
         Games
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/instagram.png" alt="img">
         </span>        
         Instagram
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/facebook.png" alt="img">
         </span>        
         Facebook
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/tiktok.png" alt="img">
         </span>        
         Tiktok
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/twitter.png" alt="img">
         </span>        
         Twitter
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/vimeo.png" alt="img">
         </span>        
         Vimeo 
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/twitch.png" alt="img">
         </span>        
         Twitch
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/docfile.png" alt="img">
         </span>        
         Commercial
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         <span class="game__controller">
            <img src="assets/img/social/gameremote.png" alt="img">
         </span>        
         Games
      </a>
   </div>
   <div class="tagslider__wrap2 mb-80 owl-theme owl-carousel">
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Broadcast
         <span class="game__controller">
            <img src="assets/img/social/tv.png" alt="img">
         </span>
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Websites
         <span class="game__controller">
            <img src="assets/img/social/code.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Wedding
         <span class="game__controller">
            <img src="assets/img/social/code.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Youtube
         <span class="game__controller">
            <img src="assets/img/social/youtubetwo.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Podcasts
         <span class="game__controller">
            <img src="assets/img/social/sound.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Applications
         <span class="game__controller">
            <img src="assets/img/social/mainfile.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Presentations
         <span class="game__controller">
            <img src="assets/img/social/manesment.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Websites
         <span class="game__controller">
            <img src="assets/img/social/facebook.png" alt="img">
         </span>        
      </a>
      <a href="javascript:void(0)" class="cmntag__item d-flex align-items-center justify-content-center gap-3">
         Broadcast
         <span class="game__controller">
            <img src="assets/img/social/gameremote.png" alt="img">
         </span>        
      </a>
   </div>
</section>
<!-- creation section End -->

@endsection