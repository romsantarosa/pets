<?php get_header(); ?>
<section class="container">
<div class="contatotopo">
    <img src="https://mundodospets.com/wp-content/uploads/2019/03/contact1170.png" alt="Contato">
</div>
<div class="contatotopo-mobile">
    <img src="https://mundodospets.com/wp-content/uploads/2019/03/dog-phone.jpg" alt="Contato">
</div>

<div class="contato">
    <form id="contactForm" method="POST" class=" container col-md-6"><br>
        <div class="form-group">
            <label for="nome_completo">* Digite seu nome completo:</label>
            <input type="text" class="form-control" placeholder="nome" id="nome_completo" name="nome_completo" required>
        </div>

        <div class="form-group">
            <label for="email">Informe seu e-mail:</label>
            <input type="text" class="form-control" placeholder="E-mail" name="mail" id="mail" required>
        </div>

        <div class="form-group">
            <label for="telefone">Informe o seu telefone:</label>
            <input type="text" class="form-control" placeholder="DDD + Número" name="numero_telefone" id="numero_telefone" required>
        </div>

        <div class="form-group">
            <label for="telefone">Nome da Loja:</label>
            <input type="text" class="form-control" placeholder="nome" name="nome_da_loja" id="nome_da_loja"  required>
        </div>

        <div class="form-group">
            <label for="conheceu">Qual o ramo de negócio?</label><br />
            <input type="checkbox" id="petshop" name="petshop" value="petshop"> Pet Shop<br />
            <input type="checkbox" id="banhoetosa" name="banhoetosa" value="banhoetosa"> Banho e Tosa <br />
            <input type="checkbox" id="clinicaveterinaria" name="clinicaveterinaria" value="clinicaveterinaria"> Clínica Veterinária <br />
            <input type="checkbox" id="dogwalker" name="dogwalker" value="dogwalker"> Dogwalker<br />
            <input type="checkbox" id="farmacia" name="farmacia" value="farmacia"> Farmácia Pet<br />
            <input type="checkbox" id="hospedagem" name="hospedagem" value="hospedagem"> Hospedagem<br />
            <input type="checkbox" id="ongs" name="ongs" value="ongs"> Ong´s<br />
            <input type="checkbox" id="aviario" name="aviario" value="aviario"> Aviário<br />
            <input type="checkbox" id="aquarismo" name="aquarismo" value="aquarismo"> Aquarismo<br /><br />
            <input type="checkbox" id="petfriendly" name="petfriendly" value="aquarismo"> Petfriendly<br /><br />

            <div class="form-group">
            <label for="nome_completo">Outro:</label>
            <input type="text" class="form-control" placeholder="Qual?" id="outro" name="outro" required>
        </div>
       
       </div>

       <div class="form-group">
            <label for="conheceu">Como conheceu nosso site?</label><br />
            <input type="checkbox" id="google" name="google" value="google"> Google<br />
            <input type="checkbox" id="amigos"  name="amigos" value="amigos"> Amigos <br />
            <input type="checkbox" id="revistas_jornais" name="revistas_jornais" value=""> Revistas e Jornais <br />
            <input type="checkbox" id="facebook" name="facebook" value=""> Facebook<br />
            <input type="checkbox" id="instagram" name="instagram" value=""> Instagram<br />
            <input type="checkbox" id="tv" name="tv" value=""> TV<br />
            <input type="checkbox" id="radio" name="radio" value=""> Rádio<br />
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gostaria de deixar algum comentário, sugestão, crítica?</label>
            <textarea name="mensagem" class="form-control" id="mensagem" rows="13"></textarea>
        </div>

        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-outline-success">
                <span>Enviar dados</span></button><br><br>
        </div>

    </form>
</div>
</div>
</section>

<script>


document.getElementById('contactForm').addEventListener('submit', submitForm);

function submitForm(e){
    e.preventDefault();

    var name = getInputVal('nome_completo');
    var mail = getInputVal('mail');
    var phone = getInputVal('numero_telefone');
    var company = getInputVal('nome_da_loja');
    var other = getInputVal('outro');

    



    var petshop = getInputVal('petshop');
    var banhoetosa = getInputVal('banhoetosa');
    var clinicaveterinaria = getInputVal('clinicaveterinaria');
    var dogwalker = getInputVal('dogwalker');
    var farmacia = getInputVal('farmacia');
    var hospedagem = getInputVal('hospedagem');
    var ongs = getInputVal('ongs');
    var aviario = getInputVal('aviario');
    var aquarismo = getInputVal('aquarismo');
    var petfriendly = getInputVal('petfriendly');

    console.log();

    var google = getInputVal('google');
    var friends = getInputVal('amigos');
    var news = getInputVal('revistas_jornais');
    var facebook = getInputVal('facebook');
    var instagram = getInputVal('instagram');
    var tv = getInputVal('tv');
    var radio = getInputVal('radio');
    var message = getInputVal('mensagem');


    
}

function getInputVal(id){
    return document.getElementById(id).value;

}

</script>
<?php get_footer(); ?>