<h1>Cadastro do Cliente</h1>
<table class='table=striped'>
    <tr>
        <th>Nome</th>
        <td>
            <?=$arrayClient['name']?>
    </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>
            <?=$arrayClient['email']?>
        </td>
    </tr>
    <tr>
        <th>Radio Butron</th>
        <td>
            <?=$arrayClient['radio']?>
        </td>
    </tr>
    <tr>
        <th>Checkbox</th>
        <td>
            <?php
            if($arrayClient['check']){
                echo 'clicado';
            }else{
                echo 'nao selecionado';
            }
            ?>
        </td>
    </tr>
    
</table>

<?php
?>
