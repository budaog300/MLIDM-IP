/*
    буква цифра четная буква
*/

var arr_1, arr_2, arr_3, error_text, outResult;

function validate(str) {
    let arr = false;
    if (str.length > 0) {
        arr = str.split(' ');
        for (let i = 0; i < arr.length; i++) {
            if (
                !(
                    (arr[i][0] >= 'a' && arr[i][0] <= 'z') &&
                    (arr[i][1] >= 0 && arr[i][1] <= 9) &&
                    (arr[i][2] % 2 == 0) &&
                    (arr[i][3] >= 'a' && arr[i][3] <= 'z') &&
                    arr[i].length == 4)
            ) {
                error_text = 'Ошибка в вводе элемента множества: ' + arr[i] + '. Правильный формат ввода bcib';
                alert(error_text);
                arr = false;
                break;
            }
        }
    }
    else {
        error_text = 'Поле ввода не должно быть пустым';
        alert(error_text);
        arr = false;
    }
    return arr;
}

/*
    Удаление дубликатов
*/
function check(arr){
    //alert('arr: ' + arr);
    let arr_0 = [...arr];
    //alert('arr_0: ' + arr_0);
    for(let i = 0; i < arr_0.length; i++){
        let count = 0;
        //alert('01 '  + arr_0[i])
        for(let j=0; j<arr.length; j++){
            //alert(arr_0[i] + ' и '  + arr[j])
            if (arr_0[i] == arr[j]){
                //alert('03: '+ arr_0[i] + ' = ' + arr[j])
                if (count != 0)
                {
                    arr.splice(j, 1);
                    j--;
                }
                count++;
            }
        }
    }
} 


/*
    Объединение
*/
function unification() {  
    initilization();      
    arr_3.push(arr_1);    
    if (arr_1 && arr_2) {
        for (let i = 0; i <= arr_2.length; i++) {
            let isAppend = false;
            for (let j = 0; j <= arr_1.length; j++) {
                if (arr_1[j] == arr_2[i]) {
                    isAppend = true;
                    break;
                }
            }
            if (!isAppend)
            {
                arr_3.push(arr_2[i]);
            }
        }
        check(...arr_3);
        document.getElementById("outResult").innerText='Объединение: ' + arr_3 + '';         
    }
    else {
        alert(error_text);
    }
}

/*
    Пересечение
*/
function intersection() {
    initilization();
    if (arr_1 && arr_2) {
        for (let i = 0; i <= arr_2.length; i++) {
            for (let j = 0; j <= arr_1.length; j++) {
                if (arr_1[j] == arr_2[i]) {
                    arr_3.push(arr_2[i]);
                    break;
                }
            }
        }  
        check(arr_3);   
        document.getElementById("outResult").innerText='Пересечение: ' + arr_3 + '';
    }
    else {
        alert(error_text);
    }
}

/*
    Дополнение A/B
*/
function additionAB() {    
    initilization();    
    if (arr_1 && arr_2) {
        for (let i = 0; i <= arr_1.length; i++) {
            let isAppend = false;
            for (let j = 0; j <= arr_2.length; j++) {
                if (arr_1[i] == arr_2[j]) {
                    isAppend = true;
                    break;
                }            
            }
            if (!isAppend)
                {                    
                    arr_3.push(arr_1[i]);                    
                }
        }   
        check(arr_3);    
        document.getElementById("outResult").innerText='Дополнение AB: ' + arr_3 + '';
    }
    else {
        alert(error_text);
    }
}

/*
    Дополнение B/A
*/
function additionBA() {    
    initilization();    
    if (arr_1 && arr_2) {
        for (let i = 0; i <= arr_2.length; i++) {
            let isAppend = false;
            for (let j = 0; j <= arr_1.length; j++) {
                if (arr_1[j] == arr_2[i]) {
                    isAppend = true;
                    break;
                }
            }
            if (!isAppend)
                {                    
                    arr_3.push(arr_2[i]);                    
                }
        }
        check(arr_3);
        document.getElementById("outResult").innerText='Дополнение BA: ' + arr_3 + '';        
    }
    else {
        alert(error_text);
    }
}

/*
    Симметрическая разность
*/
function symmetricdifference() {    
    initilization();    
    if (arr_1 && arr_2) {
        for (let i = 0; i <= arr_1.length; i++) {
            let isAppend = false;
            for (let j = 0; j <= arr_2.length; j++) {
                if (arr_1[i] == arr_2[j]) {
                    isAppend = true;
                    break; 
                }            
            }
            if (!isAppend)
                {                    
                    arr_3.push(arr_1[i]);                    
                }
        }       

        for (let i = 0; i <= arr_2.length; i++) {
            let isAppend = false;
            for (let j = 0; j <= arr_1.length; j++) {
                if (arr_1[j] == arr_2[i]) {
                    isAppend = true;
                    break;
                }            
            }
            if (!isAppend)
                {                    
                    arr_3.push(arr_2[i]);                    
                }
        } 
        check(arr_3);
        document.getElementById("outResult").innerText='Симметрическая разность: ' + arr_3 + '';
    }
    else {
        alert(error_text);
    }
}

/* 
    Инициализация 
*/
function initilization() {
    arr_3 = [];
    var a = document.getElementById('arr_1');
    var b = document.getElementById('arr_2');
    arr_1 = validate(a.value);
    arr_2 = validate(b.value);   
    return 0;
}
