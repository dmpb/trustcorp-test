<?php

class QueryBuilder
{
    protected $pdo;

    /**
     * __construct
     *
     * @param  PDO $pdo
     * @return void
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * selectAll
     *
     * @param  string $table
     * @return array
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    
    /**
     * insert
     *
     * @param  string $table
     * @param  array $parameters
     * @return void
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);
    }
    
    /**
     * last
     *
     * @param  string $table
     * @return void
     */
    public function last($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} order by id desc limit 1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }
    
    /**
     * delete
     *
     * @param  string $table
     * @param  string $id
     * @return void
     */
    public function delete($table, $id)
    {
        $statement = $this->pdo->prepare("delete from {$table} where id = $id");

        $statement->execute();
    }
}
