<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/html/app/modules/core/templates/main.tpl') > 1675275774){ return false;
} else {
function template_meta_0c8947f637bdfa99f8413e3dc437535f($t){

}
function template_0c8947f637bdfa99f8413e3dc437535f($t){
?><script src="/jelix/jquery/jquery.min.js"></script>

<?php echo $t->_vars['MAIN']; ?><?php 
}
return true;}
