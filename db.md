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

## Esami sostenuti
- Data                                  DATE
- Votazione                             TINYINT
- Passato                               TINYINT
- Insegnamento                          SMALLINT 10 NOTNULL PRIMARY
- Anno Accademico                       TIMESTAMP(YYYY/YYYY) NOTNULL
## Esami programmati
- Data                                  DATE
- Insegnamento                          SMALLINT 10 NOTNULL PRIMARY
- Anno Accademico                       TIMESTAMP(YYYY/YYYY) NOTNULL
## Corso di laurea
- corso_ID                              SMALLINT 20 NOTNULL PRIMARY
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