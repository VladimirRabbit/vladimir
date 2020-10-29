// document.querySelector('.text').oninput=function(){
// let text = document.querySelector('.text').value.split('');
// let g = 0;
// let k = 0;
// for (let i = 0; i < text.length; i++) {
//     if (text[i] == "(") {
//     g++;
//     }
//     if (text[i] == ")") {
//     k++;
//     }
//  }
//  if (g > 0 || k > 0) {
// if (g == k) {
//     document.querySelector('.texet').innerHTML = ('Совпадает')
// }
// else { document.querySelector('.texet').innerHTML = ('Не совпадает')
// }
//  } }

 document.querySelector('.nagmi').onclick = event => {

     let text = document.querySelector('.primer').textContent.split('');
     let text2 = document.querySelector('.primer2').textContent.split('');

     let g = 0;
     let k = 0;
     let j = 0;
     let l = 0;
     for (let i = 0; i < text.length; i++) {
        if (text[i] == "(") {
        g++;
        }
        if (text[i] == ")") {
        k++;
        }
     }
     for (let i = 0; i < text2.length; i++) {
        if (text2[i] == "(") {
        j++;
        }
        if (text2[i] == ")") {
        l++;
        }
     }
     if (g > 0 || k > 0) {
    if (g == k) {
        document.querySelector('.sovpadaet').innerHTML = ('Совпадает')
    
    }
    else { document.querySelector('.sovpadaet').innerHTML = ('Не совпадает')
    }
     }
     if (j > 0 || l > 0) {
        if (j == l) {
            document.querySelector('.sovpadaet2').innerHTML = ('Совпадает')
        
        }
        else { document.querySelector('.sovpadaet2').innerHTML = ('Не совпадает')
        }
         } 
    
    }
 