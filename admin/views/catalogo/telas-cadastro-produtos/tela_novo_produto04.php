<h5><i class="fa fa-rss fa-fw"></i>MARKETING</h5>
<hr>


<div class="form-group">
    		<label class="col-form-label">URL da Página</label>
        	<input type="text" name="url_pagina_produto"  class="form-control" maxlength=150 value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'url_pagina_produto','cad_produtos','id_produto');} ?>">
        	<small  class="form-text text-muted">Cuidado ao alterar esta URL, para não perder indexação no Google</small>
</div>


<div class="form-group">
    		<label class="col-form-label">Título da Página</label>
        	<input type="text" name="titulo_pagina_produto" class="form-control" maxlength=150 value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'titulo_pagina_produto','cad_produtos','id_produto');} ?>">
        	<small  class="form-text text-muted">Caso fique em branco, será adotado o nome do produto.</small>
</div>


<div class="form-group">
    		<label class="col-form-label">Descrição da Página</label>
        	<textarea class="form-control" name="descricao_pagina_produto" maxlength=400 style="height:200px"><?php if(isset($id)){echo $edicao->EditaCadastros($id,'descricao_pagina_produto','cad_produtos','id_produto');} ?></textarea>
        	<small  class="form-text text-muted">Caso fique em branco, será adotado o resumo do produto.</small>
</div>


<div class="form-group">
    		<label class="col-form-label">Palavras-chave (separadas por vírgula)</label>
        	<input type="text" name="palavras_chave_produto" maxlength=500 class="form-control" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'palavras_chave_produto','cad_produtos','id_produto');} ?>">
        	<small  class="form-text text-muted">Exemplo: nike, tênis, running, vermelho.</small>
</div>