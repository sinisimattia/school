@extends('layouts.app')

@section('content')
<div class="welcome">
    <div class="content container section" id="info">
        <div class="columns is-variable">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <h3>Scopri i corsi della tua scuola in tempo reale e prenotati seguendo le <u>tue</u> passioni.</h3>
                        <p>Grazie alla nostra tecnologia avrai una lista di corsi aggiornata in tempo reale, da qui potrai vedere tutti i corsi disponibili nelle varie classi della tua scuola.</p>
                    </div>

                    <div class="card-footer">
                        <a href="/home" class="card-footer-item is-success">Scopri i corsi</a>
                        <a href="/pubblica" class="card-footer-item is-success">Crea un corso</a>
                        <a href="/consiglia" class="card-footer-item is-success">Consiglia un corso</a>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-content">
                        <h3>Prenotazioni anonime</h3>
                        <p>La privacy non è un problema su questa piattaforma, se vuoi prenotarti per un corso senza crearti un'account sei libero di farlo, i tuoi corsi saranno però salvati solo su un dispositivo.</p>
                    </div>

                    <div class="card-footer">
                        <a href="#" class="card-footer-item is-success">Crea account</a>
                        <a href="#" class="card-footer-item is-success">Prosegui anonimamente</a>
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
                        <a href="/admin" class="card-footer-item is-success">Accedi al pannello</a>
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