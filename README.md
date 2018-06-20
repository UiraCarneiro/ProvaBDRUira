# ProvaBDRUira
Questões da prova do candidato Uirá de Souza Carneiro para a BDR – Talentos Corporativos



Paras as questões 1,2,3 foram criadas 3 pastas onde cada código php se encontram dentro da mesma.

Na questão 1 foi utilizado um "for" de 1 a 100, onde 3 "if's" verificariam se elas seriam múltiplos de 3, 5 ou 3 e 5. Imprimindo assim o resultado na tela.

Na questão 2 foi averiguado que seria possível agregar os 2 if's em um sócom o operador lógico "OR".

Na questão 3 foi observado que uma ordenação feita pelo banco de dados seria mais eficiente que a ordenação feita pelo php.

----------------------------------------------------------------------------------------------------------------------------------------

Para a questão 4 foi utilizado o framework CakePHP 3.6.5 com um servidor Apache.
O projeto está configurado para rodar com um banco de dados MySQL com as seguintes configurações que são inseridas no arquivo config/app.php.
. Passo a seguir a posição 'Datasources' que leva as configurações de conexão com o BD do cake.
. As posições 'username', 'password', 'database' levam o nome de usuário do servidor, senha do servidor, e nome do banco de dados, respectivamente.


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
        
Para o banco de dados foi criado uma tabela com o nome de "tarefas" com os seguintes campos:
.id
.titulo
.descricao
.prioridade

Segue a baixo a SQL utilizada para a criação das tabelas

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
