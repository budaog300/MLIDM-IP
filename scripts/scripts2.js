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

function getIdOnAxis(axis, element)
{
    let id = -1;
    for(let x = 0; x < axis.length; x++)
        if(axis[x] == element)
        {
            id = x;
            break;
        }
    return id;
}

function reflection(matrix)
{
    let result = true;
    for(let x = 0; x < matrix.length; x++)
        if(matrix[x][x] == 0){
            result = false;
            break;
        }
    return result;
}

function symmetry(matrix)
{
    let result = true;
    for(let x = 0; x < matrix.length; x++)
        for(let y = 0; y < matrix[x].length; y++)
            if(matrix[x][y] != matrix[y][x])
            {
                result = false;
                break;
            }

    return result;
}

function antisymmetry(matrix)
{
    // aRb и bRa => a = b

    let result = true;
    for(let x = 0; x < matrix.length; x++)
        for(let y = 0; y < matrix[x].length; y++)
        {
            if(matrix[x][y] == 1 && matrix[y][x] == 1 && x != y)
            {
                result = false;
                break;
            }
        }
    return result;
}

function transitivity(matrix)
{
    let result = true;
    for(let x = 0; x < matrix.length; x++)
        for(let y = 0; y < matrix[x].length; y++)
        {
            if(matrix[x][y] == 1)
            {
                for(let i = 0; i < matrix.length; i++)
                {
                    if(matrix[y][i] == 1 && matrix[x][i] != 1)
                    {
                        result = false;
                        break;
                    }
                }
            }
        }
    return result;
}

function showMatrix()
{
    let textFieldElement = document.getElementById("textField");
    let matrixElement = document.getElementById("matrix");
    let reflectionElement = document.getElementById("reflection");
    let symmetryElement = document.getElementById("symmetry");
    let antisymmetryElement = document.getElementById("antisymmetry");
    let transitivityElement = document.getElementById("transitivity");

    //Пары
    let pairElements = getPairElements(textField);

    //Получение оси матрицы
    let axis = new Array(pairElements.length * pairElements[0].length);
    for(let x = 0; x < pairElements.length; x++)
        for(let y = 0; y < pairElements[x].length; y++) {
            axis[y + x * pairElements[x].length] = pairElements[x][y];
        }

    //Убирание повторяющиъся и сортировка
    axis = uniq(axis);
    axis.sort();

    //Создание матрицы
    let matrix = new Array(axis.length);
    for(let x = 0; x < axis.length; x++)
    {
        matrix[x] = new Array(axis.length);
        for(let y = 0; y < axis.length; y++)
            matrix[x][y] = 0;
    }

    //Заполнение матрицы
    for(let x = 0; x < pairElements.length; x++)
    {
        let idX = getIdOnAxis(axis, pairElements[x][0]);
        let idY = getIdOnAxis(axis, pairElements[x][1]);
        matrix[idX][idY] = 1;
    }

    //Отображение матрицы
    matrixElement.innerHTML = "";
    for(let y = 0; y < axis.length; y++)
    {
        for(let x = 0; x < axis.length; x++)
            matrixElement.innerHTML += matrix[x][y] + " ";
        matrixElement.innerHTML += "<br>";
    }

    //Вывод 
    reflectionElement.innerHTML     = "Рефлексивность: "     + (reflection(matrix)   == true ? "Да" : "Нет");
    symmetryElement.innerHTML       = "Симметричность: "     + (symmetry(matrix)     == true ? "Да" : "Нет");
    antisymmetryElement.innerHTML   = "Кососимметричность: " + (antisymmetry(matrix) == true ? "Да" : "Нет");
    transitivityElement.innerHTML   = "Транзитивность: "     + (transitivity(matrix) == true ? "Да" : "Нет");
}