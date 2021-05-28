
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

//function to view all employee
var all = false;
function viewAll(){
    $(document).ready(function(){
        all = true;
        console.log(all);
        $('#viewSearch').load('include/viewAll.inc.php');
    });
}

//function to add new employee
function addEmp(){
    $(document).ready(function(){
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var age = document.getElementById("age").value;
        var email = document.getElementById("email").value;
        var gender = document.getElementById("gender").value;
        var civil = document.getElementById("civil").value;
        var contact = document.getElementById("contact").value;
        var jobtitle = document.getElementById("jobtitle").value;
        var emptype = document.getElementById("emptype").value;
        var probperiod = document.getElementById("probperiod").value;
        var peradd = document.getElementById("peradd").value;
        var empcontract = document.getElementById("empcontract").value;
        console.log(fname,lname,age,email);
        
        $('#add').load('include/addEmp.inc.php',{
            fname:fname,
            lname:lname,
            age:age,
            email:email,
            gender:gender,
            civil:civil,
            contact:contact,
            jobtitle:jobtitle,
            emptype:emptype,
            probperiod:probperiod,
            peradd:peradd,
            empcontract:empcontract
        });
        var result = "<?php success(); ?>;";
        console.log(result);
        
        $('#exampleModalCenter').modal('hide');
        
    });
}
