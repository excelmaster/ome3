async function tourVisitsRegistered(){
  let tourFlag = localStorage.getItem('visitTourFlag');
  
  if(tourFlag== 0){    
    let visits = await $.get(localStorage.getItem('getVisits'),
      function(data){        
        return data
      })      
    
      if(visits <= 5){        
        try{ 
          let newVisit = await  $.get(localStorage.getItem('setVisit'),
          function(dataValue, textStatus, jqXHR){            
            $('#tourVideo').modal('show')
            localStorage.setItem('visitTourFlag','1')            
            console.log('data received: '+ dataValue)
          })
          return newVisit
        } catch(error) {
          console.log('error: '+error)
        }
      } else if (localStorage.getItem('manualTutorial')=="1") {
        $('#tourVideo').modal('show')
      } 
  }  
}

$("#tutorialButton").click(function (e) { 
  e.preventDefault()
  localStorage.setItem('manualTutorial',1)
  tourVisitsRegistered()
});




































































