#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE website_project;
USE website_project ; 
#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id_users       int (11) Auto_increment  NOT NULL ,
        first_name     Varchar (50) NOT NULL ,
        name           Varchar (50) ,
        formation      Varchar (25) ,
        email          Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        premium_status Bool NOT NULL ,
        PRIMARY KEY (id_users )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Propos_Activity
#------------------------------------------------------------

CREATE TABLE Propos_Activity(
        id_propos         int (11) Auto_increment  NOT NULL ,
        activity_proposed Varchar (50) NOT NULL ,
        description_text  Varchar (200) NOT NULL ,
        id_users          Int NOT NULL ,
        PRIMARY KEY (id_propos )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Event_BDE
#------------------------------------------------------------

CREATE TABLE Event_BDE(
        id_event      int (11) Auto_increment  NOT NULL ,
        activity_name Varchar (50) NOT NULL ,
        detail_text   Varchar (200) NOT NULL ,
        event_date1   Datetime NOT NULL ,
        event_date2   Datetime NOT NULL ,
        vote1         Int NOT NULL ,
        vote2         Int NOT NULL ,
        PRIMARY KEY (id_event )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Picture
#------------------------------------------------------------

CREATE TABLE Picture(
        id_picture     int (11) Auto_increment  NOT NULL ,
        picture        Varchar (100) NOT NULL ,
        uploading_date Date NOT NULL ,
        id_event       Int NOT NULL ,
        PRIMARY KEY (id_picture )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Store
#------------------------------------------------------------

CREATE TABLE Store(
        id_store        int (11) Auto_increment  NOT NULL ,
        product_name    Varchar (50) NOT NULL ,
        price           Int NOT NULL ,
        notice          Varchar (200) NOT NULL ,
        product_picture Varchar (100) NOT NULL ,
        quantity        Int NOT NULL ,
        clothes         Bool NOT NULL ,
        size            Varchar (25) NOT NULL ,
        PRIMARY KEY (id_store )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders
#------------------------------------------------------------

CREATE TABLE Orders(
        id_orders       int (11) Auto_increment  NOT NULL ,
        total_price     Int NOT NULL ,
        payment_status  Varchar (50) NOT NULL ,
        delivery_status Varchar (50) NOT NULL ,
        date_orders     Date NOT NULL ,
        id_users        Int NOT NULL ,
        PRIMARY KEY (id_orders )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaries
#------------------------------------------------------------

CREATE TABLE Commentaries(
        id_commentary int (11) Auto_increment  NOT NULL ,
        comment_text  Varchar (200) NOT NULL ,
        comment_date  Date NOT NULL ,
        id_users      Int NOT NULL ,
        id_picture    Int NOT NULL ,
        PRIMARY KEY (id_commentary )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Like_Button
#------------------------------------------------------------

CREATE TABLE Like_Button(
        like_but   Bool NOT NULL ,
        id_picture Int NOT NULL ,
        id_users   Int NOT NULL ,
        PRIMARY KEY (id_picture ,id_users )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders_Content
#------------------------------------------------------------

CREATE TABLE Orders_Content(
        amount    Int NOT NULL ,
        id_orders Int NOT NULL ,
        id_store  Int NOT NULL ,
        PRIMARY KEY (id_orders ,id_store )
)ENGINE=InnoDB;

ALTER TABLE Propos_Activity ADD CONSTRAINT FK_Propos_Activity_id_users FOREIGN KEY (id_users) REFERENCES Users(id_users);
ALTER TABLE Picture ADD CONSTRAINT FK_Picture_id_event FOREIGN KEY (id_event) REFERENCES Event_BDE(id_event);
ALTER TABLE Orders ADD CONSTRAINT FK_Orders_id_users FOREIGN KEY (id_users) REFERENCES Users(id_users);
ALTER TABLE Commentaries ADD CONSTRAINT FK_Commentaries_id_users FOREIGN KEY (id_users) REFERENCES Users(id_users);
ALTER TABLE Commentaries ADD CONSTRAINT FK_Commentaries_id_picture FOREIGN KEY (id_picture) REFERENCES Picture(id_picture);
ALTER TABLE Like_Button ADD CONSTRAINT FK_Like_Button_id_picture FOREIGN KEY (id_picture) REFERENCES Picture(id_picture);
ALTER TABLE Like_Button ADD CONSTRAINT FK_Like_Button_id_users FOREIGN KEY (id_users) REFERENCES Users(id_users);
ALTER TABLE Orders_Content ADD CONSTRAINT FK_Orders_Content_id_orders FOREIGN KEY (id_orders) REFERENCES Orders(id_orders);
ALTER TABLE Orders_Content ADD CONSTRAINT FK_Orders_Content_id_store FOREIGN KEY (id_store) REFERENCES Store(id_store);
