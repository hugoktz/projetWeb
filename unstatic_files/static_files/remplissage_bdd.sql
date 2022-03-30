INSERT INTO company (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available)
VALUES
('Total Energies', 'Oil', 4, 3.5, 80, 2),
('Axa', 'Insurance', 12, 4.2, 92, 4),
('Engie', 'Energies', 7, 4.3, 87, 6),
('Renault', 'Automotive', 17, 4.4, 93, 8),
('Orange', 'Telecommunications', 22, 4, 89, 3),
('Sanofi', 'Pharmaceutical', 6, 4.6, 90, 1),
('BNP Paribas', 'Bank', 3, 3.2, 68, 1),
('Credit Agricole', 'Bank', 10, 3.6, 70, 2),
('Bouygues', 'Telecommunications', 14, 3.3, 69, 7),
('CNP Assurances', 'Insurance', 2, 2.8, 55, 0);

INSERT INTO company (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available)
VALUES
('Hager', 'Electrical Systems', 4, 3.5, 80, 2),


INSERT INTO places (city, street_name, street_number, postal_code)
VALUES
('Lyon', 'Rue Valentin Couturier', 6, 69000),
('Nantes', 'Rue Paul Bellamy', 21, 44000),
('Rouen', 'Rue du Renard', 14, 76000),
('Paris', 'Rue Lemercier', 2, 75000),
('Lille', 'Rue de la Vinette', 12, 59000),
('Marseille', 'Rue Roger Brun', 4, 13000),
('Strasbourg', 'Rue de Gresswiller', 9, 67200),
('Fislis', 'Hameau de Losse', 6, 68480),
('Winkel', 'Rue de Lucelle', 11, 68480),
('Gerstheim', 'Rue Mozart', 8, 67150);

INSERT INTO promotions (promotion)
VALUES
('A1'),
('A2'),
('A3'),
('A4'),
('A5');


INSERT INTO roles (role_name)
VALUES
('student'),
('pilot'),
('representative'),
('admin');

INSERT INTO permissions (perms)
VALUES
('Authentification'),
('Search a company'),
('Create a company'),
('Update a company'),
('Delete a company'),
('Rate a company'),
('See company stats'),
('Search an offer'),
('Create an offer'),
('Update an offer '),
('Delete an offer'),
('See offer stats'),
('Search a pilot'),
('Create a pilot'),
('Update a pilot'),
('Delete a pilot'),
('Search a representative'),
('Create a representative'),
('Update a representative'),
('Delete a representative'),
('Give rights to a representative'),
('Search a student'),
('Create a student'),
('Update a student'),
('Delete a representative'),
('See offer stats'),
('Add an offer to the wish-list'),
('Delete an offer from the wish-list'),
('Apply to an offer'),
('Inform that application is on step 1'),
('Inform that application is on step 2'),
('Inform that application is on step 3'),
('Inform that application is on step 4'),
('Inform that application is on step 5'),
('Inform that application is on step 6');


INSERT INTO internship (internship_skills, internship_type_promotion, internship_salary, internship_offer_date, internship_start_date, internship_end_date, id_company)
VALUES
('HTML, CSS, JS, PHP', 'A2,A3', 3.90, '2021-12-21', '2022-03-31', '2022-09-30', 5),
('Networks', 'A4', 4.10, '2022-02-12','2022-04-02', '2022-06-01', 8),
('HTML, CSS', 'A2/A3', 3.90, '2022-02-12', '2022-01-31', '2022-06-30', 9),
('HTML, CSS', 'A2/A3', 3.90, '2022-01-27','2022-03-15', '2022-06-30', 7),
('SQL', 'A3', 3.90, '2021-10-30', '2022-03-31', '2022-07-31', 4),
('SQL', 'A3', 3.90, '2021-10-30', '2021-10-21', '2022-02-28', 10),
('SQL', 'A2/A3/A4', 5.90, '2021-08-24', '2021-09-30', '2022-09-30', 1),
('Networks', 'A2', 4.00, '2022-01-14', '2021-07-14', '2021-12-25', 3),
('Coffee making', 'A2', 3.90, '2022-01-18', '2021-12-29', '2023-02-15', 2),
('HTML, CSS, JS, PHP', 'A3/A4/A5', 4.20, '2021-09-16', '2023-01-31', '2023-07-13', 6);


