<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
        +---------------------+-----------------+------+-----+---------+----------------+
        | Field               | Type            | Null | Key | Default | Extra          |
        +---------------------+-----------------+------+-----+---------+----------------+
        | id                  | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name                | varchar(255)    | NO   |     | NULL    |                |
        | email               | varchar(255)    | NO   | UNI | NULL    |                |
        | department_id       | bigint unsigned | NO   | MUL | NULL    |                |
        | designation_id      | bigint unsigned | NO   | MUL | NULL    |                |
        | gender_id           | bigint unsigned | NO   | MUL | NULL    |                |
        | marital_status_id   | bigint unsigned | NO   | MUL | NULL    |                |
        | mobile              | int unsigned    | NO   |     | NULL    |                |
        | social_security_num | int unsigned    | NO   | UNI | NULL    |                |
        | email_verified_at   | timestamp       | YES  |     | NULL    |                |
        | password            | varchar(255)    | NO   |     | NULL    |                |
        | remember_token      | varchar(100)    | YES  |     | NULL    |                |
        | created_at          | timestamp       | YES  |     | NULL    |                |
        | updated_at          | timestamp       | YES  |     | NULL    |                |
        +---------------------+-----------------+------+-----+---------+----------------+
         */
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'department_id' => Department::factory(),
            'designation_id' => Designation::factory(),
            'gender_id' => Gender::factory() -> create(),
            'marital_status_id' => MaritalStatus::factory() -> create(),
            'mobile' => $this->faker-> randomNumber(7),
            'social_security_num' => $this->faker->randomNumber(5),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
