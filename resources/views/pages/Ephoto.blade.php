@extends("layouts.layout")
@section('titre', "Explorer photos")
@section("content")
 <div class="breadcumnd__bannerattach ralt">
        @include('parties.banniere', [
            'title' => 'Explorer nos photos',
            'items' => [['label' => 'Accueil', 'url' => route('home')],['label' => 'Explorer', 'url' =>"#"], ['label' => 'Photo', 'active' => true]],
        ])

 </div>


<!-- collaction version one here -->
<section class="collaction__v1 pb-130">
   <div class="container">
      <div class="common__head mb-50 d-flex align-items-center justify-content-center flex-wrap wow fadeInDown" data-wow-duration="1.2s">
         <div class="common__tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                  Popular
               </button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                  Trending
               </button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                  Corporate
               </button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tabre" data-bs-toggle="tab" data-bs-target="#contactre" type="button" role="tab" aria-controls="contactre" aria-selected="false">
                     Romantic
                </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tabre1" data-bs-toggle="tab" data-bs-target="#contactre1" type="button" role="tab" aria-controls="contactre1" aria-selected="false">
                     Life Style
                </button>
                </li>
             </ul>
         </div>
      </div>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade title show active " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row g-4">
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.1s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga1.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga1.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga2.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga2.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga3.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga3.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga4.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga4.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga12.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga5.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/g.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga6.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga16.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga7.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.3s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga5.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga11.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga6.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga13.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga15.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga12.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga9.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga7.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga8.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga10.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga14.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga17.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga18.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
         <div class="tab-pane fade title" id="profile"  role="tabpanel" aria-labelledby="profile-tab">
            <div class="row g-4">
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga1.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga1.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga2.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga2.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga3.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga3.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga4.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga4.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga12.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga5.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/g.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga6.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga16.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga7.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga5.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga11.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga6.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga13.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga15.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga12.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
         <div class="tab-pane fade title" id="contact"  role="tabpanel" aria-labelledby="contact-tab">
            <div class="row g-4">
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.1s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga1.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga1.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga2.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga2.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga3.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga3.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga4.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga4.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga12.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga5.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/g.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga6.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga16.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga7.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.3s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga5.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga11.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga6.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga13.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga15.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga12.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga9.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga7.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga8.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga10.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga14.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga17.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga18.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
         <div class="tab-pane fade title" id="contactre"  role="tabpanel" aria-labelledby="contact-tabre">
            <div class="row g-4">
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga1.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga1.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga2.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga2.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga3.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga3.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga4.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga4.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga12.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga5.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/g.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga6.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga16.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga7.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga5.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga11.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga6.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga13.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga15.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga12.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
          <div class="tab-pane fade title" id="contactre1"  role="tabpanel" aria-labelledby="contact-tabre1">
            <div class="row g-4">
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.1s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga1.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga1.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga2.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga2.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga3.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga3.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga4.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga4.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga12.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga5.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/g.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga6.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga16.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga7.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.3s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga5.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga11.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga6.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/gallery/ga10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga13.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga15.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Spark Your Imagination
                     </a>
                     <a href="assets/img/gallery/ga12.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb overhid ralt">
                     <img src="assets/img/gallery/ga.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/gallery/ga.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
               <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga9.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga7.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga8.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga10.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c11.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga14.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c8.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga17.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        Online Editor Access
                     </a>
                     <a href="assets/img/collaction/c9.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
                  <div class="collaction__thumb mb-24 overhid ralt">
                     <img src="assets/img/gallery/ga18.jpg" class="main__thumb overhid transition w-100" alt="img">
                     <a href="photo-details.html" class="text__abs fz-20 fw-500 white bodyfont">
                        The dog is a domesticated
                     </a>
                     <a href="assets/img/collaction/c10.jpg" class="adjact__down d-flex align-items-center" download>
                        <span class="down__text fz-14 ftext d-flex align-items-center gap-3">
                           Download: 2.4K
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
      </div>
   </div>
</section>
<!-- collaction version one End -->

