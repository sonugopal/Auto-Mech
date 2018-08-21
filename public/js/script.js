function checkPass() {
    var pass = document.getElementById("password").value;
    var pass2 = document.getElementById("re_password").value;

    if (pass != pass2 || pass.length==0) {
        $("#pass_err").text("Password does not match");
        document.getElementById("password").focus();
    }
    else {
        $("#pass_err").text("");
    }

}

function citySel() {

    var location=new Array({"state":"kerala","city":[
            "Calicut","Kochi","Trivandrum"
        ]},
        {"state":"tamilnadu","city":["Chennai","Pondichery","Koimbathur"]},
        {"state":"karnataka","city":["Bangalore","Uduppi","Kotak"]}
    );

    var stateName=document.getElementById("state").value;
    $("#city").empty();
    for(var i=0;i<location.length;i++)
    {
        //console.log(location[i].state);
        if(location[i].state==stateName)
        {
            for(var j=0;j<location[i].city.length;j++)
            {
                $("#city").append('<option>'+location[i].city[j]+'</option>')
            }
        }
    }


}


/*
$("#signup_form").submit(function (e) {
    e.preventDefault();

});*/
