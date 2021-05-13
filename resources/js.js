
function amogus(shit){

  switch (shit) {
    case 'php':
      makeVisible('php');
      makeInvisible('csharp');
      makeInvisible('js');
      break;
    case 'csharp':
      makeVisible('csharp');
      makeInvisible('php');
      makeInvisible('js');
      break;
    case 'js':
      makeVisible('js');
      makeInvisible('php');
      makeInvisible('csharp');
  };

};

function makeVisible(c){
  $(`#${c}`).addClass('active');
  $(`#${c}Cards`).removeClass('d-none');
};
function makeInvisible(c){
  $(`#${c}`).removeClass('active');
  $(`#${c}Cards`).addClass('d-none');
};
