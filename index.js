function api1(){
    var x=document.getElementById("x");
    var y=document.getElementById("y");
    var result=document.getElementById("result_api1");

    if(x.value!="" && y.value!=""){
        fetch(`Api/Router.php/api1?x=${x.value}&y=${y.value}`)
        .then(response => response.json())
        .then(data => {
            result.innerText=`Answer: ${data.result}`;
            x.value="";
            y.value="";
         }
        );
    }else{
        result.innerText="Please Enter X and Y.";
        setTimeout(()=>{
            result.innerText="";
        },3000);
    }
}

function api2(){
    var text=document.getElementById("text_api2");
    var result=document.getElementById("result_api2");

    if(text.value!=""){
        fetch(`Api/Router.php/api2?text=${text.value}`)
        .then(response => response.json())
        .then(data=>{
            if(data.Palindrome){
                result.innerText=`${data.text} is a Palindrome`;
            }else{
                result.innerText=`${data.text} is Not a Palindrome`;
            }
            text.value="";
        });
    }else{
        result.innerText="Please Enter Text.";
        setTimeout(()=>{
            result.innerText="";
        },3000);
    }
}

function api3(){
    var text=document.getElementById("text_api3");
    var result=document.getElementById("result_api3");

    if(text.value!=""){
        fetch(`Api/Router.php/api3?text=${text.value}`)
        .then(response => response.json())
        .then(data=>{
            result.innerText=`Trimmed Text: ${data.trimmed}`;
            text.value="";
        });
    }else{
        result.innerText="Please Enter Text.";
        setTimeout(()=>{
            result.innerText="";
        },3000);
    }
}

function api4(){
    var pass=document.getElementById("pass");
    var result=document.getElementById("result_api4");
    
    if(pass.value!=""){
        fetch(`Api/Router.php/api4?pass=${pass.value}`)
        .then(response => response.json())
        .then(data=>{
            result.innerText=`Password is`;
            if(data.valid){
                result.innerText+=` Valid.`;
            }else{
                result.innerText+=` Not Valid.`;
            }
            pass.value="";
        });
    }else{
        result.innerText="Please Enter Password.";
        setTimeout(()=>{
            result.innerText="";
        },3000);
    }
}