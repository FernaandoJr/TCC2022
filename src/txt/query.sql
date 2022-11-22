create database db;

CREATE TABLE `db`.`resposta_form` (
  id INT NOT NULL AUTO_INCREMENT,
  nome varchar(50) not null,
  tel bigint not null,
  email varchar(40) NOT NULL,
  msg varchar(200) not null,
  PRIMARY KEY (id));

INSERT INTO `db`.`resposta_form` (nome, tel, email, msg)
VALUES('Rayssa Valentina Sônia Drumond', '8429389164', 'rayssa-drumond83@pronta.com.br', 'Quero fazer um planejamento de design de interior em uma cozinha...'), 
('Nicole Sabrina Caroline Moura', '19982154881', 'nicole-moura94@inglesasset.com.br', 'Adoraria uma consultoria no meu banheiro...'),
('Aparecida Pietra Pinto', '62992838196', 'aparecida_pinto@marramoncks.com.br', 'Quero reformar meu quarto e do meu filho...'),
('Cristiane Marlene Rocha', '43991013514', 'cristiane.marlene.rocha@jonhdeere.com', 'Quero uma reforma e repaginada no na sala de estar da minha casa...'),
('Kauê Filipe Alves', '65993721005', 'kaue_filipe_alves@raninho.com.br', 'Desejo mudar o quarto do meu filho...'),
('Valentina Nicole da Costa', '65995018561', 'valentina.nicole.dacosta@gmail.br', 'Gostaria de uma consultoria para um primo meu...'),
('Heloisa Kamilly da Rosa', '95983121408', 'heloisa_darosa@corpus.com.br', 'Quero mudar a minha sala e gostaria de uma consultoria e ajuda sobre...'),
('Danilo Manuel Benedito Moraes', '27985969381', 'danilo_moraes@estevao.ind.br', 'Adoraria dar uma repaginada no meu banheiro e preciso de uma consultoria...'),
('Geraldo Caio Nunes', '63991220420', 'geraldo.caio.nunes@email.tst', 'Quero ter uma consultoria sobre a mudança no meu quarto de visitas...'),
('Diogo Erick da Cruz', '63992349973', 'diogo.erick.dacruz@sgstelecom.com.br', 'Gostaria de reformar o quarto da minha irmã...');

CREATE TABLE `db`.`img` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(200) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `db`.`img` (link, tipo)
VALUES('https://i.imgur.com/T9URKNo.jpeg','cozinha'),
('https://i.imgur.com/sXErDBq.jpeg','cozinha'),
('https://i.imgur.com/q4vctMD.jpeg','cozinha'),
('https://i.imgur.com/lmtB8lu.jpeg','cozinha'),
('https://i.imgur.com/FLrY8Np.jpeg','cozinha'),
('https://i.imgur.com/PzXLiGL.jpeg','cozinha'),
('https://i.imgur.com/Nqpre3R.jpeg','sala_estar'),
('https://i.imgur.com/ZeItLAI.jpeg','sala_estar'),
('https://i.imgur.com/4EIhHt7.jpeg','sala_estar'),
('https://i.imgur.com/9uRez7l.jpeg','sala_estar'),
('https://i.imgur.com/1ijTNm8.jpeg','sala_estar'),
('https://i.imgur.com/dN0KT2E.jpeg','sala_estar'),
('https://i.imgur.com/fvkrC1T.jpeg','sala_estar'),
('https://i.imgur.com/HPdEsYt.jpeg','banheiro'),
('https://i.imgur.com/alWyHlG.jpeg','banheiro'),
('https://i.imgur.com/g1V13Pv.jpeg','banheiro'),
('https://i.imgur.com/z2w8Ffk.jpeg','banheiro'),
('https://i.imgur.com/WHkCMZe.jpeg','banheiro'),
('https://i.imgur.com/7DAWL1g.jpeg','banheiro'),
('https://i.imgur.com/S7NnkIu.jpeg','quarto'),
('https://i.imgur.com/lCWYQZB.jpeg','quarto'),
('https://i.imgur.com/5IcTB9P.jpeg','quarto'),
('https://i.imgur.com/kdMfSZT.jpeg','quarto'),
('https://i.imgur.com/dRlWxqi.jpeg','quarto'),
('https://i.imgur.com/bcaTmFu.jpeg','quarto');
