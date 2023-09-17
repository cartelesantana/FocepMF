

drop table if exists Administrateurs;

drop table if exists Agent;

drop table if exists Collecte;

drop table if exists Compte;

drop table if exists Emprunt;

drop table if exists Membre;

drop table if exists Paiement;

/*==============================================================*/
/* Table : Administrateurs                                      */
/*==============================================================*/
create table Administrateurs
(
   matriculeAdm         varchar(200) not null,
   nomAdm               varchar(200),
   prenomAdm            varchar(200),
   mailAdm              varchar(200),
   telAdm               int,
   pwd                  varchar(400),
   primary key (matriculeAdm)
);

/*==============================================================*/
/* Table : Agent                                                */
/*==============================================================*/
create table Agent
(
   matriculeAgt         varchar(200) not null,
   matriculeAdm         varchar(200) not null,
   nomAgt               varchar(200),
   prenomAgt            varchar(200),
   mailAgt              varchar(200),
   telAgt               int,
   pwd                  varchar(400),
   primary key (matriculeAgt)
);

/*==============================================================*/
/* Table : Collecte                                             */
/*==============================================================*/
create table Collecte
(
   idCollecte           varchar(200) not null,
   matriculeAgt         varchar(200) not null,
   idMembre             varchar(200) not null,
   dateCollecte         datetime,
   montant              int,
   primary key (idCollecte)
);

/*==============================================================*/
/* Table : Compte                                               */
/*==============================================================*/
create table Compte
(
   numCompte            varchar(200) not null,
   idMembre             varchar(200) not null,
   dateOuverture        datetime,
   solde                int,
   primary key (numCompte)
);

/*==============================================================*/
/* Table : Emprunt                                              */
/*==============================================================*/
create table Emprunt
(
   idEmprunt            varchar(200) not null,
   matricule            varchar(200),
   idMembre             varchar(200) not null,
   dateEmprunt          datetime,
   dateLimite           datetime,
   interet              int,
   primary key (idEmprunt)
);

/*==============================================================*/
/* Table : Membre                                               */
/*==============================================================*/
create table Membre
(
   idMembre             varchar(200) not null,
   nomMbre              varchar(200),
   prenomMbre           varchar(200),
   adresseMbre          varchar(200),
   localisation         varchar(200),
   telephoneMbre        int,
   numCni               int,
   numCompte            int,
   primary key (idMembre)
);

/*==============================================================*/
/* Table : Paiement                                             */
/*==============================================================*/
create table Paiement
(
   idPaiement           varchar(200) not null,
   matricule            varchar(200) not null,
   idMembre             varchar(200) not null,
   idEmprunt            varchar(200) not null,
   datePaiement         datetime,
   primary key (idPaiement)
);

alter table Agent add constraint FK_association7 foreign key (matriculeAdm)
      references Administrateurs (matriculeAdm) on delete restrict on update restrict;

alter table Collecte add constraint FK_collectez foreign key (matriculeAgt)
      references Agent (matriculeAgt) on delete restrict on update restrict;
alter table Collecte add constraint FK_membre foreign key (idMembre)
      references Membre (idMembre) on delete restrict on update restrict;

alter table Compte add constraint FK_association4 foreign key (idMembre)
      references Membre (idMembre) on delete restrict on update restrict;

alter table Emprunt add constraint FK_association11 foreign key (matriculeAdm)
      references Administrateurs (matriculeAdm) on delete restrict on update restrict;
alter table Emprunt add constraint FK_membre2 foreign key (idMembre)
      references Membre (idMembre) on delete restrict on update restrict;

alter table Paiement add constraint FK_association10 foreign key (matriculeAdm)
      references Administrateurs (matriculeAdm) on delete restrict on update restrict;

alter table Paiement add constraint FK_association9 foreign key (idEmprunt)
      references Emprunt (idEmprunt) on delete restrict on update restrict;
alter table Paiement add constraint FK_membre3 foreign key (idMembre)
      references Membre (idMembre) on delete restrict on update restrict;
