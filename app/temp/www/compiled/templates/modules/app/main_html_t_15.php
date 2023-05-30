<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/html/app/modules/app/templates/main.tpl') > 1675088621){ return false;
} else {
function template_meta_a5eda023167232ec07822fcb3b2f8173($t){

}
function template_a5eda023167232ec07822fcb3b2f8173($t){
?><h1 class="apptitle">app<br/><span class="welcome"><?php echo jLocale::get('jelix~jelix.newapp.h1'); ?></span></h1>

<?php echo $t->_vars['MAIN']; ?><?php 
}
return true;}