INSERT INTO users (login, password, center, last_name, first_name, id_company, id_promotion)
VALUES
('Likasaa', 'maey', 'Strasbourg', 'EY', 'Maxime', 5, 5),
('Billy', 'amed', 'Strasbourg', 'MICHEL', 'Gabriel', 0, 2),
('Aodhan', 'hukr', 'La Rochelle', 'PONSODA', 'Maxime', 3, 1),
('Hugo', 'hudu', 'Toulouse', 'DUMOULIN', 'Hugo', 10, 4),
('Wendy', 'wera', 'La Rochelle', 'RAVARY', 'Wendy', 1, 4),
('Asarck', 'lube', 'Saint-Nazaire', 'BERTHO', 'Lucien', 2, 1),
('Aldresus', 'huch', 'Strasbourg', 'CHAMPY', 'Hugo',7, 2),
('Gadery', 'gade', 'Le Mans', 'DE RUFFRAY', 'GAETAN', 9, 3),
('OKAMI', 'leam', 'Pau', 'AMERIGO', 'Leo', 6, 1),
('Papotie', 'pipo', 'Lyon', 'POTIE', 'Pierre-Antoine', 8, 5);

INSERT INTO user (login, password, promotion, center, last_name, first_name, id_company, id_promotion)
VALUES
('Olivier', 'olsa', 'A5', 'Strasbourg', 'SANDEL', 'OLIVIER', 5, 5),


INSERT INTO application (application_CV, application_motivation_letter, rejected, step_number, id_user, id_internship)
VALUES
('I am CESI student number 1', 'I really would like to join your company', false, 1, 5, 8),
('I am CESI student number 2', 'I really would like to join your company', false, 4, 4, 9),
('I am CESI student number 3', 'I really would like to join your company', false, 6, 1, 10),
('I am CESI student number 4', 'I really would like to join your company', false, 2, 10, 2),
('I am CESI student number 5', 'I really would like to join your company', true, 3, 7, 7),
('I am CESI student number 6', 'I really would like to join your company', true, 3, 8, 1),
('I am CESI student number 7', 'I really would like to join your company', false, 5, 3, 6),
('I am CESI student number 8', 'I really would like to join your company', false, 1, 2, 4),
('I am CESI student number 9', 'I really would like to join your company', true, 2, 9, 6),
('I am CESI student number 10', 'I really would like to join your company', true, 6, 6, 3);


INSERT INTO living (id_place, id_user) VALUES
(2, 10),
(4, 5),
(6, 8),
(8, 1),
(10, 3),
(1, 4),
(3, 6),
(5, 2),
(7, 9),
(9, 7);

INSERT INTO being_located_in (id_place, id_company) VALUES
(3, 10),
(5, 5),
(7, 8),
(9, 1),
(1, 3),
(2, 4),
(4, 6),
(6, 2),
(8, 9),
(10, 7);


INSERT INTO being_in_charge_of (id_promotion, id_user) VALUES
(3, 7),
(5, 2),
(2, 5),
(1, 8),
(4, 10),
(2, 1),
(4, 3),
(1, 9),
(3, 6),
(5, 4);


INSERT INTO possessing (id_user) VALUES
(2, 3),
(1, 4),
(3, 6),
(3, 7),
(4, 2),
(2, 8),
(4, 1),
(1, 10),
(1, 5),
(2, 9);

INSERT INTO corresponding_to (id_permission, id_role) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 4),
(3, 4),
(3, 2),
(4, 4),
(4, 2),
(5, 1),
(5, 2),
(5, 4),
(6, 4),
(6, 2),
(7, 1),
(7, 2),
(7, 4),
(8, 1),
(8, 2),
(8, 4),
(9, 4),
(9, 2),
(10, 4),
(10, 2),
(11, 4),
(11, 2),
(12, 1),
(12, 2),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(17, 2),
(18, 4),
(18, 2),
(19, 4),
(19, 2),
(20, 4),
(20, 2),
(21, 4),
(21, 2),
(22, 4),
(22, 2),
(23, 4),
(23, 2),
(24, 4),
(24, 2),
(25, 4),
(25, 2),
(26, 4),
(26, 2),
(27, 1),
(27, 4),
(28, 1),
(28, 4),
(29, 1),
(29, 4),
(30, 1),
(30, 4),
(31, 1),
(31, 4),
(32, 4),
(32, 2),
(33, 4),
(33, 2),
(34, 1),
(34, 4),
(35, 1);


DELETE FROM company where company.id_company = 14
DELETE FROM possessing INNER



DELETE co.id_company, co.company_name, co.company_sector, co.nb_CESI_intern, co.interns_evaluation, co.Pilote_trust, co.internship_nb_available, bli.id_place, bli.id_company, pl.id_place, pl.city, pl.street_name, pl.street_number, pl.postal_code FROM company AS co
			INNER JOIN being_located_in AS bli ON co.id_company = bli.id_company
            INNER JOIN places AS pl ON bli.id_place = pl.id_place
            Where co.id_company = 16;


INSERT INTO application (application_CV, application_motivation_letter, rejected, step_number, application_validation_sheet, application_internship_agreement, id_user, id_internship)
VALUES
('I am CESI student number 1', 'I really would like to join your company', false, 1, 'none', 'none', 1, 8);