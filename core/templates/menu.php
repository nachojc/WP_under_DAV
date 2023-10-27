<nav class="navbar" role="navigation">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="under-menu">
    <ul class="nav navbar-nav">
      <li><a class="navbar-brand" href="/">Portada</a></li>
      <li class="dropdown">
      	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Noticias <b class="caret"></b></a>
        <?php //Categorias a excluir 
		  //$args = array("exclude" => "517,518,519");
		  $args = array("exclude" => "41,42,43,44,3148,3149".$IdHijos, "title_li" => "",'hierarchical' => 1,'hide_empty'=> true);
		  $sCats = get_categories($args);
		?>
          <div class="dropdown-menu">
          <ul>
<?php  $i=0;
    foreach($sCats as $cat){
			if ($i%10==0 && $i>0) {echo '</ul><ul>';};
      echo '<li><a href="'.get_category_link( $cat->term_id ).'" title="' . esc_attr( sprintf( __( "Ver todas las noticias de %s" ), $cat->name ) ) . '">'.$cat->cat_name.'</a></li>';
      $i++;

    }	?>
          </ul>
      	  </div>
      </li>
      <li><a href="/category/a-fondo/">A fondo</a></li>
      <li><a href="/category/entrevistas/">Entrevistas</a></li>
      <li><a href="/category/instalaciones/">Casos estudio</a></li>
      <li><a href="/category/tribunas/">Tribunas</a></li>
      <li><a href="/agenda/">Agenda</a></li>
      <li><a href="/especiales/">Especiales</a></li>
      <li><a href="/directorio/">Directorio</a></li>
   </ul>
	<form class="navbar-form navbar-right no-mobile" role="search" method="get" id="searchform" action="<?=site_url();?>">
      <div class="form-group">
        <div class="control-inpu" style="float: right;">
        <input class="form-control" placeholder="Buscar..." type="text" name="s" id="s" />
        <button type="submit" class="btn-search" id="searchsubmit" value="Buscar">Submit</button>
        </div>
      </div>
      
    </form>
  </div><!-- /.navbar-collapse -->
</nav>