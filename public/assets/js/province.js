let province = document.querySelector('.province');
let wards = document.querySelector('.wards');

let url = 'http://hello.local/public/assets/provinces/tree.js';

fetch(url)
  .then((response) => response.json())
  .then((data) => {
    handelResponse(data);
    handelSeclect(data);
  });

function handelResponse(data){
    province.style.display = 'block';
    province.style.padding = '1px 10px 1px 40px';
    province.style.height = '65px';
    wards.style.display = 'block';
    wards.style.padding = '1px 10px 1px 40px';
    wards.style.height = '65px';
    document.querySelector('.nice-select.province').style.display ='none';
    document.querySelector('.nice-select.wards').style.display ='none';
    let htmls = data.map((provin)=>{
      return `
        <option>${provin.name}</option>
      `
    });
    province.innerHTML = htmls.join('');
}
function handelSeclect(data){
  province.addEventListener('change', function(){
    let index = province.selectedIndex
    let htmls = data[index].districts.map(element => {
      return `
        <option>${element.name}</option>
      `
    })
    wards.innerHTML = htmls.join('');
  });
}