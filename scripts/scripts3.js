function getPairElements(text)
{
    let error = true;
    let matrixElements = text.value.split(", ");
    let matrixPairs = new Array(matrixElements.length);
    for(let x = 0; x < matrixElements.length; x++) {
        matrixPairs[x] = matrixElements[x].split(" ");
        if(matrixPairs[x].length != 2) {
            alert("Должно быть ДВА элемента");
            error = false;
            break;
        }
    }

    if(error)
        return matrixPairs;
    else
        return false;
}

function uniq(arr) {
    let seen = {};
    let out = [];
    let len = arr.length;
    let j = 0;
    for(let i = 0; i < len; i++) {
        let item = arr[i];
        if(seen[item] !== 1) {
            seen[item] = 1;
            out[j++] = item;
        }
    }
    return out;
}

function getResult(element, result, subText)
{
    switch(result)
    {
        case -1:
            element.innerHTML = "";
            break;

        case 0:
            element.innerHTML = subText + " отношение не является функцией";
            break;

        case 1:
            element.innerHTML = subText + " отношение является функцией";
    }
    return result;
}


function checkFunction(setA, setB, ratio, reverse)
{
    let A = new Array(setA.length);
    let B = new Array(setB.length);

    for(let x = 0; x < setA.length; x++)
        A[x] = setA[x];

    for(let x = 0; x < setB.length; x++)
        B[x] = setB[x];

    //Убирание повторяющихся элементов в множестве (множество должно содержать уникальные элементы)
    if(A.length != uniq(A).length || B.length != (uniq(B).length)) {
        alert("Не должно быть повторений во множествах");
        return -1;
    }

    //Определение функциональности (элементы из множества A не должны повторятся)
    for(let x = 0; x < ratio.length; x++)
    {
        let idA = A.indexOf(ratio[x][reverse == 0 ? 0 : 1]);
        let idB = B.indexOf(ratio[x][reverse == 0 ? 1 : 0]);

        if(idA == -1 || idB == -1)
            return 0;

        A.splice(idA, 1);
    }

    //Проверка на остаток
    if(A.length != 0)
        return 0;

    return 1;
}

function start() {
    //Получение html элементов
    let setAElement = document.getElementById("setA");
    let setBElement = document.getElementById("setB");
    let ratioElement = document.getElementById("ratio");
    let resultABElement = document.getElementById("resultAB");
    let resultBAElement = document.getElementById("resultBA");

    //Заполнение массивов
    let A = setAElement.value.split(" ");
    let B = setBElement.value.split(" ");
    let ratio = getPairElements(ratioElement);

    //Вывод
    if (getResult(resultABElement, checkFunction(A, B, ratio, 0), "AB - ") == -1) return getResult(resultBAElement, -1);
    if (getResult(resultBAElement, checkFunction(B, A, ratio, 1), "BA - ") == -1) return getResult(resultABElement, -1);
}