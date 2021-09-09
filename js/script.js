
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

//code to pass the data in update modal
function dataUpdate(){
    var id,fname,lname,age,email,gender,civil,contact,jobtitle,emptype,probperiod,peradd,empcontract;
    var table = document.getElementById('viewTable'),rIndex;
    for(var x = 0;x < table.rows.length;x++){
        table.rows[x].onclick = function (){
            rIndex = this.rowIndex;
            // getting the value of cell in the selected row
             id = document.getElementById('viewTable').rows[rIndex].cells[0].innerHTML;
             fname = document.getElementById('viewTable').rows[rIndex].cells[1].innerHTML;
             lname = document.getElementById('viewTable').rows[rIndex].cells[2].innerHTML;
             age = document.getElementById('viewTable').rows[rIndex].cells[3].innerHTML;
             email = document.getElementById('viewTable').rows[rIndex].cells[4].innerHTML;
             gender = document.getElementById('viewTable').rows[rIndex].cells[5].innerHTML;
             civil = document.getElementById('viewTable').rows[rIndex].cells[6].innerHTML;
             contact = document.getElementById('viewTable').rows[rIndex].cells[7].innerHTML;
             jobtitle = document.getElementById('viewTable').rows[rIndex].cells[8].innerHTML;
             emptype = document.getElementById('viewTable').rows[rIndex].cells[9].innerHTML;
             probperiod = document.getElementById('viewTable').rows[rIndex].cells[10].innerHTML;
             peradd = document.getElementById('viewTable').rows[rIndex].cells[11].innerHTML;
             empcontract = document.getElementById('viewTable').rows[rIndex].cells[12].innerHTML;

             console.log(id);
             //assigning the variable to the modal input
             document.getElementById("Uid").value = id;
             document.getElementById("Ufname").value = fname;
             document.getElementById("Ulname").value = lname;
             document.getElementById("Uage").value = age;
             document.getElementById("Uemail").value = email;
             document.getElementById("Ugender").value = gender;
             document.getElementById("Ucivil").value = civil;
             document.getElementById("Ucontact").value = contact;
             document.getElementById("Ujobtitle").value = jobtitle;
             document.getElementById("Uemptype").value = emptype;
             document.getElementById("Uprobperiod").value = probperiod;
             document.getElementById("Uperadd").value = peradd;
             document.getElementById("Uempcontract").value = empcontract;
             
        }
    }
   
}
// for search update
function dataUpdateSearch(){
    var id,fname,lname,age,email,gender,civil,contact,jobtitle,emptype,probperiod,peradd,empcontract;
    var table = document.getElementById('viewTableSearch'),rIndex;
    for(var x = 0;x < table.rows.length;x++){
        table.rows[x].onclick = function (){
            rIndex = this.rowIndex;
            // getting the value of cell in the selected row
             id = document.getElementById('viewTableSearch').rows[rIndex].cells[0].innerHTML;
             fname = document.getElementById('viewTableSearch').rows[rIndex].cells[1].innerHTML;
             lname = document.getElementById('viewTableSearch').rows[rIndex].cells[2].innerHTML;
             age = document.getElementById('viewTableSearch').rows[rIndex].cells[3].innerHTML;
             email = document.getElementById('viewTableSearch').rows[rIndex].cells[4].innerHTML;
             gender = document.getElementById('viewTableSearch').rows[rIndex].cells[5].innerHTML;
             civil = document.getElementById('viewTableSearch').rows[rIndex].cells[6].innerHTML;
             contact = document.getElementById('viewTableSearch').rows[rIndex].cells[7].innerHTML;
             jobtitle = document.getElementById('viewTableSearch').rows[rIndex].cells[8].innerHTML;
             emptype = document.getElementById('viewTableSearch').rows[rIndex].cells[9].innerHTML;
             probperiod = document.getElementById('viewTableSearch').rows[rIndex].cells[10].innerHTML;
             peradd = document.getElementById('viewTableSearch').rows[rIndex].cells[11].innerHTML;
             empcontract = document.getElementById('viewTableSearch').rows[rIndex].cells[12].innerHTML;

             console.log(id);
             //assigning the variable to the modal input
             document.getElementById("Uid").value = id;
             document.getElementById("Ufname").value = fname;
             document.getElementById("Ulname").value = lname;
             document.getElementById("Uage").value = age;
             document.getElementById("Uemail").value = email;
             document.getElementById("Ugender").value = gender;
             document.getElementById("Ucivil").value = civil;
             document.getElementById("Ucontact").value = contact;
             document.getElementById("Ujobtitle").value = jobtitle;
             document.getElementById("Uemptype").value = emptype;
             document.getElementById("Uprobperiod").value = probperiod;
             document.getElementById("Uperadd").value = peradd;
             document.getElementById("Uempcontract").value = empcontract;
             
        }
    }
   
}

function viewjobIndex(click_id){
    
    $(document).ready(function(){
        var parent = $(click_id).closest(".job-div2");
        var name = parent.find('.indexjobname').val();
        var min = parent.find('.indexjobmin').val();
        var max = parent.find('.indexjobmax').val();
        var desc = parent.find('.indexjobdesc').val();

        $('#showjobIndex').load('include/indexmodaljob.inc.php',{
            name:name,
            min:min,
            max:max,
            desc:desc
            
        });
        console.log("123");
        
    });
}


//function to add new employee
function updateEmp(){
    $(document).ready(function(){
        var id = document.getElementById("Uid").value;
        var fname = document.getElementById("Ufname").value;
        var lname = document.getElementById("Ulname").value;
        var age = document.getElementById("Uage").value;
        var email = document.getElementById("Uemail").value;
        var gender = document.getElementById("Ugender").value;
        var civil = document.getElementById("Ucivil").value;
        var contact = document.getElementById("Ucontact").value;
        var jobtitle = document.getElementById("Ujobtitle").value;
        var emptype = document.getElementById("Uemptype").value;
        var probperiod = document.getElementById("Uprobperiod").value;
        var peradd = document.getElementById("Uperadd").value;
        var empcontract = document.getElementById("Uempcontract").value;
        console.log(fname,lname,age,email);
        
        $('#update').load('include/updateEmp.inc.php',{
            id:id,
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

//for adding job
function addjob(){
    $(document).ready(function(){
        var jtitle = document.getElementById("jtitle").value;
        var jsalarymin = document.getElementById("jsalarymin").value;
        var jsalarymax = document.getElementById("jsalarymax").value;
        var jvacant = document.getElementById("jvacant").value;
        var jdesc = document.getElementById("jobdesc").value;
        var bjob = true;
      $('#addjob-div').load('include/addjob.inc.php',{
        title:jtitle,
        salarymin:jsalarymin,
        salarymax:jsalarymax,
        vacant:jvacant,
        desc:jdesc,
        jobb:bjob
      });
    });
}
//for showing job
function showjob(){
    $(document).ready(function(){
        $('#job-list').load('include/showjob.inc.php');
    });

    $(document).ready(function(){
        $('#jobcount').load('include/countjob.inc.php');
    });
}

function showjobIndex(){
    $(document).ready(function (){
        $('#job-listIndex').load('include/showjobIndex.inc.php');
        console.log("1");
    });
}

function checkuser(){
    console.log("success");
    var searchuser = document.getElementById("username").value;
    $(document).ready(function(){
        $('#cuser').load('include/checkExist.inc.php',{
            suser:searchuser
        });
    });
}

function img_pathUrl(input){
    $('#profImg')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
}

