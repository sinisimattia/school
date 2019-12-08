@extends('layouts.app')

@section('content')
<div class="welcome">
    <div class="hero is-white is-fullheight">
        <div class="hero-header has-text-centered">
            <p>Presentato da</p>
            <p class="title is-5">I.T.I.S. M. Faraday, Ostia</p>
        </div>

        <div class="hero-body container">
            <div class="columns is-vcentered is-8">
                <div class="column has-text-left">
                    <div class="has-text-black">
                        <h1>
                            <span class="title is-1">School</span>
                            <span class="title is-1 has-text-primary">++</span>
                            <span class="subtitle is-3">.space</span>
                        </h1>
                        <h2 class="subtitle is-5">La tua scuola al meglio.</h2>
                    </div>

                    @guest
                    <div class="has-text-centered section">
                        <a href="/login" class="button is-rounded is-primary is-large box is-inline">@lang('ui.login')</a>
                        <a href="/register" class="button is-rounded is-primary is-light is-large box is-inline">@lang('ui.register')</a>
                    </div>
                    @endif
                </div>

                <div class="column has-text-right is-hidden-touch">
                    <svg class="image" height="412pt" width="412pt" viewBox="0 -102 512.005 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m507.519531 111.746094-248.425781-111.082032c-1.96875-.882812-4.214844-.882812-6.183594 0l-100.71875 45.035157c-3.816406 1.707031-5.527344 6.183593-3.820312 10.003906 1.707031 3.820313 6.1875 5.53125 10.007812 3.824219l97.621094-43.652344 89.371094 39.960938v55.789062c-47.429688-17.34375-87.363282-18.660156-89.160156-18.710938-.140626-.003906-.28125-.003906-.421876 0-1.925781.050782-47.730468 1.5625-99.597656 22.746094-20.691406 8.445313-39.59375 18.960938-56.179687 31.25-1.242188.921875-2.148438 2.1875-2.640625 3.609375l-71.242188-31.859375 99.875-44.660156c3.820313-1.707031 5.53125-6.183594 3.820313-10.003906-1.707031-3.820313-6.1875-5.53125-10.003907-3.824219l-115.339843 51.574219c-2.726563 1.21875-4.480469 3.929687-4.480469 6.914062 0 2.988282 1.753906 5.695313 4.480469 6.914063l92.464843 41.351562v36.269531c0 4.183594 3.394532 7.574219 7.574219 7.574219 4.183594 0 7.574219-3.390625 7.574219-7.574219v-41.019531c0-.003906 0-.011719 0-.015625v-5.308594c14.828125-10.585937 31.570312-19.71875 49.824219-27.167968 47.46875-19.386719 90.707031-21.484375 94.085937-21.621094 3.308594.128906 43.691406 2.058594 89.367188 19.746094v75.265625c-11.074219 3.273437-19.183594 13.539062-19.183594 25.664062 0 11.140625 6.84375 20.710938 16.550781 24.730469l-5.296875 13.941406c-34.5625 5.949219-61.929687 14.136719-81.441406 24.394532-44.941406-23.609376-120.199219-30.28125-143.902344-31.847657v-21.246093c0-4.183594-3.394531-7.574219-7.574218-7.574219-4.183594 0-7.574219 3.390625-7.574219 7.574219v28.402343c0 4.050781 3.191406 7.386719 7.242187 7.566407.988282.042968 99.425782 4.640624 148.0625 32.339843 1.160156.660157 2.453125.992188 3.75.992188 1.292969 0 2.585938-.332031 3.75-.996094 16.351563-9.320313 40.871094-17.226563 71.40625-23.078125l-4.476562 11.789062c-.886719 2.328126-.570313 4.941407.84375 6.992188 1.414062 2.046875 3.746094 3.273438 6.234375 3.273438h38.375c2.492187 0 4.820312-1.226563 6.234375-3.273438 1.414062-2.050781 1.730468-4.664062.847656-6.992188l-6.847656-18.019531c20.609375-2.359375 35.273437-3.023437 35.441406-3.03125 4.050781-.175781 7.246094-3.511719 7.246094-7.566406v-28.402344c0-4.179687-3.394532-7.574219-7.574219-7.574219-4.183594 0-7.574219 3.394532-7.574219 7.574219v21.257813c-7.070312.476562-18.820312 1.417968-33.089844 3.140625l-3.660156-9.636719c9.703125-4.019531 16.550782-13.589844 16.550782-24.730469 0-12.128906-8.109376-22.390625-19.1875-25.664062v-68.847657c14.226562 6.527344 27.4375 14.09375 39.386718 22.625v5.308594.015625 41.019531c0 4.183594 3.390625 7.574219 7.574219 7.574219s7.574219-3.390625 7.574219-7.574219v-36.269531l92.464844-41.351562c2.726562-1.21875 4.480468-3.925781 4.480468-6.914063 0-2.984375-1.757812-5.695312-4.484375-6.914062zm-162.78125 179.097656 8.207031-21.597656 8.207032 21.597656zm19.820313-62.105469c0 6.402344-5.207032 11.609375-11.613282 11.609375-6.402343 0-11.609374-5.207031-11.609374-11.609375 0-6.40625 5.207031-11.613281 11.609374-11.613281 6.40625 0 11.613282 5.207031 11.613282 11.613281zm50.070312-78.21875c-.492187-1.421875-1.398437-2.6875-2.640625-3.609375-15.3125-11.347656-32.621093-21.160156-51.46875-29.25v-55.050781l125.351563 56.050781zm0 0" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="hero-footer container has-text-centered">
            <a href="/home" class="button is-primary">
                <span>@lang('ui.explore.schools')</span>
                <span class="icon">
                    <i class="fas fa-arrow-circle-right"></i>
                </span>
            </a>

            <a href="#info" class="button">
                <span>@lang('ui.info')</span>
                <span class="icon">
                    <i class="fas fa-arrow-down"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="content container section" id="info">
        <div class="columns is-variable">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <h3>Scopri i corsi della tua scuola in tempo reale e prenotati seguendo le <u>tue</u> passioni.</h3>
                        <p>Grazie alla nostra tecnologia avrai una lista di corsi aggiornata in tempo reale, da qui potrai vedere tutti i corsi disponibili nelle varie classi della tua scuola.</p>
                    </div>

                    <div class="card-footer">
                        <a href="/home" class="card-footer-item is-success">@lang('ui.discover.schools')</a>
                        <a href="/new/course" class="card-footer-item is-success">@lang('ui.new.course')</a>
                        <a href="/suggest" class="card-footer-item is-success">@lang('ui.new.activity')</a>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-content">
                        <h3>Resta anonimo, resta aggiornato</h3>
                        <p>La privacy non è un problema su questa piattaforma, se vuoi esplorare quello che propongono le scuole senza crearti un'account sei libero di farlo, non potrai però interagire con i corsi e con le attività.</p>
                    </div>

                    <div class="card-footer">
                        <a href="/register" class="card-footer-item is-success">@lang('ui.create') account</a>
                        <a href="/home" class="card-footer-item is-success">Prosegui anonimamente</a>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-content">
                        <h3>I tuoi dati sono al sicuro</h3>
                        <p>Grazie ai nostri database ed alle nostre A.P.I. possiamo garantirvi sicurezza, i vostri dati di accesso sono in una cassaforte impenetrabile.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <h3>Gestisci la tua scuola al meglio.</h3>
                        <p>Mettiamo a disposizione un pannello di controllo per gestire i corsi della scuola, richiamare assemblee e pubblicare annunci.</p>
                    </div>

                    <div class="card-footer">
                        <a href="/admin" class="card-footer-item is-success">@lang('ui.admin.panel')</a>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-content">
                        <h3>Dagli studenti, per gli studenti.</h3>
                        <p>Questa piattaforma è stata realizzata da studenti per facilitare la gestione della scuola durante la settimana dello studente. Non vogliamo tracciarvi per guadagnarci in pubblicità, crediamo nel web aperto ed anonimo.</p>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-content">
                        <h3>Tecnologie di ultima generazione</h3>
                        <p>Per garantire un'esperienza moderna ci assicuriamo di tenere le nostre tecnologie sempre aggiornate e al passo con i tempi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection