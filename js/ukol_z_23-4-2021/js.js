function doTheThing() {

  let form = document.getElementById('formularicek');

  let x = [
    document.formularicek['po'].value,
    document.formularicek['ut'].value,
    document.formularicek['st'].value,
    document.formularicek['ct'].value,
    document.formularicek['pa'].value,
  ];

  let max = x.reduce((a,b) => { return Math.max(a, b) });

  let ntt = ""

  x.forEach(d => {
    let vyskaLmao = xxx => { return "<tr><td style='width:5rem; height:2rem; background: white;'></td></tr>".repeat(xxx) };
    let zbytekMore = (xxx, maximum) => { return "<tr><td style='width:5rem; height:2rem;'></td></tr>".repeat(maximum - xxx) };

    ntt += `
    <td style='border:2px; border-color:transparent;'>
      <table>
        ${zbytekMore(d, max)}
        ${vyskaLmao(d)}
      </table>
    </td>
    `
  });

  var myTableRow = document.getElementById('tablulky');
  var newTables = document.createElement('tr');
  newTables.setAttribute('id','tablulky');
  newTables.innerHTML = ntt;
  myTableRow.parentNode.replaceChild(newTables, myTableRow);

  var divMonkey = document.getElementById('monkey');
  divMonkey.classList.remove('d-none');

};
