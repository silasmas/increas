
@extends("layouts.layout")

@section("content")
<section class="signin__section pt-60 pb-120">
   <div class="container">
      <div class="signin__wrapper">
         <div class="row g-4 flex-row-reverse">

            {{-- ===================== FORMULAIRE ===================== --}}
            <div class="col-xxl-4 col-xl-5 col-lg-5">
               <div class="signin__content">
                  <h2 class="mb-60">Créer un compte</h2>

                  <form method="POST" action="{{ route('register') }}">
                     @csrf

                     {{-- Nom d’utilisateur --}}
                     <input
                        type="text"
                        class="form__input mb-20 tcapi @error('name') is-invalid @enderror"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Nom d’utilisateur">
                     @error('name')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     {{-- Adresse e-mail --}}
                     <input
                        type="email"
                        class="form__input mb-20 tcapi @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="username"
                        placeholder="Adresse e-mail">
                     @error('email')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     {{-- Mot de passe --}}
                     <input
                        type="password"
                        class="form__input mb-20 tcapi @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Mot de passe">
                     @error('password')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     {{-- Confirmation du mot de passe --}}
                     <input
                        type="password"
                        class="form__input tcapi @error('password_confirmation') is-invalid @enderror"
                        id="password_confirmation"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirmer le mot de passe">
                     @error('password_confirmation')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     <div class="form-check d-flex align-items-center gap-2 mt-30 mb-40">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" {{ old('terms') ? 'checked' : '' }}>
                        <label class="form-check-label" for="terms">
                           J’accepte les conditions générales d’utilisation
                        </label>
                     </div>
                     @error('terms')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                     @enderror

                     <button type="submit" class="cmn--btn login border-0">
                        <span>Créer mon compte</span>
                     </button>
                  </form>
               </div>
            </div>

            {{-- ===================== VISUEL / ACTIONS SECONDAIRES ===================== --}}
            <div class="col-xxl-8 col-xl-7 col-lg-7">
               <div class="signin__thumb creation__thumb">
                  <div class="signcreat d-flex justify-content-end align-items-center gap-2">
                     {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="cmn--btn">
                           <span>Créer un compte</span>
                        </a>
                     @endif
                     <a href="{{ route('login') }}" class="white__btn">
                        <span>Se connecter</span>
                     </a> --}}
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>



@endsection