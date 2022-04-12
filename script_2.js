window.onload = function()
{
    document.getElementsByClassName("second_2")[0].addEventListener("click",log_Package);
    document.getElementsByClassName("third_2")[0].addEventListener("click",label);
    document.getElementsByClassName("fourth_2")[0].addEventListener("click",shipment);
    document.getElementsByClassName("fifth_2")[0].addEventListener("click",notify);
    document.getElementsByClassName("first_2")[0].addEventListener("click",clear);
}
function clear()
{
    window.open('clear.php');
}
function notify()
{
    window.open('trial.html');
}
function shipment()
{
    window.open('Shipment.php');
    // fetch("./Shipment.php")
    //     .then(response => {
    //         return response.text()
    //     })
    //     .then(data => {
    //     document.getElementsByClassName("content")[0].innerHTML = data;
    // });

    document.getElementById("fourth_2").classList.add("light");

    if (document.getElementById("third_2").classList.contains("light"))
    {
        document.getElementById("third_2").classList.remove("light");
    }
    if (document.getElementById("second_2").classList.contains("light"))
    {
        document.getElementById("second_2").classList.remove("light");
    }
}
function log_Package()
{
    if (document.getElementById("down").classList.contains("drop1"))
    {
        document.getElementById("down").classList.remove("drop1");
        document.getElementById("down").classList.add("drop2");
    }
    else
    {
        document.getElementById("down").classList.remove("drop2");
        document.getElementById("down").classList.add("drop1");
    }
        document.getElementsByClassName("trial1")[0].addEventListener("click",entry);
        document.getElementsByClassName("trial2")[0].addEventListener("click",view);

    document.getElementById("second_2").classList.add("light");

    if (document.getElementById("third_2").classList.contains("light"))
    {
        document.getElementById("third_2").classList.remove("light");
    }
    if (document.getElementById("fourth_2").classList.contains("light"))
    {
        document.getElementById("fourth_2").classList.remove("light");
    }
}

function label()
{
    fetch("./label.php")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByTagName("button")[0].addEventListener("click",test);
    });

    document.getElementById("third_2").classList.add("light");

    if (document.getElementById("second_2").classList.contains("light"))
    {
        document.getElementById("second_2").classList.remove("light");
    }
    if (document.getElementById("fourth_2").classList.contains("light"))
    {
        document.getElementById("fourth_2").classList.remove("light");
    }
}
function print()
{
    alert("Print Successful");
    label()
}
function test()
{
    fetch("./label_print.php")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("pbtn")[0].addEventListener("click",print);
    });
}
function entry()
{
    document.getElementById("down").classList.remove("drop2");
    document.getElementById("down").classList.add("drop1");
    fetch("./log_package.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("sibtn3")[0].addEventListener("click",submit);
    });
}

function submit()
{
    id = document.getElementsByTagName("input")[0].value;
    description = document.getElementsByTagName("input")[1].value;
    name_package = document.getElementsByTagName("input")[2].value;
    address = document.getElementsByTagName("input")[3].value;
    parish =document.getElementsByTagName("input")[4].value;
    date_arrived = document.getElementsByTagName("input")[5].value;
    weight = document.getElementsByTagName("input")[6].value;
    stat = document.getElementsByTagName("input")[7].value;

    httpRequest = new XMLHttpRequest();

    const pack = [id,description,name_package,address,parish,date_arrived,weight];

    var url = "Arrived_Packages.php";

    httpRequest.onreadystatechange = processName;
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send('pack=' + encodeURIComponent(pack) + "&stat=" + encodeURIComponent(stat));

    function processName()
    {
        if (httpRequest.readyState === XMLHttpRequest.DONE) 
        {
            if (httpRequest.status === 200) 
            {
                let response = httpRequest.responseText;
                // let answer = document.getElementsByClassName("content")[0].innerHTML = data;
                console.log(response);
                // answer.innerHTML = response;
                
            } 
            else 
            {
            alert('There was a problem with the request.');
            }
        }
    }
    view()
}

function view()
{
    document.getElementById("down").classList.remove("drop2");
    document.getElementById("down").classList.add("drop1");
    fetch("./Arrived_Packages.php")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
    });
}