<section>

    <h2>Patrón de Diseño Comportamiento - Strategy</h2>

    <p>
        Los patrones de comportamiento son patrones de diseño que se enfocan en la interacción entre objetos. Estos patrones se utilizan para gestionar las responsabilidades y la comunicación entre los diferentes objetos en un sistema sin que estos estén directamente acoplados, lo que facilita la flexibilidad y la reutilización del código.<br>
        Existen varios patrones de comportamiento pero nosotros hablaremos de <b>Strategy</b>.
    </p>

    <p>
        <b>Strategy</b> es un patrón de comportamiento que permite definir una familia de algoritmos, poner cada uno de ellos en una clase separada y hacerlos intercambiables. Este patrón permite que un objeto cambie su comportamiento sin modificar su clase original. 
    </p>
    <p>
        En lugar de tener múltiples métodos que gestionan diferentes algoritmos, puedes crear una estrategia y permitir que el objeto seleccione dinámicamente qué algoritmo usar, basándose en la situación.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Estrategia de pago
        interface PaymentStrategy {
            public function pay($amount);
        }

        // Implementación de pago con tarjeta
        class CreditCardPayment implements PaymentStrategy {
            public function pay($amount) {
                echo "Pagando $amount con tarjeta de crédito.\n";
            }
        }

        // Implementación de pago con PayPal
        class PayPalPayment implements PaymentStrategy {
            public function pay($amount) {
                echo "Pagando $amount con PayPal.\n";
            }
        }

        // Implementación de pago con criptomonedas
        class CryptoPayment implements PaymentStrategy {
            public function pay($amount) {
                echo "Pagando $amount con criptomonedas.\n";
            }
        }

        // Contexto que usa la estrategia
        class PaymentContext {
            private $strategy;

            public function __construct(PaymentStrategy $strategy) {
                $this->strategy = $strategy;
            }

            public function executePayment($amount) {
                $this->strategy->pay($amount);
            }
        }

        // Uso del patrón Strategy
        $paymentMethod = new CreditCardPayment(); // Se puede cambiar fácilmente a cualquier otra estrategia
        $paymentContext = new PaymentContext($paymentMethod);
        $paymentContext->executePayment(100); // Pagando 100 con tarjeta de crédito

        $paymentMethod = new PayPalPayment();
        $paymentContext = new PaymentContext($paymentMethod);
        $paymentContext->executePayment(200); // Pagando 200 con PayPal

    ?&gt;
    </code></pre>

    <p>
        Este código es un ejemplo de cómo se aplica el <b>patrón de diseño Strategy</b>. Primero, se crea una interfaz <b>PaymentStrategy</b>, que define un método <b>pay($amount)</b>. Luego, se implementan diferentes estrategias de pago <b>(CreditCardPayment, PayPalPayment y CryptoPayment)</b>, cada una con su propia lógica de pago.
    </p>
    <p>
        Después, se define la clase <b>PaymentContext</b>, que actúa como el contexto donde se ejecutará dinámicamente cualquier método de pago. Esta clase recibe una estrategia de pago y delega la ejecución a la estrategia seleccionada.
    </p>
    <p>
        Finalmente, se crean objetos de cada método de pago y se utiliza <b>PaymentContext</b> para ejecutar la estrategia correspondiente, permitiendo cambiar el método de pago sin modificar la estructura del código.
    </p>

    <img src="./assets/img/strategy.png" alt="patron de comportamiento -> strategy" style="width:100%; padding:10px 0;">

    <p>
        <b>IStrategy (Interfaz)</b> -> IStrategy es una interfaz que define el método Execute(). Cualquier estrategia concreta debe implementar esta interfaz.
    </p>

    <p>
        <b>ConcreteStrategyA y ContrategyA1 (Estrategias concretas)</b> -> ConcreteStrategyA y ConcreteStrategyA1 implementan IStrategy, cada una con su propia lógica. Ambas proporcionan su versión del método Execute().
    </p>

    <p>
        <b>Context (El contexto donde se aplica la estrategia)</b> ->  Context es la clase que usa una estrategia sin conocer su implementación. Tiene un atributo que almacena una referencia a IStrategy. Puede ejecutar el método SomeAction(), el cual llama a Execute() de la estrategia asignada.
    </p>

</section>