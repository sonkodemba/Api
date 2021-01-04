<?php

namespace App\Http\Resources\Department;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResourceTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
    +--------------+-----------------+------+-----+---------+----------------+
    | Field        | Type            | Null | Key | Default | Extra          |
    +--------------+-----------------+------+-----+---------+----------------+
    | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name         | varchar(255)    | NO   | UNI | NULL    |                |
    | descriptions | longtext        | YES  |     | NULL    |                |
    | deleted_at   | timestamp       | YES  |     | NULL    |                |
    | created_at   | timestamp       | YES  |     | NULL    |                |
    | updated_at   | timestamp       | YES  |     | NULL    |                |
    +--------------+-----------------+------+-----+---------+----------------+

     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this -> name,
            'descriptions' => $this -> descriptions
        ];
    }
}
