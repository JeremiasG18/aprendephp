<section>

    <h2>Función array_map()</h2>

    <p>
        <b>Array_map</b> es una función que aplica una función de devolución de llamada a cada elemento de uno o más arrays y devuelve un nuevo array con los valores transformados. Es útil para realizar operaciones sobre los elementos de un array sin necesidad de recorrerlo manualmente con un foreach.
    </p>

    <pre><code class="language-php">
    &lt;?php

        # Sintaxis

        array_map(callable $callback, array $array1, array $... = ?): array

    ?&gt;
    </code></pre>

    <p>Esto es un ejemplo del uso de array_map, basicamente se le pasa una función de primera clase, en este caso le paso una funcion flecha pero este tambien es una función de primera clase, como primer parametro y luego se le pasa el array. Lo que hace array_map es recorrer el arreglo que se le pasa como parametro y devuelve un nuevo array con los datos que se fliltro por asi decirlo con la funcion flecha que le pasamos como parametro.</p>

    <p>En este caso lo que hace el <b>array_map</b> es recorrer el array para guardar solamente el valor de la propiedad <b>name</b> dentro del array <b>$names</b>.</p>

    <pre><code class="language-php">
    &lt;?php

        require "modelsArray/functions.php";
        require "modelsArray/people.php";

        use ModelsArray\People;

        $people = [
            new People("Juan", 20),
            new People("Pedro", 30),
            new People("Maria", 25)
        ];

        $names = array_map(fn ($person) => $person->name, $people);

        show($names); # -> aqui muestro el array $names

    ?&gt;
    </code></pre>

    <p>Como puedes ver en la sintaxis de array_map se le pueden pasar multiples de arrays, por lo que aqui veras un ejemplo del mismo.</p>

    <pre><code class="language-php">
    &lt;?php

        # ...codigo anterior

        $namesWithNumber = array_map(
            fn ($person, $index) => ($index + 1) . " - " . "&lt;b&gt;" . $person->name . "&lt;/b&gt;", 
            $people, 
            array_keys($people) # array_keys retorna un array con los indices del array que se le paso
            # con el parametro index recibimos los indices por cada iteración
        );
        

        show($namesWithNumber);

    ?&gt;
    </code></pre>

    <p>Lo que hace aqui array_map es retornar un array con cada valor de la propiedad name del array que se le paso concatenado con el numero de elemento a su izquierda.</p>

</section>