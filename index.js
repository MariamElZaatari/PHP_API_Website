//------------- Button API1 onClick -------------
function api1() {
    //Retrieve Elements
    var x = document.getElementById("x");
    var y = document.getElementById("y");
    var result = document.getElementById("result_api1");

    //Check If Empty
    if (x.value != "" && y.value != "") {
        //Fetch From API
        fetch(`Api/Router.php/api1?x=${x.value}&y=${y.value}`)
            .then(response => response.json())
            .then(data => {
                //Change Result and Reset Values
                result.innerText = `Answer: ${data.result}`;
                x.value = "";
                y.value = "";
            });
    } else {
        //Change Result and Reset After 3s
        result.innerText = "Please Enter X and Y.";
        setTimeout(() => {
            result.innerText = "";
        }, 3000);
    }
}
//-----------------------------------------------

//------------- Button API2 onClick -------------
function api2() {
    //Retrieve Elements
    var text = document.getElementById("text_api2");
    var result = document.getElementById("result_api2");

    //Check If Empty
    if (text.value != "") {
        //Fetch From API
        fetch(`Api/Router.php/api2?text=${text.value}`)
            .then(response => response.json())
            .then(data => {
                //Change Result and Reset Value
                if (data.Palindrome) {
                    result.innerText = `${data.text} is a Palindrome`;
                } else {
                    result.innerText = `${data.text} is Not a Palindrome`;
                }
                text.value = "";
            });
    } else {
        //Change Result and Reset After 3s
        result.innerText = "Please Enter Text.";
        setTimeout(() => {
            result.innerText = "";
        }, 3000);
    }
}
//-----------------------------------------------

//------------- Button API3 onClick -------------
function api3() {
    //Retrieve Elements
    var text = document.getElementById("text_api3");
    var result = document.getElementById("result_api3");

    //Check If Empty
    if (text.value != "") {
        //Fetch From API
        fetch(`Api/Router.php/api3?text=${text.value}`)
            .then(response => response.json())
            .then(data => {
                //Change Result and Reset Value
                result.innerText = `Trimmed Text: ${data.trimmed}`;
                text.value = "";
            });
    } else {
        //Change Result and Reset After 3s
        result.innerText = "Please Enter Text.";
        setTimeout(() => {
            result.innerText = "";
        }, 3000);
    }
}
//-----------------------------------------------

//------------- Button API4 onClick -------------
function api4() {
    //Retrieve Elements
    var pass = document.getElementById("pass");
    var result = document.getElementById("result_api4");

    //Check If Empty
    if (pass.value != "") {
        //Fetch From API
        fetch(`Api/Router.php/api4?pass=${pass.value}`)
            .then(response => response.json())
            .then(data => {
                //Change Result and Reset Value
                result.innerText = `Password is`;
                if (data.valid) {
                    result.innerText += ` Valid.`;
                } else {
                    result.innerText += ` Not Valid.`;
                }
                pass.value = "";
            });
    } else {
        //Change Result and Reset After 3s
        result.innerText = "Please Enter Password.";
        setTimeout(() => {
            result.innerText = "";
        }, 3000);
    }
}
//-----------------------------------------------