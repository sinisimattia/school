## Creazione ambiente di sviluppo

Dopo aver clonato la repository assicurarsi di avere questi due strumenti installati:
- [Composer](htttps://getcompose.org)
- [NPM (NodeJS)](https://nodejs.org)

Posizionarsi nella root del progetto ed installare tutte le dipendenze.

Installare PHP e tutte le estensioni necessarie, queste verrano elencate al momento dell'installazione delle dipendenze con *Composer*:
> composer install

Per le dipendenze di NodeJS invece basta eseguire:
> npm install

### Build

Successivamente bisognerà fare la build ed un bundle di script e stili, per fare ciò eseguire:
> npm run dev

Ora copia i contenuti del file ***.env.example*** in un file chiamato precisamente ***.env***:
> cp .env.example .env

Personalizza i contenuti di quest'ultimo in base alle tue esigenze, per alcune variabili ci sono delle guide che ti spiegheranno cosa inserirci.

Come ultimo passo crea una chiave personale per l'istanza dell'app:
> php artisan key:generate

Sei quasi pronto a partire! Leggi [questa guida](database.md) per la configurazione del **database**.