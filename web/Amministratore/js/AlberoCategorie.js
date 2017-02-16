$(document).ready(function(){ 
    //fill data to tree  with AJAX call
    $('#tree-container').jstree({
	'plugins': ["wholerow"],
        'core' : {
            'data' : {
                "url" : "/a/treeJs",
                "dataType" : "json" // needed only if you do not supply JSON headers
            }
        }
    }); 
});


