<?php
require("../vendor/autoload.php");


use Tanyong\LaravelUtil\Util\ArrUtil;

class A
{
    public function __construct(
        public string $name,
        public int $age
    ){}
}

$a = new A("谭勇",27);

$arr = [
    123213,$a,
    'key'   =>  1,
    "age"   =>  27,
    "name"  =>  "我试试黑",
    "list"  =>  [
        "aaaa",11111,
        [
            "name"  =>  "谭勇",
            "age"   =>  27,$a
        ],
        [
            "name"  =>  "谭勇",
            "age"   =>  27,
            "obj"   =>  $a,
            "list"  =>  [
                [
                    "name"  =>  "谭勇",
                    "age"   =>  27,
                    "obj"   =>  $a
                ]
            ]
        ]
    ],
    "list1" =>  [
        [
            "name"  =>  "谭勇",
            "age"   =>  27,
            "obj"   =>  $a
        ],
        [
            "name"  =>  "谭勇",
            "age"   =>  27,
            "obj"   =>  $a
        ]
    ]
];

ArrUtil::paramsToString($arr);

var_dump($arr);