
let sgn = document.querySelector('.signs');
let sec = document.querySelector('.seccess');

let war = document.querySelector('.warning');
//seccess
function seccess()
{
    sec.style.cssText = 'padding:0;margin:auto; background:#228B22; width:60%; height:100%; color: #F8F8FF; text-align: center; font-weight: 700; font-size:30px;  padding:20px; border-radius:4px;';
    let secTxt = document.createTextNode('Successfully');
    sec.appendChild(secTxt);
    
}
//failed
function failed()
{
    let fai = document.querySelector('.faild');
    fai.style.cssText = 'padding:0;margin:auto; background:#B22222; width:60%; height:100%; color: #F8F8FF; text-align: center; font-weight: 700; font-size:30px;  padding:20px; border-radius:4px; ';
    let faiTxt = document.createTextNode('Failed');
    fai.appendChild(faiTxt);
}
//warning
function warning()
{
    war.style.cssText = 'padding:0;margin:auto; background:#FF8C00; width:60%; height:100%; color: #F8F8FF; text-align: center; font-weight: 700; font-size:30px; padding:20px; border-radius:4px;';
    let warTxt = document.createTextNode('Warning');
    war.appendChild(warTxt);
}




