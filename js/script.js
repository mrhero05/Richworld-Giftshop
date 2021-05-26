
//using ajax to search in employee

function search(){
    $(document).ready(function(){
            var gcheck = $('.searchR:checked').val();
            var gsearch = document.getElementById("searchInp").value;
            console.log(gsearch);
            console.log(gcheck);
            $('#viewSearch').load('include/search.inc.php',{
                getSearch:gsearch,
                getCheck:gcheck
            });
       
    });
}
var all = false;
function viewAll(){
    $(document).ready(function(){
        all = true;
        console.log(all);
        $('#viewSearch').load('include/viewAll.inc.php');
    });
}