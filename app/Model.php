<?php


namespace app;


abstract class Model
{
    public $id;
    public static function findById($id){
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = $db->query($sql, [':id' => $id], static::class);

        return $data ? $data[0] : null;
    }

    public static function findAll($tailFirst, $arr=[], $tailSecond='')
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::TABLE . $tailFirst . $tailSecond;


        return $db->query(
            $sql,
            $arr,
            static::class);
    }


    public function insert()
    {
        $fields = get_object_vars($this);


        $cols = [];
        $data = [];
        foreach ($fields as $name => $value){
            if('id' == $name) {
                continue;
            }
                $cols[] = $name;
                $data[':' . $name] = $value;

        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $cols) . ') 
        VALUES (' . implode(',', array_keys($data)) . ')';


        $db = new Db();
        return $db->execute($sql, $data);

        $this->id = $db->getLastId();

    }

    public function update()
    {
        $fields = get_object_vars($this);
        $id = '';
        $valId = 0;
        $sql = 'UPDATE ' . static::TABLE . ' SET ';
        $i = 1;
        foreach ($fields as $name => $value){
            if('id' == $name) {
                $id = $name;
                $valId = $value;
                continue;
            }
                $sql = $sql.$name. '=\''. $value.'\'';
                $i++;
                if( $i != count($fields)){
                    $sql = $sql.',';
                }
        }
        $sql = $sql.' WHERE '. $id . '='.$valId;

        $db = new Db();
        return $db->execute($sql);

    }

    public function save()
    {
        $fields = get_object_vars($this);
        if(is_null($fields['id'])){
            $this->insert();
        }else{
            $this->update();
        }


    }

    public function delete()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value){

            $cols[] = $name;
            $data[':' . $name] = $value;

        }
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE '.$cols[0].'=:'.$cols[0];
        echo $sql;

        $db = new Db();
        $db->execute($sql, [':'.$cols[0] => $data[':id']]);
    }
}