<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResourceTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
    +-------------------+-----------------+------+-----+---------+----------------+
    | Field             | Type            | Null | Key | Default | Extra          |
    +-------------------+-----------------+------+-----+---------+----------------+
    | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name              | varchar(255)    | NO   |     | NULL    |                |
    | email             | varchar(255)    | NO   | UNI | NULL    |                |
    | department_id     | bigint unsigned | NO   | MUL | NULL    |                |
    | designation_id    | bigint unsigned | NO   | MUL | NULL    |                |
    | email_verified_at | timestamp       | YES  |     | NULL    |                |
    | password          | varchar(255)    | NO   |     | NULL    |                |
    | remember_token    | varchar(100)    | YES  |     | NULL    |                |
    | created_at        | timestamp       | YES  |     | NULL    |                |
    | updated_at        | timestamp       | YES  |     | NULL    |                |
    +-------------------+-----------------+------+-----+---------+----------------+
    10 rows in set (0.00 sec)

     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this -> name,
            'email' => $this-> email,
            'department' => $this -> department_id,
            'designation' => $this -> designation_id
        ];
    }
}
