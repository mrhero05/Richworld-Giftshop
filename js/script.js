
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
        if(jsalarymax < jsalarymin){
            swal("Salary Error", "Please check salary", "error");
        }else{
        $('#addjob-div').load('include/addjob.inc.php',{
            title:jtitle,
            salarymin:jsalarymin,
            salarymax:jsalarymax,
            vacant:jvacant,
            desc:jdesc,
            jobb:bjob
        });}
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

function search_click(){
    var search_input = document.getElementById("search_name").value;
    $(document).ready(function(){
        $('#job-listIndex').load('include/searchindex.inc.php',{
            search_int: search_input 
        });
    });
}

function searchMeet(){
    $(document).ready(function(){
        var search = document.getElementById("searchMeet").value;
        //var try1= document.getElementById("searchMeet").value;
        //console.log(try1);
        $('#peopleS').load('include/searchUserMeet.inc.php',{
            searchUser:search
        });
    });
}

function selectP(click_id){
    var parent = $(click_id).closest("tr");
    var name = parent.find('.msgUser_name').val();
    var id = parent.find('.msgUser_id').val();
    var interview = parent.find('.msgUser_interview').val();
    $('.peopleSp').text(name);
    $('.peopleSname').val(name);
    $('.peopleSid').val(id);
    if(interview == "initial"){
        var radiobtn = document.getElementById("1");
        radiobtn.checked = true;
    }else if(interview == "final"){
        var radiobtn = document.getElementById("2");
        radiobtn.checked = true;
    }
    document.getElementById('peopleTbl').style.display = 'none';
    
}

function searchMessage(){
    var input = document.getElementById("searchP").value;
    console.log(input);
    $(document).ready(function(){
        $('#searchPerson').load('include/searchPerson.inc.php',{
            input:input
        });
    });
}

function getmsgUser(click_id){
    
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        var name = parent.find('.msgUser_name').val();
        $('.rName').text(name);
        $('.rId').val(id);
        console.log(name);
        console.log(id);
        var recieverId = document.getElementById("rId").value;
        var senderId = document.getElementById("sId").value;
       // var sMsg = document.getElementById("sMsg").value;
        // console.log(senderId);
        $('.msg-right-div-def').load('include/refresh.inc.php',{
            recieverId:recieverId,
            senderId:senderId
        });
    });
}

function viewmsg(){
    $(document).ready(function(){
        var recieverId = document.getElementById("rId").value;
        var senderId = document.getElementById("sId").value;
       // var sMsg = document.getElementById("sMsg").value;
         console.log(senderId + 123);
        $('.msg-right-div-def').load('include/refresh.inc.php',{
            recieverId:recieverId,
            senderId:senderId
        });
    });
}
function sendmsgUser(){
    $(document).ready(function(){
        var recieverId = document.getElementById("rId").value;
        var senderId = document.getElementById("sId").value;
        var sMsg = document.getElementById("sMsg").value;
         //console.log(sMsg);
        $('.msg-right-div-def').load('include/sendmsg.inc.php',{
            recieverId:recieverId,
            senderId:senderId,
            sMsg,sMsg
        });
     document.getElementById("sMsg").value = "";
    });
}

function viewjobIndex(click_id){
    
    $(document).ready(function(){
        var parent = $(click_id).closest(".job-div2");
        var id = parent.find('.indexjobid').val();
        var name = parent.find('.indexjobname').val();
        var min = parent.find('.indexjobmin').val();
        var max = parent.find('.indexjobmax').val();
        var desc = parent.find('.indexjobdesc').val();
        $('#exampleModalLongTitle').text(name);
        $('.min').text("₱ "+ min);
        $('.max').text("₱ "+ max);
        $('.desc').text(desc);
        $('.job_id').val(id);
         console.log(name);
         console.log(id);
        
    });
}

function clearSearch(){
     document.getElementById("searchP").value = "";
}

function jobdetails(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest(".job-div2");
        var id = parent.find('.jobdetails_id').val();
        console.log(id);
        $('#peopleTbl').load('include/viewuserapply.inc.php',{
            id:id
        });
    });
}

