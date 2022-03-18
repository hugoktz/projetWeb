#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: company
#------------------------------------------------------------

CREATE TABLE company(
        id_company              Int  Auto_increment  NOT NULL ,
        company_name            Varchar (255) NOT NULL ,
        company_sector          Varchar (255) NOT NULL ,
        nb_CESI_intern          Int NOT NULL ,
        interns_evaluation      Float NOT NULL ,
        Pilote_trust            Int NOT NULL ,
        internship_nb_available Int NOT NULL
	,CONSTRAINT company_PK PRIMARY KEY (id_company)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: internship
#------------------------------------------------------------

CREATE TABLE internship(
        id_internship                    Int  Auto_increment  NOT NULL ,
        internship_skills                Varchar (255) NOT NULL ,
        internship_company               Varchar (255) NOT NULL ,
        internship_type_promotion        Varchar (255) NOT NULL ,
        internship_salary                Float NOT NULL ,
        internship_offer_date            Date NOT NULL ,
        application_validation_sheet     Varchar (255) NOT NULL ,
        application_internship_agreement Varchar (255) NOT NULL ,
        internship_date_start            Date NOT NULL ,
        internship_end_start             Date NOT NULL ,
        id_company                       Int NOT NULL
	,CONSTRAINT internship_PK PRIMARY KEY (id_internship)

	,CONSTRAINT internship_company_FK FOREIGN KEY (id_company) REFERENCES company(id_company)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: places
#------------------------------------------------------------

CREATE TABLE places(
        id_place      Int  Auto_increment  NOT NULL ,
        city          Varchar (255) NOT NULL ,
        street_name   Varchar (255) NOT NULL ,
        street_number Int NOT NULL ,
        postal_code   Int NOT NULL
	,CONSTRAINT places_PK PRIMARY KEY (id_place)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        id_role   Int  Auto_increment  NOT NULL ,
        role_name Varchar (255) NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: promotions
#------------------------------------------------------------

CREATE TABLE promotions(
        id_promotion Int  Auto_increment  NOT NULL ,
        promotion    Varchar (255) NOT NULL
	,CONSTRAINT promotions_PK PRIMARY KEY (id_promotion)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user      Int  Auto_increment  NOT NULL ,
        login        Varchar (255) NOT NULL ,
        password     Varchar (255) NOT NULL ,
        promotion    Varchar (255) NOT NULL ,
        center       Varchar (255) NOT NULL ,
        last_name    Varchar (255) NOT NULL ,
        first_name   Varchar (255) NOT NULL ,
        id_company   Int ,
        id_promotion Int
	,CONSTRAINT user_PK PRIMARY KEY (id_user)

	,CONSTRAINT user_company_FK FOREIGN KEY (id_company) REFERENCES company(id_company)
	,CONSTRAINT user_promotions0_FK FOREIGN KEY (id_promotion) REFERENCES promotions(id_promotion)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: application
#------------------------------------------------------------

CREATE TABLE application(
        id_application                Int  Auto_increment  NOT NULL ,
        application_CV                Varchar (255) NOT NULL ,
        application_motivation_letter Varchar (255) NOT NULL ,
        rejected                      Bool NOT NULL ,
        step_number                   Int NOT NULL ,
        id_user                       Int NOT NULL ,
        id_internship                 Int NOT NULL
	,CONSTRAINT application_PK PRIMARY KEY (id_application)

	,CONSTRAINT application_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT application_internship0_FK FOREIGN KEY (id_internship) REFERENCES internship(id_internship)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: permissions
#------------------------------------------------------------

CREATE TABLE permissions(
        id_permission Int  Auto_increment  NOT NULL ,
        perms         Varchar (255) NOT NULL
	,CONSTRAINT permissions_PK PRIMARY KEY (id_permission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: wish list
#------------------------------------------------------------

CREATE TABLE wish_list(
        id_user       Int NOT NULL ,
        id_internship Int NOT NULL
	,CONSTRAINT wish_list_PK PRIMARY KEY (id_user,id_internship)

	,CONSTRAINT wish_list_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT wish_list_internship0_FK FOREIGN KEY (id_internship) REFERENCES internship(id_internship)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: being located in
#------------------------------------------------------------

CREATE TABLE being_located_in(
        id_place   Int NOT NULL ,
        id_company Int NOT NULL
	,CONSTRAINT being_located_in_PK PRIMARY KEY (id_place,id_company)

	,CONSTRAINT being_located_in_places_FK FOREIGN KEY (id_place) REFERENCES places(id_place)
	,CONSTRAINT being_located_in_company0_FK FOREIGN KEY (id_company) REFERENCES company(id_company)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: living
#------------------------------------------------------------

CREATE TABLE living(
        id_place Int NOT NULL ,
        id_user  Int NOT NULL
	,CONSTRAINT living_PK PRIMARY KEY (id_place,id_user)

	,CONSTRAINT living_places_FK FOREIGN KEY (id_place) REFERENCES places(id_place)
	,CONSTRAINT living_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: possessing
#------------------------------------------------------------

CREATE TABLE possessing(
        id_role Int NOT NULL ,
        id_user Int NOT NULL
	,CONSTRAINT possessing_PK PRIMARY KEY (id_role,id_user)

	,CONSTRAINT possessing_roles_FK FOREIGN KEY (id_role) REFERENCES roles(id_role)
	,CONSTRAINT possessing_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: being in charge of
#------------------------------------------------------------

CREATE TABLE being_in_charge_of(
        id_promotion Int NOT NULL ,
        id_user      Int NOT NULL
	,CONSTRAINT being_in_charge_of_PK PRIMARY KEY (id_promotion,id_user)

	,CONSTRAINT being_in_charge_of_promotions_FK FOREIGN KEY (id_promotion) REFERENCES promotions(id_promotion)
	,CONSTRAINT being_in_charge_of_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: corresponding to
#------------------------------------------------------------

CREATE TABLE corresponding_to(
        id_permission Int NOT NULL ,
        id_role       Int NOT NULL
	,CONSTRAINT corresponding_to_PK PRIMARY KEY (id_permission,id_role)

	,CONSTRAINT corresponding_to_permissions_FK FOREIGN KEY (id_permission) REFERENCES permissions(id_permission)
	,CONSTRAINT corresponding_to_roles0_FK FOREIGN KEY (id_role) REFERENCES roles(id_role)
)ENGINE=InnoDB;

