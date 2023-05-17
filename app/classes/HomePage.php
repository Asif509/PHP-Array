<?php


namespace App\classes;


class HomePage
{
    public $students = [];
    public function __construct(){
        $this->students = [
            0 => [
                'name' =>'Adnan',
                'email' => 'adnan@bitm.com',
                'mobile' => [
                    'personal' => '019745734987',
                    'parent' => '039485984497'
                ]
            ],
            1 => [
                'name' =>'Asif',
                'email' => 'Asif@bitm.com',
                'mobile' => [
                    'personal' => [
                        0 => '38478743487',
                        1 => '38478743487',
                        2=> '545647464774'
                    ],
                    'parent' => '08546838709'
                ]
            ],
            3 => [
                'name' =>'Poran',
                'email' => 'poran@bitm.com',
                'mobile' => [
                    'personal' => '598309043592',
                    'parent' => '298598590837'
                ]
            ],
        ];
    }
    public function index(){
//        echo $this->students[0]['mobile']['personal'];
//        echo '<pre/>';
//        print_r($this->students);

        foreach ($this->students as $student){
//            echo '<pre>';
//            print_r($student);

            foreach ($student as $value){

                if (is_array($value)){
                    foreach ($value as $item){
                        if (is_array($item)){
                            foreach ($item as $number){
                                echo $number.'<br/>';
                            }
                        }
                        else{
                            echo $item.'<br/>';
                        }
                    }
                }
                else{
                    echo $value.'<br/>';
                }
            }
            echo '<br/>';
        }
    }

}