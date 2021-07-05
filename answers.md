## risposte esercitazione 02/07/21

SELECT * FROM `students` WHERE `date_of_birth` BETWEEN '1990-01-01' AND '1990-12-31'

SELECT * FROM `courses` WHERE `cfu`> 10

SELECT * FROM `students` WHERE `date_of_birth` < "1990-07-02" ORDER BY `students`.`date_of_birth` DESC

SELECT * FROM `courses` WHERE `period` = "I semestre"

SELECT * FROM `exams` WHERE `hour`> "14:00:00" AND `date` = "2020-06-20"

SELECT * FROM `degrees` WHERE `level` = "magistrale"

SELECT * FROM `departments`

SELECT * FROM `teachers` WHERE `phone` IS NOT NULL

## risposte esercitazione 05/07/21

Quanti iscritti ci sono stati ogni anno?
SELECT COUNT(id), enrolment_date FROM students GROUP BY enrolment_date

Quanti insegnanti hanno l'ufficio nello stesso edificio?
SELECT COUNT(id), office_address FROM teachers GROUP BY office_address

Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT COUNT(id), department_id FROM degrees GROUP BY department_id

--

Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
SELECT *
FROM students
JOIN degrees
ON degrees.department_id = students.degree_id
WHERE degrees.department_id = 9
OR degrees.department_id = 10
OR degrees.department_id = 11


Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze

????


Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
SELECT * FROM `course_teacher` WHERE course_teacher.teacher_id = 44

Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome

????

Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti
SELECT *
FROM degrees
JOIN courses
ON courses.degree_id = degrees.id  
JOIN course_teacher
ON courses.id = course_teacher.course_id
ORDER BY `degrees`.`department_id` ASC, `courses`.`degree_id` ASC

Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)
SELECT DISTINCT(teacher_id)
FROM courses 
JOIN course_teacher
ON courses.id = course_teacher.course_id
WHERE courses.degree_id = 28 
OR courses.degree_id = 29 
OR courses.degree_id = 30 
OR courses.degree_id = 31

BONUS: Selezionare per ogni studente quanti tentativi d’esame ha sostenuto per superare ciascuno dei suoi esami
