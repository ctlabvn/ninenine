<?php class __MFTemplate_modules_fflives_views_index_ajax_product_list{function render(&$c){echo '<div id="images" class="row images">';$c['::parent']=&$c;foreach(mf_iterate($c,@$c['data']) as $iterator){mf_set_loop_context($c,$iterator,'v');echo '<img draggable="true" data-type="image" data-src="';echo mf_get_attribute(@$c['v'],'main_img');echo '" src="';echo mf_get_attribute(@$c['v'],'thumb_img');echo '" class="col-md-2"/>';}$c=$c['::parent'];echo ' </div><nav class="text-center">';echo @$c['PAGING'];echo ' </nav>';}}