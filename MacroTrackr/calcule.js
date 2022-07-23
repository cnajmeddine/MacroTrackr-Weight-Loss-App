function calculateCalorie(obj){

  const tail=document.getElementById('tail');
  const p=document.getElementById('p');
  const age=document.getElementById('age'); 
  const sexe = document.querySelector('input[name="sexe"]:checked');
  const activiti=document.getElementById('ac').value;
  const object=document.getElementById('obj').value;
   

  if (age.value === '' || p.value === '' || tail.value === '' || 80 <  age.value || age.value < 15) {
     document.getElementById("resultcal").innerHTML="Veuillez vous assurer que les valeurs que vous avez saisies sont correcte";
  
      /***********pour homme*********************************** */

  } else if(sexe.id == 'h' && activiti === "1" && object === "-1") {

      var calo = 1.2 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) - 500);
      
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "2" && object === "-1") {

      var calo = 1.375 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) - 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } else if (sexe.id == 'h' && activiti=== "3" && object === "-1") {

      var calo = 1.55 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) - 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "4" && object === "-1") {
  
      var calo = 1.725 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) - 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
      /*maintain pour homme */
    }else if(sexe.id == 'h' && activiti === "1" && object === "0") {

      var calo = 1.2 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)));
      
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "2" && object === "0") {

      var calo = 1.375 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } else if (sexe.id == 'h' && activiti=== "3" && object === "0") {

      var calo = 1.55 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "4" && object === "0") {
  
      var calo = 1.725 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
      /*gain pour homme */
    }else if(sexe.id == 'h' && activiti === "1" && object === "1") {

      var calo = 1.2 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) + 500);
      
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "2" && object === "1") {

      var calo = 1.375 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) + 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } else if (sexe.id == 'h' && activiti=== "3" && object === "1") {

      var calo = 1.55 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) + 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'h' && activiti === "4" && object === "1") {
  
      var calo = 1.725 * (66.5 + (13.75 * parseFloat(p.value)) + (5.003 * parseFloat(tail.value)) - (6.755 * parseFloat(age.value)) + 500);
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
      
      /***********pour femme*********************************** */

    }else if(sexe.id == 'f' && activiti ==="1" && object === "0") {

      var calo = 1.2*(655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)));
       
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } else if(sexe.id == 'f' && activiti === "2" && object === "0") {
  
      var calo = 1.375 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

    } else if(sexe.id == 'f' && activiti === "3" && object === "0") {
  
      var calo = 1.55 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } else if(sexe.id == 'f' && activiti === "4" && object === "0") {
  
      var calo = 1.725* (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)));
      document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
    } 
    /*lose pour femme */
  else if(sexe.id == 'f' && activiti ==="1" && object === "-1") {

    var calo = 1.2*(655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) - 500);
     
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } else if(sexe.id == 'f' && activiti === "2" && object === "-1") {

    var calo = 1.375 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) - 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

  } else if(sexe.id == 'f' && activiti === "3" && object === "-1") {

    var calo = 1.55 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) - 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } else if(sexe.id == 'f' && activiti === "4" && object === "-1") {

    var calo = 1.725* (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) - 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } 
    /*gain pour femme */
  else if(sexe.id == 'f' && activiti ==="1" && object === "1") {

    var calo = 1.2*(655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) + 500);
     
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } else if(sexe.id == 'f' && activiti === "2" && object === "1") {

    var calo = 1.375 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) + 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;

  } else if(sexe.id == 'f' && activiti === "3" && object === "1") {

    var calo = 1.55 * (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) + 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } else if(sexe.id == 'f' && activiti === "4" && object === "1") {

    var calo = 1.725* (655 + (9.563 * parseFloat(p.value)) + (1.850 * parseFloat(tail.value)) - (4.676 * parseFloat(age.value)) + 500);
    document.getElementById("resultcal").innerHTML= +parseInt(calo)+"kcal" ;
  } 

}
