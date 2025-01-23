<section>
    <h2>¿Que es una funcion pura?</h2>
    <p>
        Una funcion pura es aquella que no cambia
    </p>
    <pre><code class="language-php">
    &lt;?php

        class Counter{
            public int $count = 0;
        }

        $counter = new Counter;

        function show(Counter $count){
            $count->count++;
            echo "Se actualizo el contador $count->count";
        }

        show($counter);
        show($counter);
        show($counter);
        show($counter);
        
    ?&gt;
    </code></pre>
</section>