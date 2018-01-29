<?
class QueryBuilder
{
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass)
  {
    $statement  = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf("insert into %s (%s) values (%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :" , array_keys($parameters) )
    );
    try
    {
      $stmt = $this->pdo->prepare($sql);

      $stmt->execute($parameters);
    }catch (Exception $e)
    {
      //var_dump($sql);
      die ("Ooops something was wrong");
    }

  }
}
