@extends("layouts.layout")
@section("content")
<section class="signin__section pt-60 pb-120">
   <div class="container">
      <div class="signin__wrapper">
         <div class="row g-4 flex-row-reverse">

            {{-- ===================== FORMULAIRE ===================== --}}
            <div class="col-xxl-4 col-xl-5 col-lg-5">
               <div class="signin__content">
                  {{-- Statut de session (ex: lien reset envoyé) --}}
                  <x-auth-session-status class="mb-4" :status="session('status')" />

                  {{-- Erreur globale éventuelle (mauvais identifiants) --}}
                  @if ($errors->has('email') && !old('email'))
                      <div class="alert alert-danger mb-3">
                          {{ $errors->first('email') }}
                      </div>
                  @endif

                  <h2 class="mb-60">Connectez-vous</h2>

                  <form method="POST" action="{{ route('login') }}">
                     @csrf

                     {{-- Email --}}
                     <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Adresse e-mail"
                        class="form__input mb-20 @error('email') is-invalid @enderror">
                     @error('email')
                         <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     {{-- Mot de passe --}}
                     <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Mot de passe"
                        class="form__input @error('password') is-invalid @enderror">
                     @error('password')
                         <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     {{-- Remember + Mot de passe oublié --}}
                     <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="form-check d-flex align-items-center gap-2">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                           <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                        </div>

                        @if (Route::has('password.request'))
                           <a class="fz-14 fw-500" href="{{ route('password.request') }}">
                              Mot de passe oublié ?
                           </a>
                        @endif
                     </div>

                     <button type="submit" class="cmn--btn login border-0 mt-10">
                        <span>Se connecter</span>
                     </button>
                  </form>
               </div>
            </div>

            {{-- ===================== VISUEL / ACTIONS SECONDAIRES ===================== --}}
            <div class="col-xxl-8 col-xl-7 col-lg-7">
               <div class="signin__thumb">
                  <div class="signcreat d-flex justify-content-end align-items-center gap-2">
                     
                      {{-- <a href="{{ route('register') }}" class="white__btn">
                           <span>Créer un compte</span>
                        </a>
                     @if (Route::is('register'))
                       <a href="{{ route('login') }}" class="cmn--btn">
                        <span>Se connecter</span>
                     </a>
                     @endif --}}
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

@endsection