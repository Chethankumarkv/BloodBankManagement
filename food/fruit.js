let modal1 = document.querySelector('.modal');

 const close_button = document.querySelector('.close_button');

 const body = document.querySelector('.mainpage');

  
  
     
   document.querySelectorAll('.cardslider .box').forEach(box =>{
    box.onclick=() =>{
      let name=box.getAttribute('id');
      document.querySelectorAll('.modal_container .modal').forEach( _modal =>{
        let target = _modal.getAttribute('id');
        if(name == target){
          _modal.classList.remove('hidden');
             body.classList.add('blur');
           
           
        }
        document.querySelectorAll('.close_button').forEach(_close_button =>{
    
          _close_button.addEventListener('click',function(){
           _modal.classList.add('hidden');
           body.classList.remove('blur');
          });
          })
      });
    };
  });


   