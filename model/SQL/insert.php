<?php
require_once "../../model/conexao.php";
$sql_insert = "INSERT INTO `puzzle` (`idPuzzle`, `resposta`, `caderno`, `resposta2`, `postit`) VALUES
(1, 'C07C34N23', '', '0', ''),
(2, '5182', 'crescente', '0', ''),
(3, '7348', 'Fratura de falange', '3461', 'Fratura do Boxeador'),
(4, '5674', 'Polegar do Esquiador', '1324', 'Fratura do Trapézio'),
(5, '1400', 'Fratura Salter-Harris tipo II', '5274', 'Fratura do Metatarso'),
(6, '0902', 'Fratura Pseudo-Jones', '6121', 'Fratura Cominutiva da Falange Distal do Hálux'),
(7, '9698', 'Luxatio Erecta', '8315', 'Luxação Anterior do Ombro'),
(8, '8163', 'Rockwood tipo III', '2673', 'Amputação Transumeral'),
(9, '3701', 'Fratura do Planalto Tibial', '5819', 'Fratura Femoral Subtrocantérica'),
(10, '1187', 'Haste Intramedular Femoral Dobrada', '3694', 'Fratura Patológica'),
(11, '7275', 'Fratura de ambos os ossos do antebraço com rotação', '3695', 'Fratura do toro do rádio distal'),
(12, '5346', 'Fratura lateral do côndilo umeral', '6548', 'Fratura isolada do eixo radial'),
(13, '2758', 'Fratura trimaleolar', '7350', 'Fratura coronoide'),
(14, '9817', 'crescente', '', ''),
(15, '2331', 'crescente', '', ''),
(16, '6754', 'crescente', '', ''),
(17, '9964', 'decrescente', '', ''),
(18, '5627', 'decrescente', '', ''),
(19, '8389', 'decrescente', '', ''),
(20, 'M705M231S422', '', '', ''),
(21, 'M765D050S821', '', '', ''),
(22, 'C73S720C7981', '', '', ''),
(23, 'S420S820S826', '', '', ''),
(24, 'S822C750S721', '', '', ''),
(25, 'S420S320S525', '', '', '');";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `initialroom` (`idPuzzle`, `pagina`, `pergunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `cid1`, `cid2`, `cid3`, `cid4`) VALUES
(1, 6, 'Qual é o diagnóstico mais provável para um paciente de 45 anos que apresenta um nódulo indolor na região submandibular direita, com aumento progressivo há 6 meses? O exame de ultrassonografia mostra uma massa hipoecóica, bem delimitada, com calcificações internas e fluxo vascular periférico.', 'Cisto branquial', 'Linfoma', 'Carcinoma de glândula salivar', 'Lipoma', '-> Q18.0', '-> C81', '-> C07', '-> D17'),
(1, 7, 'Qual é o diagnóstico mais provável para um paciente de 50 anos que apresenta tosse seca, dispneia e dor torácica há 3 semanas? O exame de radiografia de tórax mostra uma opacidade nodular no lobo superior direito, com bordas irregulares e halo de vidro fosco. O exame de tomografia computadorizada de tórax confirma a presença do nódulo e mostra também linfonodos mediastinais aumentados.', 'Tuberculose pulmonar', 'Câncer de pulmão', 'Granulomatose de Wegener', 'Aspergilose pulmonar', '-> A15', '-> C34', '-> M31.3', '-> B44'),
(1, 8, 'Qual é o diagnóstico mais provável para um paciente de 40 anos que apresenta dor abdominal intensa e contínua na fossa ilíaca direita, com irradiação para a região lombar direita, associada a náuseas e vômitos? O exame de ultrassonografia de abdômen mostra uma dilatação do ureter direito, com presença de um cálculo de 5 mm no seu terço distal. O exame de urina mostra hematúria microscópica e leucocitúria.', 'Colecistite aguda', 'Apendicite aguda', 'Cólica renal', 'Diverticulite aguda', '-> K81', '-> K35', '-> N23', '-> K57'),
(20, 6, 'Qual é o diagnóstico mais provável para um paciente de 50 anos que apresenta dor no quadril, dificuldade para caminhar e inchaço na região? O exame de ultrassonografia do quadril mostra espessamento e inflamação da bursa trocantérica.', 'Bursite do quadril', 'Artrite do quadril', 'Tendinite do glúteo médio', 'Lesão do labrum acetabular', '-> M70.5', '-> M16.0', '-> M76.3', '-> M24.15'),
(20, 7, 'Qual é o diagnóstico mais provável para um paciente de 35 anos que apresenta dor no joelho, inchaço e dificuldade para caminhar? O exame de ressonância magnética do joelho mostra ruptura completa do menisco medial.', 'Lesão do ligamento cruzado anterior', 'Tendinite patelar', 'Lesão do menisco', 'Artrite reumatoide', '-> S83.5', '-> M76.5', '-> M23.1', '->  M05'),
(21, 6, 'Qual é o diagnóstico mais provável para um paciente de 35 anos que apresenta dor no joelho, inchaço e dificuldade para caminhar? O exame de ressonância magnética do joelho mostra espessamento e inflamação do tendão patelar', 'Lesão do menisco', 'Tendinite patelar', 'Lesão do ligamento cruzado anterior', 'Artrite reumatoide', '-> S83.2', '-> M76.5', '-> S83.5', '-> M05'),
(20, 8, 'Qual é o diagnóstico mais provável para um paciente de 55 anos que apresenta dor no braço após uma queda? O exame de radiografia do braço mostra desalinhamento das estruturas ósseas.', 'Fratura do úmero', 'Entorse do cotovelo', 'Tendinite do bíceps', 'Bursite do cotovelo', '-> S42.2', '-> S53.2', '-> M75.20', '-> M70.3'),
(21, 7, 'Qual é o diagnóstico mais provável para um paciente de 60 anos que apresenta um nódulo indolor na mama direita, com aumento progressivo há 6 meses? O exame de mamografia mostra uma massa hipoecóica, bem delimitada, com microcalcificações internas e fluxo vascular periférico.', 'Fibroadenoma', 'Cisto mamário', 'Carcinoma ductal in situ', 'Lipoma', '-> D24', '-> N60.1', '-> D05.0', '-> D17'),
(21, 8, 'Qual é o diagnóstico mais provável para um paciente de 50 anos que apresenta dor na perna após uma queda? O exame de radiografia da perna mostra desalinhamento das estruturas ósseas.', 'Entorse do tornozelo', 'Tendinite do tendão de Aquiles', 'Bursite do joelho', 'Fratura da tíbia', '-> S93.4', '-> M76.6', '-> M70.4', '-> S82.1'),
(22, 6, 'Qual é o diagnóstico mais provável para um paciente de 65 anos que apresenta um nódulo indolor na região cervical esquerda, com aumento progressivo há 6 meses? O exame de ultrassonografia mostra uma massa hipoecóica, bem delimitada, com calcificações internas e fluxo vascular periférico.', 'Cisto tireoglosso', 'Linfoma', 'Carcinoma de tireoide', 'Lipoma', '-> Q18.1', '-> C81', '-> C73', '-> D17'),
(22, 7, 'Qual é o diagnóstico mais provável para um paciente de 70 anos que apresenta dor no quadril após uma queda? O exame de radiografia do quadril mostra desalinhamento das estruturas ósseas.', 'Artrose do quadril', 'Fratura do colo do fêmur', 'Tendinite do glúteo médio', 'Bursite trocantérica', '-> M16.0', '-> S72.0', '-> M76.3', '-> M70.6'),
(22, 8, 'Qual é o diagnóstico mais provável para um paciente de 75 anos que apresenta um nódulo indolor na região axilar esquerda, com aumento progressivo há 6 meses? O exame de ultrassonografia mostra uma massa hipoecóica, bem delimitada, com calcificações internas e fluxo vascular periférico.', 'Cisto sebáceo', 'Linfoma', 'Lipoma', 'Carcinoma metastático', '-> L72.0', '-> C81', '-> D17', '-> C79.81'),
(23, 6, 'Qual é o diagnóstico mais provável para um paciente de 80 anos que apresenta dor no ombro após uma queda? O exame de radiografia do ombro mostra desalinhamento das estruturas ósseas', 'Fratura da clavícula', 'Luxação acromioclavicular', 'Tendinite do manguito rotador', 'Bursite subacromial', '-> S42.0', '-> S43.0', '-> M75.1', '-> M75.4'),
(23, 7, 'Qual é o diagnóstico mais provável para um paciente de 90 anos que apresenta dor no joelho após uma queda? O exame de radiografia do joelho mostra desalinhamento das estruturas ósseas.', 'Lesão meniscal', 'Tendinite patelar', 'Bursite pré-patelar', 'Fratura da patela', '-> S83.2', '-> M76.5', '-> M70.0', '-> S82.0'),
(23, 8, 'Qual é o diagnóstico mais provável para um paciente de 100 anos que apresenta dor no tornozelo após uma queda? O exame de radiografia do tornozelo mostra desalinhamento das estruturas ósseas.', 'Fratura do maléolo lateral', 'Entorse do tornozelo', 'Tendinite do tendão de Aquiles', 'Bursite retrocalcaneana', '-> S82.6', '-> S93.4', '-> M76.6', '-> M70.8'),
(24, 6, 'Qual é o diagnóstico mais provável para um paciente de 50 anos que apresenta dor na perna após uma queda? O exame de radiografia da perna mostra desalinhamento das estruturas ósseas.', 'Entorse do tornozelo', 'Tendinite do tendão de Aquiles', 'Bursite do joelho', 'Fratura da fíbula', '-> S93.4', '-> M76.6', '-> M70.4', '-> S82.2'),
(24, 7, 'Qual é o diagnóstico mais provável para um paciente de 65 anos que apresenta um nódulo indolor na região cervical esquerda, com aumento progressivo há 6 meses? O exame de ultrassonografia mostra uma massa hipoecóica, bem delimitada, com calcificações internas e fluxo vascular periférico.', 'Cisto tireoglosso', 'Carcinoma de paratireoide', 'Linfoma', 'Lipoma', '-> Q18.0', '-> C75.0', '-> C81', '-> D17'),
(24, 8, 'Qual é o diagnóstico mais provável para um paciente de 70 anos que apresenta dor no quadril após uma queda? O exame de radiografia do quadril mostra desalinhamento das estruturas ósseas.', 'Fratura intertrocantérica', 'Artrose do quadril', 'Tendinite do glúteo médio', 'Bursite trocantérica', '-> S72.1', '-> M16.0', '-> M76.3', '-> M70.6'),
(25, 6, 'Qual é o diagnóstico mais provável para um paciente de 80 anos que apresenta dor no ombro após uma queda? O exame de radiografia do ombro mostra desalinhamento das estruturas ósseas.', 'Luxação acromioclavicular', 'Tendinite do manguito rotador', 'Bursite subacromial', 'Fratura do acrômio', '-> S43.0', '-> M75.1', '-> M75.4', '-> S42.0'),
(25, 7, 'Qual é o diagnóstico mais provável para um paciente de 60 anos que apresenta dor na coluna lombar após levantar um objeto pesado? O exame de radiografia da coluna lombar mostra desalinhamento das estruturas ósseas.', 'Fratura por compressão vertebral', 'Hérnia de disco lombar', 'Estenose do canal vertebral', 'Espondilolistese', '-> S32.0', '-> M51.2', '-> M48.0', '-> M43.1'),
(25, 8, 'Qual é o diagnóstico mais provável para um paciente de 80 anos que apresenta dor no punho após uma queda? O exame de radiografia do punho mostra desalinhamento das estruturas ósseas.', 'Entorse do punho', 'Tendinite do extensor radial curto do carpo', 'Fratura do rádio distal', 'Bursite do punho', '-> S63.5', '-> M65.8', '-> S52.5', '-> M70.8');
";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `cenario1` (`idPuzzle`, `pagina`, `nome`, `idade`, `sintomas`, `tomografia`, `doenca`) VALUES
(2, 12, 'João Silva', 45, 'Dor no peito, falta de ar, tosse com sangue, perda de peso e fadiga', 'Tomografia computadorizada do tórax mostrou uma massa no lobo superior direito do pulmão, com linfonodos mediastinais aumentados e derrame pleural. Biópsia confirmou a presença de células malignas.', 'Câncer de pulmão'),
(2, 14, ' Pedro Oliveira', 67, 'Dor abdominal, icterícia, perda de apetite e emagrecimento', 'Ultrassonografia abdominal mostrou uma massa hipoecogênica na cabeça do pâncreas, com dilatação das vias biliares e do ducto pancreático. Tomografia computadorizada confirmou a presença de um tumor pancreático com invasão vascular e metástases hepáticas', 'Câncer de pâncreas'),
(2, 17, 'Maria Santos', 32, 'Dor de cabeça, náusea, vômito, alteração da visão e convulsões', 'Ressonância magnética do crânio mostrou uma lesão expansiva no lobo temporal esquerdo, com efeito de massa e edema perilesional. Biópsia revelou um glioblastoma multiforme.', 'Tumor cerebral'),
(2, 20, 'Ana Souza', 28, 'Dor e inchaço no joelho direito, dificuldade para caminhar e movimentar a articulação', 'Radiografia do joelho direito mostrou erosões ósseas, estreitamento do espaço articular e deformidade em valgo. Ressonância magnética evidenciou sinovite, derrame articular e lesões de cartilagem e menisco.', 'Artrite reumatoide'),
(14, 12, 'Luiz Costa', 50, 'Dor de cabeça persistente, tontura e perda de equilíbrio', 'Tomografia computadorizada do crânio mostrou dilatação anormal de um vaso sanguíneo no cérebro. Angiografia cerebral confirmou a presença de aneurisma cerebral', 'Aneurisma cerebral'),
(14, 14, 'Juliana Almeida', 30, 'Dor abdominal persistente, diarreia e perda de peso', 'Tomografia computadorizada do abdômen mostrou espessamento da parede do intestino delgado e presença de fístulas. Ressonância magnética do abdômen confirmou a presença de espessamento da parede do intestino delgado e fístulas', 'Doença de Crohn'),
(14, 17, 'Roberto Silva', 65, 'Dor no peito, falta de ar e sudorese excessiva', 'Angiografia coronariana mostrou obstrução de uma artéria coronária', 'Infarto do miocárdio'),
(14, 20, 'Fernanda Lima', 40, 'Dor nas costas, perda de sensibilidade nas pernas e dificuldade para caminhar', 'Ressonância magnética da coluna cervical mostrou protusão do disco intervertebral na região cervical', 'Hérnia de disco cervical'),
(15, 12, 'Paulo Rocha', 55, 'Dor abdominal persistente, náusea e vômito', 'Tomografia computadorizada do abdômen mostrou aumento do tamanho do pâncreas e presença de líquido ao redor do órgão', 'Pancreatite aguda'),
(15, 14, 'Carla Souza', 25, 'Dor no ombro, dificuldade para levantar o braço e inchaço na região', 'Ultrassonografia do ombro mostrou espessamento e inflamação dos tendões do manguito rotador', 'Tendinite do manguito rot'),
(15, 17, 'Ricardo Oliveira', 70, 'Dor nas pernas ao caminhar, feridas que não cicatrizam e pele fria ao toque', 'Angiografia das pernas mostrou estreitamento e obstrução das artérias das pernas', 'Doença arterial periféric'),
(15, 20, 'Beatriz Alves', 42, 'Dor de cabeça persistente, visão dupla e perda de força em um lado do corpo', 'Tomografia computadorizada do crânio mostrou área de isquemia no cérebro', 'Acidente vascular cerebra'),
(16, 12, 'Marcos Pereira', 60, 'Dor no peito, falta de ar e sudorese excessiva', 'Tomografia computadorizada do tórax com contraste mostrou obstrução de uma artéria pulmonar', 'Embolia pulmonar'),
(16, 14, 'Gabriela Costa', 35, 'Dor abdominal persistente, diarreia e sangue nas fezes', 'Colonoscopia com biópsia mostrou inflamação e úlceras no cólon', 'Colite ulcerativa'),
(16, 17, 'Felipe Santos', 55, 'Dor nas costas, perda de sensibilidade nas pernas e dificuldade para caminhar', 'Ressonância magnética da coluna vertebral mostrou estreitamento do canal espinhal na região lombar', 'Estenose espinhal'),
(16, 20, 'Isabela Rodrigues', 42, 'Dor no peito, falta de ar e tosse persistente', 'Pneumonia Diagnóstico de radiologia: Radiografia do tórax mostrou consolidação no pulmão direito', 'Pneumonia'),
(17, 12, 'Leonardo Nunes', 43, 'Dor abdominal persistente, náusea e vômito', 'Colecistite aguda Diagnóstico de radiologia: Ultrassonografia do abdômen mostrou aumento do tamanho da vesícula biliar e presença de cálculos biliares', 'Colecistite aguda'),
(17, 14, 'Amanda Silva', 23, 'Dor no tornozelo, inchaço e dificuldade para caminhar', 'Radiografia do tornozelo mostrou desalinhamento das estruturas ósseas', 'Entorse de tornozelo'),
(17, 17, 'Bruno Souza', 55, 'Dor no peito, falta de ar e sudorese excessiva', 'Tomografia computadorizada do tórax com contraste mostrou dilatação anormal da aorta torácica', 'Dissecção aórtica'),
(17, 20, 'Camila Oliveira', 29, 'Dor abdominal persistente, diarreia e perda de peso', 'Colonoscopia com biópsia não mostrou alterações significativas no cólon', 'Síndrome do intestino irr'),
(18, 12, 'Rafaela Gomes', 50, 'Dor no ombro, dificuldade para levantar o braço e inchaço na região', 'Ultrassonografia do ombro mostrou espessamento e inflamação da bursa subacromial', 'Bursite do ombro'),
(18, 14, 'Lucas Mendes', 44, 'Dor nas costas, perda de sensibilidade nas pernas e dificuldade para caminhar', 'Radiografia da coluna vertebral mostrou deslocamento anterior de uma vértebra em relação à vértebra inferior', 'Espondilolistese'),
(18, 17, 'Juliana Castro', 62, 'Dor abdominal persistente, náusea e vômito', 'Tomografia computadorizada do abdômen mostrou inflamação e espessamento da parede do cólon sigmoide', 'Diverticulite aguda'),
(18, 20, 'Marcelo Dias', 36, 'Dor no joelho, inchaço e dificuldade para caminhar', ' Ressonância magnética do joelho mostrou ruptura completa do ligamento cruzado anterior', ' Lesão do ligamento cruza'),
(19, 12, 'Thiago Costa', 53, 'Dor abdominal persistente, náusea e vômito', 'Tomografia computadorizada do abdômen mostrou aumento do tamanho do apêndice e presença de líquido ao redor do órgão', ' Apendicite aguda'),
(19, 17, 'Rodrigo Alves', 49, 'Dor no ombro, dificuldade para levantar o braço e inchaço na região', 'Ressonância magnética do ombro mostrou espessamento e inflamação da cápsula articular', 'Capsulite adesiva'),
(19, 20, 'Mariana Santos', 45, 'Dor nas costas, perda de sensibilidade nas pernas e dificuldade para caminhar', 'Ressonância magnética da coluna cervical mostrou protusão do disco intervertebral na região cervical', 'Hérnia de disco cervical'),
(19, 14, 'Michel Araújo', 32, 'Dor abdominal persistente, náusea e vômito', 'Ultrassonografia do abdômen mostrou aumento do tamanho da vesícula biliar e presença de cálculos biliares', 'Colecistite aguda');
";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `cenario2-pacientes` (`exame`, `idade`, `genero`, `caso`) VALUES
('Amputaçãotransumeral(traumática).jpeg', 55, 'Masculino', '... mutilada devido a uma colisão de veículo motorizado'),
('dedosdemartelo.jpeg', 55, 'Masculino', 'Há avulsões ósseas dorsais da base das falanges terminais do 3º e 4º dígitos direitos. Há uma extensão intra-articular (DIP). O paciente machucou a mão durante uma queda violenta. Incapaz de estender os dedos médio e anelar.'),
('Fraturacominutivadafalangedistaldohálux.png', 58, 'Masculino', 'Fratura ... com fragmentos ósseos gravemente deslocados\r\n\r\n'),
('fraturacoronoide.png', 37, 'Masculino', 'Fratura do ... tipo I de acordo com o sistema de classificação de O\'Driscoll\r\n\r\n'),
('Fraturadeambososossosdoantebraçocomrotação.png', 15, 'Masculino', 'Há fraturas oblíquas completas da diáfise mediana radial e ulnar direita. Há uma largura de eixo de deslocamento ulnar e volar da fratura radial. Há uma largura de eixo de deslocamento ulnar e dorsal da fratura ulnar. Há leve sobreposição/encurtamento, bem como angulação dorsal de ambas as fraturas. Há 90 graus de rotação de ambas as fraturas - as articulações do cotovelo e do punho são orientadas perpendicularmente uma à outra neste caso'),
('Fraturadefalange-mão.png', 7, 'Feminino', 'Linha de fratura transversa radiolúcida na cabeça da ... média do dedo mínimo esquerdo'),
('Fraturadefalange-pé.png', 35, 'Feminino', 'Fratura extra-articular não deslocada na base da ... proximal do quarto pododáctilo.\r\n\r\n'),
('Fraturadoacrômio.png', 45, 'Feminino', 'Fratura completa é vista na base do ... . Na incidência lateral oblíqua, há perda do alinhamento normal da articulação acromioclavicular '),
('fraturadoboxeador.jpeg', 25, 'Feminino', 'Há uma fratura aguda, levemente deslocada, impactada e angulada do colo do quinto metacarpo direito'),
('Fraturadometatarso.png', 14, 'Masculino', 'Ruptura cortical envolvendo o aspecto medial da metáfise na base do 1º osso ...'),
('Fraturadoplanaltotibial.png', 27, 'Feminino', 'Fratura longitudinal recente sem deslocamento no ... esquerda com derrame suprapatelar associado'),
('Fraturadotorodorádiodistal.jpeg', 8, 'Feminino', 'Fratura do ... da metáfise ... , causado por uma queda da própria altura.\r\n\r\n\r\n\r\n'),
('Fraturadotrapézio.png', 33, 'Masculino', 'Fratura intra-articular do ... . Não são observadas outras lesões associadas'),
('Fraturafemoralsubtrocantérica.png', 3, 'Feminino', 'Fratura com deslocamento na região ... ao nível do trocânter menor (classificação de Fielding tipo I), sem extensão para a física. O inchaço dos tecidos moles circundantes também é evidente'),
('Fraturaisoladadoeixoradial.png', 30, 'Masculino', 'Fratura na metade do ... com leve angulação dorsal e inchaço dos tecidos moles sobrejacentes.'),
('Fraturalateraldocôndiloumeral.jpeg', 3, 'Feminino', 'Fratura através do ... com derrame articular deslocando os coxins gordurosos anterior e posterior'),
('fraturapatológica.png', 35, 'Feminino', 'Há uma fratura oblíqua completa na diáfise do ... esquerdo com deslocamento leve associado. Uma área de destruição óssea permeativa é vista envolvendo o córtex lateralmente no local da fratura.'),
('Fraturapediátricadocorpodotálus.jpeg', 4, 'Masculino', 'Fratura não deslocada do ...'),
('FraturaPseudo-Jones.png', 30, 'Masculino', 'Uma fratura transversal está presente na base do 5º metatarso, atingindo a superfície articular do metatarsocuboide'),
('FraturaSalter-HarristipoII.png', 7, 'Feminino', 'Fise larga na base do 1º metatarso, com linha de fratura radiolúcida oblíqua ao longo da metáfise'),
('fraturatrimaleolar.png', 32, 'Masculino', 'Há fratura do maléolo lateral ao nível da sindesmose, condizente com fratura do maléolo lateral tipo B de Weber. Há também uma fratura maleolar medial, e uma discreta fratura maleolar posterior é observada na visão lateral.'),
('Hasteintramedularfemoraldobrada.png', 32, 'Masculino', 'Fratura cominutiva da diáfise média do fêmur esquerdo com ...'),
('Luxaçãoanteriordoombro.png', 18, 'Masculino', 'A cabeça do úmero projeta-se medial e inferiormente, indicando um deslocamento anterior.'),
('luxatioerecta.png', 54, 'Masculino', 'A cabeça do úmero projeta-se medial e inferiormente. O braço é abduzido com a diáfise umeral quase paralela à espinha da escápula.'),
('polegardoesquiador.png', 39, 'Masculino', 'Uma fratura avulsão é vista envolvendo o canto ulnar na base da falange proximal do polegar direito com deslocamento associado.\r\n\r\n'),
('RockwoodtipoIII.png', 45, 'Feminino', 'Clavícula elevada. As distâncias coracoclavicular e acromioclavicular são ampliadas. Esses achados indicam uma lesão na articulação acromioclavicular\r\n\r\nDistância CC: 23,4 mm\r\nDistância CA: 19,7 mm');
";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `cenario2` (`idPuzzle`, `paginaExame`, `paginaPac`, `pacienteNome`, `pacienteCodigo`, `exame`) VALUES
(10, 30, 36, 'Matias Ferreira', 1093, 'fraturatrimaleolar.png'),
(10, 28, 35, 'Camilo Delgado', 1187, 'Hasteintramedularfemoraldobrada.png'),
(8, 31, 35, 'Felipe Oliveira', 1223, 'Luxaçãoanteriordoombro.png'),
(4, 31, 38, 'Lucas Carvalho', 1324, 'Fraturadotrapézio.png'),
(5, 31, 39, 'Maria Silva', 1400, 'FraturaSalter-HarristipoII.png'),
(3, 29, 35, 'Ricardo Souza', 2214, 'polegardoesquiador.png'),
(8, 30, 38, 'Diego Pereira', 2673, 'Amputaçãotransumeral(traumática).jpeg'),
(13, 30, 36, 'Felipe Castro', 2758, 'fraturatrimaleolar.png'),
(6, 32, 38, 'Leonardo Rodrigues', 3092, 'Fraturadometatarso.png'),
(6, 30, 36, 'Isabella Pereira', 3184, 'Fraturadefalange-pé.png'),
(11, 28, 35, 'Noah Carvalho', 3458, 'Fraturaisoladadoeixoradial.png'),
(3, 30, 36, 'Alex Santos', 3461, 'fraturadoboxeador.jpeg'),
(11, 32, 38, 'Clara Leal', 3477, 'Fraturalateraldocôndiloumeral.jpeg'),
(10, 32, 38, 'Lara Santos', 3498, 'Fraturadoplanaltotibial.png'),
(8, 32, 37, 'Mariana Silveira', 3565, 'Fraturadoacrômio.png'),
(10, 31, 39, 'Valentina Cardozo', 3694, 'fraturapatológica.png'),
(11, 29, 37, 'Olivia Mendonça', 3695, 'Fraturadotorodorádiodistal.jpeg'),
(9, 28, 38, 'Letícia Almeida', 3701, 'Fraturadoplanaltotibial.png'),
(10, 29, 37, 'Sophia D\'Amico', 4139, 'Fraturafemoralsubtrocantérica.png'),
(13, 31, 37, 'Luiza Lopez', 4458, 'Fraturadoacrômio.png'),
(9, 30, 35, 'Thiago Carvalho', 4472, 'fraturatrimaleolar.png'),
(12, 31, 37, 'Sofia Mendes', 4536, 'Fraturadotorodorádiodistal.jpeg'),
(3, 32, 39, 'Henrique Ferraz', 4537, 'Fraturadotrapézio.png'),
(9, 29, 36, 'Mariana Araújo', 4640, 'fraturapatológica.png'),
(5, 29, 35, 'Pedro Oliveira', 5274, 'Fraturadometatarso.png'),
(12, 29, 38, 'Helena Martins', 5346, 'Fraturalateraldocôndiloumeral.jpeg'),
(7, 31, 39, 'Alice Ferreira', 5524, 'Fraturadoacrômio.png'),
(11, 30, 36, 'Matias Cardoso', 5647, 'fraturacoronoide.png'),
(4, 28, 35, 'Jorge Fernandez', 5674, 'polegardoesquiador.png'),
(7, 32, 37, 'Isabela Gomes', 5788, 'RockwoodtipoIII.png'),
(6, 31, 37, 'Sofia Martins', 5806, 'Fraturapediátricadocorpodotálus.jpeg'),
(9, 31, 37, 'Júlia Santos', 5819, 'Fraturafemoralsubtrocantérica.png'),
(9, 32, 39, 'Rafael Andrade', 6120, 'Hasteintramedularfemoraldobrada.png'),
(6, 29, 35, 'Daniel Mendes', 6121, 'Fraturacominutivadafalangedistaldohálux.png'),
(4, 30, 36, 'Gabriel Ferreira', 6354, 'fraturadoboxeador.jpeg'),
(12, 28, 35, 'Theo Ribeiro', 6380, 'fraturacoronoide.png'),
(7, 28, 36, 'Victor Barbosa', 6472, 'Amputaçãotransumeral(traumática).jpeg'),
(5, 30, 37, 'João Santos', 6478, 'FraturaPseudo-Jones.png'),
(12, 30, 36, 'Santiago Pereira', 6548, 'Fraturaisoladadoeixoradial.png'),
(5, 32, 38, 'André Lima', 6637, 'Fraturacominutivadafalangedistaldohálux.png'),
(4, 29, 37, 'Matheus Rocha', 6679, 'dedosdemartelo.jpeg'),
(11, 31, 39, 'Benjamin Rocha', 7275, 'Fraturadeambososossosdoantebraçocomrotação.png'),
(3, 28, 38, 'Ana Martins', 7348, 'Fraturadefalange-mão.png'),
(13, 28, 39, 'Renato Silva', 7350, 'fraturacoronoide.png'),
(12, 32, 39, 'Bento Cardoso', 7524, 'Fraturadeambososossosdoantebraçocomrotação.png'),
(8, 28, 39, 'Giovanna Ribeiro', 8163, 'RockwoodtipoIII.png'),
(7, 29, 38, 'Eduardo Soares', 8315, 'Luxaçãoanteriordoombro.png'),
(5, 28, 36, 'Laura Rodrigues', 8580, 'Fraturadefalange-pé.png'),
(4, 32, 39, 'Camila Almeida', 8704, 'Fraturadefalange-mão.png'),
(13, 32, 38, 'Clara Nogueira', 8727, 'Fraturalateraldocôndiloumeral.jpeg'),
(3, 31, 37, 'Carlos Silva', 8961, 'dedosdemartelo.jpeg'),
(6, 28, 39, 'Luiz Santos', 9020, 'FraturaPseudo-Jones.png'),
(13, 29, 35, 'Lucas Hernandez', 9457, 'dedosdemartelo.jpeg'),
(7, 30, 35, 'Gustavo Costa', 9698, 'luxatioerecta.png'),
(8, 29, 36, 'Anderson Castro', 9944, 'luxatioerecta.png')";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}