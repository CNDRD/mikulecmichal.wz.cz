
function amogus(shit){

  switch (shit) {
    case 'php':
      makeVisible('php');
      makeInvisible('csharp');
      break;
    case 'csharp':
      makeVisible('csharp');
      makeInvisible('php');
      break;
  };

};

function makeVisible(c){
  $(`#${c}`).addClass('btn-primary');
  $(`#${c}-div`).removeClass('d-none');
};
function makeInvisible(c){
  $(`#${c}`).removeClass('btn-primary');
  $(`#${c}-div`).addClass('d-none');
};
