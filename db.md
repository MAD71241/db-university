Database Universitario
===
## Studenti
- Nome                                  VARCHAR 30 NOTNULL
- Cognome                               VARCHAR 60 NOTNULL
- badge_ID                              SMALLINT UNIQUE NOTNULL PRIMARY
- Anno di immatricolazione              TIMESTAMP(YYYY/YYYY) NOTNULL
- Facoltà                               VARCHAR 120 NOTNULL
- Dipartimento                          VARCHAR 120
- In corso                              TINYINT NOTNULL
- Esami sostenuti                       SMALLINT
- Esami programmati                     SMALLINT
## Corso di laurea
- Nome                                  VARCHAR 90 NOTNULL
- Tipo di corso                         VARCHAR 90
- Sede                                  VARCHAR 120
- Descrizione                           TEXT
- Sbocchi lavorativi                    TEXT
- Tipo di accesso                       VARCHAR 30
- Classe di corso                       VARCHAR 60
- Coordinatore                          VARCHAR 90

## Insegnamenti
- insegnamento_ID                       SMALLINT 10 NOTNULL PRIMARY
- Nome                                  VARCHAR 100
- Periodo                               TIMESTAMP(YYYY/YYYY) NOTNULL
- Descrizione                           TEXT
- SSD                                   VARCHAR 20
- CFU                                   TINYINT
- Appello programmato                   TINYINT