# ProvaBDRUira
Questões da prova do candidato Uirá de Souza Carneiro para a BDR – Talentos Corporativos

Paras as questões 1,2,3 foram criadas 3 pastas cada código php se encontra.

Na questão 1 foi utilizado um "for" de 1 a 100, onde 3 "if's" verificariam se elas seriam múltiplos de 3, 5 ou 3 e 5. Imprimindo assim o resultado na tela.

Na questão 2 foi averiguado que seria possível agregar os 2 if's em um sócom o operador lógico "OR".

Na questão 3 foi observado que uma ordenação feita pelo banco de dados seria mais eficiente que a ordenação feita pelo php.

----------------------------------------------------------------------------------------------------------------------------------------

Por limitações da configuração da conta no github só é possível enviar 100 arquivos, entretanto quando é criado um projeto com o CakePHP são criado muitos arquivos, sendo assim todos os arquivos da questão 4 estão compactados em BDRTalentosQuestao4.rar. <br>
Para a questão 4 foi utilizado o framework CakePHP 3.6.5 com um servidor Apache. <br>
O projeto está configurado para rodar com um banco de dados MySQL com as seguintes configurações que são inseridas no arquivo config/app.php. <br>
. Passo a seguir a posição 'Datasources' dentro do arquivo config/app.php que leva as configurações de conexão com o BD do cake. <br>
. As posições 'username', 'password', 'database' levam o nome de usuário do servidor, senha do servidor, e nome do banco de dados, respectivamente. <br>


'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => '',
            'database' => 'bdrtalentosquestao4',
            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'quoteIdentifiers' => false,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            'url' => env('DATABASE_URL', null),
        ],
        
 
---------------------------------------------------------------------------------------------------------------------------------------        
        
Ainda para a questão 4 o banco de dados foi com criado uma tabela de nome "tarefas" com os seguintes campos: <br>
.id <br>
.titulo <br>
.descricao <br>
.prioridade <br>

Segue a baixo a SQL utilizada para a criação das tabelas <br>

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `prioridade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
----------------------------------------------------------------------------------------------------------------------------------------

Além das telas de cadastro/edição/exclusão/ foi criada também uma tela para visualizar a lista de tarefas e outra tela para alterar as prioridades de cada uma (essa com a opção drag and drop).
