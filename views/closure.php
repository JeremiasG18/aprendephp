<section>
    
    <h2>¿Qué es un closure?</h2>

    <p>
        En PHP, un Closure es un objeto especial que representa una función anónima. Aunque en JavaScript las funciones anónimas y los closures son conceptos distintos, en PHP todas las funciones anónimas son instancias de la clase Closure.
    </p>

    <p>
        Esto es un closure en la programación general. Pero en PHP todas las funciones anonimas son closures.
    </p>

    <pre><code>
    &lt;?php

        function add(float $number){

            return function($number2) use($number){ // Función interna (closure)
                return $number + $number2;
            };
        }

        $responseAddFn = add(10); // se crea un closure

        echo $responseAddFn(20); // 30
        echo $responseAddFn(40); // 50
        echo $responseAddFn(60); // 70

    ?&gt;
    </code></pre>

    <p>
        Aqui $responseAddFn es un closure porque sigue recordando al parametro que se le paso en la función add, es decir al 10, incluso despues de que se haya terminado de ejecutarse.
    </p>

    <h3>En Resumen</h3>
    <p><b>En JavaScript o en la programacion en general:</b> Un closure es cualquier función que recuerda su contexto, aunque su ámbito original haya desaparecido. <br>
    <b>En PHP:</b> Un closure es una instancia de Closure, pero solo mantiene variables externas si se capturan con use().</p>


</section>