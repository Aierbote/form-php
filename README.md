# FORM PHP

## ASSIGNMENT

Il compito richiede di sviluppare una landing page interattiva utilizzando PHP, HTML e CSS, rispettando la UI fornita in allegato. La pagina dovrà includere un form. La validazione del form dovrà essere gestita tramite PHP (o Javascript) per assicurarsi che tutti i campi siano riempiti correttamente prima di inviare il messaggio.

## Requisiti Specifici

1. **Interfaccia Utente (UI)**: La landing page deve corrispondere fedelmente alla UI fornita in allegato. Prestare particolare attenzione al layout, ai colori, ai font e agli elementi interattivi come bottoni e campi del form.

2. **Form di Contatto**:

   - Tutti i campi sono obbligatori.
   - Implementare la validazione lato server in PHP per verificare che tutti i campi siano riempiti.
   - Per il campo Email, assicurarsi che il valore inserito rispetti il formato di un indirizzo email valido.

3. **Validazione e Feedback**:

   - Al clic sul bottone di invio, il form dovrà eseguire una richiesta al server PHP che valuterà i dati inseriti.
   - Se i dati non sono validi (ad esempio, se uno dei campi è vuoto o l'email non è nel formato corretto), il form dovrà visualizzare un messaggio di errore appropriato accanto al campo o ai campi interessati.
   - Se tutti i dati sono validi, il form dovrà visualizzare un messaggio di "Messaggio inviato" all'utente e nascondere il form di contatto.

4. **Aspetti Tecnici**:
   - Utilizzare PHP per la logica lato server, inclusa la validazione del form.
   - Utilizzare HTML e CSS per la struttura e lo stile della pagina. L'uso di framework CSS come Bootstrap è opzionale.
   - È consentito l'utilizzo di JavaScript per migliorare l'interattività della pagina, ma la logica di validazione principale deve essere gestita da PHP.

#### Criteri di Valutazione

- **Adesione alla UI**: Quanto fedelmente la pagina implementata corrisponde alla UI fornita.
- **Funzionalità del Form**: Corretta implementazione e funzionamento del form di contatto, inclusa la validazione dei campi.
- **Feedback Utente**: Chiarezza e appropriata gestione dei messaggi di feedback in caso di errore o di invio riuscito del form.
- **Qualità del Codice**: Pulizia, organizzazione e commenti nel codice sorgente per facilitare la comprensione e la manutenibilità.

Consegna

- Caricare tutti i file necessari (HTML, CSS, PHP) su GitHub.
- Assicurarsi di includere eventuali istruzioni specifiche per il test su un server locale nel README o in un documento di accompagnamento.
