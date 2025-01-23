<section>

    <h2>¿Que es un Callback?</h2>

    <p>
        Un <b>callback</b> es una función que se pasa como argumento a otra función y se ejecuta dentro de esa función en un momento determinado.
    </p>

    <h3>Caracteristicas de un callback</h3>

    <ul>
        <li>
            Se pasa como argumento a otra función.
        </li>
        <li>
            No se ejecuta inmediatamente, sino dentro de la función que lo recibe.
        </li>
        <li>
            Permite personalizar el comportamiento de una función sin modificar su código
        </li>
    </ul>

    <pre><code>
    &lt;?php

        $numeros = [1,2,3,4,5,6];

        function arrayForTwo(array $arr, callable $fn) : array {
            
            $newArray = [];

            foreach ($arr as $elemento) {
                $newElements = $fn($elemento); // aqui se ejecuta la funcion que se paso como parametro
                $newArray[] = $newElements;
            }

            return $newArray;
        }

        $nuevoArreglo = arrayForTwo($numeros, fn ($elemento) => $elemento * 2);
        print_r($nuevoArreglo);

    ?&gt;
    </code></pre>

    <p>Esto nos permite modificar una función que se le pasa al callback sin tener que cambiar el callback. Aqui modifico la funcion para que no multiplique por 2 sino por 4 y que tambien que se vea como una referencia de que calculo se hizo.</p>

    <pre><code>
    &lt;?php

        $numeros = [1,2,3,4,5,6];

        function arrayForTwo(array $arr, callable $fn) : array {
            
            $newArray = [];

            foreach ($arr as $elemento) {
                $newElements = $fn($elemento);
                $newArray[] = $newElements;
            }

            return $newArray;
        }

        $nuevoArreglo = arrayForTwo($numeros, fn ($elemento) => "$elemento * 4 = ". $elemento * 4); // se modifico esta linea para que sea otro el resultado, se hizo un simple cambio que altero el resultado
        print_r($nuevoArreglo);

    ?&gt;
    </code></pre>

</section>