<?php

namespace coccoto\selectdb;

use coccoto\selectdb\internal as internal;

final class CRUD extends Fetch {

    private ? object $select = null;
    private ? object $insert = null;
    private ? object $update = null;
    private ? object $delete = null;

    public function __construct() {

        parent::__construct();

        $this->select = new internal\Select();
        $this->insert = new internal\Insert();
        $this->update = new internal\Update();
        $this->delete = new internal\Delete();
    }

    public function select(string $table, array $data): bool {

        $this->select->isset($data);
        $sql = $this->select->create($table, $data);
        $formatData = $this->select->format($data);
        return $this->run($sql, $formatData);
    }

    public function insert(string $table, array $data): bool {

        return $this->write($table, $data, __FUNCTION__);
    }

    public function update(string $table, array $data): bool {

        return $this->write($table, $data, __FUNCTION__);
    }

    public function delete(string $table, array $data): bool {

        return $this->write($table, $data, __FUNCTION__);
    }

    private function write(string $table, array $data, string $function): bool {

        $sql = $this->$function->create($table, $data);
        return $this->run($sql, $data);
    }
}