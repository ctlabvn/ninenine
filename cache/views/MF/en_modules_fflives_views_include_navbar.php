<?php class __MFTemplate_modules_fflives_views_include_navbar{function render(&$c){echo ' <nav class="navbar navbar-inverse"><div class="container-fluid"><!-- Brand and toggle get grouped for better mobile display --><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><ul class="nav navbar-nav"><li class="active"><a class="navbar-brand" href="index.html">FFLives</a></li><li><a href="#">About</a></li></ul></div>';if(@$c['user']){echo '<div class="form-inline navbar-form pull-right"><div class="dropdown"><a class="label label-primary dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';echo mf_get_attribute(@$c['user'],'name');echo '<span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1" ><li><a href="collection">My collection</a></li><li role="separator" class="divider"></li><li><a href="template">My template</a></li></ul></div></div>';}echo '</div><!-- /.container-fluid --></nav>';}}