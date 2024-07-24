require('./bootstrap');

let btn_for_choice = document.querySelector('.hide-new-choice-btn');
let is_hidden = true;

btn_for_choice.addEventListener('click', function(){
  if(is_hidden){
    document.querySelector('.new-choice-detail').style.display = 'inherit';
    is_hidden = false;
  } else {
    document.querySelector('.new-choice-detail').style.display = 'none';
    is_hidden = true;
  }
});
