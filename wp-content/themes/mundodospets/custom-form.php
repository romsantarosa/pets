<section class="serv-dropcolor">
<div class="container">
	<form action="lojas" method="get">
        <div class="row">
            <div class="col-sm-3 select-estado">
                <select class="form-control" id="Estado"> 
                    <option>Escolha o Estado</option>
                    </select>
            </div>

                <div class="col-sm-3 select-cidade">
                    <select class="form-control" id="Cidade" name="s">
                        <option>Escolha a Cidade</option>
                    </select>
                </div>

                <div class="col-sm-3 select-servico" >
                    <select class="form-control"
                    <?php 
                    $args  = array(
                        'show_option_all'    => '',
                        'show_option_none'   => 'Selecione o Serviço',
                        'option_none_value'  => '-1',
                        'orderby'            => 'ASC',
                        'order'              => 'ASC',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'child_of'           => 0,
                        'exclude'            => '',
                        'include'            => '',
                        'echo'               => 1,
                        'selected'           => 0,
                        'hierarchical'       => 0,
						'exclude'            => [101,8,4,10,263,96,5,258,100,3],
                        'name'               => 'cat',
                        'id'                 => '',
                        'class'              => 'postform',
                        'depth'              => 0,
                        'tab_index'          => 0,
                        'taxonomy'           => 'category',
                        'hide_if_empty'      => 0,
                        'value_field'	     => 'term_id',
                    );
                    $the_query = new WP_Query(array ($args ));
                    wp_dropdown_categories( $args  ); ?>
                </div>

       
                <div class="col-sm-3 select-btn">

                    <input type="submit" class="btt positive ui button" value="Pesquisar" />
                </div>
            </div>
        </div>

        
    </form>


                       
</div>
</section>

<script>

    
$(document).ready(function() {
    carregar_json('Estado');

    function carregar_json(id, cidade_id) {
        var html = '';

        $.getJSON(
            "https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json",
            function(data) {
                html += '<option>Selecionar ' + id + '</option>';

                if (id == 'Estado' && cidade_id == null) {
                    for (var i = 0; i < data.estados.length; i++) {
                        html += '<option value=' + data.estados[i].sigla + '>' + data.estados[i].nome +
                            '</option>';
                    }
                } else {
                    for (var i = 0; i < data.estados.length; i++) {
                        if (data.estados[i].sigla == cidade_id) {
                            for (var j = 0; j < data.estados[i].cidades.length; j++) {
                                html += '<option  value="' + data.estados[i].cidades[j] + '">' + data.estados[i].cidades[j] + '</option>';

                            }
                        }
                    }
                }
                $('#' + id).html(html);
            });

    }
    $(document).on('change', '#Estado', function() {
        var cidade_id = $(this).val();
        

        if (cidade_id != null) {
            carregar_json('Cidade', cidade_id);
            
        }
    });
});
</script>
