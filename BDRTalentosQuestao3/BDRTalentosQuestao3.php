<?php
//Questão 3:
//
//Nessa Questão 3 da prova foi refatorada a parte de ordenação dos resultados
//Onde a ordenação pelo banco teria uma perfomace melhor.
class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user order by name');
        return $results;
    }
}
?>