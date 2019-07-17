<h3>Colunistas</h3>
<div class="list-group-item list-group-item-action flex-column align-items-start col-md-12">
    <div class="row ">
        <div class="col-md-2"><?php $author='1'; ?><?php echo get_avatar($author, 140); ?></div>


        <div class="nomecol col-md-10">
            <h5 class="nomecol"><a
                    href="<?php bloginfo('url'); ?>/?author=<?php echo $author ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ." ". $user_info->last_name ."\n"); ?></a>
            </h5>
            <p>Graduado em Tecnologia da Informação, é apaixonado pelo mundo tecnológico e dos animais. Administrador e
                Full Stack Developer do portal Mundo dos Pets. Siga-o nas redes sociais: F | T | I | Y</p>
        </div>
    </div>
</div>


<div class="list-group-item list-group-item-action flex-column align-items-start col-md-12">
    <div class="row ">
        <div class="col-md-2"><?php $author='5'; ?><?php echo get_avatar($author, 140); ?></div>


        <div class="nomecol col-md-10">
            <h5 class="nomecol"><a
                    href="<?php bloginfo('url'); ?>/?author=<?php echo $author ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ." ". $user_info->last_name ."\n"); ?></a>
            </h5>
            <p>Graduada em Jornalismo e Medicina Veterinária, é apaixonada pela sua cadelinha Lola. Siga-a nas redes
                sociais: F | T | I | Y</p>
        </div>
    </div>
</div>


<div class="list-group-item list-group-item-action flex-column align-items-start col-md-12">
    <div class="row ">
        <div class="col-md-2"><?php $author='6'; ?><?php echo get_avatar($author, 140); ?></div>


        <div class="nomecol col-md-10">
            <h5 class="nomecol"><a
                    href="<?php bloginfo('url'); ?>/?author=<?php echo $author ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ." ". $user_info->last_name ."\n"); ?></a>
            </h5>
            <p>Editor chefe do Jornal Boqnews e diretor de comunicação da Unisanta. Siga-o nas redes sociais: F | T | I
                | Y</p>
        </div>
    </div>
</div>