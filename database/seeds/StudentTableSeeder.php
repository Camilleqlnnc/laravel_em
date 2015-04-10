<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('students')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('students')->insert(
            [
                [
                    'firstname'  => 'TonyA',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 8,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'TonyB',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 9,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony2',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 13,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony22',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 13,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony32',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 13,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony42',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 13,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony52',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 13,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony3',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'note'       => 15,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony4',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 17,
                    'status'     => 'unpublish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony5',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 20,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony25',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 20,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony35',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 20,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony45',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => 20,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony6',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => null,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony7',
                    'name'       => 'Tony',
                    'bio'        => 'blablablabla',
                    'type'       => 'artist',
                    'note'       => null,
                    'status'     => 'publish',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }

}
