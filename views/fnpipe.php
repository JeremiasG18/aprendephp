<section>

    <h2>¿Qué es una función Pipe()</h2>

    <p>
        Una función <b>Pipe (o piping)</b> es una técnica funcional que permite encadenar múltiples funciones de manera secuencial, donde la salida de una función se convierte en la entrada de la siguiente. Se usa para mejorar la legibilidad y evitar llamadas anidadas de funciones.
    </p>

    <p>
        Primero debemos aprender que es una <b>desestructuración</b>. La desestructuracion es una función que permite asignar variables como si fueran elementos de una matriz.
    </p>
    <pre><code class="language-php">
    &lt;?php

        function showNames (...$names){ // aqui puedo recibir tantos valores como se necesite 

        }

        showNames("Jeremias", "Josue", "Benja", "Leo"); // y asi cuantos valores yo quiera
    ?&gt;
    </code></pre>

    <p>La variable $names es un arreglo que va a contener todos esos valores que nosotros le pasamos.</p>

    <pre><code class="language-php">
    &lt;?php

        function showNames (...$names){
            foreach($names as $name){ // recorro el arreglo $names y imprimo los valores por pantalla
                echo $name;
            }
        }

        showNames("Jeremias", "Josue", "Benja", "Leo");
    ?&gt;
    </code></pre>

    <p>Esto es una función pipe. Se pasan multiples funciones como parametros y se ejecutan una despues de la otra.</p>

    <pre><code class="language-php">
    &lt;?php

        function myPipe(...$funcs){
            
            return function ($value) use($funcs){
                foreach ($funcs as $func) {
                    $value = $func($value);
                }

                return $value;
            };

        }

        $toUpper = fn ($s) => strtoupper($s); // strtoupper convierte un string a mayuscula
        $replaceSpace = fn ($s) => str_replace(" ", "", $s); // str_replace en este caso saca los espacios
        $replaceNumbers = fn ($s) => preg_replace('/\d+/U', '', $s); // preg_replace en este caso saca los numeros

        $myPipe = myPipe($toUpper, $replaceSpace, $replaceNumbers); // aqui paso las funciones creadas anteriormente

        # aqui la variable $myPipe tiene una función al cual le paso un valor
        $result = $myPipe('abcd ef18191 gh'); // y retorna ABCDEFGH

        echo $result;

    ?&gt;
    </code></pre>

</section>