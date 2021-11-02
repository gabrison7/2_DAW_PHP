<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $datos = [

        [

            "name" => "Chloe Fletcher",

            "phone" => "(415) 212-0850",

            "email" => "morbi.sit@mi.org"

        ],

        [

            "name" => "Nichole Finley",

            "phone" => "(737) 326-6974",

            "email" => "ac.libero@metusaenean.org"

        ],

        [

            "name" => "Jakeem Hyde",

            "phone" => "(623) 183-3549",

            "email" => "sed@crasconvallis.org"

        ],

        [

            "name" => "Damian Boyd",

            "phone" => "(976) 610-0075",

            "email" => "mauris@nislarcu.net"

        ],

        [

            "name" => "Valentine Mcintosh",

            "phone" => "(606) 667-6658",

            "email" => "laoreet.lectus.quis@nequein.ca"

        ],

        [

            "name" => "Lucius Boyer",

            "phone" => "(882) 686-0638",

            "email" => "est@morbi.co.uk"

        ],

        [

            "name" => "Lois Slater",

            "phone" => "(725) 700-8780",

            "email" => "dolor@magnaduis.net"

        ],

        [

            "name" => "Willa Mullen",

            "phone" => "(549) 437-1897",

            "email" => "pede.blandit.congue@arcuiaculis.ca"

        ],

        [

            "name" => "Lev Mcknight",

            "phone" => "(885) 195-5361",

            "email" => "diam.pellentesque@risusquisque.ca"

        ],

        [

            "name" => "Rajah Allison",

            "phone" => "(272) 702-1262",

            "email" => "montes.nascetur@aliquetdiamsed.org"

        ],

        [

            "name" => "Trevor Cox",

            "phone" => "(516) 782-4751",

            "email" => "in.faucibus@eutellus.com"

        ],

        [

            "name" => "Nicholas Mullen",

            "phone" => "(701) 682-0521",

            "email" => "vulputate.risus.a@dictum.co.uk"

        ]
    ];

    $archivo = "array.txt";

    if (file_exists($archivo)) {

        $abrir = fopen($archivo, "a");

        foreach ($datos as $dato) {

            $contenido = $dato['name'] . "#" . $dato['email'] . chr(13) . chr(10);

            fwrite($abrir, $contenido);
        }
        fclose($archivo);
    } else {
        echo 'El archivo no existe';
    }
    ?>
</body>

</html>