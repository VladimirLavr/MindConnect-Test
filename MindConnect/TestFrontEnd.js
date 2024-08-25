//Task 7
// Two methods

const arr = [1, 2, 3, 5, 1, 5, 9, 1, 2, 8];

function unique(arr) {
    let newArray = arr.filter(function (item, index) {
        if (arr.indexOf(item) === index) {
            return item
        }
    })
};

function unique(arr) {
    return Array.from(new Set(arr));
};

//Task 8
//we use cycle for create new Array "
function duplicate(arr, times) {
    let newArray = [];
    for (let i = 0; i < times; i++) {
        newArray = newArray.concat(arr);
    }
    console.log(newArray)
    return newArray;
}

duplicate([1, 2, 3, 4, 5], 3);

//Task 9
//"we can use delegation event  "
$(document).on("click", "button.clickable", function () {
    console.log("Button Clicked:", this);
});

// and we can use inline function
function buttonClick(item) {
    alert('Кнопка нажата: ' + item.id);
}
$("body").append("<button id=`btn_${res.id}` onclick='buttonClick(this)' class='clickable'>Click Alert! < /button>");

//Task 10
$(document).ready(function (){

    let randomNum = Math.floor(Math.random() * 1000);
    $('.badge').text(randomNum)
    $('.btn').click(function() {
        let currentNum = parseInt($('.badge').text());
        $('.badge').text(currentNum + 1);
    });

})
