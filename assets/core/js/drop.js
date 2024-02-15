

// -------------------------------- Table last 3 dropup ----------------------------------

document.querySelector('table thead').addEventListener('click', function(){

    let dropUp1 = document.querySelectorAll('table tbody tr:nth-last-child(-n+3) .options');
    let dropDown1 = document.querySelectorAll('table tbody tr:nth-child(-n+3) .options');
  
  for(let i=0; i<dropUp1.length; i++ )
      {
      dropUp1[i].addEventListener('click', function(){
      dropUp1[i].classList.add('dropup');
  });
      }
  
      for(let i=0; i<dropDown1.length; i++ )
      {
        dropDown1[i].addEventListener('click', function(){
          dropDown1[i].classList.remove('dropup');
  });
      }
  
    });
  
  // ---------------------------------------------------------
    window.onload = () => {
  
    let trCount = document.querySelectorAll('table tbody tr');
    if(trCount.length < 4){
      document.querySelector('table').classList.add('tableCountStyle'); 
  
      let dropUp1 = document.querySelectorAll('table tbody tr .options');
        
    for(let i=0; i<dropUp1.length; i++ )
        {
        dropUp1[i].addEventListener('click', function(){
        dropUp1[i].classList.remove('dropup');
    });
        }
  
    }else{
      let dropUp1 = document.querySelectorAll('table tbody tr:nth-last-child(-n+3) .options');
    
    for(let i=0; i<dropUp1.length; i++ )
        {
        dropUp1[i].addEventListener('click', function(){
        dropUp1[i].classList.add('dropup');
    });
        }
    }
    };
  
  