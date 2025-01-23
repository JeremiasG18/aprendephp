<section>
    <h2>¿Que es una función flecha?</h2>

    <p>
        Las <b>'funciones flechas'</b> es una forma mas simple, concisa, corta de definir funciones.
    </p>

    <pre><code class="language-php">
    &lt;?php
            
        $sum = fn ($a, $b) => $a + $b;

        echo $sum(2,4); // 6

    ?&gt;
    </code></pre>

    <p>
        Aqui tambien podemos ver que en lugar de crear una funcion y luego pasar como parametro a una funcion de orden superior, creamos directamente como un parametro una funcion flecha. Entonces esto nos ayuda en algunos casos a acortar por asi decirlo nuestro codigo
    </p>

    <pre><code class="language-php">
    &lt;?php

        function show(callable $fn, float $a, float $b){
            echo $fn($a, $b);
        }
        
        // el primer parametro es la funcion flecha, el 5 y 3 ya serian los otros parametros que pide la funcion show()
        show(fn ($a, $b) => $a - $b, 5, 3);

    ?&gt;
    </code></pre>

    <p>Hay que tener en cuenta que una funcion flecha solo se escribe en una linea no es como en JavaScript, pero posiblemente mas adelante tengamos algo paracido.</p>


    <pre><code class="language-javascript">

    const fn = () => {
        return a + b;
    }

    console.log(fn(2,4)); // 6

    // Esto es JavaScript
    
    </code></pre>

</section>