function written(){
    $(document).ready(function(){

        $('#writtenTbl').load('include/written.inc.php');
    });
}

function medical(){
    $(document).ready(function(){
        $('#medicalTbl').load('include/medical.inc.php');
    });
}

function subreq(){
    $(document).ready(function(){
        $('#subreqTbl').load('include/subreq.inc.php');
    });
}

function contract(){
    $(document).ready(function(){
        $('#contractTbl').load('include/contract.inc.php');
    });
}

function interviewB(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#interviewdiv').load('include/createIniInterview.inc.php',{
            id:id
        });
    });
}

function reviewResume(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#review').load('include/reviewResume.inc.php',{
            id:id
        });
    });
}

function acceptP(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        var jobid = parent.find('.jobid').val();
        console.log(jobid);
        $('#acceptdiv').load('include/acceptToinit.inc.php',{
            id:id,
            jobid:jobid
        });
    });
}

function declineP(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#decline').load('include/decline.inc.php',{
            id:id
        });
    });
}

function declineIni(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("#initmodal");
        var id = parent.find('.init_id').val();
        console.log(id);
        $('#decline').load('include/decline.inc.php',{
            id:id
        });
    });
}

function retakeP(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#retake').load('include/retake.inc.php',{
            id:id
        });
    });
}

function passedWritten(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#acceptTofin').load('include/createFinInterview.inc.php',{
            id:id
        });
    });
}

function proceedP(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#acceptTomed').load('include/acceptTomedical.inc.php',{
            id:id
        });
    });
}

function proceedsubreq(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#acceptTosubreq').load('include/acceptTosubreq.inc.php',{
            id:id
        });
    });
}

function proceedcon(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#acceptTosubreq').load('include/acceptTocon.inc.php',{
            id:id
        });
    });
}

function proceeddep(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        console.log(id);
        $('#acceptTodep').load('include/acceptTodep.inc.php',{
            id:id
        });
    });
}

function expandmsg(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest(".msg-div");
        var id = parent.find('.admin_id').val();
        var name = parent.find('.admin_name').val();
        $('.rName').text(name);
        $('.rId').val(id);
        // console.log(name);
        // console.log(id);
        var recieverId = document.getElementById("rId").value;
        var senderId = document.getElementById("sId").value;
        console.log(recieverId);
        console.log(senderId);
       // var sMsg = document.getElementById("sMsg").value;
        // console.log(senderId);
        $('.msg-right-div-def').load('include/refresh.inc.php',{
            recieverId:recieverId,
            senderId:senderId
        });
    });
}

function expandmsgInitial(){
    $(document).ready(function(){
        $('#msg-right-div-def').load('include/expandInitial.inc.php');
    });
}

function expandmsgWritten(){
    $(document).ready(function(){
        $('#msg-right-div-def').load('include/expandWritten.inc.php');
    });
}

function expandmsgFinal(){
    $(document).ready(function(){
        $('#msg-right-div-def').load('include/expandFinal.inc.php');
    });
}

function expandmsgUser(click_id){
        var parent = $(click_id).closest(".msg-div");
        var id = parent.find('.recieverId').val();
        console.log(id);
    $(document).ready(function(){
        $('#msg-right-div-def').load('include/expandmsguser.inc.php',{
            id:id
        });
    });
}

function viewSubreq(click_id){
    var parent = $(click_id).closest("tr");
    var id = parent.find('.msgUser_id').val();
    console.log(id);
$(document).ready(function(){
    $('#req1Tbl').load('include/subreqcheck.inc.php',{
        id:id
    });
});
}

function otpbtn(){
    var email = document.getElementById("emailver").value;
    $(document).ready(function(){
        $('#otpmodal').load('include/otp.inc.php',{
            email:email
        });
    });
}

function verifyotp(){
    var otpinput = document.getElementById("otpCode").value;
    
    $(document).ready(function(){
        $('#otpmsg').load('include/verifyotp.inc.php',{
            otpinput:otpinput
        });
    }); 
}

// function verifyotpforgot(){
//     var otpinput = document.getElementById("otpCode").value;
//     $(document).ready(function(){
//         $('#otpviaemail').load('include/changepassotp.inc.php',{
//             otpinput:otpinput
//         });
//     }); 
// }

