<?php

namespace App\Repositories;

use Exception;
use Framework\Database;

abstract class AbstractRepository
{
    protected Database $database;
    protected string $tableName;
    protected string $className;

    protected array $columnNames;

    /**
     * @throws Exception
     */
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->columnNames = $this->getColumnNames($this->tableName);

    }

    /**
     * @param $tableName
     * @return array
     * @throws Exception
     */
    private function getColumnNames($tableName): array
    {
        $statement = $this->database->run("SELECT name 
            FROM sqlite_master 
            WHERE type = 'table' 
            AND name 
            NOT LIKE 'sqlite_%';");
        $tables = [];

        foreach ($statement as $row) {
            $table = $row->name;
            $tables[] = $table;
        }

        if (!in_array($tableName, $tables, true)) {
            throw new Exception("Table named $tableName does not exist");
        }

        $stmt = $this->database->run("SELECT name FROM pragma_table_info('$tableName')");
        $columnNames = [];
        foreach ($stmt as $row) {
            $columnName = $row->name;
            $columnNames[] = $columnName;
        }
        return $columnNames;
    }

    public function all(): array
    {
        $rows = $this->database->run("SELECT * FROM {$this->tableName} ORDER BY id")->fetchAll();

        $items = [];

        foreach ($rows as $row) {
            $items[] = $this->fromDBRow($row);
        }

        return $items;
    }

    protected function fromDBRow(object $row): object
    {
        $object = new $this->className();

        foreach ($this->columnNames as $column) {
            $object->{$column} = $row->{$column};
        }

        return $object;
    }

    public function findById(int $id): ?object
    {
        $row = $this->database->run("SELECT * FROM {$this->tableName} WHERE id = :id", ['id' => $id])->fetch();

        if (!$row) {
            return null;
        }

        return $this->fromDBRow($row);
    }

    public function delete(int $id): void
    {
        $this->database->run("DELETE FROM {$this->tableName} WHERE id = :id", ['id' => $id]);
    }

    public function update(object $entity): void
    {
        $setParts = [];
        $params = [];

        foreach ($this->columnNames as $column) {

            if ($column === 'id') {
                continue;
            }

            if (!property_exists($entity, $column)) {
                continue;
            }

            $setParts[] = "{$column} = :{$column}";
            $params[$column] = $entity->{$column};
        }

        $params['id'] = $entity->id;

        $sql = "UPDATE {$this->tableName}
            SET " . implode(', ', $setParts) . "
            WHERE id = :id";

        $this->database->run($sql, $params);
    }

    public function insert(object $entity): object
    {
        $columns = [];
        $placeholders = [];
        $params = [];

        foreach ($this->columnNames as $column) {

            // Skip auto-increment ID
            if ($column === 'id') {
                continue;
            }

            if (!property_exists($entity, $column)) {
                continue;
            }

            $columns[] = $column;
            $placeholders[] = ':' . $column;
            $params[$column] = $entity->{$column};
        }

        $sql = "INSERT INTO {$this->tableName} (" . implode(', ', $columns) . ") 
        VALUES (" . implode(', ', $placeholders) . ")";

        $this->database->run($sql, $params);

        $entity->id = $this->database->getLastID();
        return $entity;
    }
}
