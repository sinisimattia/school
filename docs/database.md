## Configurazione database

Se hai già [creato il tuo ambiente di sviluppo](startup.md) possiamo ora creare il database che servirà alla nostra app.

Come prima cosa bisogna installare il DBMS, nel nostro caso è **PostgreSQL**, per scaricarlo basta eseguire questo da terminale:

> apt install postgresql

Assicurati che il servizio sia attivo con:

> service postgresql status

Se non lo è avvialo con:

> service postgresql start

### Migrations

Crea un nuovo database ed aggiorna il tuo file **.env**:
> DATABASE_URL=postgresql://postgres:[nome utente]@[host]:5432/[database] <br>
> DB_CONNECTION=pgsql <br>
> DB_HOST=127.0.0.1 <br>
> DB_PORT=5432 <br>
> DB_DATABASE=[il nome del tuo database] <br>
> DB_USERNAME=[il tuo nome utente del DBMS] <br>
> DB_PASSWORD=[password per il DBMS] <br>

Con il database vuoto effettua le **migrazioni** con:

> php artisan migrate

Sei pronto ad iniziare!