## risposte esercitazione 02/07/21

SELECT * FROM `students` WHERE `date_of_birth` BETWEEN '1990-01-01' AND '1990-12-31'

SELECT * FROM `courses` WHERE `cfu`> 10

SELECT * FROM `students` WHERE `date_of_birth` < "1990-07-02" ORDER BY `students`.`date_of_birth` DESC

SELECT * FROM `courses` WHERE `period` = "I semestre"

SELECT * FROM `exams` WHERE `hour`> "14:00:00" AND `date` = "2020-06-20"

SELECT * FROM `degrees` WHERE `level` = "magistrale"

SELECT * FROM `departments`

SELECT * FROM `teachers` WHERE `phone` IS NOT NULL