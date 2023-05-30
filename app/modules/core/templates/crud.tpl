<h1>Mountain Peak</h1>

<h2> GET </h2>



<script type="text/javascript">
var urlAjaxGet = "{jurl 'core~sommets:'}"

{literal}
function getsommets() 
{
    jQuery.ajax
    (
        urlAjaxGet,
        {
        	method: "GET",
            complete: function(jqXHR, textStatus) 
            {
            	$json = jqXHR.responseText;
				$("#get").html('<table id="get"><tr><td>Nom</td><td>Latitude</td><td>Longitude</td><td>Altitude</td></tr></table>');
				
				var json = JSON.parse($json);
				
		        for (i = 0; i < json.length; i++) {
		        	$("#get").append("<tr>" + "<td>" + json[i].nom + "</td>" + "<td>" + json[i].latitude + "</td>" + "<td>" + json[i].longitude + "</td>" + "<td>" + json[i].altitude + "</td>" + "</tr>");
		        }
				
            }
        }
    );
}
{/literal}

getsommets() ;
</script> 

<table id="get"></table>

<h2> POST </h2>

<script type="text/javascript">
var urlAjaxPost = "{jurl 'core~sommets:'}"

{literal}
function postsommet() 
{
	var nom = $("#post_nom").val();
	var latitude = $("#post_latitude").val();
	var longitude = $("#post_longitude").val();
	var altitude = $("#post_altitude").val();
    jQuery.ajax
    (
        urlAjaxPost,
        {
        	method: "POST",
        	data: { nom: nom, latitude: latitude, longitude: longitude, altitude: altitude},
            complete: function(jqXHR, textStatus) {
            	$json = jqXHR.responseText;
				$("#post").html($json);
				getsommets() ;
            }
        }
    );
}
{/literal}
</script>    

<input type="text" id="post_nom" placeholder="nom">
<input id="post_latitude" type="number" step="0.000001" placeholder="latitude" />
<input id="post_longitude" type="number" step="0.000001" placeholder="longitude" />
<input id="post_altitude" type="number" step="0.000001" placeholder="altitude" />
<button onclick="postsommet()">Inserer</button>

<div id="post"></div>



<h2> PUT </h2>

<script type="text/javascript">
var urlAjaxPut = "{jurl 'core~sommets:'}"

{literal}
function putsommet() 
{
	var nom_ancien = $("#put_nom_ancien").val();
	var nom = $("#put_nom").val();
	var latitude = $("#put_latitude").val();
	var longitude = $("#put_longitude").val();
	var altitude = $("#put_altitude").val();
    jQuery.ajax
    (
        urlAjaxPut,
        {
        	method: "PUT",
        	data: {nom_ancien: nom_ancien, nom: nom, latitude: latitude, longitude: longitude, altitude: altitude},
            complete: function(jqXHR, textStatus) {
            	$json = jqXHR.responseText;
				$("#put").html($json);
				getsommets() ;
            }
        }
    );
}
{/literal}
</script>    

<input type="text" id="put_nom_ancien" placeholder="ancien nom">
<input type="text" id="put_nom" placeholder="nouveau nom">
<input id="put_latitude" type="number" step="0.000001" placeholder="latitude" />
<input id="put_longitude" type="number" step="0.000001" placeholder="longitude" />
<input id="put_altitude" type="number" step="0.000001" placeholder="altitude" />
<button onclick="putsommet()">Modifier</button>

<div id="put"></div>



<h2> DELETE  </h2>

<script type="text/javascript">
var urlAjaxDelete = "{jurl 'core~sommets:'}"

{literal}
function deletesommet() 
{
	var nom = $("#delete_nom").val();
    jQuery.ajax
    (
        urlAjaxDelete,
        {
        	method: "DELETE",
        	data: { nom: nom},
            complete: function(jqXHR, textStatus) {
            	$json = jqXHR.responseText;
				$("#delete").html($json);
				getsommets() ;
            }
        }
    );
}
{/literal}
</script>    

<input type="text" id="delete_nom" placeholder="nom">
<button onclick="deletesommet()">Supprimer</button>
<div id="delete"></div>