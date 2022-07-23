var rIndex,
                table = document.getElementById("table");
            function checkEmptyInput()
            {
                var isEmpty = false,
                date = document.getElementById("date"),
                alim = document.getElementById("alim"),
                type = document.getElementById("type"),
                calo = document.getElementById("calo"),
                gluc = document.getElementById("gluc"),
                prote = document.getElementById("prote"),
               lipide = document.getElementById("lipide");
            
                if(date.value === ""){
                    alert("vous n'avez pas saisir la date");
                    isEmpty = true;
                }
                else if(alim.value === ""){
                    alert("vous n'avez pas saisir l'aliment");
                    isEmpty = true;
                }
                else if(type.value === ""){
                    alert("vous n'avez pas saisir le type d'aliment");
                    isEmpty = true;
                }
                
                else if(calo.value === ""){
                    alert("vous n'avez pas saisir le nombre de calories");
                    isEmpty = true;
                }
                else if(gluc.value === ""){
                    alert("vous n'avez pas saisir le nombre de glucides");
                    isEmpty = true;
                }
                else if(prote.value === ""){
                    alert("vous n'avez pas saisir le nombre de protéine");
                    isEmpty = true;
                }
                else if(lipide === ""){
                    alert("vous n'avez pas saisir le nombre de lipides");
                    isEmpty = true;
                }
                return isEmpty;
            }

function addTableRow()
            {
                
                if(!checkEmptyInput()){

                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),
                    cell6 = newRow.insertCell(5),
                    cell7 = newRow.insertCell(6),
                    date = document.getElementById("date"),
                    alim = document.getElementById("alim"),
                    type = document.getElementById("type"),
                    calo = document.getElementById("calo"),
                    gluc = document.getElementById("gluc"),
                    prote = document.getElementById("prote"),
                    lipide = document.getElementById("lipide");
            
                cell1.innerHTML = date.value;
                cell2.innerHTML = alim.value;
                cell3.innerHTML = type.value;
                cell4.innerHTML = calo.value;
                cell5.innerHTML = gluc.value;
                cell6.innerHTML = prote.value;
                cell7.innerHTML = lipide.value;
            
                selectedRowToInput();
                }
            }

function selectedRowToInput()
{
    
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
          // get the seected row index
          rIndex = this.rowIndex;
          document.getElementById("date") = this.cells[0].innerHTML.value;
          document.getElementById("alim")= this.cells[1].innerHTML.value;
          document.getElementById("type") = this.cells[2].innerHTML.value;
          document.getElementById("calo") = this.cells[3].innerHTML.value;
          document.getElementById("gluc") = this.cells[4].innerHTML.value;
          document.getElementById("prote") = this.cells[5].innerHTML.value;
          document.getElementById("lipide") = this.cells[6].innerHTML.value;
          
        };
    }
}
        selectedRowToInput();

function editHtmlTbleSelectedRow()
{
    var date = document.getElementById("date"),
    alim = document.getElementById("alim"),
    type = document.getElementById("type"),
    calo = document.getElementById("calo"),
    gluc = document.getElementById("gluc"),
    prote = document.getElementById("prote"),
    lipide = document.getElementById("lipide");

   if(!checkEmptyInput()){
       
    table.rows[rIndex].cells[0].innerHTML = date.value;
    table.rows[rIndex].cells[1].innerHTML = alim.value;
    table.rows[rIndex].cells[2].innerHTML = type.value;
    table.rows[rIndex].cells[3].innerHTML = calo.value;
    table.rows[rIndex].cells[4].innerHTML = gluc.value;
    table.rows[rIndex].cells[5].innerHTML = prote.value;
    table.rows[rIndex].cells[6].innerHTML = lipide.value;
    
  }
}

function removeSelectedRow()
{
    table.deleteRow(rIndex);
 
    date = document.getElementById("date")="";
    alim = document.getElementById("alim")="";
    type = document.getElementById("type")="";
    calo = document.getElementById("calo")="";
    gluc = document.getElementById("gluc")="";
    prote = document.getElementById("prote")="";
    lipide = document.getElementById("lipide")="";
}
let totalcalo=function(){

     var table = document.getElementById("table"),
     totalcalo=0;
     
        for(var i=1 ; i<table.rows.length ; i++)
        {

            totalcalo = totalcalo + parseInt(table.rows[i].cells[3].innerHTML);
            
        }
        document.getElementById('totalcalo').innerHTML=+totalcalo+" Kcal";  

} ;
totalcalo();
let totalgluc=function(){

    var table = document.getElementById("table"),
    
    totalgluc=0;

       for(var i=1 ; i<table.rows.length ; i++)
       {

           totalgluc = totalgluc + parseInt(table.rows[i].cells[4].innerHTML);
          
       }
       document.getElementById('totalgluc').innerHTML=+totalgluc+" g";

    

} ;
totalgluc();
let totalprote=function(){

    var table = document.getElementById("table"),
    
    totalprote=0;
   
        for(var i=1 ; i<table.rows.length ; i++)
        {

            totalprote = totalprote + parseInt(table.rows[i].cells[5].innerHTML);
        }
        document.getElementById('totalprote').innerHTML=+totalprote+" g";

    

} ;
totalprote();
let totallipide=function(){

    var table = document.getElementById("table"),
    
    totallipide=0;   

       for(var i=1 ; i<table.rows.length ; i++)
       {

           totallipide = totallipide + parseInt(table.rows[i].cells[6].innerHTML);
       }
       document.getElementById('totallipide').innerHTML=+totallipide+" g";
       
} ;
totallipide();