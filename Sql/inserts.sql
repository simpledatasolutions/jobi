INSERT INTO questions (question_id, question) VALUES
(1, 'How old are you?'),
(2, 'Are you studying?'),
(3, 'Are you working?'),
(4, 'Are you married?'),
(5, 'Are you in a relationship?'),
(6, 'Where do you study ?'),
(7, 'Where do you work ?');

INSERT INTO answers (id, question_id, logic, answer, next_question_id) VALUES
(1, 1, '<', '18', 2),
(2, 1, '>=', '18', 3),
(3, 2, '=', 'Yes', 6),
(4, 2, '=', 'No', 3),
(5, 3, '=', 'Yes', 7),
(6, 3, '=', 'No', 2),
(7, 6, '!=', NULL, 5),
(8, 7, '!=', NULL, 4);