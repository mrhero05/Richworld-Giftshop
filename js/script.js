
//using ajax to search in employee

function search(){
    $(document).ready(function(){
       
            var gsearch = document.getElementById("searchInp").value;
            console.log(gsearch);
            $('#viewSearch').load('include/search.inc.php',{
                getSearch:gsearch
            });
       
    });
}