<!-- trending here -->
<section class="tranding__section bgsection pt-130 pb-130">
   <div class="container">
      <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow fadeInDown" data-wow-duration="1.2s">
         <h2 class="title">
            Trending <span class="gratext">Collections</span> To Boost Your Ideas
         </h2>
         <a href="pricing.html" class="new__btn">
            <span>
               View Collections
            </span>
            <i class="material-symbols-outlined">
               arrow_right_alt
            </i>
         </a>
      </div>
      <div class="row g-4">
         <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1.2s">
            <div class="trending__item">
               <a href="categoris-images.html" class="trendint__thumb d-flex gap-1">
                  <div class="d-grid gap-1">
                     <img src="assets/img/collaction/t1.jpg" class="s-maintain" alt="img">
                     <img src="assets/img/collaction/t2.jpg" class="s-maintain" alt="img">
                  </div>
                  <img src="assets/img/collaction/t3.jpg" class="h-maintain" alt="img">
               </a>
               <div class="trending__cont mt-24 d-flex align-items-center justify-content-between">
                  <a href="categoris-images.html" class="fz-20 fw-500 title">Music & Event</a>
                  <span class="photo__like">2.5K Photos</span>
               </div>
            </div>
         </div>
         <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s">
            <div class="trending__item">
               <a href="categoris-images.html" class="trendint__thumb d-flex gap-1">
                  <div class="d-grid gap-1">
                     <img src="assets/img/collaction/t4.jpg" class="s-maintain" alt="img">
                     <img src="assets/img/collaction/t5.jpg" class="s-maintain" alt="img">
                  </div>
                  <img src="assets/img/collaction/t6.jpg" class="h-maintain" alt="img">
               </a>
               <div class="trending__cont mt-24 d-flex align-items-center justify-content-between">
                  <a href="categoris-images.html" class="fz-20 fw-500 title">Winter chill</a>
                  <span class="photo__like">2.5K Photos</span>
               </div>
            </div>
         </div>
         <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1.6s">
            <div class="trending__item">
               <a href="categoris-images.html" class="trendint__thumb d-flex gap-1">
                  <div class="d-grid gap-1">
                     <img src="assets/img/collaction/t7.jpg" class="s-maintain" alt="img">
                     <img src="assets/img/collaction/t8.jpg" class="s-maintain" alt="img">
                  </div>
                  <img src="assets/img/collaction/t9.jpg" class="h-maintain" alt="img">
               </a>
               <div class="trending__cont mt-24 d-flex align-items-center justify-content-between">
                  <a href="categoris-images.html" class="fz-20 fw-500 title">valentine day</a>
                  <span class="photo__like">2.5K Photos</span>
               </div>
            </div>
         </div>
         <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.8s">
            <div class="trending__item">
               <a href="categoris-images.html" class="trendint__thumb d-flex gap-1">
                  <div class="d-grid gap-1">
                     <img src="assets/img/collaction/t10.jpg" class="s-maintain" alt="img">
                     <img src="assets/img/collaction/t11.jpg" class="s-maintain" alt="img">
                  </div>
                  <img src="assets/img/collaction/t12.jpg" class="h-maintain" alt="img">
               </a>
               <div class="trending__cont mt-24 d-flex align-items-center justify-content-between">
                  <a href="categoris-images.html" class="fz-20 fw-500 title">life milestone</a>
                  <span class="photo__like">2.5K Photos</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- trending End -->

<!-- Faq Here -->
<section class="faq__section pb-130 pt-130">
   <div class="container">
      <div class="common__head mb-50 d-flex align-items-center justify-content-between flex-wrap gap-3 wow fadeInDown" data-wow-duration="1.2s">
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
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              How do I apply for a credit card on the marketplace?
                           </button>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>
                                    Yes, the images are free, but the usage depends on the image license. Photographers can select 3 types of license to share their photos
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              How does the credit card marketplace work?
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 It refers to a list of common questions and answers related to a particular topic or product. In the case of a credit card marketplace website
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              How can I improve my credit score?
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 It refers to a list of common questions and answers related to a particular topic or product. In the case of a credit card marketplace website
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                        <h2 class="accordion-header" id="headingThree4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                           What skills do I need to work in AI and ML?
                        </button>
                        </h2>
                        <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              It refers to a list of common questions and answers related to a particular topic or product. In the case of a credit card marketplace website
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
                              Can I sell my photos on stoky?
                           </button>
                           <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                 <p>
                                    Yes, the images are free, but the usage depends on the image license. Photographers can select 3 types of license to share their photos
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInDown" data-wow-duration="1.3s">
                        <h2 class="accordion-header" id="headingOne6">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                              How can I support this site?
                           </button>
                        </h2>
                        <div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne6" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                              <p>
                                 Yes, the images are free, but the usage depends on the image license. Photographers can select 3 types of license to share their photos
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInUp" data-wow-duration="1.5s">
                        <h2 class="accordion-header" id="headingThree7">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                              How do I add/change my profile picture?
                           </button>
                        </h2>
                        <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                              <p>
                                 Yes, the images are free, but the usage depends on the image license. Photographers can select 3 types of license to share their photos
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--Accordion items-->
                     <div class="accordion-item wow fadeInDown" data-wow-duration="1.7s">
                        <h2 class="accordion-header" id="headingThree47">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree48" aria-expanded="false" aria-controls="collapseThree48">
                          Easy Online Photo Edits any devie
                        </button>
                        </h2>
                        <div id="collapseThree48" class="accordion-collapse collapse" aria-labelledby="headingThree47" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                           <p>
                              Yes, the images are free, but the usage depends on the image license. Photographers can select 3 types of license to share their photos
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