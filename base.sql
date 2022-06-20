CREATE SCHEMA unesco;



SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: admin; Type: TABLE; Schema: unesco; 
--

CREATE TABLE unesco.admin (
    idadmin integer NOT NULL
);



-- Name: admin_idadmin_seq; Type: SEQUENCE; Schema: unesco; 
--

CREATE SEQUENCE unesco.admin_idadmin_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;




--
-- Name: admin_idadmin_seq; Type: SEQUENCE OWNED BY; Schema: unesco; 
--

ALTER SEQUENCE unesco.admin_idadmin_seq OWNED BY unesco.admin.idadmin;


--
-- Name: article; Type: TABLE; Schema: unesco; 
--

CREATE TABLE unesco.article (
    idarticle integer NOT NULL,
    datecreation date NOT NULL,
    "titre_FR" character varying(200) NOT NULL,
    "contenu_FR" character varying(5000) NOT NULL,
    image character varying(100) NOT NULL,
    visible integer DEFAULT 1,
    "titre_EN" character varying(200),
    "contenu_EN" character varying(5000)
);




--
-- Name: article_idarticle_seq; Type: SEQUENCE; Schema: unesco; 
--

CREATE SEQUENCE unesco.article_idarticle_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



--
-- Name: article_idarticle_seq; Type: SEQUENCE OWNED BY; Schema: unesco; 
--

ALTER SEQUENCE unesco.article_idarticle_seq OWNED BY unesco.article.idarticle;


--
-- Name: contributeur; Type: TABLE; Schema: unesco; 
--

CREATE TABLE unesco.contributeur (
    idcontributeur integer NOT NULL,
    nom character varying(50) NOT NULL,
    prenom character varying(50) NOT NULL,
    role character varying(50)
);

--
-- Name: contributeur_idcontributeur_seq; Type: SEQUENCE; Schema: unesco; 
--

CREATE SEQUENCE unesco.contributeur_idcontributeur_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



--
-- Name: contributeur_idcontributeur_seq; Type: SEQUENCE OWNED BY; Schema: unesco; 
--

ALTER SEQUENCE unesco.contributeur_idcontributeur_seq OWNED BY unesco.contributeur.idcontributeur;


--
-- Name: ecrire; Type: TABLE; Schema: unesco; 
--

CREATE TABLE unesco.ecrire (
    idadmin integer NOT NULL,
    idarticle integer NOT NULL
);



--
-- Name: utilisateur; Type: TABLE; Schema: unesco; 
--

CREATE TABLE unesco.utilisateur (
    iduser integer NOT NULL,
    login character varying(20) NOT NULL,
    email character varying(40) NOT NULL,
    prenom character varying(50) NOT NULL,
    nom character varying(50) NOT NULL,
    datecreation date,
    motdepasse character varying(500) NOT NULL,
    idadmin integer
);


--
-- Name: utilisateur_iduser_seq; Type: SEQUENCE; Schema: unesco; 
--

CREATE SEQUENCE unesco.utilisateur_iduser_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: utilisateur_iduser_seq; Type: SEQUENCE OWNED BY; Schema: unesco; 
--

ALTER SEQUENCE unesco.utilisateur_iduser_seq OWNED BY unesco.utilisateur.iduser;


--
-- Name: article idarticle; Type: DEFAULT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.article ALTER COLUMN idarticle SET DEFAULT nextval('unesco.article_idarticle_seq'::regclass);


--
-- Name: contributeur idcontributeur; Type: DEFAULT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.contributeur ALTER COLUMN idcontributeur SET DEFAULT nextval('unesco.contributeur_idcontributeur_seq'::regclass);


--
-- Name: utilisateur iduser; Type: DEFAULT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.utilisateur ALTER COLUMN iduser SET DEFAULT nextval('unesco.utilisateur_iduser_seq'::regclass);


--
-- Name: admin admin_pkey; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (idadmin);


--
-- Name: article article_pkey; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.article
    ADD CONSTRAINT article_pkey PRIMARY KEY (idarticle);


--
-- Name: contributeur contributeur_pkey; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.contributeur
    ADD CONSTRAINT contributeur_pkey PRIMARY KEY (idcontributeur);


--
-- Name: ecrire ecrire_pkey; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.ecrire
    ADD CONSTRAINT ecrire_pkey PRIMARY KEY (idadmin, idarticle);


--
-- Name: utilisateur login_unique; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.utilisateur
    ADD CONSTRAINT login_unique UNIQUE (login);


--
-- Name: utilisateur utilisateur_email_key; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.utilisateur
    ADD CONSTRAINT utilisateur_email_key UNIQUE (email);


--
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (iduser);


--
-- Name: ecrire ecrire_idadmin_fkey; Type: FK CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.ecrire
    ADD CONSTRAINT ecrire_idadmin_fkey FOREIGN KEY (idadmin) REFERENCES unesco.admin(idadmin);


--
-- Name: ecrire ecrire_idarticle_fkey; Type: FK CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.ecrire
    ADD CONSTRAINT ecrire_idarticle_fkey FOREIGN KEY (idarticle) REFERENCES unesco.article(idarticle);


--
-- Name: utilisateur utilisateur_idadmin_fkey; Type: FK CONSTRAINT; Schema: unesco; 
--

ALTER TABLE ONLY unesco.utilisateur
    ADD CONSTRAINT utilisateur_idadmin_fkey FOREIGN KEY (idadmin) REFERENCES unesco.admin(idadmin);


--
-- PostgreSQL database dump complete
--
