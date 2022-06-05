<h1>Editar Contato</h1>
<hr>
<form action="" method="post">
    <input value= "<?php echo $dados[0];?>" class="input-group mb-3" type="text" name="nome" id="" placeholder="Nome">
    <input value= "<?php echo $dados[1];?>" class="input-group mb-3" type="text" name="email" id="" placeholder="e-mail">
    <input value= "<?php echo $dados[2];?>" class="input-group mb-3" type="tel" name="telefone" id="" placeholder="Telefone">
    <button class="btn btn-primary" type="submit">Editar</button>
</form>


<!-- Lembrando!!! value diz respeito ao valor que irá dentro do campo text, tel, etc. quando vc deseja setar este dado, basta usar o value para isso. -->