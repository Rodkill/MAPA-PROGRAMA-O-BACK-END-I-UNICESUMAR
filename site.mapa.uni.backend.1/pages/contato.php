<?php
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "form";
    if($action == "form"):
?>

    <form action="?page=contato&action=enviar" method="POST" class="form-contact">
        <div><h1>Contato e Pedidos</h1></div>
        <div>
            <input type="text" placeholder="Seu Nome Completo" name="nome">
        </div>
        <div>
            <input type="email" placeholder="Seu E-mail" name="email">
        </div>
        <div>
            <input type="text" placeholder="Seu Telefone" name="telefone">
        </div>
        <div>
            <textarea name="mensagem" placeholder="Escreva aqui seu pedido ou mensagem" rows="9"></textarea>
        </div>

        <div>

            <button>Enviar</button>

        </div>

    </form>
<?php endif ?>

<?php 
    if($action == "enviar"):
?>

    <div class="message">

        <strong>Sua mensagem foi envaida.</strong>
        <p>Entraremos em contato em breve.</p>
        
    </div>

<?php
    endif
?>