function forotpbtn(){
    var email = document.getElementById("emailver").value;
    $(document).ready(function(){
        $('#forotpmodal').load('include/securityotp.inc.php',{
            email:email
        });
    });
}

function initialInt(){
    $(document).ready(function(){
        $('#initialTbl').load('include/initial.inc.php');
    });
}

function writtenExam(){
    $(document).ready(function(){
        $('#writtenTbl').load('include/written.inc.php');
    });
}

function finalInt(){
    $(document).ready(function(){
        $('#finalTbl').load('include/final.inc.php');
    });
}

function proceedinitialsched(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        var fullname = parent.find('.msgUser_name').val();
        $('.peopleSp').text(fullname);
        $('.peopleSname').val(fullname);
        $('.peopleSid').val(id);
        $('#checkdate').load('include/checkDateSched.inc.php'),{
            id:id
        };
        console.log(fullname);
       
    });
}

function proceedwrittensched(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        var fullname = parent.find('.msgUser_name').val();
        $('.peopleSp').text(fullname);
        $('.peopleSname').val(fullname);
        $('.peopleSid').val(id);
        $('#checkdatewritten').load('include/checkdateschedwritten.inc.php'),{
            id:id
        };
        console.log(fullname);
       
    });
}

function proceedfinalsched(click_id){
    $(document).ready(function(){
        var parent = $(click_id).closest("tr");
        var id = parent.find('.msgUser_id').val();
        var fullname = parent.find('.msgUser_name').val();
        $('.peopleSp').text(fullname);
        $('.peopleSname').val(fullname);
        $('.peopleSid').val(id);
        $('#checkdatefinal').load('include/checkDateSchedFinal.inc.php'),{
            id:id
        };
        console.log(fullname);
       
    });
}


function init_remarks(){
    $(document).ready(function(){
        $('#tablecontent').load('include/initremarks.inc.php');
    });
}

function writ_remarks(){
    $(document).ready(function(){
        $('#tablecontent').load('include/writremarks.inc.php');
    });
}

function fin_remarks(){
    $(document).ready(function(){
        $('#tablecontent').load('include/finremarks.inc.php');
    });
}


function inimodremarks(click_id){
    var parent = $(click_id).closest("tr");
        var id = parent.find('.id').val();
        var fullname = parent.find('.fullname').val();
        var job = parent.find('.job').val();
        
        $('.initname').text(fullname);
        $('.initjob').text(job);
        $('.init_id').val(id);
        // $('#checkdate').load('include/checkDateSched.inc.php'),{
        //     id:id
        // };
        // console.log(fullname);
}

function writmodremarks(click_id){
    var parent = $(click_id).closest("tr");
        var id = parent.find('.id').val();
        var fullname = parent.find('.fullname').val();
        var job = parent.find('.job').val();
        
        $('.writname').text(fullname);
        $('.writjob').text(job);
        $('.writ_id').val(id);
        // $('#checkdate').load('include/checkDateSched.inc.php'),{
        //     id:id
        // };
        // console.log(fullname);
}

function finmodremarks(click_id){
    var parent = $(click_id).closest("tr");
        var id = parent.find('.id').val();
        var fullname = parent.find('.fullname').val();
        var job = parent.find('.job').val();
        
        $('.finname').text(fullname);
        $('.finjob').text(job);
        $('.fin_id').val(id);
        // $('#checkdate').load('include/checkDateSched.inc.php'),{
        //     id:id
        // };
        // console.log(fullname);
}

function calculate_age() { 
    var userDateinput = document.getElementById("bday").value;  
	 console.log(userDateinput);
	 
     // convert user input value into date object
	 var birthDate = new Date(userDateinput);
	  console.log(" birthDate"+ birthDate);
	 
	 // get difference from current date;
	 var difference=Date.now() - birthDate.getTime(); 
	 	 
	 var  ageDate = new Date(difference); 
	 var calculatedAge=Math.abs(ageDate.getUTCFullYear() - 1970);
     console.log(calculatedAge);
	document.getElementById("age").value = calculatedAge;
     
}
